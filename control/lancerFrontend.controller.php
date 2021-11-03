<?php
/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 02/11/2021
 * Time: 18:17
 */
try{
    include "../view/index.php";
}catch (Exception $ex){
    echo "Message => ".$ex->getMessage();
}