<?php
/**
 * Created by PhpStorm.
 * User: Gihan
 * Date: 2016-05-10
 * Time: PM 10.05
 */

//get data from database
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'upload';

$connection = mysqli_connect($host, $user, $password, $db);
$sql = 'SELECT * FROM data';
$result = mysqli_query($connection, $sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
while ($row = mysqli_fetch_assoc($result)) {
    ?>
  <!--this is database image path -->
    <h4><?php echo $row['img_path'] ?></h4>
   <?php //get database image path and pass it into image src ?>
    <img src="<?php echo $row['img_path'] ?>" width="500" height="400"/>
    <hr>
    <?php
}
?>
</body>
</html>
