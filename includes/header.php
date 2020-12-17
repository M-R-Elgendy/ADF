<?php //error_reporting(E_ALL ^ E_DEPRECATED); 
?>

<?php require('includes/db_con.php')
?>
<!-- <script type="text/javascript" src="js/jsFunctions.js"></script>
<script type="text/javascript" src="js/ajax_functions.js"></script> -->


<?php //session_start(); 
?>
<?php //ob_start(); 
?>


<?php

// if (!isset($_SESSION['admin_name'])) {
//     header("Location: log/login.php");
// }

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title>Air Defence Forces - Learning Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/main.css?v=1.0.2">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Amiri|Tajawal" rel="stylesheet">


    <link rel="stylesheet" type="text/css" id="u0" href="https://cdn.tinymce.com/4/skins/lightgray/skin.min.css">

</head>

<body lang="ar" dir="rtl" style="background-color: #343a40!important;">

    <?php //$admin_name = $_SESSION['admin_name'] 
    ?>
    <header>
        <nav class="navbar navbar-expand  navbar-dark col-lg-12 col-md-12 col-sm-10 bg-primary"
            style=" background-color: #343a40!important;">
            <a class="navbar-brand" href="#">مرحبا <?php //echo $admin_name 
                                                    ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="log/logout.php" style="text-align: right;"> <i
                                class="fas fa-sign-out-alt"></i> خروج </a>
                    </li>
            </div>
        </nav>
    </header>


    <div class="container col-lg-12 col-md-12 col-12 row del_row_padding" style="padding: 0px; margin: 0px;">