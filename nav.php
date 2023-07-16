<html>
<head>
<title>Dr. Chuck's Home Page</title>
<style TYPE="text/css">
<!--
A:link, A:visited, A:active {text-decoration: none; font-weight: bold}
A:hover { color:orange }
P {font-size: 11pt; font-family: Arial,Helvetica,Verdana,Sans-Serif}
.contents {color: black; font-size: 11pt; margin-top: 2px; margin-bottom: 0px; font-family: Arial,Helvetica,Verdana,Sans-Serif}
.menu {color: white; font-size: 10pt; margin-top: 2pt; margin-bottom: 2pt; margin-left: 2pt; margin-right: 2pt; font-family: Arial,Helvetica,Verdana,Sans-Serif}
-->
</style>
</head>
<?php

echo '<?xml version="1.0" ?>'."\r\n";
$chuckum='http://www-personal.umich.edu/~csev/media/';

$tcilocal = 'http://www.dr-chuck.com/tci/';

include('/kunden/homepages/17/d88943663/htdocs//dev/resolve.php');

$chuckhome = resolve("chuck-http");
if ( $chuckhome == null ) {
  $chuckhome = $chuckum;
  } else {
    $chuckhome = "http://".$chuckhome;
  }

?>
<body BGCOLOR="#888888" LINK="#112222" VLINK="#112222" ALINK="#112222">
<font face="Arial">
&nbsp;Links<br>
&nbsp;<br>
&nbsp;&nbsp;<a href=index.htm target=_top>Home</a><br>
&nbsp;&nbsp;<a href=about.htm target=content>About</a><br>
&nbsp;&nbsp;<a href=alpha/index.htm target=content>Download</a><br>
&nbsp;&nbsp;<a href=http://www-personal.umich.edu/~csev/syncomat/onlinehelp/index.htm target=content>Help</a><br>
&nbsp;&nbsp;<a href=support.htm target=content>Support</a><br>
&nbsp;&nbsp;<a href=faq.htm target=content>FAQ</a><br>
&nbsp;&nbsp;<a href=gallery.htm target=content>Gallery</a><br>
&nbsp;&nbsp;<a href=http://www.netfact.com//syncomat/lectures/index.htm target=content>Web Lectures</a><br>

&nbsp;&nbsp;<a href=signup.htm target=content>Register</a><br>
&nbsp;&nbsp;<a href=src/index.htm target=content>Source</a><br>
</font>
&nbsp;
<center>
&nbsp;
<br>
&nbsp;
<br>
<a href="http://www.1and1.com/?k_id=6530295" target="_new"><img src="http://1and1.org/banners/1and1_120x60_D1.gif" width="120" height="60"  border="0"/></a>
<br>
&nbsp;
<br>
&nbsp;
<br>
<a href=http://www.real.com/player/ target="_new"><img src=rp7_button.gif border=0 alt='RealPlayer'></a><br>
&nbsp;
<br>
</center>
