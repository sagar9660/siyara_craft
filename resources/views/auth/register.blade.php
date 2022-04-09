

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



<section style="background-color: #8FDCF4">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="post" action="register_submit" onsubmit="return validate()">
                @csrf

                
                <div class="form-outline mb-4">
                  <input type="text" name="user_name" id="form3Example1cg" value="{{old('user_name')}}" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example1cg">User Name</label>
                </div>

                  <div class="form-outline mb-4">
                  <input type="text" name="first_name" id="form3Example1cg" value="{{old('first_name')}}" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example1cg">First Name</label>
                </div>

                  <div class="form-outline mb-4">
                  <input type="text" name="last_name" id="form3Example1cg" value="{{old('last_name')}}" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example1cg">Last  Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form3Example3cg" value="{{old('email')}}" class="form-control form-control-lg" required/>
                  <div><span class="text-danger">@error('email') {{$message}} @enderror</span></div>
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" id="password" class="form-control form-control-lg" required/>
                  <div><span class="text-danger">@error('password') {{$message}} @enderror</span></div>
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="confirm_password" id="confirm_password" class="form-control form-control-lg" onkeyup="check(this)"required/>
                  <div><error id="alert" style="color: red;"></error></div>
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

                <div class="form-check d-flex justify-content mb-5">
                  <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value=""
                    id="form2Example3cg"
                  />
                  <label class="form-check-label" for="form2Example3g">
                  <u>  I agree all statements in <a href="#!" class="text-body">Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/login" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
<script type="text/javascript">
  var password = document.getElementById('password');
  var flag = 1; // 1 -> no error | 0 -> yes error
  function check(elem){
    if(elem.value.length > 0){
      if(elem.value != password.value){
        document.getElementById('alert').innerText = "Confirm password does not match";
        flag = 0;
      }else{
        document.getElementById('alert').innerText = "";
        flag = 1;
      }
    }else{
      document.getElementById('alert').innerText = "Please enter confirm password";
      flag = 0;
    }
  }
  function validate(){
    if(flag==1){
      return true;
    }else{
      return false;
    }
  }
</script>
</html>