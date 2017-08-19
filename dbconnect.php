<?php
/**
 * Created by PhpStorm.
 * User: mna
 * Date: 03/07/17
 * Time: 9:20 PM
 */
//=======================================================
    /**This is a project developed mainly for php crud
    Application and it can be used by anyone willing
    To learn and further their knowledge in php at
    The INTERNATIONAL UNIVERSITY OF EAST AFRICA mostly
    Those in the faculty of science and technology */
//========================================================
// Defining database connections and user variables

    $host = 'localhost';
    $user = 'root';
    $password = '123';
    $dbname = 'bookstore';

// Db connections

    $con = mysqli_connect($host, $user, $password, $dbname);

// Testing connection to the database
    if (!$con){
        die("error in connection");
    }else{
        header("Location:index.php");
    }

