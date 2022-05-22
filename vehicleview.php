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
                <li class="breadcrumb-item active" aria-current="page">Vehicle</li>
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
                                    Vehicle Details
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
                                                    include './API/config.php';
                                                    if (isset($_POST["add"])) {
                                                        $id = $_POST["id"];
                                                        $sql1 = "SELECT * FROM vehicle WHERE id='$id'";
                                                        $res = $conn->query($sql1);
                                                        if ($res->num_rows > 0) {
                                                            if ($table = $res->fetch_assoc()) {
                                                                echo '<form action="./API/vehicle" method="POST" enctype="multipart/form-data">
                                             
                                                                             <div class="form-group row ">
                                <div class="form-group row">
                                <label for="image" class="col-sm-3 col-form-label">Photo</label>
                                  <img src="data:image/jpeg;base64,' . base64_encode($table["image"]) . '"
                                                height="100px" width="100px" class="col-sm-4  img-thumbnail" />
                            </div>

                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Vehicle class</label>
                                <div class="col-sm-7" id="divName">
                                    <input disabled type="text" class="form-control" required
                                   value="' . $table["class"] . '"     placeholder="Vehicle class" id="class" name="class">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Registration number</label>
                                <div class="col-sm-7" id="divName">
                                    <input disabled type="text" class="form-control" required placeholder="Registration number"
                                       value="' . $table["reg_no"] . '"  id="reg_no" name="reg_no">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="capacity" class="col-sm-3 col-form-label">Capacity</label>
                                <div class="col-sm-7" id="divName">
                                <input disabled type="text" class="form-control" required
                                   value="' . $table["capacity"] . '"  id="capacity" name="capacity">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="oname" class="col-sm-3 col-form-label">Owner Name</label>
                            <div class="col-sm-7" id="divName">
                            <input disabled type="text" class="form-control" required
                               value="' . $table["oname"] . '"  id="oname" name="oname">
                        </div>
                        </div>



                            <div class="form-group row">
                                <label for="province" class="col-sm-3 col-form-label">Province</label>
                                <div class="col-sm-7" id="divName">
                                <input disabled type="text" class="form-control" required
                                   value="' . $table["province"] . '"  id="province" name="province">
                            </div>
                            </div>

                            <div class="form-group row">
                                <label for="district" class="col-sm-3 col-form-label">District</label>
                                <div class="col-sm-7" id="divAddress">
                                    <input disabled type="text" required class="form-control" placeholder="Enter District"
                                        id="district" value="' . $table["district"] . '" name="district">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contact" class="col-sm-3 col-form-label">Contact</label>

                                    <div class="col-sm-7" id="divGender">
                                    <input disabled type="text" required class="form-control "
                                        id="contact" value="' . $table["contact"] . '" name="contact">
                                </div>
                            </div>
                      
                                                                ';
                                                            }
                                                        }
                                                    } ?>

                                                </div>
                                                <div class="modal-footer">
        
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