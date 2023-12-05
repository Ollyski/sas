<?php
if ($_SERVER['SERVER_NAME'] == 'localhost') {
  define("DB_SERVER", 'localhost');
  define("DB_USER", 'sally');
  define("DB_PASS", 'password');
  define("DB_NAME", 'salamanders');
}
else
{
define("DB_SERVER", 'localhost');
define("DB_USER", 'ollyskic_web182');
define("DB_PASS", 'web182');
define("DB_NAME", 'salamanders');
}

?>