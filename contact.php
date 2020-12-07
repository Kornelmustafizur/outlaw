<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bootstrap Theme Company</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">

</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="#">OUTLAW</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              
              <li><a href="home.html">HOME</a></li>
              <li><a href="login.php">LOGIN</a></li>
              <li><a href="register.php">REGISTER</a></li>
         
            </ul>
          </div>
        </div>
      </nav>

      
<div class="container-fluid bg-grey">
    <h2 class="text-center">CONTACT</h2>
    <div class="row">
      <div class="col-sm-5">
        <p>Contact us and we'll get back to you within 24 hours.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> House#10 (1st Floor) Road#8,<br>Section-06,Mirpur<br>Dhaka-1216</p>
        <p><span class="glyphicon glyphicon-phone"></span>zxzxxz31 , zxcxzczxcxzc9</p>
        <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p> 
      </div>

      <div class="col-sm-7">

      <form action="insert.php " method="post">
        
            <input  name="name" placeholder="Name" type="text" required>
          
          
            <input  name="email" placeholder="Email" type="email" required>
          
        <textarea  name="comments" placeholder="Comment" rows="5"></textarea><br>
        
          
            <button class="btn btn-default pull-right" type="submit">Send</button>
          </form>
  </div>

  
<!-- Add Google Maps -->
<div id="googleMap">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.0863764632313!2d90.36519017714264!3d23.8124552569496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1286f01d0b5%3A0xa8fdf0d15975fdd1!2sRd+No.+8%2C+Dhaka+1216!5e0!3m2!1sen!2sbd!4v1516389712444" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
       
</div>

</body>

<footer>
    <div class="row">
      <div class="col-sm-12 text-center" style="background:#F7610A; color:white;">
        <p>© 2019 OUTLAW. ALL RIGHTS RESERVED</p>
      </div>
    </div>
  </footer>
  
</html>