<?php   
    require_once('./controllers/DatabaseController.php'); 
    $db = new ShopController();
    $body = $db->getShopRecords();
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

    <title>Equipment Management System</title>

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

        .back {
            /* background-color: #a3bcc1; */
            background-image: url("images/back.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .tablecontainer {
            background-color: #ffffffc9;
            padding: 10px;
            border-radius: 15px;
        }

        .dataTables_filter {
            margin-left: 405px !important;
            padding: 13px;

        }

        .dataTables_length {
            padding: 13px;
        }

        .dataTables_info {
            padding: 13px;
        }

        a {
            text-decoration: none !important;
        }
    </style>
</head>

<body class="back">

    <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container-fluid fcolor">
            <a class="navbar-brand" href="index.php">Equipment Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="index.php">Shops</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="report.php">Monthly Report</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>






    <div class="container tablecontainer mt-5">
        <h1 class="display-5">Shops</h1>
        <a class="btn btn-primary mt-3 d-block mb-5" href="add_shop.php" role="button">Add Shop</a>
        <hr>
        <table id='user_table' class="table table-hover align-items-center table-flush mt-3 wrap">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Contact</td>
                    <td>Location</td>
                    <td>Address</td>
                    <td>Photo</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                        foreach ($body as $data_new) 
                        {
                    ?>
                <tr>
                    <td>
                        <?php echo $data_new['name'] ?>
                    </td>
                    <td>
                        <?php echo $data_new['contact'] ?>
                    </td>
                    <td>
                        <?php echo $data_new['location'] ?>
                    </td>
                    <td>
                        <?php echo $data_new['address'] ?>
                    </td>
                    <td><img src="images/<?php echo $data_new['photo'] ?>" class="img-thumbnail" alt="Cinque Terre">
                    </td>
                    <td><a class="btn btn-success" href="edit_shop.php?edit=<?php echo $data_new['id'] ?>"
                            role="button">Edit</a></td>
                    <td>
                        <?php $db->deleteRecords($data_new['id']) ?>
                        <form method=POST>
                            <button type="submit" name="btn_save" class="btn btn-danger mt-3">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
                        }
                    ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function () {
            $('#user_table').DataTable({
                columnDefs: [{
                    responsivePriority: 1,
                    targets: 0
                },
                {
                    responsivePriority: 1,
                    targets: 2
                },
                ],
            });
            $('#user_table td').css('white-space', 'initial');
        });

    </script>
</body>

</html>