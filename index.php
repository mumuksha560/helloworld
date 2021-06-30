<?php 

include('db_connect.php');

$sql = "SELECT * FROM profile WHERE id='1'";
$result = mysqli_query($conn, $sql);
$name = mysqli_fetch_assoc($result);
mysqli_free_result($result); 
mysqli_close($conn);

?>
<html>
<?php 

include('db_connect.php');

$sql = "SELECT * FROM profile WHERE id='1'";
$result = mysqli_query($conn, $sql);
$name = mysqli_fetch_assoc($result);
mysqli_free_result($result); 
mysqli_close($conn);

?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Hello World</title>
    </head>
    <body>
         <div>
              <span>Hello from <?php echo $name["profile_name"]; ?>!</span>
         </div>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script type="text/javascript" src='script.js'></script>
    </body>
</html>




