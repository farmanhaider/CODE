<?php
  error_reporting(0);
  extract($_POST);
  if(isset($sub)){
    if(is_dir("user/$email")){
        $fo=fopen("user/$email/details.txt","r");
        fgets($fo);
        $pass=trim(fgets($fo));//in 2nd line there is password
        if($pwd==$pass){
           session_start();
          $_SESSION['uid']=$email;
          header("location:account.php");
          $succMsg="Login Sucessfull";
        }
        else {
            $errMsg="Enter correct password";
        }
    }
    else {
        $errMsg="Enter correct Email";
    }
  }
?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      .alert {
    color: red;
    padding: 32px;
    padding-left: 128px;
    box-shadow: 1px 14px 52px -10px;
    width: 262px;
    margin-left: 449px;
    border-radius: 20px;
}
.alert1{
  color:green;
   padding: 32px;
    padding-left: 128px;
     box-shadow: 1px 14px 52px -10px;
    width: 262px;
     margin-left: 449px;
    border-radius: 20px;
}
        input[type="text"] {
    margin: 13px;
    text-align: center;
    border-radius: 20px;
    height: 22px;
}h2 {
    /* margin-top: 14px; */
    padding-top: 12px;
    color:white;
}
sub:hover{
    background:purple;

}
p {
    color: #293a9a;
    FONT-WEIGHT: BOLDER;
    FONT-SIZE: 16PX;
}
input[type="submit"]:hover{
    padding-top:20px;
    
}
       
        input[type="text"] {
   margin: -12px;
    text-align: center;
}
div#main {
    border: 42px solid blue;
    border-radius: 51px;
}
.error{
                color:red;
                font-weight: bold;
                font-size: 14px;
            }


input[type="submit"] {
    margin: 19px;
    color: white  ;
      background: cornflowerblue;
      border-radius: 50%;
    padding: 25px;
}
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
     
      section {
        display: flex;
      }

     
   
h1 {
    margin-left: 540px;
}


element.style {
}

legend {
    float: left;
    text-align: center;
    width: 31%;
    margin-left: 123px;
    margin-top: zzz38px;
    /* padding: 0; */
    margin-bottom: 0.5rem;
    font-size: calc(1.275rem + .3vw);
    line-height: inherit;
    margin-bottom: 23px;
}
      div#card {
        /*margin-left: 91px;*/
        margin-top: 38px;
    
      }
      div#card {
    margin-left: 440px;
}

      div#card {
        box-shadow: 10px 20px 30px 7px;
        width: 431px;
        padding-left: 20px;
        border-radius: 20px;
       /* margin: 20px;*/
       
      }

      div#card{
       
    height:324px;
}
      

      

button {
    border-radius: 16px;
    color: #ffff;
    background-color: cornflowerblue;
}

legend {
    padding-left: 163px;
    /* border: solid grey; */
}

button {
    border: none;
}

button {
    margin-left: 7px;
    width: 364px;
    margin-top: 14px;
}

button {
    height: 38px;
}

fieldset {}

tr {
    padding: 38px;
    width: 219px;
}
.alert-danger1{
  color:green;
}
.alert-danger1{
  color:red;
}

      .navbar {
        color: azure;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
    
legend {
    /* padding-left: 118px; */
    border-radius: 29px 10px 29px 11px;
    color: white;
    background: cornflowerblue;
    /* border: solid grey; */
    box-shadow: 2px 1px 19px -1px;
    margin-top: 12px;
    width: 41px;
    margin-left: 92px;
    padding-left: 15px;
    padding-bottom: 3px;
}
legend {
    float: left;
    width: 41%;
    /* padding: 0; */
    margin-bottom: 0.5rem;
    font-size: calc(1.275rem + .3vw);
    line-height: inherit;
}
input[type="submit"] {
    border: none;
    background: cornflowerblue;
    color: white;
    width: 196px;
    margin-left: 106px;
    height: 41px;
    border: radius: ;
    border-radius: 42px;
}
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

element.style {
}

p {
    margin: 20px;
    margin-left: 91px;}
      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, 0.1);
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
          inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -0.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .modal-content.rounded-4.shadow {
        padding: 26px;
      }
      button#btn {
        background: cornflowerblue;
        color: white;
      }
 input#name {
        /* padding-left: 60px; */
        text-align: center;
        width: 387px;
        border-radius: 16px;
        height: 33px;
        /* margin-left: 11px; */
      }
      input#age {
        /* padding-left: 60px; */
        text-align: center;
        width: 387px;
        border-radius: 16px;
        height: 33px;
        /* margin-left: 11px; */
      }
       input#city {
        /* padding-left: 60px; */
        text-align: center;
        width: 387px;
        border-radius: 16px;
        height: 33px;
        /* margin-left: 11px; */
      }
        input#pwd {
        /* padding-left: 60px; */
        text-align: center;
        width: 387px;
        border-radius: 16px;
        height: 33px;
        /* margin-left: 11px; */
      }
      
element.style {
}
input#pwd {
    /* padding-left: 60px; */
    text-align: center;
    width: 369px;
    border-radius: 16px;
    height: 33px;
    margin-left: 9px;
}
.mb-3 {
    margin-top: 1px;
    margin-bottom: 15px;
}
      input#email {
        /* padding-left: 60px; */
        text-align: center;
        width: 387px;

        border-radius: 16px;
        height: 33px;
        /* margin-left: 11px; */
        margin-left: 9px;
      }
    </style>
</head>
<body>
       <h1>Admin pannel</h1>
        <?php 
        if($errMsg!=''){
        ?>
      <div class="alert"><?= $errMsg;?></div>
     
        <?php 
        
        }
        if($succMsg!=''){
        ?>
      <div class="alert1"><?= $succMsg;?></div>
     
        <?php 
        
        }
        ?>
       <form id="form1" method="post">
    <div id="card">
        <legend>Login Form</legend>
        <input
          type="email"
          id="email"
          name="email";
          placeholder="Enter thr email@john"
        /><br /><br />
        <input
          type="text"
          id="pwd"
           name="pwd";
          placeholder="Enter thr password"
        /><br /><br />
        <input type="submit"  name='sub'>
        <p>Create account? <a href="trial.php">Signup</a></p>
        <?php 
        if($errMsg!=''){
        ?>
      <div class="alert-d alert-d1"><?= $errMsg;?></div>
      
        <?php 
        }
    ?>
    </form></div>
</body>
</html>