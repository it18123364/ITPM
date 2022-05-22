<?php   
    require_once('./controllers/DatabaseController.php');
    $db = new ShopController();
    $body = $db->updateShopRecords();
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
    <title>User Scores Table</title>

    <style type="text/css">
        table.dataTable.table-striped.DTFC_Cloned tbody tr:nth-of-type(odd) {
            background-color: #F3F3F3;
        }table.dataTable.table-striped.DTFC_Cloned tbody tr:nth-of-type(even) {
            background-color: white;
        }
        table {
            table-layout:fixed;
        }
        table td {
            word-wrap: break-word;
            max-width: 400px;
        }
        #user_table td {
            white-space:inherit;
        }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-light" href="shop.php">CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-light" href="report.php">Equipment Shop's Report</a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <?php $db->saveUpdateShopRecords($body->id) ?>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                    <label for="shop_name">Shop Name</label>
                    <input type="text" class="form-control" name="shop_name" placeholder="Enter Shop Name" value="<?php echo $body->name ?>">
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <div class="row">
                    <div class="col">
                        <label for="contact_number">Contact Number</label>
                        <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter Contact Number" value="<?php echo $body->contact ?>">
                    </div>
                    <div class="col">
                        <label for="contact_number">Location</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location" value="<?php echo $body->location ?>">
                    </div>
                </div>
            </div>
            <div class="form-check mt-3">
                <div class="row">
                    <div class="col">
                        <label for="contact_number">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Location" value="<?php echo $body->address ?>">
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