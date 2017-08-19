<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/bootstrap.css" type="text/css" >
    <script src="assets/jquery.js"></script>
    <title> Welcome | Bookstore </title>
</head>
<body class="bg-info">
<?php 

    include('dbconnect.php');

    /*

    */
    $query = "SELECT * FROM bookshop";

    $result = mysqli_query($con, $query);
?>

<div class="container" style="padding-top: 20px; padding-bottom: 20px;">
    <h1>IUEA Bookshop</h1>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h3>Enter new Book Title and Price</h3>
            <hr>
            <form role=" form" action="insert.php" method="post">
                <div class="form-group">
                    <label for="">Book Title</label>
                    <input type="text" name="btitle" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Book Price</label>
                    <input type="text" name="bprice" class="form-control">
                </div>
                <button type="submit" class="form-control btn btn-primary">Add Books</button>
            </form>
        </div>
        <div class="col-sm-8">
            <h3>Display information from the database</h3>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th>Book Title</th>
                        <th>Book Price</th>
                        <th>Crud Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                
                while ($row = mysqli_fetch_assoc($result)){


                ?>


                <tr>
                    <td><?php echo $row['book_title']; ?></td>
                    <td><?php echo $row['book_price']; ?></td>
                    <td>
                        <a href="editform.php" class="btn btn-success" role="button">Edit Book</a>
                        <a href="#" class="btn btn-danger" role="button">Delete Book</a>
                    </td>
                </tr>
                </tbody>

                <?php
                }

                mysqli_close($con);
                ?>
            </table>
        </div>
    </div>
</div>

</body>
</html>