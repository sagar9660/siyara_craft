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
  <div class="container" >

       <nav class="style-1"  >
    <a href="/" class="btn">Home</a>
    <a href="about" class="btn">About</a>
    <a href="collection" class="btn">Collection</a>
    <a href="contact" class="btn">Contact</a>
    <a href="/login" class="btn">Login/Register</a>
  </nav>
</div></center>
</div>

<br><br>



<form method="post" action="post_submit" enctype="multipart/form-data">
@csrf
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Upload </h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name">Full name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email" placeholder="example@email.com" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Title</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="title" required>
                                </div>
                            </div>
                        </div>
                       <div class="form-row">
                           <div class="name"> Category</div>
                           <div class="value">
                             <div class="input-group">
                                    <select class="custom-select my-1 mr-sm-2" name="category" id="inlineFormCustomSelectPref" required>
                                                    <option selected >Choose..</option>
                                                     <option>Paintings</option>
                                                    <option>Drawings</option>
                                                        <option>Craft</option>
                                                        <option>Origami</option>
                                                        <option>Other</option>
                                                      </select>
                                                  </div>
                                              </div>
                       </div>
                        <div class="form-row">
                            <div class="name">Upload Images</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <!-- <input class="input-file" type="file" name="file" id="file"> -->
                                    <input type="file" id="myFile" name="image" style="margin-top: 12px;" required>
                                    <!-- <label class="label--file" for="file">Choose file</label> -->
                                    <!-- <span class="input-file__info">No file chosen</span> -->
                                </div>
                                <div class="label--desc">Upload your work</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="input--style-6" type="text" cols="5" rows="7"  name="description" required></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit" name="upload">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>




<br><
<section>
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
</section>

