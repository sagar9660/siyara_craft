<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Siyara Craft</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href={{asset('css/style.css')}}>
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-grid.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pos.css')}}">
</head> 

<body>
<!--header-->
    <div id = "wrapper">
	
  		<nav class="navbar navbar-expand-lg navbar-light">   

      <a href="#" class="nav-item nav-link"><img src="https://cdn.pixabay.com/photo/2015/05/17/10/51/facebook-770688_960_720.png" alt=""></a>
			<a href="#" class="nav-item nav-link"><img src="https://cdn.pixabay.com/photo/2015/03/10/17/30/twitter-667462_960_720.png" alt=""></a>
			<a href="#" class="nav-item nav-link"><img src="https://cdn.pixabay.com/photo/2016/09/17/07/03/instagram-1675670_960_720.png" alt=""></a>
			<a href="#" class="nav-item nav-link"><img src="https://cdn.pixabay.com/photo/2015/07/16/07/16/icons-847279_960_720.png" alt=""></a>
  		    
			<!-- <a href="#" class="nav-item nav-link"><i class="fa fa-facebook"></i></a>
			<a href="#" class="nav-item nav-link"><i class="fa fa-twitter"></i></a>
			<a href="#" class="nav-item nav-link"><i class="fa fa-instagram"></i></a>
			<a href="#" class="nav-item nav-link"><i class="fa fa-pinterest-p"></i></a> -->
			<a  class="navbar-brand" href="#">Siyara Craft </a>
			<a  class="dec"> xxxxxxxxx</a>
      <a href="/logout" class="btn">Logout</a>
 </nav>

<center>
  <div class="container">

       <nav class="style-1">
		<a href="/" class="btn">Home</a>
		<a href="about" class="btn">About</a>
		<a href="collection" class="btn">Collection</a>
		<a href="contact" class="btn">Contact</a>
		<a href="/login" class="btn">Login/Register</a>
	</nav>
</div></center>
</div>

<form method="post" action="contact_submit">
  @csrf
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name :</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Email :</label>
    <input type="email" class="form-control" id="pwd" placeholder="Enter password" name="email" required>
  </div>
  <div class="mb-3 mt-3">
 <label for="comment">Comments:</label>
<textarea class="form-control" rows="5" id="comment" name="comments" required></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<div class="footer">
	  <div class="inner-footer">

    <div class="footer-items">
      <h1>Siyara Craft</h1>
      <p>Description of any product or motto of the company.</p>
    </div>
<!--  for quick links  -->
    <div class="footer-items">
      <h3>Quick Links</h3>
      <div class="border1"></div> <!--for the underline -->
        <ul>
          <a href="/"><li>Home</li></a>
          <a href="collection"><li>Collection</li></a>
          <a href="contact"><li>Contact</li></a>
          <a href="about"><li>About</li></a>
        </ul>
    </div>
<!--  for some other links -->

<!--  for contact us info -->
    <div class="footer-items">
      <h3>Contact us</h3>
      <div class="border1"></div>
        <ul>
          <li><i class="fa fa-map-marker" aria-hidden="true"></i>XYZ, abc</li>
          <li><i class="fa fa-phone" aria-hidden="true"></i>123456789</li>
          <li><i class="fa fa-envelope" aria-hidden="true"></i>xyz@gmail.com</li>
        </ul> 
    </div>
      
<!--   for social links -->
        <div class="social-media">
          <a href="#" ><i class="fa fa-facebook"></i></a>
			<a href="#" ><i class="fa fa-twitter"></i></a>
			<a href="#" ><i class="fa fa-instagram"></i></a>
			<a href="#" ><i class="fa fa-pinterest-p"></i></a>
        </div> 
    
  <!--   Footer Bottom start  -->
  <div class="footer-bottom">
    Copyright &copy; Siyara Craft 2022.
  </div>

 </div>
</div>
