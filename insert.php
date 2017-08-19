<?php
/**
 * Created by PhpStorm.
 * User: mna
 * Date: 03/07/17
 * Time: 11:44 PM
 */
//==========================================
/**


*/
//==========================================

//Adding db connection

include('dbconnect.php');

$title = $_POST['btitle'];
$price = $_POST['bprice'];

//create query

$query = "INSERT INTO bookshop(book_title, book_price) VALUES('$title', '$price') ";

if (mysqli_query($con, $query)){
    header("location:index.php");
}else{
     echo "Error in query".die(mysqli_error($con));
}

mysqli_close($con);

