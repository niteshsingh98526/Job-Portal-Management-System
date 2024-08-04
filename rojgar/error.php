<?php
//error handler function
function customError($errno, $errstr, $errfile, $errline) {
echo "<h2>OOPS!!</h2>";
echo "<p>Errors have occured while executing this page. Contact the <a
href='mailto:admin@iiitdmj.ac.in'>Administrator</a>
to report it.</p><hr/>";
echo "<b>Error Type</b>: $errno<br/>"; 
echo "<b>Error Message</b>: $errstr<br/>"; 
echo "<b>File Name</b>: $errfile<br/>";
echo "<b>Line Number</b>: $errline<br/>"; }
//set error handler 
set_error_handler("customError");
//trigger error 
echo($test); ?>