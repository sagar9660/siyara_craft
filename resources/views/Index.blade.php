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
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-grid.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pos.css')}}">
<!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="pos.css"> -->
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
      <!-- <a href="/logout" class="btn">Logout</a> -->

      @if(session()->has('loginId')!=null)
      <a href="/logout" class="btn">Logout</a>
      @else
      @endif

 </nav>

<div class="bg-img">
  <div class="container">

       <nav class="style-1">
    <center><a href="/" class="btn">Home</a>
		<a href="about" class="btn">About</a>
		<a href="collection" class="btn">Collection</a>
		<a href="contact" class="btn">Contact</a>
    @if(session()->has('loginId')!=null)
    @else
		<a href="/login" class="btn">Login/Register</a></center>
    @endif
	 <div class="text-block">
     <h1 >Welcome to Siyara Craft</h1>
      </div>
       <div class="text-bl">
    <h3>Collection of ART</h3>
      </div>
		
	</nav>
  </div>
</div>

 


 
<br>
   <h2 style="text-align: center;" class = "bn"> Gallery </h2>
<ul class="gallery" role="list">
  <li class="border">
    <figure >
      <img alt="" src="https://i0.wp.com/stepbysteppainting.net/wp-content/uploads/2018/06/img_7809-e1534447426444.jpg?fit=231%2C300&ssl="/>
      <figcaption>Title <br>
      Created By </figcaption>
    </figure>
  </li>
  <li class="border">
    <figure >
      <img alt="" src="https://i.pinimg.com/736x/08/1a/1e/081a1ee2e7ab733074b3ab785a9fc59c.jpg" />
      <figcaption>Title <br>
      Created By </figcaption>
    </figure>
  </li>
  <li class="border">
    <figure>
      <img alt="" src="https://i.pinimg.com/originals/60/6e/bb/606ebbc439f8191df82c058ba534010a.jpg" />
      <figcaption>Title <br>
      Created By</figcaption>
    </figure>
  </li>
  <li class="border">
    <figure>
      <img alt="" src="https://i.pinimg.com/originals/40/29/e6/4029e60b6cd7eaabe846dde2acd6c6f9.jpg" />
      <figcaption>Title <br>
      Created By</figcaption>
    </figure>
  </li>
  <li class="border">
    <figure>
      <img alt="" src="https://i.pinimg.com/474x/e7/0d/c3/e70dc37e357f51daa165550c69cf8fec.jpg" />
      <figcaption>Title <br>
      Created By</figcaption>
    </figure>
  </li>
  <li class="border">
    <figure>
      <img alt="" src="https://i.pinimg.com/736x/8a/92/99/8a9299ad6930c0a5f3ddb1bd9d36fade.jpg" />
      <figcaption>Title <br>
      Created By</figcaption>
    </figure>
  </li>
  <li class="border">
    <figure>
      <img alt="" src="https://i1.wp.com/www.differencebetween.com/wp-content/uploads/2015/06/412px-Drawing_of_a_rabbit_by_Matt_Sissel.jpg?resize=551%2C801&ssl=1" />
      <figcaption>Title <br>
      Created By</figcaption>
    </figure>
  </li>
  <li class="border">
    <figure>
      <img alt="" src="https://i.pinimg.com/736x/50/6b/b9/506bb9a66fa4512781647e317f17c1f8.jpg" />
      <figcaption>Title <br>
      Created By</figcaption>
    </figure>
  </li>

  @foreach ($posts as $post)
  <li class="border" style="padding-top: 50px;">
    <figure>
        <img src="{{ asset('storage/images/'. $post->imgname )}}">
        <figcaption>{{ $post->title }} <br>
          Created By {{ $post->name }}</figcaption>
        </figure>
      </li>
      @endforeach
</ul>

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



</body>
</html>                            
