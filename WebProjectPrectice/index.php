<?php 

//isset it check whether the variable is exist inside set or not
//and it return true if it's yes and false

$page=isset($_GET['p']) ? $_GET['p']:'home';


include "./view/_header.php" ;
include "./pages/{$page}.php";
include "./view/_footer.php";

