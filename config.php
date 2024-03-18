<?php 
// session_start();

date_default_timezone_set("Asia/Calcutta");
$varAdminFolder = "manage";

// $_SESSION['lang'] = 'french';
define("DS", DIRECTORY_SEPARATOR);

define("PATH_ROOT", dirname(__FILE__));

define("PATH_LIB", PATH_ROOT . DS . "library" . DS);

define("URL_ROOT", "http://www.localhost/blog");

define("SELF", basename($_SERVER['PHP_SELF']));

define("DATE_FORMAT", "d/m/Y H:i:s");

define("ADMIN_TITLE", "Skycode IT Solutions");

define("COPY_RIGHT", "Copyright  2020 . Powered By SkyCode IT Solutions | All rights reserved .");

//define RegX expressions
define("REGX_MAIL", "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/");
define("REGX_URL", "/^(http(s)?\:\/\/(?:www\.)?[a-zA-Z0-9]+(?:(?:\-|_)[a-zA-Z0-9]+)*(?:\.[a-zA-Z0-9]+(?:(?:\-|_)[a-zA-Z0-9]+)*)*\.[a-zA-Z]{2,4}(?:\/)?)$/i");
define("REGX_PHONE", "/^[0-9\+][0-9\-\(\)\s]+[0-9]$/");
define("REGX_PRICE", "/^[0-9\.]+$/");
ini_set('post_max_size', '128M');
ini_set('upload_max_filesize', '128M');

require_once(PATH_LIB."validations.php");
require_once(PATH_LIB."class.database.php");

require_once(PATH_LIB."custom_functions.php");

// $base_url = constant('URL_ROOT');

$inputvalidation = new Validation();

//$db=new MySqlDb("localhost","u191917345_groena","b1:IOfY@[N&","u191917345_groena");
$db=new MySqlDb("localhost","root","","skycodeit_arena");
$conn = mysqli_connect("localhost", "root", "", "skycodeit_arena");


require_once(PATH_LIB."functions.php");

$pagename=basename($_SERVER['PHP_SELF']);
$base_url = constant('URL_ROOT');
    //Display Product Name with limited character
    //10-jan-2019
    function custom_character($x, $length)
    {
        if(strlen($x)<=$length)
        {
          return $x;
        }
        else
        {
          $y=substr($x,0,$length) . '...';
          return $y;
        }
    }

    //fucntion : time_elapsed_string()
    //Desc : Get Last time ago calculation.
    function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

?>
