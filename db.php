<?php
/**
 * Created by PhpStorm.
 * User: rofi
 * Date: 4/4/19
 * Time: 7:25 PM
 */

error_reporting(0);
$conn = new mysqli("localhost", "root", "", "book-db");


if($conn->connect_error)
{
   die( "Connection Error [" . $conn->connect_errno . "] " . $conn->connect_error );
}