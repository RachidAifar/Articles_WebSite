<?php 

session_start();
define('APP_VERSION','1.0.0');
//isset it check whether the variable is exist inside set or not
//and it return true if it's yes and false if it's not
require_once "./config.php";
require_once "./functions.php";



$db = db_connect();

$page=isset($_GET['p']) ? $_GET['p']:'home';

$errors=[];


//if this function it's already included on other place
                             //it will not include again 
                            //so it makes sure it doesn't include multiple times
                            
if(file_exists("./pages/{$page}.php")){
    include "./pages/{$page}.php";
}else{
    include './pages/404.php';
}
db_close($db);

 
