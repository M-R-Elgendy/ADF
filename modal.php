<?php require('includes/header.php') ?>
<?php require($menuType) ?>


<?php
if (isset($_POST['AddMember'])) {

    $name = $_POST['name'];
    $position = $_POST['position'];
    $img = $_FILES['image']['name'];
    $link = $_POST['link'];

    $media_file = $_FILES['image']['tmp_name'];
    move_uploaded_file($media_file, "../images/team/$img");

    $name = mysqli_real_escape_string($connection, $name);
    $position = mysqli_real_escape_string($connection, $position);
    $img = mysqli_real_escape_string($connection, $img);
    $link = mysqli_real_escape_string($connection, $link);

    $query = "INSERT INTO team (id, name, position, img, link) VALUES ('', '$name','$position', '$img', '$link')";
    $add_user_query = mysqli_query($connection, $query);
    header("Location: team.php");
}

if (isset($_POST['EditMember'])) {
    $edit_id = $_POST['memberIDText'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $img = $_FILES['image']['name'];
    $link = $_POST['link'];

    $media_file = $_FILES['image']['tmp_name'];
    move_uploaded_file($media_file, "../images/team/$img");

    if (empty($img)) {
        $img =  $_POST['memberImgText'];
    }

    $name = mysqli_real_escape_string($connection, $name);
    $position = mysqli_real_escape_string($connection, $position);
    $img = mysqli_real_escape_string($connection, $img);
    $link = mysqli_real_escape_string($connection, $link);

    $query = "UPDATE team SET name = '$name', position = '$position', img = '$img', link = '$link' WHERE id = $edit_id";
    $add_user_query = mysqli_query($connection, $query);
    header("Location: team.php");
}
?>

<div class="col-lg-10 col-md-12 conte" style=" margin: 30px 0 0 0; background-color: white;">

    <!-- ######################################################################################### -->

    <br>
    <h1 style="color: #f987a1;">Our Team</h1>

    <hr>

    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addMember"> + Add Member</button>

    <hr>

    <div class="col-12 table-responsive">

        <table class="table table-bordered table-secondary table-striped" id="myTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Profile Link</th>
                    <th>Img</th>

                    <th>Controle</th>

                </tr>
            </thead>
            <tbody>


                <?php
                $query = "SELECT * FROM team";
                $select_user = mysqli_query($connection, $query);
                while ($row = @mysqli_fetch_assoc($select_user)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $position = $row['position'];
                    $img = $row['img'];
                    $link = $row['link'];
                ?>

                <tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $position ?></td>
                    <td><a href="<?php echo $link ?>" target="_plank">View <?php echo $name ?>'s Profile</a></td>
                    <td><img src="../images/team/<?php echo $img ?>" width="100"></td>

                    <td>

                        <a href="#" data-bs-toggle="modal" data-bs-target="#editMember<?php echo $id ?>"
                            data-toggle="tooltip" title="Edi!" data-placement="top">
                            <i class="fas fa-edit alert-dark" style="font-size: 20px;"></i>
                        </a>

                        <a onclick="javascript: return confirm('Are you sure?');"
                            href='team.php?del_id=<?php echo $id ?>' data-toggle="tooltip" title="Delete!"
                            data-placement="top">
                            <i class="fas fa-trash-alt alert-dark" style="font-size: 20px;"></i>
                        </a>

                    </td>
                </tr>
                <?php } ?>

            </tbody>
        </table>

    </div>

    <!-- ######################################## Start Add Model ################################################# -->
    <div class="modal fade" id="addMember" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Team Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="mb-3">
                            <label for="position">Position</label>
                            <input type="text" class="form-control" name="position">
                        </div>

                        <div class="mb-3">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" name="link">
                        </div>

                        <div class="mb-3">
                            <div class="form-group col-12">
                                <label for="Email">Member image</label>
                                <input type="file" class="form-control" placeholder="Blog image.." name="image"
                                    onchange="readURL(this, 'AddMember');">
                            </div>

                            <div class="form-group col-12 text-center">
                                <label for="Email">Preview Image</label>
                                <div id="preview">
                                    <img width="160px" height="120px" src="imgs/placeholder.png" id="thumbAddMember" />
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="AddMember">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ######################################## End Of Add Model ################################################# -->

    <!-- ######################################## Start Edit Models ################################################# -->

    <?php
    $query = "SELECT * FROM team";
    $select_user = mysqli_query($connection, $query);
    while ($row = @mysqli_fetch_assoc($select_user)) {
        $id = $row['id'];
        $name = $row['name'];
        $position = $row['position'];
        $img = $row['img'];
        $link = $row['link'];

    ?>

    <div class="modal fade" id="editMember<?php echo $id ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit "<span
                            style="color:lightpink;"><?php echo $name ?></span>"</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
                        </div>

                        <div class="mb-3">
                            <label for="position">Position</label>
                            <input type="text" class="form-control" name="position" value="<?php echo $position ?>">
                        </div>

                        <div class="mb-3">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" name="link" value="<?php echo $link ?>">
                        </div>

                        <div class="mb-3">
                            <div class="form-group col-12">
                                <label for="Email">Member image</label>
                                <input type="file" class="form-control" placeholder="Blog image.." name="image"
                                    onchange="editReadURL(this, '<?php echo $id ?>');">
                            </div>

                            <div class="form-group col-12 text-center">
                                <label for="Email">Preview Image</label>
                                <div id="preview">
                                    <img width="160px" height="120px" src="../images/team/<?php echo $img ?>"
                                        id="editThumb<?php echo $id ?>" />
                                </div>
                            </div>

                            <input type="text" class="form-control" style="display: none;" name="memberIDText"
                                value="<?php echo $id ?>">

                            <input type="text" class="form-control" style="display: none;" name="memberImgText"
                                value="<?php echo $img ?>">
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="EditMember">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php } ?>
    <!-- ######################################## End Of Edit Models ################################################# -->


    <?php

    if (isset($_GET['del_id'])) {

        $the_user_id = $_GET['del_id'];
        $query = "DELETE FROM team WHERE id = $the_user_id ";
        $delete_query = mysqli_query($connection, $query);
        header("Location: team.php");
    }
    ?>


</div>

<?php require('includes/footer.php') ?>