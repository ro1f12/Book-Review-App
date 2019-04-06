<?php
/**
 * Created by PhpStorm.
 * User: rofi
 * Date: 4/4/19
 * Time: 6:59 PM
 */

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //database tasks
    //var_dump($_POST);

    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


    include_once '../db.php';

    var_dump($conn);



}
else{
    //header to form
    header('Location: ../login.php');
}