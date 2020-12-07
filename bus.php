
<!DOCTYPE html>
<html lang="en">
<head>

  <title>BUS BOOKING</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">

</head>


<body>


<br>
<br>
<br>
<br>
<br>
<br>
<br>

<table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">BUS ID</th>
        <th scope="col">Company</th>
        <th scope="col">MODEL</th>
        <th scope="col">FROM</th>
        <th scope="col">TO</th>
        <th scope="col">COST</th>
      </tr>
    </thead>

    <?php
if (isset($_POST['submit'])){
  
  $conn=  mysqli_connect('localhost', 'root', '','cse482');

  if($conn){
    echo"";
  }
  else{
    die("connection failed");
  }


$from= $_POST['from'];
$to= $_POST['to'];
$DOJ= $_POST['DOJ'];
$DOT= $_POST['DOT'];

if($from){
$show="SELECT * FROM bus where fromm='$from' and too='$to' ";
$result=mysqli_query($conn,$show);
while($rows=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>";
    echo $rows['id'];
    echo "</td>";
    echo "<td>";
    echo $rows['company'];
    echo "</td>";
    echo "<td>";
    echo $rows['fromm'];
    echo "</td>";
    echo "<td>";
    echo $rows['too'];
    echo "</td>";
    echo "<td>";
    echo $rows['model'];
    echo "</td>";
    echo "<td>";
    echo $rows['cost'];
    echo "</td>";
    echo "</tr>";
    
}
}

}

?>

    
  </table>
  </br>
			</br>
			</br>
			
  <div class="container-fluid ">  

            <div class="container">
            <form action="bus.php " method="post">   

                    <div class="col-sm-2 ">
                            <p>BUS ID</p>
                          </div>    
                    <div class="col-sm-2">
                      <input class="form-control" id="" name="bus_id" placeholder="" type="" required>
</div>
<input type="submit" class="btn btn-success" name="submit2" value="submit">
</form>
</div>

            
            <?php
if (isset($_POST['submit2'])){
  
  $conn2=  mysqli_connect('localhost', 'root', '','cse482');

  if($conn2){
    echo"";
  }
  else{
    die("connection failed");
  }

  $set=$_POST['bus_id'];
  if($set){
    $dis="SELECT * FROM bus where id='$set' ";
    $result2=mysqli_query($conn2,$dis);
    while($row=mysqli_fetch_array($result2)){
      $q= $row['company'];
      $w= $row['fromm'];
      $e= $row['too'];
      $r= $row['model'];
      $t= $row['cost'];
  }

}
}

?>

  


			
</body>

</html>