<?php
include_once "../base.php";

$News=new DB("news");
$Log=new DB("log");

$id=$_POST['id'];
$type=$_POST['type'];
$user=$_POST['user'];

switch($type){
    case 1:
        $Log->save(['news'=>$id,'user'=>$user]);
    break;
    case 2:
        $Log->del(['news'=>$id,'user'=>$user]);

    break;
    
}



?>