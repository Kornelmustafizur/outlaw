

<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 5px ;
    box-sizing: border-box;
}
body {background-color:powderblue;}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.name {
  display: inline-block;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 5px;
}
</style>


<body>
 <div class="col">

<h1 style="color:green;">     Ticket Booking Form </h1>

<form action="bus.php" method="POST">
  
  <div class="col">
  
  
  
  <h3>From</h3>
   <div class="col"><input type="text" class = "form-control" placeholder = "Enter City" name="from"></div>

<h3>To</h3>
  <div class="col"><input type="text" class = "form-control" placeholder = "Enter City" name="to"></div>

  <h3>Date of Journey</h3>
   <div class="col"><input type="text" class = "form-control" placeholder = "Pick a date" name="DOJ"></div>

<h3>Date of Return</h3>
   <div class="col"><input type="text" class = "form-control" placeholder = "Pick a date" name="DOT"></div>
                                  
  
  
  <br><br>
  
      <br>
  <input type="Submit" value="Search Buses" name="submit">
</form> 

</body>
</html>
