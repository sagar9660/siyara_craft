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
 </nav>
<center>
<div class="container">
       <nav class="style-1">
    <a href="/" class="btn">Home</a>
    <a href="about" class="btn">About</a>
    <a href="collection" class="btn">Collection</a>
    <a href="contact" class="btn">Contact</a>

  </nav>
</div> </center>




 <section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img
                src="https://i.pinimg.com/736x/e4/a1/49/e4a1493d5fba6c94406ee350c6a4ecc9--childrens-museum-performing-arts.jpg"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem; object-fit: cover;object-position: right;height: 600px;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="post" action="login_submit">
                  @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                  @csrf

                  <div class="d-flex align-items-center mb-3 pb-1">
                    
                    <span class="h1 fw-bold mb-0">Siyara Craft </span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="email" name="email" value="{{old('email')}}" class="form-control form-control-lg" />
                    <div><span class="text-danger">@error('email') {{$message}} @enderror</span></div>
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" value="{{old('password')}}" class="form-control form-control-lg" />
                    <div><span class="text-danger">@error('password') {{$message}} @enderror</span></div>
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register" style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>