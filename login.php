<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
    <!-- Compiled and minified CSS -->
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="js/materialize.min.js"></script>
            
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
  
    
    
    <title>DepartmentLogin</title>
    

        <style type="text/css">
          .brand-logo{
            width: 50%;
            height: 100%;
          }
        label{
          font-family: 'Montserrat', bold;
        }
        #main {
               margin: 0 auto;
               max-width: 1280px;
                width: 90%;
                    }
@media only screen and (min-width: 993px) {
  #main {
    width: 70%;
  }
}
@media only screen and (max-width: 601px) {
      .brand-logo{
            width: 40%;
            height: 100%;
          }     
      #formWrapper{
        padding: 15px;
        }
  img{
    height: 100px;
    width: 100px;
  }
  #reg{
    font-size: 1.5rem;
    margin-left: 10px;
    
  }
  #MainRow{
    padding: 8px;
  }
  #side{
    margin-top: 20px;
  }
}
@media only screen and (min-width: 601px) {
   #main {
    width: 75%;
  }
   img{
    height: 200px;
    width: 200px;
    
   }
    #reg{
         font-size: 1.7rem;
         margin-top: 0px;
    } 
    #MainRow{
      padding: 17px;
      }
      #formWrapper{
        padding: 20px;
        } } 
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }
    main {
      flex: 1 0 auto;
    }
    body {
      background: #fff;
    }
    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }
    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
     </style>
</head>

        

<body style="background-color: #F2F3F8">

    <div class="progress" style="display: block; width: 200px ; position: fixed;
  top: 50%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;">
      <div class="indeterminate"></div>
  </div>
      <div class="navbar-fixed">  
  <nav class="nav-wrapper fixed" style="display: none ;background-color: #ff6d00">
    
      
        
      <a href="#" class="" id="logo"style="font-size: 24px ; color: black ; margin-left: 10px">Grievance Redressal Portal</a>
      
      <a href="#" class="sidenav-trigger" data-target="side-links" style="width: 10%">
        <i class="material-icons">menu</i>
      </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="#">Register</a></li>
    <li><a href="#">View Status</a></li>
    <li><a href="#">Login</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Process</a></li>
    <li><a href="#">FAQ</a></li>
    <li><a href="#">Help</a></li>
      </ul>

  
  </nav>
</div>
  <ul class="sidenav" id="side-links">
    <li class="active"><a href="#" >Register</a></li>
    <li><a href="#">View Status</a></li>
    <li><a href="#">Login</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Process</a></li>
    <li><a href="#">FAQ</a></li>
    <li><a href="#">Help</a></li>
</ul>

<div id="main"class="container"style="margin-bottom:80px;margin-top:20px ; background-color: white ;display : none;width:500px;max-width:500px;max-height:400px;" id="content">
  

     <main>
    <center>
     
      
      <h5 class="indigo-text"style="margin-top: 2px;">  <i class="material-icons prefix">account_circle</i>LOGIN </h5>
    

      <div class="container"style="width: 475px;max-height: 400px;max-width: 475px;">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 5px 20px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                  <i class="material-icons prefix">email</i>
                <input style="text-size:50px" class='validate' type='email' name='email' id='email' />
                <label for='email'>Enter Email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <i class="material-icons prefix">vpn_key</i>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter Password</label>
              </div>
              <label style='float: right;'>
                <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
              </label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit'style="margin-left: 1px;margin-right: 200px;" name='btn_login' class='col s12 btn btn-large waves-effect indigo'>
                  <i class="material-icons prefix">lock_open</i>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a href="#!">Create New Account</a>
    </center>

    
   
  </main>
     

  
  
</div>



 <footer class="page-footer" style="background-color: #ff6d00 ; display : none" id="foot">
          <div class="container"style="max-height: 10px;" >
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                 
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright"style="background-color: #e65100;margin-left: 10px;">
            <div class="container">
            © raj Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
            


<!--script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script-->

 <script src="js/materialize.min.js"></script>
  
  <!--script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script-->


<script type="text/javascript">
 
  $(document).ready(function(){
    $('.progress').hide();
    $('.datepicker').datepicker();
    $('select').formSelect();
    $('nav').fadeIn();
    $('#main').fadeIn();
    $('img').fadeIn(3000);
    $('#foot').fadeIn();
  
    $('.sidenav').sidenav();
    
 });
     
    
  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);
  // Or with jQuery
 
</script>


       
</body>

</html>