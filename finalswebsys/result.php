<?php
if(!isset($_SESSION))
{
    session_start();
}
if(isset($_SESSION['UserLogin']))
{
    echo "Welcome " . $_SESSION['UserLogin'];
}else{
    echo "Welcome Guest"; 
}





include_once("DbaseConnection/connection.php");
$conn=dbconnect();
$search = $_GET['search'];

$sql = "SELECT * From tblemployee where first_name like '%$search%' || last_name like '%$search%' order by id";

//$sql = "Select * from mock_data limit 4 offset 3";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//print_r($row);
//do{
//    echo $row['first_name']. " " . $row['last_name'] . "<br>";
//}while($row = $result->fetch_assoc());


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="icon" href="logo.png" type="image/ico">

</head>
<style>
@media print {
  * {
    display: none;
  }
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

.active {
  background-color: #04AA6D;
}

.buttonclick{
display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  
}
input[type=text] {
  padding: 5px;
  margin-top: 10px;
  font-size: 17px;
  border: none;
  float: right;
}
.btnsearch{
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  float: right;

}
.btnsearch:hover {background-color: orange}


</style>
<body>
<br>
<ul> 
<li> 
 

<?php
    if(isset($_SESSION['UserLogin']))
    { ?>
         <button><a href="logout.php">Logout</a>
        <?php }else{?></button>
        <button> <a href="login.php">Login</a>
        <?php } ?></button></li>

  <li><button><a href="add.php">Add new</a></button></li>

  <li><button><a href="export_excel.php">Save as Excel</a></button></li>

  <li><button class ="buttonclick" onclick="printDiv()">Print</button></li>

  
  <li style="float:right"><form action = "result.php" method = "get">
        <button class = "btnsearch" type = "submit">Search</button></li>

        <li style="float:right"><input type = "text" name = "search"></li>

    </form></li>

</ul>
    <br>
    <br>
    
    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>

 

    <div class = "table" id ="table">
    <table>
        <thread>
            <tr>
                <th></th>
                <th>ID</th> 
                <th>First Name</th>
                <th>Last Name</th> 
                
            </tr>
        </thread>
        <tbody>
            <?php do{  ?>
                <tr>
                    <td> <a href ="details.php?ID=<?php echo $row['id'] ?>">view</a></td> 
                     <td> <?php echo $row ['id'];?> </td>
                    <td> <?php echo $row ['first_name'];?> </td>
                     <td> <?php echo $row ['last_name'];?> </td>
                </tr>
                <?php } while($row = $result->fetch_assoc()); ?>
        </tbody>
    </table>
            </div>
    <script>
   function printDiv() {
         window.frames["print_frame"].document.body.innerHTML = document.getElementById("table").innerHTML;
         window.frames["print_frame"].window.focus();
         window.frames["print_frame"].window.print();
       }
</script>
</body>
</html>