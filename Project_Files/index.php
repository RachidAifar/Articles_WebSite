<?php 

//isset it check whether the variable is exist inside set or not
//and it return true if it's yes and false if it's not
include_once "./view/functions.php";
$page=isset($_GET['p']) ? $_GET['p']:'home';


//if this function it's already included on other place
                             //it will not include again 
                            //so it make sure it doesn't include multiple times

dump($_GET);
include_once "./view/_header.php" ;
if(file_exists("./pages/{$page}.php")){
    include "./pages/{$page}.php";
}else{
    include './pages/404.php';
}

include_once "./view/_footer.php";

