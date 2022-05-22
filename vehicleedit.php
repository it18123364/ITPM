<?php
include 'inc/header.php';
?>
<!-- main content start -->
<div class="main-content">

    <!-- content -->
    <div class="container-fluid content-top-gap">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">VEHICLE</li>
            </ol>
        </nav>

        <section class="template-cards">
            <div class="card card_border">
                <div class="cards__heading">
                </div>
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-lg-6 pr-lg-2 chart-grid">
                            <div class="card text-center card_border">
                                <div class="card-header chart-grid__header">
                                        VEHICLE EDIT
                                </div>
                                <div class="card-body">
                                    <!-- Button trigger modal -->


                                    <!-- Modal -->
                                    <div>
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Vehicle</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php
                                                    include '../../Controllers/config.php';
                                                    if (isset($_POST["add"])) {
                                                        $id = $_POST["id"];
                                                        $sql1 = "SELECT * FROM vehicle WHERE id='$id'";
                                                        $res = $conn->query($sql1);
                                                        if ($res->num_rows > 0) {
                                                            if ($table = $res->fetch_assoc()) {
                                                                echo '<form action="../../models/vehicle" method="POST" enctype="multipart/form-data">
                                             
                                                                             <div class="form-group row ">

                                <div class="col-sm-10" id="divIndexNumber">
                                    <input type="hidden" value="' .$id. '" id="index_number" name="id">
                                </div>

                                <div class="form-group row">
                                <label for="image" class="col-sm-2 col-form-label">Image</label>
                                  <img src="data:image/jpeg;base64,' . base64_encode($table["image"]) . '"
                                                height="100px" width="100px" class="col-sm-4  img-thumbnail" />
                                <div class="col-sm-6" id="divImage">
                                    <input type="file"  class="form-control-file" id="image" name="image">
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                                <label for="class" class="col-sm-2 col-form-label">Vehicle class</label>
                                <div class="col-sm-10" id="divName">
                                    <input type="text" class="form-control" required
                                   value="' . $table["class"] . '"     placeholder="Enter Vehicle class" id="class" name="class">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="reg_no" class="col-sm-2 col-form-label">Registration number</label>
                                <div class="col-sm-10" id="divName">
                                    <input type="text" class="form-control" required placeholder="Registration number"
                                       value="' . $table["reg_no"] . '"  id="reg_no" name="reg_no">

                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="capacity" class="col-sm-2 col-form-label">Capacity</label>
                            <div class="col-sm-10" id="divName">
                                <input type="text" class="form-control" required placeholder="Enter Capacity"
                                   value="' . $table["capacity"] . '"  id="capacity" name="capacity">

                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="oname" class="col-sm-2 col-form-label">Owner name</label>
                                <div class="col-sm-10" id="divAddress">
                                    <input type="text" required class="form-control" placeholder="Enter Owner name"
                                        id="oname" value="' . $table["oname"] . '" name="oname">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="province" class="col-sm-2 col-form-label">Province</label>
                                <div class="col-sm-7" id="divPhone">
                                    <input maxlength="10" type="text" required class="form-control " placeholder="Enter Province"
                                        id="province" value="' . $table["province"] . '" name="province">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="district" class="col-sm-2 col-form-label">District</label>
                                <div class="col-sm-7" id="divEmail">
                                    <input type="text" class="form-control" required placeholder="Enter District"
                                        id="district"  value="' . $table["district"] . '" name="district">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contact" class="col-sm-2 col-form-label">Contact number</label>
                                <div class="col-sm-7" id="divContact">
                                    <input type="text" class="form-control" required placeholder="Enter Contact number"
                                        id="contact" value="' . $table["contact"] . '" name="contact">
                                </div>
                            </div>

                                                                                                                      
                                                                ';
                                                            }
                                                        }
                                                    } ?>

                                                </div>
                                                <div class="text-center">
                                                <button type="submit" name="add" class="btn btn-primary">Edit Vehicle</button>
                                                </div>
                                                <div class="modal-footer">
                                                    <!-- <button type="submit" name="add" class="btn btn-success">Save changes</button> -->
                                                    </form>
                                                    <a href="vehicle">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <!-- //accordions -->

        <!-- modals -->

        <!-- //modals -->

    </div>
    <!-- //content -->
</div>
<!-- main content end-->
</section>
<?php include 'inc/footer.php' ?>