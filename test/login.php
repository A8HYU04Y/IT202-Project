<?php
session_start();
if(isset($_SESSION['uid'])){
  header("location: dashboard.php");
  exit();
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
      <script
        src="../js/Jquery.js"></script>
         <script src="../js/materialize.min.js"></script>
  <link rel="stylesheet" href="../css/lazyLoad.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=KoHo:500" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet"> 
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="../css/materialize.min.css">

  

    <!-- Compiled and minified JavaScript -->
   

  <title>LogIn</title>
	<style type="text/css">
		 

@media only screen and (min-width: 993px) {
  #main {
    width: 70%;
  }
}

@media only screen and (min-width: 601px) {
   #main {
    width: 75%;
  }

}

li {
  font-family: 'Bitter', sans-serif;
}
	</style>

</head>
<body style="background-color: #F2F3F8">
     <div class="progress red " style="display: block; width: 200px ; position: fixed;
  top: 50%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;" id="loader">
      <div class="indeterminate"></div>
  </div>
      <div class="navbar-fixed z-depth-3" id="nav">  
  <nav class="nav-wrapper fixed" style="display: none ;background-color: #1565c0">
    
      
       <img class="brand-logo hide-on-med-and-down" src="../icons/logo.svg" style="height:50px;width: 50px ; margin-top:7px;margin-left: 10px">    
      <a href="#" class="" id="logo" style="font-size: 25px ; color: white ; margin-left: 70px;font-family: 'KoHo', serif;">Grievance Redressal Portal</a>
      
      <a href="#" class="sidenav-trigger" data-target="side-links" style="width: 10%">
        <i class="material-icons">menu</i>
      </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class=""><a href="index.php">Register</a></li>
    <li><a href="#">View Status</a></li>
    <li  class="active"><a href="#">Login</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Process</a></li>
    <li><a href="#">FAQ</a></li>
    <li><a href="#">Help</a></li>
      </ul>

  
  </nav>
    
</div>
  <ul class="sidenav" id="side-links">
    <li class="active"><a href="index.php" >Register</a></li>
    <li><a href="#">View Status</a></li>
    <li><a href="#">Login</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Process</a></li>
    <li><a href="#">FAQ</a></li>
    <li><a href="#">Help</a></li>


  </ul>
  <div class="progress" style="display: none;position: fixed;margin-top: 0" id="sender">
      <div class="indeterminate"></div>
  </div>
<div class="container" id="main">

  <div class="row ">

   <div class="col s12 m6 offset-m3 " style="padding: 30px;margin-top: 50px;background-color: white; box-shadow: 5px 5px 25px grey;border: 1px solid #1e88e5;border-radius: 5px;">
    <img src="../icons/login.svg" style="height: 80px;width: 80px;margin-left: 40%">
    <p id="info" class="center"style="border-radius: 8px;background-color:#ff9999;width: 100% ; padding: 5px;color:red;display:none"></p>
     <form style="margin-top: 10px" id="form" method="POST" enctype='application/x-www-form-urlencoded' >
       <div class="row">
          <div class=" input-field col s12 ">
            <i class="material-icons prefix">email</i>
            <input type="email" name="email" id="email" class="validate" required="true">
            <label for="email" class="truncate">Email</label>
        <!--span class="helper-text" data-error="Field is Required" data-success=""></span-->
          </div>
          </div>
          <div class="row">
          <div class=" input-field col s12 ">
            <i class="material-icons prefix">vpn_key</i>
            <input type="password" name="password" id="password" class="validate" required="true">
            <label for="password" class="truncate">Password</label>
        <!--span class="helper-text" data-error="Field is Required" data-success=""></span-->
          </div>
          </div>
          
            <a href="#" class="right" style="font-size: 12px" id="forgot">Forgot password ?</a><br>
                        <a href="#" class="right" style="font-size: 12px">Admin Login</a>

          
           <div class="row center" style="margin-top: 15px">
     <button class="waves-effect btn-large blue darken-4 " style="margin-left: 70px ;font-family: 'Bitter', sans-serif;" name="submit" type="submit" id="log">Log in</button>
         </div>
     </form>
   </div> 
  </div>
	</div>

<!--Modal -->



<div class="modal" id="modal">
   

  <div class="modal-content">
    

        <div id="msg" class="col s8 offset-s3 m8 offset-m2  " style="align:center" >
              <div class="col s7 m7 ">
              <h6 style="font-family: 'Oswald', sans-serif; height: 1px font-size:1rem" >Grivence Redressal Portal</h6>
             <div class="row" id="message">
              <p> Enter your Registered email to get <b>password reset</b> link </p>
             </div>
             <div class="row">
          <div class=" input-field col s12 ">
            <i class="material-icons prefix">email</i>
            <input type="email" name="email" id="fmail" class="validate" required="true">
            <label for="fmail" class="truncate">Email</label>
        <!--span class="helper-text" data-error="Field is Required" data-success=""></span-->
          </div>

           <div class="row" style="margin-top: 15px">
     <button class="waves-effect btn-large green " style="margin-left: 70px" name="submit" id="send">Send link !</button>
         </div>
          </div>            
            
            

            </div>
           

         </div>
      
    </div>
  </div>







<!---d-->  
<script src="../js/materialize.js"></script>
<script src="../js/auth.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#log').hover(function(){
        $('#log').css('box-shadow','5px 5px 25px grey');
},
function(){
        $('#log').css('box-shadow','');
}


);



  });

</script>
<script type="text/javascript">
  

  $(document).ready(function(){
    
    $('.progress').hide();
   $('nav').fadeIn();
  $('.sidenav').sidenav();
  $('footer').fadeIn();
$('.modal').modal();
   $('#form').submit(function(e){
    var data = $(this).serialize();
    //console.log(data);
    e.preventDefault();
    $.ajax({
      type :'post',
      url : 'authentication.php',
      data : data,
      processData : false,
      beforeSend : function(){
        $('#sender').fadeIn();

      },
      success: function(resp){
          
          console.log(resp);
          resp =  JSON.parse(resp);
          $("#sender").hide();
          console.log(resp);
          if(resp.success==-1){
            $('#info').fadeIn();
            $('#info').html("Email or Password is incorrect !");}
          else if(resp.success==0){
             $('#info').fadeIn();
            $('#info').html("Verify your Email !");
          }
          else
            window.location.replace("dashboard.php"); 
          }
          });
      });

  $('#forgot').click(function(e){
    e.preventDefault();
    $('#modal').modal('open');
  })
  $('#send').click(function(e){
    e.preventDefault();

    mail = $('#fmail').val();
    $.ajax({
        type: 'post',
        url : '../server/forgotMailer.php',
        data : {mail : mail},
        processData : true,
        beforeSend: function(){

        },
        success: function(res){
          
          $('#modal').modal('close');
          alert(res);
        }
      

  })


})

});


</script>
       </body>
</html> 