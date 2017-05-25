<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'http://www.lamas-et-promenades-66.fr/',
	'homepage_url' => 'http://www.lamas-et-promenades-66.fr/index.html',
	'public_folder' => '',
	'salt' => '3p16mf63j9q22l96qv7mg40ou1qi033i72xlm918xukryz98rzvhcw36yth5f4',
	'use_common_email_sender_address' => false,
	'common_email_sender_addres' => ''
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();
/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(
);

/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 v12 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#FFEFBF" style="background-color: #FFEFBF;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailHeader" style="text-align: center; width: 700px;border-top-style: solid; border-top-color: #808080; border-top-width: 1px; border-left-style: solid; border-left-color: #808080; border-left-width: 1px; border-right-style: solid; border-right-color: #808080; border-right-width: 1px; border-bottom-style: none; border-bottom-color: transparent; border-bottom-width: 0px; border-bottom: none; background-color: #E0E0E0;" width="700px"><img src="http://www.lamas-et-promenades-66.fr/images/banniere--699-108.jpg" style="width: 699px; border: none;" width="699px"></td></tr>' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 11pt \'Calibri\'; color: #000000; background-color: #E0E0E0; text-align: left; text-decoration: none;  width: 700px;border-style: solid; border-color: #808080; border-top-width: 0px; border-top: none; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px;background-color: #E0E0E0" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 7pt \'Tahoma\'; color: #FFFFFF; background-color: transparent; text-align: center; text-decoration: none;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'Ce courriel fournit des informations destinées uniquement au destinataire susmentionné.<br>Si vous n\'êtes par le destinataire de ce message, veuillez le signaler immédiatement à l\'expéditeur et le détruire, sans le copier.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#E0E0E0';
$ImMailer->bodyBackgroundEven = '#E0E0E0';
$ImMailer->bodyBackgroundOdd = '#D1D1D1';
$ImMailer->bodyBackgroundBorder = '#AEAEAE';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#FFEFBF';
$ImMailer->emailContentStyle = 'font: normal normal normal 11pt \'Calibri\'; color: #000000; background-color: #E0E0E0; text-align: left; text-decoration: none; ';
$ImMailer->emailContentFontFamily = 'font-family: Calibri;';
ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label>Code de sécurité :</label><br />
			<input type=\"text\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";

// End of file x5settings.php