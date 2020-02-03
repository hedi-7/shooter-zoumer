<?php
/** Your applications unique ID from Facebook */
$appid = '489080732043801';
/** Your applications Facebook secret */
$appsecret = '52552e7e3590a3cb636a034f5501095d';

/** Facebook Canvas URL: */
$canvasPage = 'http://apps.facebook.com/shooter-zoumer/'; // This URL should end with a slash (/).
/** URL of the folder contaning the scripts. */
$canvasURL = 'https://quizee7.herokuapp.com/'; // This URL should end with a slash (/).
/** Name or title of your application */
$appname = 'shooter zoumer';

/** Name of the image file that will be displayed on wall posts, can be a jpg or png file */
$appimagename='hero.jpg';

/** Name of the web content to load (will be loaded from the canvasURL) */
$appcontent='content.html';
/** The width and height to set the iframe window for the content. */
$appcontentwidth='640';
$appcontentheight='480';
/** The following define the text that appears in the app for wall posts and invites. */
/** You can also use the codes {name}, {fname} and {title} which will be replaced with  */
/** the users name, first name or game title respectively. */

$invitecontent='Check out this great fun game - shooter zoumer - I think you will love it.';
$Genericdetail='Check it out now!';
$GenericTitle='{title}';
$GenericCaption='{fname} has been playing {title}';

error_reporting(0);
?>