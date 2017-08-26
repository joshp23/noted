<?php

$APP_PATH = "/path/to/your/notes/";
/* select one of the following bootswatch themes:
*  preview at https://bootswatch.com/
*
* 		"cerulean"
* 		"cosmo"
* 		"cyborg"
* 		"darkly"
* 		"flatly"
* 		"journal"
* 		"lumen" 	*
* 		"paper"
* 		"readable" 	*
* 		"sandstone"
* 		"simplex"
* 		"slate" 	*
* 		"solar"
* 		"spacelab" 	*
* 		"superhero"
* 		"united" 	*
* 		"yeti" 		*
* 
*/
$THEME = "lumen";

$require_auth = false;
// If the above is set to true, set the following values
// Enter login/password pairs. 
// Alternatively, set single terms for password only auth.
$LOGIN_INFORMATION = array(
  'username' => 'password'
);

// Set to false for password only auth.
define('USE_USERNAME', true);

// User will be redirected to this page after logout
define('LOGOUT_URL', 'http:example.com/');

// Time out after NN minutes of inactivity. Set to 0 to ignore timeout.
define('TIMEOUT_MINUTES', 30);

// If TIMEOUT_MINUTES is not zero:
// Set to true to record timeout time from last activity, false from login.
define('TIMEOUT_CHECK_ACTIVITY', true);

?>
