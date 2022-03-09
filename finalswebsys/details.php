<?php
error_reporting(0);
ini_set('display_errors', 0);
if(!isset($_SESSION))
{
    session_start();
}
if(isset($_SESSION['Access']) && $_SESSION['Access'] == "administrator")
{
  echo "Welcome " . $_SESSION['UserLogin'];
}else{
    echo header("Location:index.php");
}


include_once("DbaseConnection\connection.php");
$conn=dbconnect();
$id = $_GET['ID'];
$sql = "SELECT * from tblemployee where id = '$id' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link rel="stylesheet" href="CSS\style.css">
    <link rel="icon" href="logo.png" type="image/ico">

</head>
<style>
 @media print {
  * {
    display: none;
  }
}   
.details{

}

h2{
  background: rgba(243, 239, 239, 0.7);
  border-radius: 10px;
  color: black;
  text-align: center;
  padding: 20px;
  border-bottom: 1px solid;

} 
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  margin: 5px;
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  border-right: 1px solid #bbb;

}

li a:hover:not(.active) {
  background-color: orange;
}
.buttonclick{
display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  
}
.buttonclick:hover {background-color: orange}
</style>
<body>
    <h1>Employee Management System</h1>
    <br><br>
    <ul> 
    <li><button><a href = "index.php"><-Back</a></button></li>
    <li><button><a href = "edit.php?ID=<?php echo $row['id'];?>"> Edit </a></button></li>
    <li><button><a href = "delete.php?ID=<?php echo $row['id'];?>"> Delete </a></button></li>
    <li><button class ="buttonclick" onclick="printDiv()">Print</button></li>
    </ul> 
    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
    <div id = "details">
    <h2><?php echo $row ['id']; ?> </h2>
    <h2><?php echo $row ['first_name']; ?></h2>
    <h2><?php echo $row ['last_name']; ?></h2>
    <h2><?php echo $row ['email']?> </h2>
    <h2><?php echo $row ['gender']?> </h2>
    <h2><img src="Picture Storage\<?php echo $row['image']; ?>"  width="700" height="500"></td></h2>
</div>
    <script>
   function printDiv() {
         window.frames["print_frame"].document.body.innerHTML = document.getElementById("details").innerHTML;
         window.frames["print_frame"].window.focus();
         window.frames["print_frame"].window.print();
       }
</script>

</body>
</html>