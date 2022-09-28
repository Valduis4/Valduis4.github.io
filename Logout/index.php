<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
$URL_REF = $_SERVER['HTTP_REFERER'];
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
if(isset($URL_REF)){
    echo '<script type="text/javascript">window.location = "'.$URL_REF.'"</script>';
}else{
    echo '<script type="text/javascript">window.location = "/Login"</script>';
}
exit;
?>