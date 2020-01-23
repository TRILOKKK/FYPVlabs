<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Virtual Labs Simulation</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="row px-4">
        <div style="height: 25vh;" class="p-5 border border-primary w-100">
            <h3>Data Compression Simulation</h3>
        </div>
    </div>
    <div class="row px-4">
        <div class="col-2 border border-primary">
            <?php
            $page = "index";
            if (isset($_POST['page']) && $_POST['page'] != "") {
                $page = $_POST['page'];
            }
            require('sidebar.php');
            ?>
            <div class="col-sm-9 col-xl-10 border border-primary">
                <?php
                include('content.php');
                ?>
            </div>
        </div>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>