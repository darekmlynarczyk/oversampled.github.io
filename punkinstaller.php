<?php
/**
* @version $Id: punkinstaller.php 003 2006-05-15 10:32:18Z Lukas Rylik $
* @author: rybik(at)joomla(dot)pl
* @license: GNU/GPL - distribute it free
* WARNING: you are not allowed to remove any copyright notes in this file
* WARRANTY: There is no warranty, no error-handling
*/

DEFINE('_VALID_MOS','OK');

function extractArchive() {

	echo 'Server extension for ZIP compression -&nbsp;';
	if(extension_loaded('zlib')) 
		echo '<span style="color: green;">INSTALLED</span>';
	else {
		echo '<span style="color: red;">NOT INSTALLED</span>';
		return false;
		}
	echo '<br />Joomla! Installation package: <i>joomla.zip</i>-&nbsp;';
	if(file_exists('joomla.zip'))
		echo '<span style="color: green;">FOUND - OK</span>';
	else	{
		echo '<span style="color: red;">NOT FOUND !</span>';
		return false;
		}
	echo '<br />PCL library for zip compression: <i>pclzip.lib.php</i>-&nbsp;';
	if(file_exists('pclzip.lib.php')) { 
			echo '<span style="color: green;">FOUND - OK</span>';
			require_once('pclzip.lib.php'); 
	} else {
		echo '<span style="color: red;">NOT FOUND !</span>';
		return false;
		}


	$zipfile = new PclZip( 'joomla.zip' );
	$ret = $zipfile->extract( PCLZIP_OPT_PATH, '' );

	echo '<p style="color: green";>Your file was extracted SUCCESSFULY</p>';
	echo '<h4>Now you should delete the following files:</h4>
		<ul>
			<li>*joomla.zap</li>
			<li>pclzip.php</li>
			<li>pclerror.php</li>
			<li>readme_PI.txt</li>
			<li>punkinstaller.php</li>
		</ul>
		<p>Remember - that using this script again with a proper zip file will overwrite all Joomla! files !</p>';
if (file_exists('index.php'))	{
	echo '<p>Continue the Joomla! installation <a href="index.php" target="_parent">here</a></p>';
		$pi_uid = uniqid(8);
		if (rename('joomla.zip',$pi_uid.'joomla.zap'))
		echo '<p>File: <i>joomla.zip</i> renamed to <i>' . $pi_uid . 'joomla.zap</i> for security reasons.</p>';
		else 	echo '<span style="color: red;">WARNING !!! Something is damn wrong !</span>';
	}
else
	echo '<span style="color: red;">WARNING !!! Something is damn wrong !</span>';

	return true;
}


$punkcredits = '(c) rybik(at)joomla(dot).pl 2006';
$punkurl_pl = 'http://www.joomla.pl';
?>
<html>

<head>
<meta name="Name" content="Joomla Punkinstaller">
<meta name="author" content="rybik">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-2">
<title>Joomla Punkinstaller</title>
</head>

<body style="text-align: center; font-size: 85%; font-family : Verdana, Helvetica, sans-serif;">
<div style="width: 80%; margin-left: auto; margin-right: auto; border: 1px solid black; background: orange; padding: 5px;text-align: center;">
<h3>Joomla! Punkinstaller</h3>
<?php echo $punkcredits;?><br />
Polish Joomla! Center:&nbsp <a href="<?php echo $punkurl_pl;?>" target="_blank"><?php echo $punkurl_pl;?></a><br />
<br />
<?php extractarchive();?>
</div>
</body>

</html>