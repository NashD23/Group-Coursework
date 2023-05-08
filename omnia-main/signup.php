<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/signup.css">
        
    <title>Sign Up</title>
    
</head>
<body>
<?php

//learn from w3schools.com
//Unset all the server side variables

session_start();

$_SESSION["user"]="";
$_SESSION["usertype"]="";

// Set the new timezone
date_default_timezone_set('Europe/London');
$date = date('Y-m-d');

$_SESSION["date"]=$date;

//import database
include("connection.php");



if($_POST){

    

    $_SESSION["personal"]=array(
        'fname'=>$_POST['fname'],
        'lname'=>$_POST['lname'],
        'address'=>$_POST['address'],
        'nic'=>$_POST['nic'],
        'dob'=>$_POST['dob']
    );


    print_r($_SESSION["personal"]);
    header("location: create-account.php");




}

?>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<title>GP Registration Form</title>

<style type="text/css">.auto-style11{text-align:right}.auto-style14{font-size:xx-small}.auto-style15{color:green}.auto-style17{border:1px solid silver}.auto-style19{text-align:center}.auto-style20{border:0 solid silver;color:green}.auto-style21{text-align:center;font-size:x-large;color:#005736}.auto-style22{border:0px}.auto-style28{color:red}.auto-style29{text-align:left;color:maroon}.auto-style30{border:1px solid #000}.auto-style31{font-size:large;text-align:center}.auto-style33{font-family:Arial}.auto-style34{border:1px solid #ccc}.auto-style35{text-align:left}.auto-style36{border-color:#ccc;border-width:0}.auto-style37{font-family:Arial;text-decoration:underline}.auto-style27{text-decoration:underline}.auto-style38{font-size:large}.auto-style39{color:#ccc}.auto-style40{background-color:#efefef}.auto-style23{text-align:left}.auto-style41{border-right:1px solid silver;border-bottom:1px solid silver;font-size:11pt;border-left-style:solid;border-left-width:1px;border-top-style:solid;border-top-width:1px;background-color:#efefef}.auto-style44{border-width:0;color:green;background-color:#f0f0f0}.auto-style45{background-color:#f0f0f0}.auto-style46{text-align:right;background-color:#f0f0f0}.auto-style47{border-left-style:solid;border-left-width:1px;border-right:1px solid silver;border-top-style:solid;border-top-width:1px;border-bottom:1px solid silver;background-color:#fdf}</style>

<!--[if lt IE 9]><script src="build/flashcanvas.js" type="text/javascript"></script><![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>-->

<link href="A.style.css.pagespeed.cf.DcIjEPbwfV.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">function postcode_check(postcode,practicename){var postcode=postcode.toUpperCase();switch(practicename)
{case"Welcome to Westpoint general practitioner":var threeL=postcode.substring(0,3);var fourL=postcode.substring(0,4);if(threeL=="W6 "||threeL=="W7 "||fourL=="W15 ")return"OK";else return"You can only register with us if you live in postcode areas W6, W7 or W15";break;default:return"OK";}}
function getUrlParameter(name){name=name.replace(/[\[]/,'\\[').replace(/[\]]/,'\\]');var regex=new RegExp('[\\?&]'+name+'=([^&#]*)');var results=regex.exec(location.search);return results===null?'':decodeURIComponent(results[1].replace(/\+/g,' '));};function trim(str){return str.replace(/^\s+|\s+$/g,"");}
function isNumberKey(evt){var charCode=(evt.which)?evt.which:event.keyCode;if(charCode>31&&(charCode<48||charCode>57))
return false;return true;}
function validateForm(){var x=document.forms["patient"]["address_confirm"].value;if(x!="")
{alert("Form rejected (page 1).");return false;}
if(document.patient.title[0].checked==false&&document.patient.title[1].checked==false&&document.patient.title[2].checked==false&&document.patient.title[3].checked==false)
{alert("Please enter your title.");document.getElementById('mr').focus();return false;}
var x=document.forms["patient"]["surname"].value;if(x==null||trim(x)=="")
{alert("Please enter your surname.");document.getElementById('surname').focus();return false;}
pattern=/^[a-zA-Z '\-]+$/;if(!pattern.test(x))
{alert("Only these characters are allowed in your surname: A-Z-'");document.getElementById('surname').focus();return false;}
var x=document.forms["patient"]["first_names"].value;if(x==null||trim(x)=="")
{alert("Please enter your first name.");document.getElementById('first_name').focus();return false;}
pattern=/^[a-zA-Z '\-]+$/;if(!pattern.test(x))
{alert("Only these characters are allowed in your first name(s): A-Z-'");document.getElementById('first_name').focus();return false;}
var x=document.forms["patient"]["day"].value;var y=document.forms["patient"]["month"].value;var z=document.forms["patient"]["year"].value;var dayobj=new Date("20"+z,y-1,x);if(x==""||y==""||z==""||(dayobj.getDate()!=x))
{alert("Please enter your correct birthdate.");document.getElementById('date').focus();return false;}
var today=new Date();if(z>(today.getFullYear()-2000)){z="19"+z}else{z="20"+z}
var birthdate=new Date();birthdate.setFullYear(z,y-1,x);if(birthdate>today)
{alert("Your date of birth can't be in the future! Try again.");document.getElementById('date').focus();return false;}
var x=document.forms["patient"]["nhs1"].value;if(x.length>1)
{alert("Please enter a correct NHS number.");document.getElementById('nhs').focus();return false;}
var x=document.forms["patient"]["town_country"].value;if(x==null||trim(x)=="")
{alert("Please enter your town and country of birth.");document.getElementById('town_country').focus();return false;}
pattern=/^[a-zA-Z ,'\-]+$/;if(!pattern.test(x))
{alert("Only these characters are allowed in your place of birth: A-Z,-'");document.getElementById('town_country').focus();return false;}
var x=document.forms["patient"]["house"].value;pattern=/^[0-9a-zA-Z ,'\-]*$/;if(!pattern.test(x))
{alert("Only these characters are allowed in your address: 0-9 A-Z,-'");document.getElementById('house').focus();return false;}
var x=document.forms["patient"]["street"].value;if(x==null||trim(x)=="")
{alert("Please enter your new street address.");document.getElementById('street').focus();return false;}
pattern=/^[0-9a-zA-Z ,'\-]*$/;if(!pattern.test(x))
{alert("Only these characters are allowed in your address: 0-9 A-Z,-'");document.getElementById('street').focus();return false;}
var x=document.forms["patient"]["village"].value;pattern=/^[0-9a-zA-Z ,'\-]*$/;if(!pattern.test(x))
{alert("Only these characters are allowed in your address: 0-9 A-Z,-'");document.getElementById('village').focus();return false;}
var x=document.forms["patient"]["town"].value;if(x==null||trim(x)=="")
{alert("Please enter town.");document.getElementById('town').focus();return false;}
var x=document.forms["patient"]["town"].value;pattern=/^[0-9a-zA-Z ,'\-]*$/;if(!pattern.test(x))
{alert("Only these characters are allowed in your address: 0-9 A-Z,-'");document.getElementById('town').focus();return false;}
var x=trim(document.forms["patient"]["postcode"].value);y=x.toUpperCase();y=y.substring(0,2);if(y==null||y=="")
{alert("Please enter a postcode.");document.getElementById('postcode').focus();return false;}
pattern=/^([G][I][R] 0[A]{2})|((([A-Z][0-9]{1,2})|(([A-Z][A-HJ-Y][0-9]{1,2})|(([A-Z][0-9][A-Z])|([A-Z][A-HJ-Y][0-9]?[A-Z])))) [0-9][A-Z]{2})$/i;if(!pattern.test(x))
{alert("Please enter a valid postcode.");document.getElementById('postcode').focus();return false;}
var result=postcode_check(x,practice_name);if(result!="OK")
{alert(result);document.getElementById('postcode').focus();return false;}
var x=document.forms["patient"]["telephone"].value;if(x==null||trim(x)=="")
{alert("Please enter your contact telephone number.");document.getElementById('phone').focus();return false;}
pattern=/^[0+][1-9][0-9 ]{9,13}/;if(!pattern.test(x))
{alert("Number must start with 0 or + (not 00 or +0) and then 10-14 digits. Example: 07848293331 or +447848693431");document.getElementById('phone').focus();return false;}
var x=document.forms["patient"]["email"].value;if(x==null||trim(x)=="")
{alert("Please enter your e-mail address. A confirmation will be sent to this address.");document.getElementById('email').focus();return false;}
pattern=/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;if(!pattern.test(x))
{alert("Please enter a valid e-mail address.");document.getElementById('email').focus();return false;}
var y=document.forms["patient"]["email0"].value;if(x!=y)
{alert("Please make sure you confirm your e-mail address correctly.");document.getElementById('email').focus();return false;}
var x=document.patient.contact_email[0].checked;var y=document.patient.contact_email[1].checked;if(x==false&&y==false)
{alert("Please indicate if we can contact you by email.");document.getElementById('contact_email_yes').focus();return false;}
var x=document.patient.contact_sms[0].checked;var y=document.patient.contact_sms[1].checked;if(x==false&&y==false)
{alert("Please indicate if we can contact you by SMS text.");document.getElementById('contact_sms_yes').focus();return false;}
var x=document.forms["patient"]["next_of_kin"].value;if(x==null||trim(x)=="")
{alert("Please enter an emergency contact.");document.getElementById('kin').focus();return false;}
var x=document.forms["patient"]["kin_phone"].value;if(x==null||trim(x)=="")
{alert("Please enter a phone number to the emergency contact.");document.getElementById('kin_phone').focus();return false;}
var x=document.forms["patient"]["relationship"].value;if(x==null||trim(x)=="")
{alert("Please enter your relationship with the emergency contact.");document.getElementById('relationship').focus();return false;}
var x=document.patient.student[0].checked;var y=document.patient.student[1].checked;if(x==false&&y==false)
{alert("Please select if you are from UK or abroad and then fill in Part 2 accordingly.");document.getElementById('student_uk').focus();return false;}
var z=document.forms["patient"]["previous_address1"].value;if(x==true&&(z==null||trim(z)==""))
{alert("Please enter your previous (last) address.");document.getElementById('previous_address1').focus();return false;}
var z=document.forms["patient"]["previous_address2"].value;if(x==true&&(z==null||trim(z)==""))
{alert("Please complete your previous (last) address.");document.getElementById('previous_address2').focus();return false;}
var z=document.forms["patient"]["previous_address3"].value;if(x==true&&(z==null||trim(z)==""))
{alert("Please enter your previous (last) postcode.");document.getElementById('previous_address3').focus();return false;}
pattern=/^([G][I][R] 0[A]{2})|((([A-Z][0-9]{1,2})|(([A-Z][A-HJ-Y][0-9]{1,2})|(([A-Z][0-9][A-Z])|([A-Z][A-HJ-Y][0-9]?[A-Z])))) [0-9][A-Z]{2})$/i;if(x==true&&!pattern.test(z))
{alert("Please enter a valid UK postcode.");document.getElementById('previous_address3').focus();return false;}
var z=document.forms["patient"]["previous_doctor"].value;if(x==true&&(z==null||trim(z)==""))
{alert("Please enter the name of your previous doctor or surgery.");document.getElementById('previous_doctor').focus();return false;}
var z=document.forms["patient"]["doctor_address1"].value;if(x==true&&(z==null||trim(z)==""))
{alert("Please enter your previous doctor's address.");document.getElementById('doctor_address1').focus();return false;}
var zd=document.forms["patient"]["uk_first_day"].value;var zm=document.forms["patient"]["uk_first_month"].value;var zy=document.forms["patient"]["uk_first_year"].value;if(y==true&&(zd==""||zm==""||zy==""))
{alert("Please enter the date when you first arrived in the UK.");document.getElementById('uk_first_day').focus();return false;}
var x=new Date(zy,zm-1,zd);var today=new Date();today.setHours(0,0,0,0);if(y==true&&(today<=x))
{alert("You can't register on the day or before you arrive in the UK.");document.getElementById('uk_first_day').focus();return false;}
var uk_town=document.forms["patient"]["uk_address2"].value
if(/^[a-zA-Z-' ]*$/.test(uk_town)==false)
{alert("Only letters allowed in town name.");document.getElementById('uk_address2').focus();return false;}
var z=document.forms["patient"]["uk_address3"].value;pattern=/^([G][I][R] 0[A]{2})|((([A-Z][0-9]{1,2})|(([A-Z][A-HJ-Y][0-9]{1,2})|(([A-Z][0-9][A-Z])|([A-Z][A-HJ-Y][0-9]?[A-Z])))) [0-9][A-Z]{2})$/i;if(y==true&&z!=""&&!pattern.test(z))
{alert("Please enter a valid UK postcode.");document.getElementById('uk_address3').focus();return false;}
var zd=document.forms["patient"]["uk_leaving_day"].value;var zm=document.forms["patient"]["uk_leaving_month"].value;var zy=document.forms["patient"]["uk_leaving_year"].value;if(y==true&&(zd==""||zm==""||zy=="")&&!(zd==""&&zm==""&&zy==""))
{alert("Please enter a full date.");document.getElementById('uk_leaving_day').focus();return false;}
var x=document.forms["patient"]["output"].value;if(x==null||trim(x)=="")
{alert("Please draw your signature.");return false;}
var x=document.forms["patient"]["height"].value;if(x==null||trim(x)=="")
{alert("Please enter your height.");document.getElementById('height').focus();return false;}
var x=document.forms["patient"]["weight"].value;if(x==null||trim(x)=="")
{alert("Please enter your weight.");document.getElementById('weight').focus();return false;}
var x=document.forms["patient"]["ethnicity"].value;if(x==null||trim(x)=="")
{alert("Please select your ethnicity or pick 'Prefer not to say'.");document.getElementById('ethnicity').focus();return false;}
if(document.patient.smoker[0].checked==false&&document.patient.smoker[1].checked==false&&document.patient.smoker[2].checked==false)
{alert("Please select if you smoke (in the Health Questionnaire section).");document.getElementById('isyes0').focus();return false;}
if(document.patient.smoker[2].checked==true&&(document.patient.smoke_amount.value==null||trim(document.patient.smoked_amount.value)==""))
{alert("Please enter the amount you used to smoke.");document.getElementById('smoked_amount').focus();return false;}
if(document.patient.smoker[0].checked==true&&(document.patient.smoke_amount.value==null||trim(document.patient.smoke_amount.value)==""))
{alert("Please enter the amount you smoke.");document.getElementById('smoke_amount').focus();return false;}
if((document.patient.drink[1].checked==true||document.patient.drink[2].checked==true||document.patient.drink[3].checked==true||document.patient.drink[4].checked==true)&&(document.patient.units_per_week==null||trim(document.patient.units_per_week.value)==""))
{alert("Please enter how many alcohol units per week you drink.");document.getElementById('units_per_week').focus();return false;}
if(document.patient.SCR[0].checked==false&&document.patient.SCR[1].checked==false)
{alert("Please select if you agree to opt in to NHS Summary Care Records or not.");document.getElementById('scr1').focus();return false;}
document.getElementById('layer1').style.display='block';document.patient.submit.disabled=true;}
var aa1=0;var aa2=0;var aa3=0;function calculateScore(score1,score2,score3){aa1=score1;aa2=score2;aa3=score3;if(aa1+aa2+aa3>4){document.getElementById('more_questions').style.display='';}
else{document.getElementById('more_questions').style.display='none';}}</script>

</head>

<body style="background-color:#efefef;background-image:url(images/xbg6.gif.pagespeed.ic.7AXVGCLmbQ.png);background-repeat:repeat-y;background-position:center">

<div id="google_translate_element" style="position: fixed; width:100%; height: 20px;"></div>
<script type="text/javascript">function googleTranslateElementInit(){new google.translate.TranslateElement({pageLanguage:'en',layout:google.translate.TranslateElement.InlineLayout.SIMPLE},'google_translate_element');}</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<table cellpadding="0" cellspacing="0" style="width: 970px;margin-left:auto;margin-right:auto" align="center">
	<tr>
		<td valign="top">
		<table cellpadding="16" style="width: 968px;background-color:white;" cellspacing="0">

			<tr>
				<td>
				
				<table cellpadding="3" cellspacing="0" style="width: 100%">
					<tr>
						<td class="auto-style29">
						<h1 class="auto-style19" id="the_practice">&nbsp;</h1>
						<h1 class="auto-style19">Online Registration</h1>
						</td>
					</tr>
				</table>
				
				<p class="auto-style19">Please fill in your details and click 
				Submit when complete.</p>
				<p class="auto-style19"><strong>Please only complete this 
				registration form once.</strong> If you have previously 
				submitted this form <br/>
				at any time please do <span class="auto-style27">not</span> do 
				so again unless advised by the Medical Centre to do so.
				<br/>
				Please do <span class="auto-style27">not</span> use this form to 
				update your address or other details.</p>
				<form name="patient" action="thanks.php" method="post" onsubmit="return validateForm()" autocomplete="off">
					<input name="practice_name" value="" type="hidden" id="practice_name"/>
					<input name="practice_id" value="" type="hidden" id="practice_id"/>
					<input name="practice_email" value="" type="hidden" id="practice_email"/>
					<table cellpadding="5" cellspacing="0" style="margin-left:auto;margin-right:auto" align="center">
						<tr>
							<td class="auto-style11"><strong>Have 
							you ever registered <br/>
							with this practice before?</strong></td>
							<td>
							<input name="registered" type="radio" value="YES" id="reg_yes" onclick="alert('You don\'t need to register with us again, \nunless you have registered with another practice after registering with us or you have been told to do so.');"/><label for="reg_yes">Yes&nbsp;&nbsp; </label>
							<input name="registered" type="radio" value="NO" id="reg_no"/><label for="reg_no">No</label></td>
						</tr>
						<tr>
							<td class="auto-style11"><strong>
							<span class="auto-style28">* </span>Title:</strong></td>
							<td colspan="2">
							<input name="title" type="radio" value="mr" id="mr" onclick="document.patient.gender[0].checked=true;document.getElementById('females_table').style.display = 'none';"/><label for="mr">Mr&nbsp; </label><input name="title" type="radio" value="mrs" id="mrs" onclick="document.patient.gender[1].checked=true;document.getElementById('females_table').style.display = '';"/><label for="mrs">Mrs&nbsp; </label><input name="title" type="radio" value="miss" id="miss" onclick="document.patient.gender[1].checked=true;document.getElementById('females_table').style.display = '';"/><label for="miss">Miss&nbsp; </label><input name="title" type="radio" value="ms" id="ms" onclick="document.patient.gender[1].checked=true;document.getElementById('females_table').style.display = '';"/><label for="ms">Ms</label></td>
						</tr>
						<tr>
							<td class="auto-style11"><label for="surname">
							<strong><span class="auto-style28">* </span>Surname:</strong></label><strong> </strong> </td>
							<td colspan="2">
					<input name="surname" type="text" style="width: 175px" id="surname" maxlength="30"/> <span data-tooltip="Please enter your surname or family name"><script pagespeed_no_defer="">//<![CDATA[
(function(){var g=this,h=function(b,d){var a=b.split("."),c=g;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===d?c[e]?c=c[e]:c=c[e]={}:c[e]=d};var l=function(b){var d=b.length;if(0<d){for(var a=Array(d),c=0;c<d;c++)a[c]=b[c];return a}return[]};var m=function(b){var d=window;if(d.addEventListener)d.addEventListener("load",b,!1);else if(d.attachEvent)d.attachEvent("onload",b);else{var a=d.onload;d.onload=function(){b.call(this);a&&a.call(this)}}};var n,p=function(b,d,a,c,e){this.f=b;this.h=d;this.i=a;this.c=e;this.e={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.g=c;this.b={};this.a=[];this.d={}},q=function(b,d){var a,c,e=d.getAttribute("pagespeed_url_hash");if(a=e&&!(e in b.d))if(0>=d.offsetWidth&&0>=d.offsetHeight)a=!1;else{c=d.getBoundingClientRect();var f=document.body;a=c.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);c=c.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+c;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.e.height&&c<=b.e.width)}a&&(b.a.push(e),b.d[e]=!0)};p.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&q(this,b)};h("pagespeed.CriticalImages.checkImageForCriticality",function(b){n.checkImageForCriticality(b)});h("pagespeed.CriticalImages.checkCriticalImages",function(){r(n)});var r=function(b){b.b={};for(var d=["IMG","INPUT"],a=[],c=0;c<d.length;++c)a=a.concat(l(document.getElementsByTagName(d[c])));if(0!=a.length&&a[0].getBoundingClientRect){for(c=0;d=a[c];++c)q(b,d);a="oh="+b.i;b.c&&(a+="&n="+b.c);if(d=0!=b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),c=1;c<b.a.length;++c){var e=","+encodeURIComponent(b.a[c]);131072>=a.length+e.length&&(a+=e)}b.g&&(e="&rd="+encodeURIComponent(JSON.stringify(s())),131072>=a.length+e.length&&(a+=e),d=!0);t=a;if(d){c=b.f;b=b.h;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(k){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(u){}}f&&(f.open("POST",c+(-1==c.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}},s=function(){var b={},d=document.getElementsByTagName("IMG");if(0==d.length)return{};var a=d[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var c=0;a=d[c];++c){var e=a.getAttribute("pagespeed_url_hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].k&&a.height>=b[e].j)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b},t="";h("pagespeed.CriticalImages.getBeaconData",function(){return t});h("pagespeed.CriticalImages.Run",function(b,d,a,c,e,f){var k=new p(b,d,a,e,f);n=k;c&&m(function(){window.setTimeout(function(){r(k)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','http://www.campusdoctor.co.uk/generic/reg.html?email=edge.hill@nhs.net&id=13976&practice=Edge%20Hill%20Health%20Centre','YddRYU7ik1',true,false,'Uq2-ON85Bfg');
//]]></script><img alt="Please enter your surname or family name" src="data:image/gif;base64,R0lGODlhEAAQAIMAACZXr0Bhn0JvuTBk0jJ63UZyzkh+41qGvVuT63eb2ZC86cb3/8b//9La4uH3/8rKyiH5BAEAAA8ALAAAAAAQABAAAASS8Mm3khmjpDVnS8GBGEaBBIkzOceRHMBRAAJ9qA941MLiBIWCAPX4IQoDgcCxkA0Mw0piJhzuBgRCMiFAYGmOMFDrDSIxgIC4kG1nBgC4mmUg1OvduDwsMBkQCgIKAHEAQmEiCIouDUCGaQ4MiQgvHCA0PWEOJgoJChIsAUozXYAuOEUgfX8ILQqoExUXA4AcExEAOw==" class="auto-style22" pagespeed_url_hash="3132693573" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></span></td>
						</tr>
						<tr>
							<td class="auto-style11">
							<label for="first_name">
							<strong><span class="auto-style28">* </span>First 
							name(s): </strong> </label></td>
							<td colspan="2">
							<input name="first_names" style="width: 175px" type="text" id="first_name" maxlength="30"/> <span data-tooltip="Please enter your first name"><img alt="Please enter your first name" src="data:image/gif;base64,R0lGODlhEAAQAIMAACZXr0Bhn0JvuTBk0jJ63UZyzkh+41qGvVuT63eb2ZC86cb3/8b//9La4uH3/8rKyiH5BAEAAA8ALAAAAAAQABAAAASS8Mm3khmjpDVnS8GBGEaBBIkzOceRHMBRAAJ9qA941MLiBIWCAPX4IQoDgcCxkA0Mw0piJhzuBgRCMiFAYGmOMFDrDSIxgIC4kG1nBgC4mmUg1OvduDwsMBkQCgIKAHEAQmEiCIouDUCGaQ4MiQgvHCA0PWEOJgoJChIsAUozXYAuOEUgfX8ILQqoExUXA4AcExEAOw==" class="auto-style22" pagespeed_url_hash="3132693573" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></span></td>
						</tr>
						<tr>
							<td class="auto-style11"><label for="prev">
							<strong>Previous surname(s):</strong></label></td>
							<td colspan="2">
							<input name="prev_names" style="width: 175px" type="text" id="prev" maxlength="30"/></td>
						</tr>
						<tr>
							<td class="auto-style11"><label for="date"><strong>
							<span class="auto-style28">* </span>Date of birth:</strong></label></td>
							<td colspan="2">
							<select name="day" id="date">
							<option value="">Day</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							</select>  
<select name="month" id="month">
	<option value="">Month</option>
	<option value="01">January</option>
	<option value="02">February</option>
	<option value="03">March</option>
	<option value="04">April</option>
	<option value="05">May</option>
	<option value="06">June</option>
	<option value="07">July</option>
	<option value="08">August</option>
	<option value="09">September</option>
	<option value="10">October</option>
	<option value="11">November</option>
	<option value="12">December</option>
</select>
							<select id="year" name="year">
							<option value="">Year</option>
							<option value="23">2023</option>
							<option value="22">2022</option>
							<option value="21">2021</option>
							<option value="20">2020</option>
							<option value="19">2019</option>
							<option value="18">2018</option>
							<option value="17">2017</option>
							<option value="16">2016</option>
							<option value="15">2015</option>
<option value="14">2014</option>
<option value="13">2013</option>
<option value="12">2012</option>
<option value="11">2011</option>
<option value="10">2010</option>
<option value="09">2009</option>
<option value="08">2008</option>
<option value="07">2007</option>
<option value="06">2006</option>
<option value="05">2005</option>
<option value="04">2004</option>
<option value="03">2003</option>
<option value="02">2002</option>
<option value="01">2001</option>
<option value="00">2000</option>
<option value="99">1999</option>
<option value="98">1998</option>
<option value="97">1997</option>
<option value="96">1996</option>
<option value="95">1995</option>
<option value="94">1994</option>
<option value="93">1993</option>
<option value="92">1992</option>
<option value="91">1991</option>
<option value="90">1990</option>
<option value="89">1989</option>
<option value="88">1988</option>
<option value="87">1987</option>
<option value="86">1986</option>
<option value="85">1985</option>
<option value="84">1984</option>
<option value="83">1983</option>
<option value="82">1982</option>
<option value="81">1981</option>
<option value="80">1980</option>
<option value="79">1979</option>
<option value="78">1978</option>
<option value="77">1977</option>
<option value="76">1976</option>
<option value="75">1975</option>
<option value="74">1974</option>
<option value="73">1973</option>
<option value="72">1972</option>
<option value="71">1971</option>
<option value="70">1970</option>
<option value="69">1969</option>
<option value="68">1968</option>
<option value="67">1967</option>
<option value="66">1966</option>
<option value="65">1965</option>
<option value="64">1964</option>
<option value="63">1963</option>
<option value="62">1962</option>
<option value="61">1961</option>
<option value="60">1960</option>
<option value="59">1959</option>
<option value="58">1958</option>
<option value="57">1957</option>
<option value="56">1956</option>
<option value="55">1955</option>
<option value="54">1954</option>
<option value="53">1953</option>
<option value="52">1952</option>
<option value="51">1951</option>
<option value="50">1950</option>
<option value="49">1949</option>
<option value="48">1948</option>
<option value="47">1947</option>
<option value="46">1946</option>
<option value="45">1945</option>
<option value="44">1944</option>
<option value="43">1943</option>
<option value="42">1942</option>
<option value="41">1941</option>
<option value="40">1940</option>
<option value="39">1939</option>
<option value="38">1938</option>
<option value="37">1937</option>
<option value="36">1936</option>
<option value="35">1935</option>
<option value="34">1934</option>
<option value="33">1933</option>
<option value="32">1932</option>
<option value="31">1931</option>
<option value="30">1930</option>
<option value="29">1929</option>
<option value="28">1928</option>
<option value="27">1927</option>
<option value="26">1926</option>
<option value="25">1925</option>
<option value="24">1924</option>
<option value="23">1923</option>
<option value="22">1922</option>
<option value="21">1921</option>
<option value="20">1920</option>
<option value="19">1919</option>
<option value="18">1918</option>
<option value="17">1917</option>
<option value="16">1916</option>
</select>

							</td>
						</tr>
						<tr>
							<td class="auto-style11"><label for="nhs"><strong>
							NHS No. </strong>(if known)<strong>:</strong></label></td>
							<td>
<input name="nhs1" maxlength="1" type="text" id="nhs" style="width: 10px"/><img alt="" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/><input name="nhs2" maxlength="1" type="text" style="width: 10px"/><img alt="" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/><input name="nhs3" maxlength="1" type="text" style="width: 10px"/> <img alt="" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/><input name="nhs4" maxlength="1" type="text" style="width: 10px"/><img alt="" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/><input name="nhs5" maxlength="1" type="text" style="width: 10px"/><img alt="" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/><input name="nhs6" maxlength="1" type="text" style="width: 10px"/> <img alt="" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/><input name="nhs7" maxlength="1" type="text" style="width: 10px"/><img alt="" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/><input name="nhs8" maxlength="1" type="text" style="width: 10px"/><img alt="" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/><input name="nhs9" maxlength="1" type="text" style="width: 10px"/><img alt="" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/><input name="nhs10" maxlength="1" type="text" style="width: 10px"/>&nbsp;
							<a href="https://www.nhs.uk/nhs-services/online-services/find-nhs-number/" target="_blank">
							Find your NHS number...</a></td>
							<td>
							&nbsp;</td>
						</tr>
						<tr>
							<td class="auto-style11"><strong>
							<span class="auto-style28">* </span>Gender:</strong></td>
							<td colspan="2">
							<input name="gender" type="radio" value="male" id="male" onclick="document.getElementById('females_table').style.display = 'none';"/><label for="male">Male </label>
							&nbsp;<input name="gender" type="radio" value="female" id="female" onclick="document.getElementById('females_table').style.display = '';"/><label for="female">Female</label>&nbsp;&nbsp;
							<input name="gender" type="radio" value="other" id="neither" onclick="document.getElementById('females_table').style.display = '';"/><label for="neither">Other</label></td>
						</tr>
						<tr>
							<td class="auto-style11" valign="top"><strong>
							Gender at birth:<br></strong>(if different from 
							above)</td>
							<td colspan="2" valign="top">
							<input name="birthgender" type="radio" value="male" id="male0"/><label for="male0">Male </label>
							&nbsp;<input name="birthgender" type="radio" value="female" id="female0"/><label for="female0">Female</label></td>
						</tr>
						<tr>
							<td class="auto-style11"><strong><label for="town_country">
							<span class="auto-style28">* </span>Town and country 
							of birth:</label></strong></td>
							<td colspan="2">
							<input name="town_country" style="width: 175px" type="text" id="town_country" maxlength="25"/></td>
						</tr>
						<tr>
							<td class="auto-style11">&nbsp;</td>
							<td colspan="2">
							&nbsp;</td>
						</tr>
						<tr>
							<td class="auto-style44" colspan="3" style="text-align:center; border-left-style: solid; border-left-color: silver; border-right-style: solid; border-right-color: silver; border-top-style: solid; border-top-color: silver;">
							<strong>Please fill in your NEW <span id="home_address">HOME</span> ADDRESS:</strong></td>
						</tr>
						<tr>
							<td class="auto-style46"><label for="street">
							<strong>
							House/Flat:</strong></label></td>
							<td colspan="2" class="auto-style45">
							<input name="house" maxlength="25" style="width: 175px" type="text" id="house"/></td>
						</tr>
						<tr>
							<td class="auto-style46"><strong><label for="room">
							<span class="auto-style28">* </span>Number and 
							Street:</label></strong> </td>
							<td colspan="2" class="auto-style45">
<input id="street" name="street" style="width: 175px" type="text" maxlength="25"/></td>
						</tr>
						<tr>
							<td class="auto-style46"><label for="street">
							<strong>
							Area:</strong></label></td>
							<td colspan="2" class="auto-style45">
							<input name="village" maxlength="25" style="width: 175px" type="text" id="village"/></td>
						</tr>
						<tr>
							<td class="auto-style46"><label for="town">
							<strong>
							<span class="auto-style28">* </span>Town:</strong></label></td>
							<td colspan="2" class="auto-style45">
							<input name="town" style="width: 175px" type="text" id="town"/></td>
						</tr>
						<tr>
							<td class="auto-style46"><label for="postcode"><strong>
							<span class="auto-style28">* </span>Postcode:</strong></label></td>
							<td colspan="2" class="auto-style45">
							<input name="postcode" style="width: 100px" type="text" id="postcode" maxlength="8"/></td>
						</tr>
						<tr>
							<td class="auto-style11"><label for="phone"><strong>
							<span class="auto-style28">* </span>Mobile telephone 
							number:</strong></label></td>
							<td colspan="2">
							<input name="telephone" style="width: 100px" type="text" id="phone" pattern="[0+][1-9][0-9 ]{9,14}" title="Number must start with 0 or + (not 00 or +0) and then 10-15 digits. Example: 07848293331 or +447848693431"/>
							<span data-tooltip="Enter your own telephone number. Preferably your mobile number">
							<img alt="Enter your own telephone number. Preferably your mobile number" src="data:image/gif;base64,R0lGODlhEAAQAIMAACZXr0Bhn0JvuTBk0jJ63UZyzkh+41qGvVuT63eb2ZC86cb3/8b//9La4uH3/8rKyiH5BAEAAA8ALAAAAAAQABAAAASS8Mm3khmjpDVnS8GBGEaBBIkzOceRHMBRAAJ9qA941MLiBIWCAPX4IQoDgcCxkA0Mw0piJhzuBgRCMiFAYGmOMFDrDSIxgIC4kG1nBgC4mmUg1OvduDwsMBkQCgIKAHEAQmEiCIouDUCGaQ4MiQgvHCA0PWEOJgoJChIsAUozXYAuOEUgfX8ILQqoExUXA4AcExEAOw==" class="auto-style22" pagespeed_url_hash="3132693573" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></span></td>
						</tr>
						<tr>
							<td class="auto-style11">
							<strong><label for="email">
							<span class="auto-style28">* </span>E-mail address:</label></strong></td>
							<td colspan="2">
							<input name="email" style="width: 300px" type="text" id="email"/> <span data-tooltip="A confirmation message will be sent to this address">
							<img alt="A confirmation message will be sent to this address." src="data:image/gif;base64,R0lGODlhEAAQAIMAACZXr0Bhn0JvuTBk0jJ63UZyzkh+41qGvVuT63eb2ZC86cb3/8b//9La4uH3/8rKyiH5BAEAAA8ALAAAAAAQABAAAASS8Mm3khmjpDVnS8GBGEaBBIkzOceRHMBRAAJ9qA941MLiBIWCAPX4IQoDgcCxkA0Mw0piJhzuBgRCMiFAYGmOMFDrDSIxgIC4kG1nBgC4mmUg1OvduDwsMBkQCgIKAHEAQmEiCIouDUCGaQ4MiQgvHCA0PWEOJgoJChIsAUozXYAuOEUgfX8ILQqoExUXA4AcExEAOw==" class="auto-style22" pagespeed_url_hash="3132693573" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></span></td>
						</tr>
						<tr>
							<td class="auto-style11">
							<strong><label for="email0">
							<span class="auto-style28">* </span>Confirm e-mail address:</label></strong></td>
							<td colspan="2">
							<input name="email0" style="width: 300px" type="text" id="email0"/> <span data-tooltip="Confirm your email address">
							<img alt="Confirm your email address" src="data:image/gif;base64,R0lGODlhEAAQAIMAACZXr0Bhn0JvuTBk0jJ63UZyzkh+41qGvVuT63eb2ZC86cb3/8b//9La4uH3/8rKyiH5BAEAAA8ALAAAAAAQABAAAASS8Mm3khmjpDVnS8GBGEaBBIkzOceRHMBRAAJ9qA941MLiBIWCAPX4IQoDgcCxkA0Mw0piJhzuBgRCMiFAYGmOMFDrDSIxgIC4kG1nBgC4mmUg1OvduDwsMBkQCgIKAHEAQmEiCIouDUCGaQ4MiQgvHCA0PWEOJgoJChIsAUozXYAuOEUgfX8ILQqoExUXA4AcExEAOw==" class="auto-style22" pagespeed_url_hash="3132693573" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></span></td>
						</tr>
						<tr>
							<td class="auto-style11"><strong>
							<span class="auto-style28">* </span>May we contact you using email?</strong></td>
							<td colspan="2">
									<input name="contact_email" type="radio" value="YES" id="contact_email_yes"/><label for="contact_email_yes">Yes</label>&nbsp;&nbsp;&nbsp;
									<input name="contact_email" type="radio" value="NO" id="contact_email_no"/><label for="contact_email_no">No</label></td>
						</tr>
						<tr>
							<td class="auto-style11"><strong>
							<span class="auto-style28">* </span>May we contact you using SMS text?</strong></td>
							<td colspan="2">
									<input name="contact_sms" type="radio" value="YES" id="contact_sms_yes"/><label for="contact_sms_yes">Yes</label>&nbsp;&nbsp;&nbsp;
									<input name="contact_sms" type="radio" value="NO" id="contact_sms_no"/><label for="contact_sms_no">No</label></td>
						</tr>
						<tr>
							<td class="auto-style11">
							&nbsp;</td>
							<td colspan="2" class="auto-style35">
							&nbsp;</td>
						</tr>
						<tr>
							<td class="auto-style11">
							<table cellpadding="2" align="right" cellspacing="0" style="float:right">
								<tr>
									<td style="border-right:thin silver solid">&nbsp;</td>
									<td>
							<label id="Label1" for="kin"><strong>
							<label for="relationship">
							<span class="auto-style28">* </span></label>Full name:</strong></label></td>
								</tr>
								<tr>
									<td style="border-right:thin silver solid"><strong>
									EMERGENCY CONTACT&nbsp; 
							</strong></td>
									<td><label for="kin_phone"><strong>
							<span class="auto-style28">* </span>Phone no:</strong></label></td>
								</tr>
								<tr>
									<td style="border-right:thin silver solid">&nbsp;</td>
									<td>
									<strong>
							<label for="relationship">
							<span class="auto-style28">* </span>Relationship:</label></strong></td>
								</tr>
							</table>
							</td>
							<td colspan="2" class="auto-style35">
							<table cellpadding="0" cellspacing="0" align="left" style="float:left">
								<tr>
									<td>
							<input name="next_of_kin" style="width: 150px" type="text" id="kin"/><span data-tooltip="Enter a person (full name including surname) we should contact in case of an emergency"> <img alt="Enter a person (full name including surname) we should contact in case of an emergency" src="data:image/gif;base64,R0lGODlhEAAQAIMAACZXr0Bhn0JvuTBk0jJ63UZyzkh+41qGvVuT63eb2ZC86cb3/8b//9La4uH3/8rKyiH5BAEAAA8ALAAAAAAQABAAAASS8Mm3khmjpDVnS8GBGEaBBIkzOceRHMBRAAJ9qA941MLiBIWCAPX4IQoDgcCxkA0Mw0piJhzuBgRCMiFAYGmOMFDrDSIxgIC4kG1nBgC4mmUg1OvduDwsMBkQCgIKAHEAQmEiCIouDUCGaQ4MiQgvHCA0PWEOJgoJChIsAUozXYAuOEUgfX8ILQqoExUXA4AcExEAOw==" class="auto-style22" pagespeed_url_hash="3132693573" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></span></td>
								</tr>
								<tr>
									<td>
							<input name="kin_phone" style="width: 150px" type="text" id="kin_phone"/><span data-tooltip="Enter a phone number to the emergency contact"> <img alt="Enter a phone number to the emergency contact" src="data:image/gif;base64,R0lGODlhEAAQAIMAACZXr0Bhn0JvuTBk0jJ63UZyzkh+41qGvVuT63eb2ZC86cb3/8b//9La4uH3/8rKyiH5BAEAAA8ALAAAAAAQABAAAASS8Mm3khmjpDVnS8GBGEaBBIkzOceRHMBRAAJ9qA941MLiBIWCAPX4IQoDgcCxkA0Mw0piJhzuBgRCMiFAYGmOMFDrDSIxgIC4kG1nBgC4mmUg1OvduDwsMBkQCgIKAHEAQmEiCIouDUCGaQ4MiQgvHCA0PWEOJgoJChIsAUozXYAuOEUgfX8ILQqoExUXA4AcExEAOw==" class="auto-style22" pagespeed_url_hash="3132693573" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></span></td>
								</tr>
								<tr>
									<td>
									<input name="relationship" style="width: 150px" type="text" id="relationship"/> <span data-tooltip="Enter your relationship to the emergency contact">
							<img alt="Enter your relationship to the emergency contact" src="data:image/gif;base64,R0lGODlhEAAQAIMAACZXr0Bhn0JvuTBk0jJ63UZyzkh+41qGvVuT63eb2ZC86cb3/8b//9La4uH3/8rKyiH5BAEAAA8ALAAAAAAQABAAAASS8Mm3khmjpDVnS8GBGEaBBIkzOceRHMBRAAJ9qA941MLiBIWCAPX4IQoDgcCxkA0Mw0piJhzuBgRCMiFAYGmOMFDrDSIxgIC4kG1nBgC4mmUg1OvduDwsMBkQCgIKAHEAQmEiCIouDUCGaQ4MiQgvHCA0PWEOJgoJChIsAUozXYAuOEUgfX8ILQqoExUXA4AcExEAOw==" class="auto-style22" pagespeed_url_hash="3132693573" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></span></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="3">
							<img alt="" height="10" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" width="10" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></td>
						</tr>
						<tr>
							<td colspan="3" class="auto-style15">Please help us 
							trace your medical records by selecting if you are 
							from UK or from<br/>
							abroad (Part 1) and then filling in the next 
							section (Part 2)</td>
						</tr>
						<tr>
							<td class="auto-style11" valign="top">
							<strong><span class="auto-style28">* </span>Part 1. 
							Select if you are from UK or abroad:</strong></td>
							<td colspan="2">
							<input id="student_uk" name="student" type="radio" onclick="
							this.form.uk_first_day.value = '';
							this.form.uk_first_month.value = '';
							this.form.uk_first_year.value = '';
							this.form.uk_address1.value = '';
							this.form.uk_address2.value = '';
							this.form.uk_address3.value = '';
							this.form.uk_leaving_day.value = '';
							this.form.uk_leaving_month.value = '';
							this.form.uk_leaving_year.value = '';
							document.getElementById('section2').style.display = 'none';
							document.getElementById('section1').style.display = '';" value="UK"/>
							<label for="student_uk">From UK</label><br/>
							<input id="student_foreign" name="student" type="radio" onclick="this.form.previous_address1.value = '';
							this.form.previous_address2.value = '';
							this.form.previous_address3.value = '';
							this.form.previous_doctor.value = '';
							this.form.doctor_address1.value = '';
							this.form.doctor_address2.value = '';
							document.getElementById('section1').style.display = 'none';
							document.getElementById('section2').style.display = '';" value="foreign"/>
							<label for="student_foreign">From abroad</label></td>
						</tr>
						<tr>
							<td colspan="3">
							<table cellpadding="5" cellspacing="0" class="auto-style17" style="width: 100%;" id="section1">
								<tr>
									<td colspan="2" class="auto-style20" style="background-color: #E8E8E8">
									<strong>Part 2:</strong> 
									Fill in if you come from the UK</td>
								</tr>
								<tr>
									<td class="auto-style11"><label for="previous_address1"><strong>
									<span class="auto-style28">* </span>Previous 
									Address in UK:<br/>
									</strong></label>(i.e. last address before 
									moving here)<br/>
									<label for="previous_address2"><strong>
									<span class="auto-style28">* </span>Town:</strong></label><br/>
									<label for="previous_address3"><strong>
									<span class="auto-style28">* </span>
									Postcode:</strong></label></td>
									<td>
							<input name="previous_address1" style="width: 175px" type="text" id="previous_address1" maxlength="25"/><br/>
							<input name="previous_address2" style="width: 175px" type="text" id="previous_address2" maxlength="25"/><br/>
							<input name="previous_address3" style="width: 100px" type="text" id="previous_address3" maxlength="8"/></td>
								</tr>
								<tr>
									<td class="auto-style11" valign="top"><label for="previous_doctor"><strong>
									<span class="auto-style28">* </span>Name of 
									Doctor or Surgery when at that address:</strong></label></td>
									<td>
							<input name="previous_doctor" style="width: 175px" type="text" id="previous_doctor" maxlength="18"/></td>
								</tr>
								<tr>
									<td class="auto-style11"><strong>
									<label for="doctor_address1">
									<span class="auto-style28">* </span>Address 
									of Doctor or Surgery:</label><br/>
									<label for="doctor_address2">Postcode:</label></strong></td>
									<td>
							<input name="doctor_address1" style="width: 175px" type="text" id="doctor_address1" maxlength="25"/><br/>
							<input name="doctor_address2" style="width: 100px" type="text" id="doctor_address2" maxlength="8"/></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="3">
							<table cellpadding="5" cellspacing="0" class="auto-style17" style="width: 100%" id="section2">
								<tr>
									<td class="auto-style15" colspan="2" style="background-color: #E8E8E8">
									<strong>Part 2:</strong> Fill in if you come 
									from abroad</td>
								</tr>
								<tr>
									<td class="auto-style11" valign="top"><label for="uk_first_day"><strong>
									<span class="auto-style28">* </span>Date 
									when you arrived in UK:</strong></label></td>
									<td>
							<select name="uk_first_day" id="uk_first_day">
							<option value="">Day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
							</select>  
<select name="uk_first_month" id="uk_first_month">
	<option value="">Month</option>
	<option value="1">January</option>
	<option value="2">February</option>
	<option value="3">March</option>
	<option value="4">April</option>
	<option value="5">May</option>
	<option value="6">June</option>
	<option value="7">July</option>
	<option value="8">August</option>
	<option value="9">September</option>
	<option value="10">October</option>
	<option value="11">November</option>
	<option value="12">December</option>
</select>
							<select id="uk_first_year" name="uk_first_year">
							<option value="">Year</option>
							<option value="2023">2023</option>
							<option value="2022">2022</option>
							<option value="2021">2021</option>
							<option value="2020">2020</option>
							<option value="2019">2019</option>
							<option value="2018">2018</option>
							<option value="2017">2017</option>
							<option value="2016">2016</option>
							<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>
<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
<option value="1911">1911</option>
<option value="1910">1910</option>
<option value="1909">1909</option>
<option value="1908">1908</option>
<option value="1907">1907</option>
<option value="1906">1906</option>
<option value="1905">1905</option>
<option value="1904">1904</option>
<option value="1903">1903</option>
<option value="1902">1902</option>
<option value="1901">1901</option>
<option value="1900">1900</option>
</select>
							<span data-tooltip="You can't register before you arrive in the UK">
							<img alt="You can't register before you arrive in the UK" src="data:image/gif;base64,R0lGODlhEAAQAIMAACZXr0Bhn0JvuTBk0jJ63UZyzkh+41qGvVuT63eb2ZC86cb3/8b//9La4uH3/8rKyiH5BAEAAA8ALAAAAAAQABAAAASS8Mm3khmjpDVnS8GBGEaBBIkzOceRHMBRAAJ9qA941MLiBIWCAPX4IQoDgcCxkA0Mw0piJhzuBgRCMiFAYGmOMFDrDSIxgIC4kG1nBgC4mmUg1OvduDwsMBkQCgIKAHEAQmEiCIouDUCGaQ4MiQgvHCA0PWEOJgoJChIsAUozXYAuOEUgfX8ILQqoExUXA4AcExEAOw==" class="auto-style22" pagespeed_url_hash="3132693573" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></span></td>
								</tr>
								<tr>
									<td class="auto-style11" valign="top" style="width: 50%">
									<strong>Have you lived or studied in the UK 
									before?</strong></td>
									<td>
									<input name="previous_resident" type="radio" value="yes" id="uk_yes" onclick="document.getElementById('previous1').style.display = '';
									document.getElementById('previous2').style.display = '';"/><label for="uk_yes">Yes</label>&nbsp;&nbsp;&nbsp;
									<input name="previous_resident" type="radio" value="No" id="uk_no" onclick="document.getElementById('previous1').style.display = 'none';
									document.getElementById('previous2').style.display = 'none';
									this.form.uk_address1.value='';this.form.uk_address2.value='';this.form.uk_address3.value='';
									this.form.uk_leaving_day.value='';this.form.uk_leaving_month.value='';this.form.uk_leaving_year.value='';"/><label for="uk_no">No</label></td>
								</tr>
								<tr id="previous1" style="display:none">
									<td class="auto-style11"><label for="uk_address1"><strong>
									Your first UK address where registered with 
									a GP:<br/>
									</strong></label>(only if you have 
									previously registered with a GP)<br/>
									<label for="uk_address2"><strong>Town:</strong></label><br/>
									<label for="uk_address3"><strong>Postcode:</strong></label></td>
									<td>
							<input name="uk_address1" style="width: 175px" type="text" id="uk_address1" maxlength="25"/><br/>
							<input name="uk_address2" style="width: 175px" type="text" id="uk_address2" maxlength="25"/><br/>
							<input name="uk_address3" style="width: 100px" type="text" id="uk_address3" maxlength="8"/></td>
								</tr>
								<tr id="previous2" style="display:none">
									<td class="auto-style11"><label for="uk_leaving_day"><strong>
									If a previous resident in UK, date of 
									leaving:</strong></label></td>
									<td>
							<select name="uk_leaving_day" id="uk_leaving_day">
							<option value="">Day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
							</select>  
<select name="uk_leaving_month" id="uk_leaving_month">
	<option value="">Month</option>
	<option value="1">January</option>
	<option value="2">February</option>
	<option value="3">March</option>
	<option value="4">April</option>
	<option value="5">May</option>
	<option value="6">June</option>
	<option value="7">July</option>
	<option value="8">August</option>
	<option value="9">September</option>
	<option value="10">October</option>
	<option value="11">November</option>
	<option value="12">December</option>
</select>
							<select id="uk_leaving_year" name="uk_leaving_year">
							<option value="">Year</option>
							<option value="2023">2023</option>
							<option value="2022">2022</option>
							<option value="2021">2021</option>
							<option value="2020">2020</option>
							<option value="2019">2019</option>
							<option value="2018">2018</option>
							<option value="2017">2017</option>
							<option value="2016">2016</option>
							<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>
<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
<option value="1911">1911</option>
<option value="1910">1910</option>
<option value="1909">1909</option>
<option value="1908">1908</option>
<option value="1907">1907</option>
<option value="1906">1906</option>
<option value="1905">1905</option>
<option value="1904">1904</option>
<option value="1903">1903</option>
<option value="1902">1902</option>
<option value="1901">1901</option>
<option value="1900">1900</option>
</select></td>
								</tr>
								<tr>
									<td class="auto-style40" colspan="2">Supplementary Questions:</td>
								</tr>
								<tr id="inforow1" style="display:none">
									<td class="auto-style40" colspan="2">Anybody in England can register with 
		a GP practice and receive free medical care from that practice.<br/>
		However, if you are not 'ordinarily resident' in the UK you may have to 
		pay for NHS treatment outside of the GP practice. Being ordinarily 
		resident broadly means living lawfully in the UK on a properly settled 
		basis for the time being. In most cases, nationals of countries outside 
		of the European Economic Area must also have the status of 'Indefinite 
		leave to remain' in the UK.<br/>
		Some services, such as diagnostic tests of suspected infectious diseases 
		and any treatment of those diseases are free of charge to all people, 
		while some groups who are not ordinarily resident here are exempt from 
		all treatment charges.<br/>
		<u>More information on ordinary residence, 
		exemption and paying for NHS services can be found in the Visitor and 
		Migrant patient leaflet, available from your GP practice.</u><br/>
									You may be asked to provide proof of entitlement in order to 
		receive free NHS treatment outside of the GP practice, otherwise you may 
		be charged for your treatment. Even if you have to pay for a service, 
		you will always be provided with any immediately necessary or urgent 
		treatment regardless of advance payment.<br/>
		The information you give on this form will be used to assist in 
		identifying your chargeable status, and may be shared, including with 
		NHS secondary care organisations (e.g. hospitals) and NHS Digital, for 
		the purpose of validation, invoicing and cost recovery. You may be 
		contacted on behalf of the NHS to confirm any details you have provided.</td>
								</tr>
								<tr>
									<td colspan="2">
		<strong>Please select one of the following options: </strong> <a href="javascript:return null;" onclick="
		if (document.getElementById('inforow1').style.display == 'none') {document.getElementById('inforow1').style.display = ''} else {document.getElementById('inforow1').style.display = 'none'}
		">More information...</a></td>
								</tr>
								<tr>
									<td colspan="2">
									<table align="left" cellpadding="2" cellspacing="0">
										<tr>
											<td valign="top" style="height: 24px">
											<input name="pay" type="radio" value="Yes" id="pay_yes"/></td>
											<td><label for="pay_yes">I understand that I may need to pay for NHS treatment outside of the GP practice</label></td>
										</tr>
										<tr>
											<td valign="top">
											<input name="pay" type="radio" value="No" id="pay_no"/></td>
											<td><label for="pay_no">I understand that I 
											have a valid exemption for paying 
											for NHS treatment outside of the GP 
											Practice. <br/>
											I can provide documents to support this 
		when requested<br/>
											This includes for example, an EHIC, or 
		payment of the Immigratin Health Charge ("the Surcharge"), when 
		accompanied by a valid visa.</label></td>
										</tr>
										<tr>
											<td valign="top">
											<input name="pay" type="radio" value="Maybe" id="pay_maybe"/></td>
											<td><label for="pay_maybe">I do not know my chargeable status</label></td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td colspan="2">
									<strong>
									<span class="auto-style15">Complete 
									the following section if you 
									come from another EEA country:
							</span>
							<span data-tooltip="Austria, Belgium, Bulgaria, Croatia, Republic of Cyprus, Czech Republic, Denmark, Estonia, Finland, France, Germany, Greece, Hungary, Iceland, Ireland, Italy, Latvia, Liechtenstein, Lithuania, Luxembourg, Malta, Netherlands, Norway, Poland, Portugal, Romania, Slovakia, Slovenia, Spain, Sweden">
<img title="" src="data:image/gif;base64,R0lGODlhEAAQAIMAACZXr0Bhn0JvuTBk0jJ63UZyzkh+41qGvVuT63eb2ZC86cb3/8b//9La4uH3/8rKyiH5BAEAAA8ALAAAAAAQABAAAASS8Mm3khmjpDVnS8GBGEaBBIkzOceRHMBRAAJ9qA941MLiBIWCAPX4IQoDgcCxkA0Mw0piJhzuBgRCMiFAYGmOMFDrDSIxgIC4kG1nBgC4mmUg1OvduDwsMBkQCgIKAHEAQmEiCIouDUCGaQ4MiQgvHCA0PWEOJgoJChIsAUozXYAuOEUgfX8ILQqoExUXA4AcExEAOw==" class="auto-style31" pagespeed_url_hash="3132693573" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></span><br class="auto-style15"/>
									</strong><span class="auto-style15">Do not 
		complete this section if you have an EHIC issued by the UK.</span></td>
								</tr>
								<tr>
									<td colspan="2">
									<strong>Do you have a 
									<u>non-UK</u> <span data-tooltip="European Health Insurance Card" style="color:blue;">EHIC</span> or <span data-tooltip="Provisional Replacement Certificate" style="color:blue">PRC</span>?</strong>
									<input name="ehic" type="radio" value="Yes" id="ehicyes" onclick="
									document.getElementById('ehic_row').style.display = '';
									document.getElementById('ehic_family').value=document.getElementById('surname').value;
									document.getElementById('ehic_names').value=document.getElementById('first_name').value;
									document.getElementById('ehic_dob').value=document.getElementById('date').value+'/'+document.getElementById('month').value+'/'+document.getElementById('year').options[document.getElementById('year').selectedIndex].text;
									"/>
									<label for="ehicyes">Yes</label>&nbsp;&nbsp; 									
									<input name="ehic" type="radio" value="No" id="ehicno" onclick="
									document.getElementById('ehic_row').style.display = 'none';
									document.getElementById('ehic_code').value='';
									document.getElementById('ehic_family').value='';
									document.getElementById('ehic_names').value='';
									document.getElementById('ehic_dob').value='';
									document.getElementById('ehic_pid').value='';
									document.getElementById('ehic_iid').value='';
									document.getElementById('ehic_idn').value='';
									document.getElementById('ehic_exp').value='';
									document.getElementById('pcr_from').value='';
									document.getElementById('pcr_to').value='';
									"/>
									<label for="ehicno">No</label></td>
								</tr>
								<tr id="ehic_row" style="display:none">
									<td colspan="2">
									<table align="center" style="margin-left:auto;margin-right:auto" cellpadding="3" cellspacing="0" class="auto-style41">
										<tr>
											<td rowspan="11">
											<img alt="European Health Insurance Card" height="95" src="images/150x95xEHIC_150.jpg.pagespeed.ic.EjnL2SNH0Q.webp" width="150" pagespeed_url_hash="3891235518" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></td>
											<td style="text-align:right;color:green" colspan="2">
											<strong>Please enter details from your 
											EHIC or PRC below:</strong></td>
										</tr>
										<tr>
											<td class="auto-style11"><strong>
											<img alt="Country code" height="20" src="images/20x20xEHIC_code.jpg.pagespeed.ic.A8p896_M3r.webp" width="20" pagespeed_url_hash="3325071813" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/> <label for="ehic_code">Country code:</label></strong></td>
											<td>
											<input name="ehic_code" type="text" style="width:200px" id="ehic_code"/></td>
										</tr>
										<tr>
											<td class="auto-style11"><strong><label for="ehic_family">3 Family Name:</label></strong></td>
											<td>
											<input name="ehic_family" type="text" style="width:200px" id="ehic_family"/></td>
										</tr>
										<tr>
											<td class="auto-style11"><strong><label for="ehic_names">4 Given names:</label></strong></td>
											<td>
											<input name="ehic_names" type="text" style="width:200px" id="ehic_names"/></td>
										</tr>
										<tr>
											<td class="auto-style11"><strong><label for="ehic_dob">5 Date of Birth:</label></strong></td>
											<td class="auto-style23">
											<input name="ehic_dob" type="text" style="width:100px" id="ehic_dob"/> 
											(dd/mm/yyyy)</td>
										</tr>
										<tr>
											<td class="auto-style11"><strong><label for="ehic_pid">6 Personal Identification Number:</label></strong></td>
											<td>
											<input name="ehic_pid" type="text" style="width:200px" id="ehic_pid"/></td>
										</tr>
										<tr>
											<td class="auto-style11"><strong><label for="ehic_iid">7 Identification Number of the 	Institution:</label></strong></td>
											<td>
											<input name="ehic_iid" type="text" style="width:200px" id="ehic_iid"/></td>
										</tr>
										<tr>
											<td class="auto-style11"><strong><label for="ehic_idn">8 Identification number of the 	card:</label></strong></td>
											<td>
											<input name="ehic_idn" type="text" style="width:200px" id="ehic_idn"/></td>
										</tr>
										<tr>
											<td class="auto-style11"><strong><label for="ehic_exp">9 Epiry Date:</label></strong></td>
											<td class="auto-style23">
											<input name="ehic_exp" type="text" style="width:100px" id="ehic_exp"/> 
											(dd/mm/yyyy)</td>
										</tr>
										<tr>
											<td class="auto-style11"><strong><label for="pcr_from">PRC validity period From:</label></strong></td>
											<td class="auto-style23">
											<input name="pcr_from" type="text" style="width:100px" id="pcr_from"/> 
											(dd/mm/yyyy)</td>
										</tr>
										<tr>
											<td class="auto-style11"><strong><label for="pcr_to">PRC validity period To:</label></strong></td>
											<td class="auto-style23">
											<input name="pcr_to" type="text" style="width:100px" id="pcr_to"/> 
											(dd/mm/yyyy)</td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td colspan="2">
									<input name="s1" type="checkbox" value="Yes" id="s1"/><strong><label for="s1">Tick here if you have an S1</label></strong><br/>
									(e.g. if you are retiring to the UK or you 
									have been posted here by your employer for 
									work or you live in the UK but work in 
									another EEA member state). <strong>Please give your S1 form to the practice
		staff.</strong> <a href="javascript:return null;" onclick="
		if (document.getElementById('inforow2').style.display == 'none') {document.getElementById('inforow2').style.display = ''} else {document.getElementById('inforow2').style.display = 'none'}
		">More information...</a></td>
								</tr>
								<tr id="inforow2" style="display:none">
									<td colspan="2" class="auto-style40">
									<strong>How will your EHIC/PRC/S1 date be 
									used? </strong>By using your EHIC or PRC for 
									NHS treatment costs your EHIC or PRC data 
									and GP appointment data will be shared with 
									NHS secondary care (hospitals) and NHS 
									Digital solely for the purpose of cost 
									recovery. Your clinical data will not be 
									shared in the cost recovery process. <br/>
									Your EHIC, PRC or S1 information will be 
									shared with The Department for Work and 
									Pensions for the purpose of recovering your 
									NHS costs from your home country. </td>
								</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td style="background-color: #FFDDFF" class="auto-style11">
							<img height="5" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" width="1" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></td>
							<td colspan="2" style="background-color: #FFDDFF">
							<img height="5" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" width="1" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></td>
						</tr>
						<tr>
							<td style="background-color: #FFDDFF" class="auto-style11">
							<strong id="output"><strong>
							<span class="auto-style28">* </span></strong>
							Signature:</strong></td>
							<td colspan="2" style="background-color: #FFDDFF">
							<table>
								<tr>
									<td>
								   <div class="sigPad" style="width:300px">
								    <div class="auto-style11"><a class="clearButton" href="#clear">
										Clear</a></div>
								    <div class="sigWrapper" style="background-color: #ffffff">
								      <canvas class="pad" width="298px" height="55px"></canvas>
								      <input type="hidden" name="output" class="output" style="width:298px"/>
								    </div>
								   </div>									
									</td>
									<td>
									<span data-tooltip="Please draw your unique signature in the box">
							<img alt="Please draw your unique signature in the box" src="data:image/gif;base64,R0lGODlhEAAQAIMAACZXr0Bhn0JvuTBk0jJ63UZyzkh+41qGvVuT63eb2ZC86cb3/8b//9La4uH3/8rKyiH5BAEAAA8ALAAAAAAQABAAAASS8Mm3khmjpDVnS8GBGEaBBIkzOceRHMBRAAJ9qA941MLiBIWCAPX4IQoDgcCxkA0Mw0piJhzuBgRCMiFAYGmOMFDrDSIxgIC4kG1nBgC4mmUg1OvduDwsMBkQCgIKAHEAQmEiCIouDUCGaQ4MiQgvHCA0PWEOJgoJChIsAUozXYAuOEUgfX8ILQqoExUXA4AcExEAOw==" class="auto-style22" pagespeed_url_hash="3132693573" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></span></td>
								</tr>
								<tr>
									<td>
								    &nbsp;</td>
									<td>
									&nbsp;</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="3">
							<img alt="" height="10" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" width="10" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></td>
						</tr>
						<tr>
							<td colspan="3" class="auto-style21" style="background-color: #E0FFEE">
							<strong>Health Questionnaire</strong></td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							<img alt="" height="5" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" width="5" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE" class="auto-style19">
							<table cellpadding="5" cellspacing="0" style="width: 100%">
								<tr>
									<td class="auto-style11">
							<label id="Label56" for="height"><strong>
							<strong id="output0">
							<span class="auto-style28">* </span></strong>Height:</strong></label></td>
									<td class="auto-style35" style="width: 100px">
							<input name="height" type="text" id="height" style="width: 50px"/>&nbsp;cm</td>
									<td class="auto-style11" style="width: 100px">
							<label id="Label57" for="weight"><strong>
							<strong id="output1">
							<span class="auto-style28">* </span></strong>Weight:</strong></label></td>
									<td class="auto-style35">
							<input name="weight" type="text" id="weight" style="width: 50px"/>&nbsp;kg</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							<img alt="" height="10" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" width="10" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE" class="auto-style34">
							<table cellpadding="5" cellspacing="0" style="width: 100%">
								<tr>
									<td class="auto-style31" colspan="2">
									<strong>Physical Activities and Eating 
									Habits:</strong></td>
								</tr>
								<tr>
									<td class="auto-style11"><strong><label for="exercise">
									Which best describes your normal<br/>
									exercise pattern per week?</label></strong></td>
									<td>
									<select name="exercise" id="exercise">
									<option value="">Select...</option>
									<option value="Excercise impossible">Excercise impossible</option>
									<option value="Avoid exercise">Avoid exercise</option>
									<option value="Light exercise">Light exercise</option>
									<option value="Moderate exercise">Moderate exercise</option>
									<option value="Heavy exercise">Heavy exercise</option>
									<option value="Competitive athlete">Competitive athlete</option>
									</select></td>
								</tr>
								<tr>
									<td class="auto-style11"><strong><label for="eating">
									Which best describes your normal<br/>
									eating pattern?</label></strong></td>
									<td>
									<select name="eating" id="eating">
									<option value="">Select...</option>
									<option value="High fat">High fat</option>
									<option value="Moderate fat">Moderate fat</option>
									<option value="Low fat">Low fat</option>
									<option value="Vegetarian">Vegetarian</option>
									</select></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							<img alt="" height="10" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" width="10" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE" align="center" class="auto-style34">
							<table cellpadding="5" cellspacing="0" class="auto-style36" style="width: 90%">
								<tr>
									<td class="auto-style11">
									<strong>
									<strong id="output2">
							<span class="auto-style28">* </span></strong>
									<span class="auto-style38">Ethnic origin</span>:</strong></td>
									<td class="auto-style35">
								<select name="ethnicity" id="ethnicity" onchange="
									if (this.selectedIndex==7 || this.selectedIndex==11 || this.selectedIndex==15 || this.selectedIndex==20 || this.selectedIndex==23) {this.form.ethnicity_other.disabled=false;document.getElementById('ethnicity_other').focus();} 
									else {this.form.ethnicity_other.disabled=true;this.form.ethnicity_other.value='';}">
									<option value="">Please select...</option>
								<optgroup label="White:">
									<option value="British">British</option>
									<option value="Irish">Irish</option>
									<option value="Irish Traveller">Irish Traveller</option>
									<option value="Traveller">Traveller</option>
									<option value="Gypsy/Romany">Gypsy/Romany</option>
									<option value="Polish">Polish</option>
									<option value="Other White">Any other White (please specify)</option>
								</optgroup>
								<optgroup label="Mixed:">
									<option value="White and Black Caribbean">White and Black Caribbean</option>
									<option value="White and Black African">White and Black African</option>
									<option value="White and Asian">White and Asian</option>
									<option value="Other Mixed">Any other Mixed (please specify)</option>
								</optgroup>
								<optgroup label="Asian or Asian British:">
									<option value="Indian">Indian</option>
									<option value="Pakistani">Pakistani</option>
									<option value="Bangladeshi">Bangladeshi</option>
									<option value="Other Asian">Any other Asian (please specify)</option>
								</optgroup>
								<optgroup label="Black or Black British:">
									<option value="Caribbean">Caribbean</option>
									<option value="African">African</option>
									<option value="Somali">Somali</option>
									<option value="Nigerian">Nigerian</option>
									<option value="Other Black">Any other Black (please specify)</option>
								</optgroup>
								<optgroup label="Other ethnic group:">
									<option value="Chinese">Chinese</option>
									<option value="Filipino">Filipino</option>
									<option value="Other">Any other ethnic group (please specify)</option>
								</optgroup>
								<optgroup label="Or:">
									<option value="Not stated">Prefer not to say</option>
								</optgroup>
								</select>
									<a href="javascript:return null;" onclick="
		if (document.getElementById('info').style.display == 'none') {document.getElementById('info').style.display = ''} else {document.getElementById('info').style.display = 'none'}">
							Info...</a></td>
									<td class="auto-style11">
									<label id="Label55" for="other"><strong>
									Other:</strong></label></td>
									<td>
							<input name="ethnicity_other" style="width: 100px" type="text" id="ethnicity_other" disabled="disabled"/></td>
								</tr>
								<tr id="info" style="display:none">
									<td class="auto-style11" colspan="4" style="text-align: center;font-size:8pt">
									It is now a contractual requirement for GPs 
									to record patients’ ethnicity information in 
									their patient record if that person, or 
									someone authorised <br>on their behalf, chooses 
									to share it. The information, which is 
									optional and does not affect registration, 
									should be recorded in coded form <br>using the 
									available categories, which include ‘prefer 
									not to say’. Ethnicity information is 
									sensitive personal data and must be processed 
									<br>and used only for medical purposes 
									in accordance with data protection 
									legislation. The GMS and PMS Regulations 
									amendment is&nbsp;online. </td>
								</tr>
								<tr>
									<td class="auto-style11">
									<strong><label for="religion">Religion:</label></strong></td>
									<td class="auto-style35">
									<input id="religion" name="religion" type="text" style=" width:175px"/></td>
									<td class="auto-style11">
									&nbsp;</td>
									<td>
									&nbsp;</td>
								</tr>
								<tr>
									<td class="auto-style11">
									<strong><label for="language">1<sup><span class="auto-style33">st</span></sup> 
									language:</label></strong></td>
									<td class="auto-style35">
									<input name="language" id="language" type="text" style="width:175px"/></td>
									<td class="auto-style11">
									<strong>Need interpreter:</strong></td>
									<td class="auto-style35">
									<input name="interpreter" type="radio" value="Interpreter needed" id="interpreter_yes"/><label for="interpreter_yes">Yes</label>&nbsp;&nbsp;
									<input name="interpreter" type="radio" value="Interpreter NOT needed" id="interpreter_no"/><label for="interpreter_no">No</label></td>
								</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							&nbsp;</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE" align="center" class="auto-style34">
							<table cellpadding="5" cellspacing="0" class="auto-style36" style="width: 90%">
								<tr>
									<td class="auto-style11"><strong>Are you a 
									carer?</strong></td>
									<td class="auto-style35">
									<input name="carer" type="radio" value="I am a carer" id="carer_yes"/><label for="carer_yes">Yes</label>&nbsp;
									<input name="carer" type="radio" value="I am NOT a carer" id="carer_no"/><label for="carer_no">No</label>&nbsp;</td>
									<td class="auto-style11"><strong>Do you have 
									a carer?</strong></td>
									<td class="auto-style35">
									<input name="caree" type="radio" value="I have a carer" id="caree_yes"/><label for="caree_yes">Yes</label>&nbsp;
									<input name="caree" type="radio" value="I do NOT have a carer" id="caree_no"/><label for="caree_no">No</label></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							&nbsp;</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							<table cellpadding="5" cellspacing="0" style="border: 1px solid #C0C0C0; margin-left:auto;margin-right:auto; width: 90%;">
								<tr>
									<td colspan="4" style="text-align: center">
									<strong>COVID-19 VACCINATION</strong></td>
								</tr>
								<tr>
									<td style="text-align: right"><strong>
									<label for="covid1">
									First dose date:</label></strong></td>
									<td>
											<input name="covid1" type="text" style="width:80px" id="covid1" placeholder="dd/mm/yy"/></td>
									<td style="text-align: right"><strong><label for="covid1_name">Vaccine name:</label></strong></td>
									<td>
							<select name="covid1_name" id="covid1_name">
									<option value="">Please select...</option>
									<option value="Oxford/AstraZeneca">Oxford/AstraZeneca</option>
									<option value="Pfizer/BioNTech">Pfizer/BioNTech</option>
									<option value="Moderna">Moderna</option>
									<option value="Janssen">Janssen </option>
									<option value="Covishield">Covishield</option>
									<option value="Sputnick">Sputnick</option>
									<option value="Sinopharm">Sinopharm</option>
									<option value="CoronaVac">CoronaVac</option>
									<option value="Covaxin">Covaxin</option>
									<option value="Other">Other</option>
									<option value="Don't know">Don't know</option>
									</select></td>
								</tr>
								<tr>
									<td style="text-align: right"><strong>
									<label for="covid2">
									Second dose date:</label></strong></td>
									<td>
											<input name="covid2" type="text" style="width:80px" id="covid2" placeholder="dd/mm/yy"/></td>
									<td style="text-align: right"><strong><label for="covid2_name">Vaccine name:</label></strong></td>
									<td>
							<select name="covid2_name" id="covid2_name">
									<option value="">Please select...</option>
									<option value="Oxford/AstraZeneca">Oxford/AstraZeneca</option>
									<option value="Pfizer/BioNTech">Pfizer/BioNTech</option>
									<option value="Moderna">Moderna</option>
									<option value="Janssen">Janssen </option>
									<option value="Covishield">Covishield</option>
									<option value="Sputnick">Sputnick</option>
									<option value="Sinopharm">Sinopharm</option>
									<option value="CoronaVac">CoronaVac</option>
									<option value="Covaxin">Covaxin</option>
									<option value="Other">Other</option>
									<option value="Don't know">Don't know</option>
									</select></td>
								</tr>
								<tr>
									<td style="text-align: right"><strong>
									<label for="covid3">
									Third dose/booster:</label></strong></td>
									<td>
											<input name="covid3" type="text" style="width:80px" id="covid3" placeholder="dd/mm/yy"/></td>
									<td style="text-align: right"><strong><label for="covid3_name">Vaccine name:</label></strong></td>
									<td>
							<select name="covid3_name" id="covid3_name">
									<option value="">Please select...</option>
									<option value="Oxford/AstraZeneca">Oxford/AstraZeneca</option>
									<option value="Pfizer/BioNTech">Pfizer/BioNTech</option>
									<option value="Moderna">Moderna</option>
									<option value="Janssen">Janssen </option>
									<option value="Covishield">Covishield</option>
									<option value="Sputnick">Sputnick</option>
									<option value="Sinopharm">Sinopharm</option>
									<option value="CoronaVac">CoronaVac</option>
									<option value="Covaxin">Covaxin</option>
									<option value="Other">Other</option>
									<option value="Don't know">Don't know</option>
									</select></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							&nbsp;</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE" align="center" class="auto-style34">
							<table style="width: 100%" cellpadding="5" cellspacing="0">
								<tr>
									<td class="auto-style19">
									<strong>Please tick if you have, or have had, 
									any of the following ILLNESSES:</strong></td>
								</tr>
								<tr>
									<td class="auto-style19">
									<table cellpadding="5" cellspacing="0" align="center">
										<tr>
											<td class="auto-style11" style="height: 21px">
											<strong><label for="asthma">Asthma:</label></strong><input id="asthma" name="asthma" type="checkbox" value="Asthma"/></td>
											<td class="auto-style11" style="height: 21px">
											<strong><label for="copd">COPD:</label></strong><input name="copd" id="copd" type="checkbox" value="COPD"/></td>
											<td class="auto-style11" style="height: 21px">
											<strong><label for="heart_problems">
											Heart problems:</label><input name="heart_problems" id="heart_problems" type="checkbox" value="Heart problems"/></strong></td>
											<td class="auto-style11" style="height: 21px">
											<strong><label for="high_blood_pressure">
											High blood pressure:</label></strong><input name="high_blood_pressure" id="high_blood_pressure" type="checkbox" value="High blood pressure"/></td>
										</tr>
										<tr>
											<td class="auto-style11"><strong><label for="diabetes">
											Diabetes:</label></strong><input name="diabetes" id="diabetes" type="checkbox" value="Diabetes"/></td>
											<td class="auto-style11"><strong><label for="stroke">
											Stroke:</label></strong><input name="stroke" id="stroke" type="checkbox" value="Stroke"/></td>
											<td class="auto-style11"><strong><label for="thyroid_problems">
											Thyroid problems:</label></strong><input name="thyroid_problems" id="thyroid_problems" type="checkbox" value="Thyroid problems"/></td>
											<td class="auto-style11"><strong><label for="mental_health_problems">
											Mental health problems:</label></strong><input name="mental_health_problems" id="mental_health_problems" type="checkbox" value="Mental health problems"/></td>
										</tr>
										</table>
									</td>
								</tr>
								</table>
							<table style="width: 100%" cellpadding="5" cellspacing="0">
								<tr>
									<td class="auto-style11">
									<strong><label for="conditions">Please list 
									any other existing or past
									<br/>
									SIGNIFICANT MEDICAL CONDITIONS <br/>
									including major operations and dates:</label></strong></td>
									<td class="auto-style35">
									<textarea cols="20" name="conditions" id="conditions" rows="3" style="width: 295px; font-family:Arial, Helvetica, sans-serif"></textarea></td>
								</tr>
								<tr>
									<td class="auto-style11">
									<strong><label for="medication">Please list 
									any CURRENT MEDICATION, 
									including <br/>
									inhalers and contraception. Please specify dose:</label></strong></td>
									<td class="auto-style35">
									<textarea name="medication" id="medication" rows="2" style="width: 295px; font-family:Arial, Helvetica, sans-serif" cols="20"></textarea></td>
								</tr>
								<tr>
									<td class="auto-style11">
									<strong><label for="family_history">Please 
									list any significant <br/>
									FAMILY HISTORY of illness:</label></strong></td>
									<td class="auto-style35">
									<textarea cols="20" name="family_history" id="family_history" rows="2" style="width: 295px; font-family:Arial, Helvetica, sans-serif"></textarea></td>
								</tr>
								<tr>
									<td class="auto-style11">
									<strong><label for="allergies">Please list 
									any DRUG ALLERGIES <br/>
									or ALLERGIC REACTIONS:</label></strong></td>
									<td class="auto-style35">
									<textarea cols="20" name="allergies" id="allergies" rows="2" style="width: 295px; font-family:Arial, Helvetica, sans-serif"></textarea></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							&nbsp;</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE"><strong>
							<span class="auto-style28">* </span>Do you SMOKE?</strong>
							<input id="isyes0" name="smoker" type="radio" value="Yes" onclick="document.getElementById('smoketableusedto').style.display = 'none';
							document.getElementById('smoketableyes').style.display = '';this.form.smoked_amount.value='';document.getElementById('smoke_amount').focus();"/><label for="isyes0">Yes 
							&nbsp;</label>
							<input id="isno0" name="smoker" type="radio" value="No" onclick="document.getElementById('smoketableyes').style.display = 'none';
							document.getElementById('smoketableusedto').style.display = 'none';this.form.smoked_amount.value='';this.form.smoke_amount.value='';"/><label for="isno0">No 
							&nbsp;</label>
							<input id="usedto" name="smoker" type="radio" value="Used to smoke" onclick="document.getElementById('smoketableyes').style.display = 'none';
							document.getElementById('smoketableusedto').style.display = '';this.form.smoke_amount.value='';document.getElementById('smoked_amount').focus();"/><label for="usedto">Used 
							to smoke</label></td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
									<table cellpadding="0" cellspacing="0" id="smoketableusedto">
										<tr>
											<td><strong>
											<label for="smoked_amount">
							<span class="auto-style28">* </span>Amount you used 
											to smoke per day:</label></strong>&nbsp;&nbsp; </td>
											<td>
											<input name="smoked_amount" type="text" id="smoked_amount" style="width:100px"/></td>
											<td>
											<strong>&nbsp;&nbsp; <label for="stopped_smoking">When did you stop?</label></strong></td>
											<td>
											<input name="stopped_smoking" type="text" style="width:100px" id="stopped_smoking"/></td>
										</tr>
									</table>
							<table style="width: 100%" id="smoketableyes" cellpadding="0" cellspacing="0">
								<tr>
									<td>
							<img alt="" height="5" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" width="5" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></td>
								</tr>
								<tr>
									<td>
									<table cellpadding="0" cellspacing="0">
										<tr>
											<td><strong><label for="smoke_amount">
											<span class="auto-style28">* </span>
											Amount you smoke per day:</label></strong>&nbsp;&nbsp; </td>
											<td>
											<input name="smoke_amount" type="text" id="smoke_amount"/>&nbsp;</td>
										</tr>
									</table>
									</td>
								</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							<img src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/><hr class="auto-style39" noshade="noshade" style="height: 0px"/></td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							<table style="width: 100%" cellspacing="0">
								<tr>
									<td colspan="5" style="height: 20px">
									<strong>How often do you have a drink that 
									contains ALCOHOL?</strong></td>
								</tr>
								<tr>
									<td>
									<input name="drink" type="radio" value="Never (0)" id="drink0" onclick="calculateScore(0,aa2,aa3);
									document.getElementById('units_table').style.display = 'none';this.form.units_per_week.value='';"/><label id="Label39" for="drink0">Never 
									(0)</label></td>
									<td>
									<input name="drink" type="radio" value="Monthly or less (1)" id="drink1" onclick="calculateScore(1,aa2,aa3);
									document.getElementById('units_table').style.display = '';document.getElementById('units_per_week').focus();"/><label id="Label40" for="drink1">Monthly 
									or less (1)</label></td>
									<td>
									<input name="drink" type="radio" value="2-4 times / month (2)" id="drink2" onclick="calculateScore(2,aa2,aa3);
									document.getElementById('units_table').style.display = '';document.getElementById('units_per_week').focus();"/><label id="Label41" for="drink2">2-4 
									times / month (2)</label></td>
									<td>
									<input name="drink" type="radio" value="2-3 times / week (3)" id="drink3" onclick="calculateScore(3,aa2,aa3);
									document.getElementById('units_table').style.display = '';document.getElementById('units_per_week').focus();"/><label id="Label42" for="drink3">2-3 
									times / week (3)</label></td>
									<td>
									<input name="drink" type="radio" value="4+ times / week (4)" id="drink4" onclick="calculateScore(4,aa2,aa3);
									document.getElementById('units_table').style.display = '';document.getElementById('units_per_week').focus();"/><label id="Label43" for="drink4">4+ 
									times / week (4)</label></td>
								</tr>
							</table>
							<table cellspacing="0" id="units_table">
								<tr>
									<td><strong><label for="units_per_week">
									<span class="auto-style28">* </span>How many 
									alcohol units per week do you drink? </label></strong></td>
									<td>
									&nbsp;<input name="units_per_week" size="10" type="text" id="units_per_week" onkeypress="return isNumberKey(event)"/>
							<span data-tooltip="A number of alcohol units per week">
							<img alt="A number of alcohol units per week" src="data:image/gif;base64,R0lGODlhEAAQAIMAACZXr0Bhn0JvuTBk0jJ63UZyzkh+41qGvVuT63eb2ZC86cb3/8b//9La4uH3/8rKyiH5BAEAAA8ALAAAAAAQABAAAASS8Mm3khmjpDVnS8GBGEaBBIkzOceRHMBRAAJ9qA941MLiBIWCAPX4IQoDgcCxkA0Mw0piJhzuBgRCMiFAYGmOMFDrDSIxgIC4kG1nBgC4mmUg1OvduDwsMBkQCgIKAHEAQmEiCIouDUCGaQ4MiQgvHCA0PWEOJgoJChIsAUozXYAuOEUgfX8ILQqoExUXA4AcExEAOw==" class="auto-style22" pagespeed_url_hash="3132693573" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></span>&nbsp;</td>
								</tr>
								<tr>
									<td>
							<a href="http://www.nhs.uk/Livewell/alcohol/Pages/alcohol-units.aspx" target="_blank">
							NHS Alcohol Unit Calculator</a></td>
									<td>
									&nbsp;</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							<table style="width: 100%" cellspacing="0">
								<tr>
									<td colspan="5">
									<strong>How many standard alcoholic drinks 
									do you have on a typical day when you are 
									drinking?</strong></td>
								</tr>
								<tr>
									<td>
									<input name="drinks" type="radio" value="1-2 (0)" id="many0" onclick="calculateScore(aa1,0,aa3)"/><label id="Label44" for="many0">1-2 
									(0)</label></td>
									<td>
									<input name="drinks" type="radio" value="3-4 (1)" id="many1" onclick="calculateScore(aa1,1,aa3)"/><label id="Label45" for="many1">3-4 
									(1)</label></td>
									<td>
									<input name="drinks" type="radio" value="5-6 (2)" id="many2" onclick="calculateScore(aa1,2,aa3)"/><label id="Label46" for="many2">5-6 
									(2)</label></td>
									<td>
									<input name="drinks" type="radio" value="7-9 (3)" id="many3" onclick="calculateScore(aa1,3,aa3)"/><label id="Label47" for="many3">7-9<label id="Label220" for="six3"> 
									(3)</label></label></td>
									<td>
									<input name="drinks" type="radio" value="10+ (4)" id="many4" onclick="calculateScore(aa1,4,aa3)"/><label id="Label48" for="many4">10+ 
									(4)</label></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							<table style="width: 100%" cellspacing="0">
								<tr>
									<td colspan="5">
									<strong>How often do you have 6 or more 
									standard drinks on one occasion?</strong></td>
								</tr>
								<tr>
									<td>
									<input name="six_drinks" type="radio" value="Never (0)" id="six0" onclick="calculateScore(aa1,aa2,0)"/><label id="Label49" for="six0">Never 
									(0)</label></td>
									<td>
									<input name="six_drinks" type="radio" value="Less than monthly (1)" id="six1" onclick="calculateScore(aa1,aa2,1)"/><label id="Label50" for="six1">Less 
									than monthly (1)</label></td>
									<td>
									<input name="six_drinks" type="radio" value="Monthly (2)" id="six2" onclick="calculateScore(aa1,aa2,2)"/><label id="Label51" for="six2">Monthly 
									(2)</label></td>
									<td>
									<input name="six_drinks" type="radio" value="Weekly (3)" id="six3" onclick="calculateScore(aa1,aa2,3)"/><label id="Label52" for="six3">Weekly 
									(3)</label></td>
									<td>
									<input name="six_drinks" type="radio" value="Daily or almost daily (4)" id="six4" onclick="calculateScore(aa1,aa2,4)"/><label id="Label53" for="six4">Daily 
									or almost daily (4)</label></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							<img alt="" height="5" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" width="5" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							<table id="more_questions" cellpadding="0" cellspacing="1" style="background-color:#efefef;display:none">
								<tr>
									<td class="auto-style28" colspan="5">
									<strong>If your total alcohol score above is 
									high it may indicate hazardous or harmful 
									drinking.<br/>
									Please then complete the more detailed 
									questions below (score in brackets):</strong></td>
								</tr>
								<tr>
									<td colspan="5">&nbsp;</td>
								</tr>
								<tr>
									<td colspan="5"><strong>How often during the 
									last year have you found that you were not 
									able to stop drinking once you had started?</strong></td>
								</tr>
								<tr>
									<td>
									<input id="six5" name="audit1" type="radio" value="Never (0)"/><label id="Label94" for="six5">Never 
									(0)</label></td>
									<td>
									<label id="Label104" for="six10">
									<input id="six10" name="audit1" type="radio" value="Less than monthly (1)"/>Less 
									than monthly (1)</label></td>
									<td>
									<input id="six15" name="audit1" type="radio" value="Monthly (2)"/><label id="Label119" for="six15">Monthly 
									(2)</label></td>
									<td>
									<input id="six20" name="audit1" type="radio" value="Weekly (3)"/><label id="Label139" for="six20">Weekly 
									(3)</label></td>
									<td>
									<input id="six25" name="audit1" type="radio" value="Daily or almost daily (4)"/><label id="Label164" for="six25">Daily 
									or almost daily (4)</label></td>
								</tr>
								<tr>
									<td colspan="5">&nbsp;</td>
								</tr>
								<tr>
									<td colspan="5"><strong>How often during the 
									last year have you failed to do what was 
									normally expected from you because of your 
									drinking?</strong></td>
								</tr>
								<tr>
									<td>
									<input id="six6" name="audit2" type="radio" value="Never (0)"/><label id="Label96" for="six6">Never 
									(0)</label></td>
									<td>
									<input id="six11" name="audit2" type="radio" value="Less than monthly (1)"/><label id="Label107" for="six11">Less 
									than monthly (1)</label></td>
									<td>
									<input id="six16" name="audit2" type="radio" value="Monthly (2)"/><label id="Label123" for="six16">Monthly 
									(2)</label></td>
									<td>
									<input id="six21" name="audit2" type="radio" value="Weekly (3)"/><label id="Label144" for="six21">Weekly 
									(3)</label></td>
									<td>
									<input id="six26" name="audit2" type="radio" value="Daily or almost daily (4)"/><label id="Label170" for="six26">Daily 
									or almost daily (4)</label></td>
								</tr>
								<tr>
									<td colspan="5">&nbsp;</td>
								</tr>
								<tr>
									<td colspan="5"><strong>How often during the 
									last year have you needed an alcoholic drink 
									in the morning to get yourself going after a 
									heavy drinking session?</strong></td>
								</tr>
								<tr>
									<td>
									<input id="six7" name="audit3" type="radio" value="Never (0)"/><label id="Label98" for="six7">Never 
									(0)</label></td>
									<td>
									<input id="six12" name="audit3" type="radio" value="Less than monthly (1)"/><label id="Label110" for="six12">Less 
									than monthly (1)</label></td>
									<td>
									<input id="six17" name="audit3" type="radio" value="Monthly (2)"/><label id="Label127" for="six17">Monthly 
									(2)</label></td>
									<td>
									<input id="six22" name="audit3" type="radio" value="Weekly (3)"/><label id="Label149" for="six22">Weekly 
									(3)</label></td>
									<td>
									<input id="six27" name="audit3" type="radio" value="Daily or almost daily (4)"/><label id="Label176" for="six27">Daily 
									or almost daily (4)</label></td>
								</tr>
								<tr>
									<td colspan="5">&nbsp;</td>
								</tr>
								<tr>
									<td colspan="5"><strong>How often during the 
									last year have you had a feeling of guilt or 
									remorse after drinking?</strong></td>
								</tr>
								<tr>
									<td style="height: 21px">
									<input id="six8" name="audit4" type="radio" value="Never (0)"/><label id="Label100" for="six8">Never 
									(0)</label></td>
									<td style="height: 21px">
									<input id="six13" name="audit4" type="radio" value="Less than monthly (1)"/><label id="Label113" for="six13">Less 
									than monthly (1)</label></td>
									<td style="height: 21px">
									<input id="six18" name="audit4" type="radio" value="Monthly (2)"/><label id="Label131" for="six18">Monthly 
									(2)</label></td>
									<td style="height: 21px">
									<input id="six23" name="audit4" type="radio" value="Weekly (3)"/><label id="Label154" for="six23">Weekly 
									(3)</label></td>
									<td style="height: 21px">
									<input id="six28" name="audit4" type="radio" value="Daily or almost daily (4)"/><label id="Label182" for="six28">Daily 
									or almost daily (4)</label></td>
								</tr>
								<tr>
									<td colspan="5">&nbsp;</td>
								</tr>
								<tr>
									<td colspan="5"><strong>How often during the 
									last year have you been unable to remember 
									what happened the night before because you 
									had been drinking?</strong></td>
								</tr>
								<tr>
									<td>
									<input id="six9" name="audit5" type="radio" value="Never (0)"/><label id="Label102" for="six9">Never 
									(0)</label></td>
									<td>
									<input id="six14" name="audit5" type="radio" value="Less than monthly (1)"/><label id="Label116" for="six14">Less 
									than monthly (1)</label></td>
									<td>
									<input id="six19" name="audit5" type="radio" value="Monthly (2)"/><label id="Label135" for="six19">Monthly 
									(2)</label></td>
									<td>
									<input id="six24" name="audit5" type="radio" value="Weekly (3)"/><label id="Label159" for="six24">Weekly 
									(3)</label></td>
									<td>
									<input id="six29" name="audit5" type="radio" value="Daily or almost daily (4)"/><label id="Label188" for="six29">Daily 
									or almost daily (4)</label></td>
								</tr>
								<tr>
									<td colspan="5">&nbsp;</td>
								</tr>
								<tr>
									<td colspan="5"><strong>Have you or somebody 
									else been injured as a result of your 
									drinking?</strong></td>
								</tr>
								<tr>
									<td>
									<input id="six34" name="audit6" type="radio" value="No (0)"/><label id="Label214" for="six34">No 
									(0)</label></td>
									<td colspan="2">
									<input id="six32" name="audit6" type="radio" value="Yes, but not in the last year (2)"/><label id="Label206" for="six32">Yes, 
									but not in the last year (2)</label></td>
									<td colspan="2">
									<input id="six30" name="audit6" type="radio" value="Yes, in the last year (4)"/><label id="Label194" for="six30">Yes, 
									in the last year (4)</label></td>
								</tr>
								<tr>
									<td colspan="5">&nbsp;</td>
								</tr>
								<tr>
									<td colspan="5"><strong>Has a relative or 
									friend, doctor or other health worker been 
									concerned about your drinking or suggested 
									that you cut down?</strong></td>
								</tr>
								<tr>
									<td>
									<input id="six35" name="audit7" type="radio" value="No (0)"/><label id="Label216" for="six35">No 
									(0)</label></td>
									<td colspan="2">
									<input id="six33" name="audit7" type="radio" value="Yes, but not in the last year (2)"/><label id="Label210" for="six33">Yes, 
									but not in the last year (2)</label></td>
									<td colspan="2">
									<input id="six31" name="audit7" type="radio" value="Yes, in the last year (4)"/><label id="Label200" for="six31">Yes, 
									in the last year (4)</label></td>
								</tr>
								<tr>
									<td colspan="5">&nbsp;</td>
								</tr>
								<tr>
									<td class="auto-style28" colspan="5">
									<strong>Scoring (add up score in brackets): 
									0 – 7 Lower risk, 8 – 15 Increasing risk, 16 
									– 19 Higher risk, 20+ Possible dependence</strong></td>
								</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							<img alt="" height="5" src="data:image/gif;base64,R0lGODlhAQABALMAAP//zP///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAIALAAAAAABAAEAAAQCUEQAOw==" width="5" pagespeed_url_hash="3796859599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE" class="auto-style34">
							<div class="auto-style19">
								<strong>
									<span class="auto-style38">Do you have a 
								Disability or Special Communication Needs?</span></strong>&nbsp;&nbsp;
									<input name="disability" type="radio" value="Yes" id="disyes" onclick="document.getElementById('disability_table').style.display = '';document.getElementById('disability_description').focus();"/><label for="disyes">Yes</label>&nbsp;&nbsp;
									<input name="disability" type="radio" value="No" id="disno" onclick="document.getElementById('disability_table').style.display = 'none';
									document.getElementById('disability_description').value = '';
									document.getElementById('disability_other').value = '';
									document.getElementById('disability_other').disabled = true;
									document.getElementById('comms1').checked = false;
									document.getElementById('comms2').checked = false;
									document.getElementById('comms3').checked = false;
									document.getElementById('comms4').checked = false;
									document.getElementById('comms5').checked = false;"/><label for="disno">No</label></div>
							<table id="disability_table" style="width: 100%" cellpadding="5" cellspacing="0">
								<tr>
									<td class="auto-style11"><strong><label for="disability_description">
									Please describe your disability:</label></strong></td>
									<td>
									<input name="disability_description" style="width: 400px" type="text" id="disability_description"/></td>
								</tr>
								<tr>
									<td colspan="2" class="auto-style19">
									<strong>Please provide your preferred means 
									of communication:</strong></td>
								</tr>
								<tr>
									<td class="auto-style11">
									<strong><label for="comms1">Text:</label></strong><input name="comms1" type="checkbox" value="Text" id="comms1"/>&nbsp;&nbsp;<strong><label for="comms2">Email:</label></strong><input name="comms2" type="checkbox" value="Email" id="comms2"/>&nbsp;&nbsp;<strong><label for="comms3">Sign
									Language:</label></strong><input name="comms3" type="checkbox" value="Sign language" id="comms3"/>&nbsp;&nbsp;<strong><label for="comms4">Hearing 
									Loop:</label></strong><input name="comms4" type="checkbox" value="Hearing loop" id="comms4"/>&nbsp;&nbsp;<strong><label for="comms5">Other:</label></strong><input name="comms5" type="checkbox" value="Other" id="comms5" onclick="
									if (this.checked){
										document.getElementById('disability_other').disabled = false;
										document.getElementById('disability_other').focus();
										}
										else {
										document.getElementById('disability_other').disabled = true;
										};"/></td>
									<td class="auto-style35">
									<input name="disability_other" id="disability_other" style="width: 400px" type="text" disabled="disabled"/></td>
								</tr>
								<tr>
									<td colspan="2" class="auto-style19">* 
									Please note not all information is currently 
									readily available *</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							&nbsp;</td>
						</tr>
						<tr id="females_table">
							<td colspan="3" style="background-color: #E0FFEE">
							<table cellpadding="5" cellspacing="0" align="centre" style="margin-left:auto;margin-right:auto" class="auto-style47">
								<tr>
									<td colspan="6">
							<strong>WOMEN OVER 25</strong></td>
								</tr>
								<tr>
									<td colspan="6">
									<strong>Have you ever had a smear 
									test?</strong>&nbsp; 
									<input name="smear" id="smearyes" type="radio" value="I have had a smear test" onclick="
									document.getElementById('smear_row').style.display = '';"/><label for="smearyes">Yes</label>&nbsp;&nbsp; 							
									<input name="smear" id="smearno" type="radio" value="I have NOT had a smear test" onclick="
									document.getElementById('smear_row').style.display = 'none';
									document.getElementById('smear_date').value = '';
									document.getElementById('smear_where').value = '';
									document.getElementById('smear_result').value = '';"/><label for="smearno">No</label></td>
								</tr>
								<tr id="smear_row" style="display:none">
									<td class="auto-style11">
									<strong><label for="smear_date">
									Date: </label></strong></td>
									<td>
									<input name="smear_date" id="smear_date" type="text" style="width:100px"/></td>
									<td class="auto-style11">
									<strong><label for="smear_where">
									Where: </label></strong></td>
									<td>
									<input name="smear_where" id="smear_where" type="text" style="width:100px"/></td>
									<td class="auto-style11">
									<strong><label for="smear_result">
									Result: </label></strong></td>
									<td>
									<input name="smear_result" id="smear_result" type="text" style="width:100px"/></td>
								</tr>
								<tr>
									<td colspan="6">
									If you are over 25 and have not yet had a 
									smear please make an appointment with the 
									Practice Nurse.</td>
								</tr>
								<tr>
									<td colspan="6">
									&nbsp;</td>
								</tr>
								<tr>
									<td colspan="6">
									<strong>Have you had HPV VACCINATION?</strong>&nbsp; 
									<input name="hpv" id="hpvyes" type="radio" value="I have had HPV vaccination" onclick="
									document.getElementById('hpv_row1').style.display = ''; document.getElementById('hpv_row2').style.display = '';"/><label for="hpvyes">Yes</label>&nbsp;&nbsp; 							
									<input name="hpv" id="hpvno" type="radio" value="I have NOT had HPV vaccination" onclick="
									document.getElementById('hpv_row1').style.display = 'none';
									document.getElementById('hpv_row2').style.display = 'none';
									document.getElementById('cervarix').checked = false;
									document.getElementById('gardasil').checked = false;
									document.getElementById('hpv_date1').value = '';
									document.getElementById('hpv_date2').value = '';
									document.getElementById('hpv_date3').value = '';"/><label for="hpvno">No</label></td>
								</tr>
								<tr id="hpv_row1" style="display:none">
									<td colspan="6">
									<strong>Indicate vaccine (if known):</strong>&nbsp;
									<input name="hpv_vaccine" type="radio" value="Cervarix" id="cervarix"/><label for="cervarix">Cervarix</label>&nbsp;&nbsp; 
									<input name="hpv_vaccine" type="radio" value="Gardasil" id="gardasil"/><label for="gardasil">Gardasil</label></td>
								</tr>
								<tr id="hpv_row2" style="display:none">
									<td class="auto-style11">
									<strong><label for="hpv_date1">
									First date: </label></strong></td>
									<td>
									<input name="hpv_date1" id="hpv_date1" type="text" style="width:100px"/></td>
									<td class="auto-style11">
									<strong><label for="hpv_date2">
									Second date: </label></strong></td>
									<td>
									<input name="hpv_date2" id="hpv_date2" type="text" style="width:100px"/></td>
									<td class="auto-style11">
									<strong><label for="hpv_date3">
									Third date:</label></strong></td>
									<td>
									<input name="hpv_date3" id="hpv_date3" type="text" style="width:100px"/></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							&nbsp;</td>
						</tr>
						<tr>
							<td colspan="3" style="background-color: #E0FFEE">
							<table cellpadding="5" style="width: 100%; border: 1px solid #C0C0C0;" cellspacing="0">
								<tr>
									<td colspan="2" style="text-align: center">
									<strong>Preferred 
									PHARMACY</strong></td>
								</tr>
								<tr>
									<td style="text-align: right"><strong><label for="pharmacy">Which Pharmacy would you like your prescriptions sent to?</label></strong></td>
									<td>
									<input name="pharmacy" id="pharmacy" style="width: 400px" type="text"/></td>
								</tr>
								<tr>
									<td colspan="2" style="text-align: center">
									Most pharmacies and practices support 
									electronic prescriptions.</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="3">
							&nbsp;</td>
						</tr>
						<tr>
							<td class="auto-style31" colspan="3">
							<strong>
							<span class="auto-style28">* </span>NHS Records</strong></td>
						</tr>
						<tr>
							<td colspan="3">
							There are strict laws and regulations to ensure that 
							your health records are kept confidential and can 
							only be accessed by health professionals directly 
							involved in your care. There is some sharing of 
							information as detailed below. You can opt out of 
							any of these at any time if you wish. </td>
						</tr>
						<tr>
							<td colspan="3">
							<strong>NHS Summary Care Record (SCR)</strong> - 
							this is an electronic record which contains 
							information about the medicines you take, allergies 
							you suffer from and any bad reactions to medicines 
							you have had.&nbsp; Having this information stored in one 
							place makes it easier for healthcare staff to treat 
							you in an emergency, or when your GP practice is 
							closed. </td>
						</tr>
						<tr>
							<td class="auto-style19" colspan="3">
							<input name="SCR" type="radio" value="Opt in" id="scr1"/><strong><label for="scr1">I 
							agree to opt in</label></strong>&nbsp;&nbsp;
							<input name="SCR" type="radio" value="Opt out" id="scr2"/><strong><label for="scr2">I 
							do <span class="auto-style37">not</span> agree to 
							opt in</label></strong></td>
						</tr>
						<tr>
							<td class="auto-style19" colspan="3">
							&nbsp;</td>
						</tr>
						<tr>
							<td class="auto-style19" colspan="3">
							<table cellpadding="5" cellspacing="0" class="auto-style30" align="center" style="margin-left:auto;margin-right:auto">
								<tr>
									<td class="auto-style31">
									<strong>Organ Donation</strong></td>
								</tr>
								<tr>
									<td class="auto-style19">Organ donation in England has changed to 
									an 'opt out' system. You still have a choice 
									<br>about whether or not you wish to become 
									a donor and your faith, beliefs and culture 
									<br>will continue to be respected. You can 
									record your organ donation decision on the
									<br>
									<a href="https://www.organdonation.nhs.uk/" target="_blank">
									NHS Organ Donor Register</a>. Tell your 
									family and friends what you have decided.</td>
								</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td class="auto-style19" colspan="3">
							<table cellpadding="5" cellspacing="0" align="center" style="margin-left:auto;margin-right:auto;border:1px black solid">
								<tr>
									<td class="auto-style31">
									<strong>Blood Donation</strong></td>
								</tr>
								<tr>
									<td class="auto-style19">If you are 
									interested in becoming an blood donor,
									<a href="https://www.blood.co.uk/" target="_blank">please click this link</a>
									<br/>
									to go to the 
									blood donor registration page.</td>
								</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td class="auto-style19" colspan="3">
							&nbsp;</td>
						</tr>
						<tr>
							<td class="auto-style19" colspan="3">
					<input name="address_confirm" class="my-url"/><input type="submit" value="   Submit   " id="submit" disabled="disabled" style=" display:none" name="submit" onClick="return confirm('The data you have supplied is processed by CampusDoctor on behalf of the medical practice.\n\nIt is collected to enable your online registration there.\n\nThis data is not passed to any other party, and will not be stored by CampusDoctor.\n\nFor further privacy information see our Privacy Notice below.\n\nClick OK if you are happy to proceed with this submission.');"/></td>
						</tr>
						<tr>
							<td class="auto-style19" colspan="3">
							Please read our 							<a href="../privacy_notice.html" target="_blank">
							Privacy Notice</a>.</td>
						</tr>
						</table>
					The information you are submitting will be sent encrypted to 
					the medical practice over the Internet, which still isn't 
					100% secure.<br/>
					If you are worried about this you can instead obtain a form 
					from the medical practice that can be filled in and 
					delivered by hand.<br/>
					<span class="auto-style28"><strong>*</strong> = Compulsory</span>.</form>
				</td>
			</tr>

			</table>
		</td>
	</tr>
	<tr>
               <td class="label-td" colspan="2">
               </td>
           </tr>

           <tr>
               <td>
                   <input type="reset" value="Reset" class="login-btn btn-primary-soft btn" >
               </td>
               <td>
                   
                   <a href="login.php" class="hover-link1 non-style-link">Sign Up</a>
               </td>

           </tr>
           <tr>
               <td colspan="2">
                   <br>
                   <label for="" class="sub-text" style="font-weight: 280;">Already have an account&#63; </label>
                   <a href="login.php" class="hover-link1 non-style-link">Login</a>
                   <br><br><br>
               </td>
           </tr>

                   </form>
           </tr>
       </table>

		


</body>

</html>