<?php require('includes/header.php') ?>
<?php require('includes/rightNavSuperAdmin.php') ?>
<?php require('includes/countQureySuberAdmin.php') ?>

<div class="col-lg-10 col-md-12 col-sm-12 col-12 conte" style=" margin: 0px; background-color: white;">

    <!-- ######################################################################################### -->
    <br>
    <h1>قوات الدفاع الجوي - مجموعة المراكز</h1>

    <hr>

    <div class="row">

        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mar">
            <div class="card bg-primary text-white col-12">

                <div class="card-body row frst_sec">
                    <div class="col-9">
                        <p class="huge">
                            افرع / شعب /
                            رئاسات
                            <br>
                            <span style="font-size: 34px;"><?php echo $departments_count ?></span>
                        </p>
                    </div>
                    <div class="col-3" style="text-align: left;"><i class="fas fa-sitemap" style="font-size:40px;"></i>
                    </div>

                </div>

                <div class="card-body sec_sec col-12"
                    style="padding-top: 10px; padding-bottom:10px; margin-bottom:20px;">
                    <p class="card_GoTo"><a href="subjects.php"> عرض كافه التفاصيل <i
                                class="far fa-arrow-alt-circle-left"></i></a></p>
                </div>

            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mar">
            <div class="card bg-secondary text-white col-12">

                <div class="card-body row frst_sec">
                    <div class="col-9">
                        <p class="huge">
                            الكورسات
                            <br>
                            <span style="font-size: 34px;"><?php echo $courses_count ?></span>
                        </p>
                    </div>
                    <div class="col-3" style="text-align: left;"><i class="fas fa-chalkboard"
                            style="font-size:40px;"></i></div>

                </div>

                <div class="card-body sec_sec col-12"
                    style="padding-top: 10px; padding-bottom:10px; margin-bottom:20px;">
                    <p class="card_GoTo"><a href="exams_info.php?code=all"> عرض كافه التفاصيل <i
                                class="far fa-arrow-alt-circle-left"></i></a></p>
                </div>

            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mar">
            <div class="card bg-success text-white col-12">

                <div class="card-body row frst_sec">
                    <div class="col-9">
                        <p class="huge">
                            الفيديوهات التعليمية
                            <br>
                            <span style="font-size: 34px;"><?php echo $videos_count ?></span>
                        </p>
                    </div>
                    <div class="col-3" style="text-align: left;"><i class="fab fa-youtube" style="font-size:40px;"></i>
                    </div>

                </div>

                <div class="card-body sec_sec col-12"
                    style="padding-top: 10px; padding-bottom:10px; margin-bottom:20px;">
                    <p class="card_GoTo"><a href="results.php"> عرض كافه التفاصيل <i
                                class="far fa-arrow-alt-circle-left"></i></a></p>
                </div>

            </div>
        </div>





    </div>

    <!-- ######################################################################################### -->

</div>

<?php require('../includes/footer.php') ?>