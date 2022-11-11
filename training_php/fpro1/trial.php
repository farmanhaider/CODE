<?php 
error_reporting(0);
  extract($_POST);
    $tmpname=$_FILES['att']['tmp_name'];
  $name=$_FILES['att']['name'];
  $ext=pathinfo($name,PATHINFO_EXTENSION);
  $errname="";
    $erremail="";
    $errpass="";

   
        if(isset($sub)){
          if(is_dir("users/$email")){
              $errMsg="User already registered";
          }
          
          else{
       
              mkdir("user/$email");
              if(empty($tmpname))
          {
              $errMsg="Please select a image";

          }
          else{
              $fn="images-".rand()."-".time().".$ext";
              file_put_contents("user/$email/details.txt","$fname\n$pwd\n$gender\n$age\n$city\n$fn");
           
            if($ext=="jpg"||$ext=="png"){
              if(move_uploaded_file($tmpname,"user/$email/$fn")){
                  $succMsg="Uploaded Sucessfully";
              }
            }
              else{
                  $errMsg="Uploading Error";

              }
          }
              $succMsg="$email.user Registred Sucessfully click on login";//redirection
          }
        
        }    

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.104.2" />
    <title>Modals · Bootstrap v5.2</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.2/examples/modals/"
    />

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="signup.js"></script>
    <style>
     
      section {
        display: flex;
      }
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
   
h1 {
    margin-left: 540px;
}
.error{
                color:red;
                font-weight: bold;
                font-size: 14px;
            }
input[type="file"] {
    background: cornflowerblue;
    margin: 20px;
    margin-left: 10px;
    height: 44px;
    font-size: 20px;
    color: floralwhite;
    border-radius: 0px 10px;
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
.alert-d{
  color:red;

}
.alert-d1{
  color:green;

}
input::file-selector-button {
    background-color:#ff0707;
color:white;
  border:none;
    border-radius:8px;
    height:60px;
    text-align:center;
}
      div#card {
        box-shadow: 10px 20px 30px 7px;
        width: 431px;
        padding-left: 20px;
        border-radius: 20px;
       /* margin: 20px;*/
       
      }

      div#card {
       
    height: 615px;
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
div#card{
height:615px;
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
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="modals.css" rel="stylesheet" />
  </head>
  <body>
   <h1>Admin pannel</h1>
    <form method="post"  enctype="multipart/form-data">
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
 <div id="card">
   
        <legend>Register Form</legend>
        <input
        id="name"
          type="text"
          name="fname"
          placeholder="Enter thr fullname"
        /><?= $errname;?><br /><br />
        <input
        id="email"
          type="email"
          name="email"
          placeholder="Enter thr email@john"
        /><br /><br />
        <input
          id="pwd"
          type="text"
          name="pwd"
          placeholder="Enter thr password"
        /><br /><br />
        <label>
            <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gender</label>
    <input type="radio"  name="gender" value="male"> Male 
    <input type="radio"  name="gender" value="female"> Female 
  </div>
<input
 id ="age"
          type="text"
          name="age"
          placeholder="Enter thr age"
        /><br /><br />
<input
 id="city"
          type="text"
          name="city"
          placeholder="Enter thr city"
        /><br /><br />
      upload File:
       

        <input type="file" name="att" value=<?= $tmpname;?> >
     
      </label><br>
       
        <input type="checkbox" name="remember_me" id="remember_me">
        Remember me 
      </label><br>
        <input type="submit"  name='sub'>
        
        <p> Already have account? <a href="index.php">Login</a></p>
        
    </form>
      </div>
     
      

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

