<?php 
$main = $_GET['page'];
if (isset($main)) {
  include_once $main.'.php';
}else{
  include_once 'home.php';
}
?>