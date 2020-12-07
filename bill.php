<?php
$x=$_POST['asd'];
echo $x;

?>

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

<nav class="navbar navbar-inverse navbar-fixed-top">

  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">BUS BOOKING</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.html">HOME</a></li>
        <li><a href="bus.html">BUS</a></li>
        <li><a href="index.html">LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>

</br>
</br>
</br>
</br>



<div class="container">
 <center> <h1>BILL INFORMATION </h1></center>
</br>
</br>
  <div class="form-group">
    <label><b>BILL ID</b></label>
    <input type="text" placeholder="" name="" required>

    <label><b>BUS NAME</b></label>
    <input type="text" placeholder="" name="" required>
    </div>

    <div class="form-group">
      <label ><b> Date</b></label>
      <input type="text" placeholder="" name="" required>
      <label ><b>(DD/MM/YY)</b></label>
      </div>

    
      <div class="form-group">
        <label><b>PRICE</b></label>
        <input type="text" placeholder="" name="" required>
        
        </div>

        <div class="form-group">
          <label ><b>PASSENGER NAME</b></label>
          <input type="text" placeholder="" name="" required>
      
          <label ><b>ADDRESS</b></label>
          <input type="text" placeholder="" name="" required>
          </div>


          <div class="form-group">
            <label ><b>FROM</b></label>
            <input type="text" placeholder="" name="email" required>
        
            <label ><b>TO</b></label>
            <input type="text" placeholder="" name="" required>
            </div>
			<br>
			<input type="submit" class="btn btn-success" name="submit" value="PRINT">
</div>





    <div class="container-fluid">
	<br>
	<br>
	
	<h1> PREVIOUS INFORMATION </h1>

        </br>
    </br>
</br>
        <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th>Bill ID</th>
                    <th>Date</th>
                    <th></th>
                    
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" class="btn btn-success" name="submit" value="PRINT"></td>
                    
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" class="btn btn-success" name="submit" value="PRINT"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" class="btn btn-success" name="submit" value="PRINT"></td>
                  </tr>
                </tbody>
              </table>


              
      
     </div>
   

</body>

</html>