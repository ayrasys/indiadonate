<?php
/*
Template Name:cronemailtemp

*/
// echo TEMPLATEPATH . '/testtemp.html';
// echo $body = file_get_contents(TEMPLATEPATH . 'includes/my_email_template.php');
//get_header();
$massage ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- If you delete this tag, the sky will fall on your head -->
<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>IndiaDonates.in</title>

<style>
* {
	margin:0;
	padding:0;
}
* { font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; }

img {
	max-width: 100%;
}
.collapse {
	margin:0;
	padding:0;
}
body {
	-webkit-font-smoothing:antialiased;
	-webkit-text-size-adjust:none;
	width: 100%!important;
	height: 100%;
}
a { color: #F89011;}

.btn {
	text-decoration:none;
	color: #FFF;
	background-color: #666;
	padding:10px 16px;
	font-weight:bold;
	margin-right:10px;
	text-align:center;
	cursor:pointer;
	display: inline-block;
}

p.callout {
	padding:15px;
	background-color:#ECF8FF;
	margin-bottom: 15px;
}
.callout a {
	font-weight:bold;
	color: #2BA6CB;
}

table.social {
/* 	padding:15px; */
	background-color: #ebebeb;

}
.social .soc-btn {
	padding: 3px 7px;
	font-size:12px;
	margin-bottom:10px;
	text-decoration:none;
	color: #FFF;font-weight:bold;
	display:block;
	text-align:center;
}
a.fb { background-color: #3B5998!important; }
a.tw { background-color: #1daced!important; }
a.gp { background-color: #DB4A39!important; }
a.ms { background-color: #000!important; }

.sidebar .soc-btn {
	display:block;
	width:100%;
}
table.head-wrap { width: 100%;}
.header.container table td.logo { padding: 15px; }
.header.container table td.label { padding: 15px; padding-left:0px;}
table.body-wrap { width: 100%;}

table.footer-wrap { width: 100%;	clear:both!important;
}
.footer-wrap .container td.content  p { border-top: 1px solid rgb(215,215,215); padding-top:15px;}
.footer-wrap .container td.content p {
	font-size:10px;
	font-weight: bold;

}

h1,h2,h3,h4,h5,h6 {
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; line-height: 1.1; margin-bottom:15px; color:#000;
}
h1 small, h2 small, h3 small, h4 small, h5 small, h6 small { font-size: 60%; color: #6f6f6f; line-height: 0; text-transform: none; }

h1 { font-weight:200; font-size: 44px;}
h2 { font-weight:200; font-size: 37px;}
h3 { font-weight:500; font-size: 27px;}
h4 { font-weight:500; font-size: 23px;}
h5 { font-weight:900; font-size: 17px;}
h6 { font-weight:900; font-size: 14px; text-transform: uppercase; color:#444;}

.collapse { margin:0!important;}

p, ul {
	margin-bottom: 10px;
	font-weight: normal;
	font-size:13px;
	line-height:1.6;
}
p.lead { font-size:17px; }
p.last { margin-bottom:0px;}

ul li {
	margin-left:5px;
	list-style-position: inside;
}

/* -------------------------------------
		SIDEBAR
------------------------------------- */
ul.sidebar {
	background:#ebebeb;
	display:block;
	list-style-type: none;
}
ul.sidebar li { display: block; margin:0;}
ul.sidebar li a {
	text-decoration:none;
	color: #F89011;
	padding:10px 16px;
/* 	font-weight:bold; */
	margin-right:10px;
/* 	text-align:center; */
	cursor:pointer;
	border-bottom: 1px solid #777777;
	border-top: 1px solid #FFFFFF;
	display:block;
	margin:0;
}
ul.sidebar li a.last { border-bottom-width:0px;}
ul.sidebar li a h1,ul.sidebar li a h2,ul.sidebar li a h3,ul.sidebar li a h4,ul.sidebar li a h5,ul.sidebar li a h6,ul.sidebar li a p { margin-bottom:0!important;}
.container {
	display:block!important;
	max-width:600px!important;
	margin:0 auto!important; /* makes it centered */
	clear:both!important;
}
.content {
	padding:15px;
	max-width:600px;
	margin:0 auto;
	display:block;
}
.content table { width: 100%; }
/* Odds and ends */
.column {
	width: 300px;
	float:left;
}
.column tr td { padding: 15px; }
.column-wrap {
	padding:0!important;
	margin:0 auto;
	max-width:600px!important;
}
.column table { width:100%;}
.social .column {
	width: 280px;
	min-width: 279px;
	float:left;
}

.clear { display: block; clear: both; }
@media only screen and (max-width: 600px) {

	a[class="btn"] { display:block!important; margin-bottom:10px!important; background-image:none!important; margin-right:0!important;}

	div[class="column"] { width: auto!important; float:none!important;}

	table.social div[class="column"] {
		width:auto!important;
	}

}
</style>

</head>

<body bgcolor="#f1f1f1" style="background-color:#f1f1f1">

<!-- HEADER -->


<!-- BODY -->
<table class="body-wrap">
	<tr>
		<td></td>
		<td class="container">

			<div class="content" style="background-color:#ffffff">
			<table>
				<tr>
					<td>

						<!-- A Real Hero (and a real human being) -->
						<p><img width="200px" src="https://indiadonates.in/wp-content/uploads/2018/12/india-donates-1024x344.png" /></p><!-- /hero -->
						<p>&nbsp;</p>

						<p>&nbsp;</p>
						<h3>Dear  {{--username--}}, </h3>
						<p class="lead">We have successfully received your Form-1 details and the same has been approved by us.</p>
<p class="lead">Are you filling out form-2 details sent to you? It’s already been 7 days.</p>
<p class="lead">As a next step, we would request you to fill-in Form-2 with all the required information.</p>
<p class="lead">Once you complete the Form-2 process, Our Due-diligence team will get in touch with you for the verification process. You can also refer to our portal <a href="https://indiadonates.in/what-is-ngo-registration/"> https://indiadonates.in/what-is-ngo-registration/</a>  to understand the whole on-boarding process. </p>
<p class="lead">See how our other projects are performing - <a href="https://indiadonates.in/ngo/humanitarian-aid-international/projects/the-scars-of-fani-cyclone-lets-re-build-odisha">https://indiadonates.in/ngo/humanitarian-aid-international/projects/the-scars-of-fani-cyclone-lets-re-build-odisha</a></p>
<p lass="lead">See the list of accredited Ngo’s - <a href="https://indiadonates.in/list-of-accredited-ngos/">https://indiadonates.in/list-of-accredited-ngos/</a></p>
<p lass="lead">Do not hesitate to reach out to us in case of any queries.</p>
Hurry up!!!
 </p>
						<p class="lead">Please update the same and complete the documentation Process at earliest.  </p>
						<!-- Callout Panel -->

						<h5> Observation : </h5>
						<p style="font-size: 15px;">
							  {{--msgData--}}

						</p>
						<p>&nbsp;</p>

						<p>&nbsp;</p>
						<h5>Thanks and Regards</h5>
						<h5>Indiadonates team</h5>



					</td>
				</tr>
			</table>
			</div>

		</td>
		<td></td>
	</tr>
</table><!-- /BODY -->

</body>
</html>';
 $ngo_headers = 'From: Indiadonates <no-reply@indiadonates.com>' . "\r\n";
          wp_mail( 'ajayit2020@gmail.com', "Welcome to IndiaDonates.in, Activate your account now!", $massage , $ngo_headers);

		  
		  ?>

