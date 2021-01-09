<?php error_reporting(E_ALL ^ E_DEPRECATED); ?>
<?php include "../includes/db_con.php"; ?>
<?php session_start(); ?>

<?php

if (isset($_POST['login'])) {

  $userUsername = $_POST['user_name'];
  $UserPassword = $_POST['password'];

  $userUsername = mysqli_real_escape_string($con, $userUsername);
  $UserPassword = mysqli_real_escape_string($con, $UserPassword);

  $username = 'xasxasxsa';
  $password = 'xwqerwetyrugymngd aewtrutr';

  $query = "SELECT * FROM admins WHERE username = '$userUsername' ";
  $select_query = mysqli_query($con, $query);

  if (!$select_query) {

    die(mysqli_error($con));
  } else {

    while ($row = mysqli_fetch_assoc($select_query)) {
      $id_db = $row['ID'];
      $uniqID  = $row['uniqID'];
      $username = $row['username'];
      $password = $row['password'];
    }

    $UserPassword = md5($UserPassword);

    if ($userUsername == $username && $UserPassword == $password) {
      $_SESSION['superAdmin'] = $username;
      header("Location: ../");
    } else {
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
                    <img src="img/EFA.jpg" style="max-height: 120px; margin-top: 10px;">
                </center>
            </div>

            <div class="col-6" style="padding-left:0px;">
                <center>
                    <h2 style="text-align:center;">قيادة قوات الدفاع الجوي</h2>
                    <hr>
                    <h3 style="text-align:center;">إيمان ... عزم ... مجد</h3>
                </center>
            </div>

            <div class="col-3" style="padding-right: 0px;">
                <center>
                    <img src="img/ADFLogo.png" style="max-height: 120px; margin-top: 10px;">
                </center>
            </div>

        </div>

        <div class="container text-right" style="margin-top: 150px;">
            <h6> تسجيل دخول <b style="color: #721c24;"> المدير </b></h6>
            <div class="con-2">
                <form method="post" dir="rtl">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" placeholder="إسم المستخدم" aria-label="Username"
                            aria-describedby="basic-addon1" name="user_name">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">

                        </div>
                        <input type="password" class="form-control" placeholder="كلمة المرور" aria-label="Username"
                            aria-describedby="basic-addon1" name="password">
                    </div>
                    <button class="btn btn-success btn-block marg" type="submit" name="login">تسجيل الدخول</button>

                </form>
            </div>
        </div>
    </div>
    <!-- the footer-->



    <script src="../vendor/jquery/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <div class="col-12 text-center alert alert-deffult" style="margin-top:140px;">تنفيذ و تطوير فرع نظم المعلومات © 2021
    </div>
</body>

</html>