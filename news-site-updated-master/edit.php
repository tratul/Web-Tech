<!DOCTYPE html>
<?php
 session_start();
 $id = $_GET['id'];
 $_SESSION['id']=$id;
 ?>
<html lang="en">
<head>
    <title>News Site</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="summernote.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="summernote.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">News Site</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="viewdata.php">view Data</a></li>
            <li><a href="listdata.php">List Data</a></li>
            <li><a href="#">category 3</a></li>
        </ul>
    </div>
</nav>
<div class="container">
   <!-- <center><h1> <span class="label label-default">Summernote data formatter</span></h1></center>-->
    <form name="summernote" method="post" action="editdata.php">
		News Headline:<br/><input type="text" class="form-control" name="heading1"  value= "<?php 
            require 'config.php';

            $statement="select * from test where id='$id'";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo $row['heading'];
                }
            }
            else
            {
                echo " ";
            }
            mysqli_close($conn);
        ?>" /><br/>
        News Body:<br/><textarea name="newsbody1" id="summernote" class="summernote" >
		<?php 
            require 'config.php';

            $statement="select * from test where id='$id'";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo $row['summertext'];
                }
            }
            else
            {
                echo " ";
            }
            mysqli_close($conn);
        ?>
		</textarea><br/>
        <input type="submit" class="btn btn-success" value="Save News"/>
    </form>
</div>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
</body>
</html>