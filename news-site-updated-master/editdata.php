<?php
	session_start();
	 $id = $_SESSION['id']; 
	
/**
 * Created by PhpStorm.
 * User: mdsae
 * Date: 11-Jun-18
 * Time: 9:37 PM
 */

require 'config.php';

$head=$_POST['heading1'];
$data=$_POST['newsbody1'];
$statement="UPDATE test SET heading='$head' ,summertext = '$data' where id='$id'";
 session_destroy();
if(mysqli_query($conn,$statement))
{
    header('location:home.php');
}
else
    mysqli_error($conn);

mysqli_close($conn);