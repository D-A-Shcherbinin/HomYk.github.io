<?php
/*================ Database connection...=====================*/
$cn = mysqli_connect("localhost", "root", "root", "db_blogsite");


/*================ Function for insert secuirty...=============*/
function ms($value)
{
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	global $cn;
	return mysqli_real_escape_string($cn, $value);
}
?>