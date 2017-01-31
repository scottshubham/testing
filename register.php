<?php
/**
 * Created by PhpStorm.
 * User: scottshubham
 * Date: 30/1/17
 * Time: 9:46 AM
 */
$name = $_POST['name'];
$em = $_POST['em'];
$pw = $_POST['pw'];
$id = "Guest";
echo(empty($name));
echo ("hello".$name);
function redirect()
{
    echo("Error! Please wait while redirecting");
    header("Location: error.html");
    exit;
}

function proceed($id)
{
    header("Location: registered.php?id=$id");
    exit;
}

if ($em == "hello@123") {
    if ($pw == "Ok") {
        if (empty($name)) {
            $id = substr($em,0,strpos($em,"@"));
        } else {
            $id = $name;
        }
        proceed($id);
    } else {
        redirect();
    }
} else {
    redirect();
}