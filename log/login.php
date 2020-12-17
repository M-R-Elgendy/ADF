<?php error_reporting(E_ALL ^ E_DEPRECATED); ?>
<?php include "../includes/db_con.php"; ?>
<?php session_start(); ?>

<?php

if (isset($_POST['login'])){

    $user_name = $_POST['user_name2'];
    $password = $_POST['password'];

    $user_name = mysql_real_escape_string($user_name);
    $password = mysql_real_escape_string($password);

    $username_db = 'xasxasxsa';
    $password_db = 'xwqerwetyrugymngd aewtrutr';

    $query = "SELECT * FROM users WHERE user_name = '$user_name' ";
    $select_query = mysql_query($query);

    if (!$select_query){

        die(mysql_error($connection));
    }

    while ($row = mysql_fetch_assoc($select_query)){
      $id_db = $row['id'];
      $username_db = $row['user_name'];
      $password_db = $row['password'];
      $uni_name_db = $row['uni_name'];
    }

    $password = md5($password);

 if ($user_name == $username_db && $password == $password_db){


    $_SESSION['user_name'] = $username_db;
    $_SESSION['uni_name'] = $uni_name_db;
    header("Location: ../");

    }else {

      if($user_name == 'its_admin' && $password == 'e5ef922b03c61a0a0e940c96254dc8fe'){
        $_SESSION['is_admin'] = 'true';
        header("Location: ../VdDfZgStDnrs");
      }else{

      echo '<p class="alert-danger" style="font-size:20px; text-align:center;">اسم المستخدم او كلمه المرور غير صحيحة</p>';

      }
    }
}

//its_admin
//@go_to_admin_panel@

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">

    <style type="text/css">
        .center {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 200px;
          height: 200px;
        }
    </style>

  </head>

  <body>

 <!-- navbar -->





    <!-- the body of the bage-->
    <div class="body-con">

        
        <div class="col-9 row" style=" margin: auto; background-color: white; margin-top: 100px;">

            <div class="col-3" style="padding-left:0px;">
                <center>
                    <img src="img/col_logo.jpg" style="max-height: 120px; margin-top: 10px;">
                </center>
            </div>

            <div class="col-6" style="padding-left:0px;">
                <center>
                    <h2 style="text-align:center;">مركز القياس و التقويم - جامعة بنها</h2>
                    <hr>
                    <h3 style="text-align:center;">مشروع تطوير مركز ونظم القياس و التقويم - جامعة بنها</h3>
                </center>
            </div>

            <div class="col-3" style="padding-right: 0px;">
                <center>
                    <img src="img/uni_logo.jpg">
                </center>
            </div>

        </div>

        <div class="container" style="margin-top: 150px;">
            <h6><b>User </b> Log in</h6>
            <div class="con-2"><form method="post">
           <div class="input-group mb-3">
          <div class="input-group-prepend">
            
          </div>
          <input type="text" class="form-control" placeholder="username" aria-label="Username" aria-describedby="basic-addon1" name="user_name2">
        </div>
          <div class="input-group mb-3">
          <div class="input-group-prepend">
            
          </div>
          <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name="password">
        </div>
          <button class="btn btn-success btn-block marg" type="submit" name="login">Log In</button>

            </form></div>
        </div>
    </div>
    <!-- the footer-->
 
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

