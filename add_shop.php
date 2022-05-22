<?php   
    require_once('./controllers/DatabaseController.php');
    $db = new ShopController();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.js"></script>
    <title>Add Equipment</title>

    <style type="text/css">
        table.dataTable.table-striped.DTFC_Cloned tbody tr:nth-of-type(odd) {
            background-color: #F3F3F3;
        }

        table.dataTable.table-striped.DTFC_Cloned tbody tr:nth-of-type(even) {
            background-color: white;
        }

        table {
            table-layout: fixed;
        }

        table td {
            word-wrap: break-word;
            max-width: 400px;
        }

        #user_table td {
            white-space: inherit;
        }

        .tablecontainer {
            background-color: #000000a8;
            padding: 63px;
            border-radius: 15px;
        }

        .back {
            /* background-color: #c37171; */
            background-image: url("images/back.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        label{
            color: #F3F3F3;
        }
        .address {
            margin-left: -26px;
        }
    </style>
</head>

<body class="back">


    <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container-fluid fcolor">
            <a class="navbar-brand" href="index.php">Equipment Management System CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="shops.php">Equipment Shop's Report</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <div class="container tablecontainer mt-5">
        <?php $db->createShopRecords() ?>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="shop_name">Shop Name</label>
                        <input type="text" class="form-control" name="shop_name" placeholder="Enter Shop Name">
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <div class="row">
                    <div class="col">
                        <label for="contact_number">Contact Number</label>
                        <input type="text" class="form-control" id="contact_number" name="contact_number"
                            placeholder="Enter Contact Number">
                    </div>
                    <div class="col">
                        <label for="contact_number">Location</label>
                        <input type="text" class="form-control" id="location" name="location"
                            placeholder="Enter Location">
                    </div>
                </div>
            </div>
            <div class="form-check mt-3">
                <div class="row">
                    <div class="col address">
                        <label for="contact_number">Address</label>
                        <input type="text" class="form-control" id="address" name="address"
                            placeholder="Enter Location">
                    </div>
                    <div class="col">
                        <label for="contact_number">Photo</label>
                        <input type="file" class="form-control" id="photo" name="photo" placeholder="Add photo">
                    </div>
                </div>
            </div>
            <button type="submit" name="btn_save" class="btn btn-primary mt-3">Add Equipment</button>
        </form>
    </div>
</body>

</html>