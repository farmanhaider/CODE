<?php 
error_reporting(0);
  extract($_POST);
 
  if(isset($sub)){
    if(is_dir("user/$email")){
        $errMsg="User already registered";
    }
    else{
        mkdir("user/$email");
        file_put_contents("user/$email/details.txt","$name\n$pwd\n$gender\n$age\n$city");
        header("location:welcome.php");//redirection
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
      .table,
      td,
      th {
        border: 2px solid rgb(28, 71, 210);
      }
      section {
        display: flex;
      }

      div#card1 {
        margin-top: 38px;
        margin-left: 200px;
      }

      div#card1 {
         visibility: hidden;
        margin-left: 91px;
        margin-top: 38px;
        box-shadow: 10px 20px 30px 7px;
        width: 431px;
        padding-left: 20px;
        border-radius: 20px;
        margin: 20px;
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

      div#card {
       
    height: auto;
}
      

      input#email {
        /* padding-left: 60px; */
        text-align: center;
        width: 387px;
      }

      input#email {
        border-radius: 16px;
        height: 46px;
        /* margin-left: 11px; */
      }
      input#pwd {
        border-radius: 16px;
        height: 46px;}
        input#name {
        border-radius: 16px;
        height: 46px;}
             input#age {
        border-radius: 16px;
        height: 46px;}
        input#city {
        border-radius: 16px;
        height: 46px;}
div#card {}

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

button {}
      input#pwd {
        width: 387px;
        border-radius: 16px;
        text-align: center;
        height: 46px;
      }

      input#pwd {
      }

      input#pwd {
      }

      input#email {
      }

      div#card {
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
      table#table1 {
    margin: 19px;
    margin: 18px;
}

table#table1 {
    background: cornflowerblue;
    color: white;
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

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

element.style {
}
div#card{
height:500px;
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
    </style>

    <!-- Custom styles for this template -->
    <link href="modals.css" rel="stylesheet" />
  </head>
  <body>
   <h1>Admin pannel</h1>
 <div id="card">
        <legend>Register Form</legend>
        <input
        id="name"
          type="text"
          name="name"
          placeholder="Enter thr fullname"
        /><br /><br />
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
             <label>Gender</label>
<div class="form-check">
   
  <input class="form-check-input" type="radio" name="gender" value="male">

Male 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" vale="female" checked>
 
   Female
  </label>
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
        <input type="checkbox" name="remember_me" id="remember_me">
        Remember me 
      </label><br>
        <input type="submit"  name='sub'>
        <p> Already have account? <a href="index.php">Login</a></p>

      </div>
     
      

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
