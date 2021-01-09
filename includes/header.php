<?php error_reporting(E_ALL ^ E_DEPRECATED);
?>

<?php require('includes/db_con.php')
?>
<!-- <script type="text/javascript" src="js/jsFunctions.js"></script>
<script type="text/javascript" src="js/ajax_functions.js"></script> -->


<?php session_start();
?>
<?php ob_start();
?>


<?php

if (!isset($_SESSION['superAdmin'])) {
    header("Location: log/login.php");
}

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title>Air Defence Forces - Learning Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../depen/css/main.css?v=1.0.2">

    <link rel="stylesheet" href="../depen/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../depen/vendor/DataTables/datatables.min.css" />
    <link rel="stylesheet" href="../depen/vendor/font-awesome/css/all.min.css">

    <script type="text/javascript" src="../depen/vendor/jquery/jquery.js"></script>
    <script type="text/javascript" src="../depen/vendor/DataTables/datatables.min.js"></script>

</head>

<body lang="ar" dir="rtl" style="background-color: #343a40!important;">

    <?php $superAdmin = $_SESSION['superAdmin']
    ?>
    <header>
        <nav class="navbar navbar-expand  navbar-dark col-lg-12 col-md-12 col-sm-10 bg-primary"
            style=" background-color: #343a40!important;">
            <a class="navbar-brand" href="#">مرحبا <?php echo $superAdmin
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