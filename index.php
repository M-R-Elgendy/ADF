<?php require('includes/header.php') ?>
<?php require('includes/right_nav.php') ?>
<?php require('includes/count_quey.php') ?>

<div class="col-lg-10 col-md-12 col-sm-12 col-12 conte" style=" margin: 0px; background-color: white;">

    <!-- ######################################################################################### -->
    <br>
    <h1>قوات الدفاع الجوي - مجموعة المراكز</h1>
    <label> Login as Admin</label>

    <hr>

    <div class="row">

        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mar">
            <div class="card bg-primary text-white col-12">

                <div class="card-body row frst_sec">
                    <div class="col-9">
                        <p class="huge">
                            المواد الدراسية
                            <br>
                            <?php echo $subjects_count ?>
                        </p>
                    </div>
                    <div class="col-3" style="text-align: left;"><i class="fas fa-folder-open"
                            style="font-size:40px;"></i></div>

                </div>

                <div class="card-body sec_sec col-12" style="padding-top: 10px; padding-bottom:10px;">
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
                            الاختبارات
                            <br>
                            <?php echo $exams_count ?>
                        </p>
                    </div>
                    <div class="col-3" style="text-align: left;"><i class="fas fa-folder-open"
                            style="font-size:40px;"></i></div>

                </div>

                <div class="card-body sec_sec col-12" style="padding-top: 10px; padding-bottom:10px;">
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
                            النتائج
                            <br>
                            <?php echo $result_count ?>
                        </p>
                    </div>
                    <div class="col-3" style="text-align: left;"><i class="fas fa-folder-open"
                            style="font-size:40px;"></i></div>

                </div>

                <div class="card-body sec_sec col-12" style="padding-top: 10px; padding-bottom:10px;">
                    <p class="card_GoTo"><a href="results.php"> عرض كافه التفاصيل <i
                                class="far fa-arrow-alt-circle-left"></i></a></p>
                </div>

            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mar">
            <div class="card bg-danger  text-white col-12">

                <div class="card-body row frst_sec">
                    <div class="col-9">
                        <p class="huge">
                            بنك الاسئلة
                            <br>
                            <?php //echo $final_exams_count 
                            ?>Waiting
                        </p>
                    </div>
                    <div class="col-3" style="text-align: left;"><i class="fas fa-folder-open"
                            style="font-size:40px;"></i></div>

                </div>

                <div class="card-body sec_sec col-12" style="padding-top: 10px; padding-bottom:10px;">
                    <p class="card_GoTo"><a href="qus_bank.php"> عرض كافه التفاصيل <i
                                class="far fa-arrow-alt-circle-left"></i></a></p>
                </div>

            </div>
        </div>



    </div>

    <!-- ######################################################################################### -->

</div>

<?php require('includes/footer.php') ?>