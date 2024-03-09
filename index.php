<?php include('server.php') ?>
<!--- perfectly done - 13/07/22 --->
<!--- perfectly repaired again - 29/07/23 --->
</html>
  <head>
        <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Login Page</title>
<link rel="icon" type="image" href="favicon.ico" >
  <style>
   nav{
        display: flex;
        width: 100%;
        align-items: center;
        flex-wrap: wrap;
        padding: 5px 0;
    }
    nav ul{
        flex: 1;
        text-align: right;
        padding-right: 100px;
        padding-top: 10px;
    }
    nav ul li{
        display: inline-block;
        list-style: none;
        margin: 10px 30px;
    }
    nav ul li a{
        color: black;
        text-decoration: none;
        position: relative;
    }
    nav ul li a::after{
        content: '';
        width: 0;
        height: 3px;
        position: absolute;
        bottom: -5px;
        left: 50%;
        transform: translateX(-50%);
        background: #03aa6d;
        transition: width 0.3s;
    }
    nav ul li a:hover::after{
        width: 50%;
    }
    .text-box h1{
       position: absolute;
       padding-left: 550px;
       top: -17px;
       font-size: 40px;
       font-weight: 1;
    }
    .text-box2 h5{
        position: absolute;
        padding-left: 10px;
        top: 25%;
        font-size: 50;

    }
    @import url("https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        
      }
      .text-box {
        position: absolute;
      }
      .text-box h1 {
        position: absolute;
        transform: translate(-50%, -50%);
        font-size: 40px;
       
      }
      .text-box h1:nth-child(1) {
        color: transparent;
        -webkit-text-stroke: 1px #000;
      }
      .text-box h1:nth-child(2) {
        color:  #03aa6d;
        animation: animate 10s ease-in-out infinite;
      }
      @keyframes animate {
        0%,
        100% {
          clip-path: inset(0 48% 0 0);
        }

        50% {
          clip-path: inset(0 0 0 50%);
        }
      }
      
  </style>
</head>
<body>
  <nav style="font-size: 25px;">
    <ul>
      <li> <a style="color: black;" href="index.php">Homepage</a> </li>
      <li> <a style="color: black;" href="About_us.html">About Us</a> </li>
      <li> <a style="color: black;" href="Contact_us.html">Contact Us</a> </li>
    </ul>
  </nav>
<div class="text-box">
    <h1>MELODY_MUSIC</h1>
    <h1>MELODY_MUSIC</h1>
</div>
<div class="text-box2">
  <h5>MUSIC <br> YOU <br> ALWAYS <br> WANT TO <br> LISTEN</h5>
</div>
<div class="form-box">
  <form action="index.php" method="post" class="login-email" >
  <h1>Login Here</h1>
  <?php include('errors.php'); ?>
    <div class="input-box">
    <i class="fa fa-user"></i>
    <input type = "text" placeholder ="Enter Username" name="username" required>
</div>
<div id="email_error">Please fill up your Email</div>
<div class="input-box">
    <i class="fa fa-key"></i>
    <input type="password" name="password" id="myInput" placeholder="Password" required>
    <span class="eye" onclick="myFunction()">
    <i id="hide1" class="fa fa-eye"></i>
    <i id="hide2" class="fa fa-eye-slash"></i>
</div>
<div id="pass_error">Please fill up your Password</div>
    </span>
<div class="tacbox">
  <input id="checkbox" type="checkbox" /> 
  <label for="checkbox"> I agree to these <a href="Terms_and_conditions.html">Terms and Conditions</a></label>
</div>
<div>
<button name="login_user" type="submit" class="login-btn">LOG IN</a></button>
  <div>
    <a class="register_page_edit" href="register_page.php">Don't Have An Account? Register One</a>
  </div>
</div>
</form>
  <script>
    function myFunction(){
        var x = document.getElementById("myInput");
        var y = document.getElementById("hide1");
        var z = document.getElementById("hide2");

        if(x.type === 'password'){
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
        }
        else{
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";
        }
    }
  </script>
<script src="valid.js"></script>
<img src="Music_app_icon.png" alt="Melody Music Icon">
</body>
</html>