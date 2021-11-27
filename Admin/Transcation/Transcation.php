<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo 2.png" type="image/x-icon" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Transcation</title>
    <script src="jquery.js"></script>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <script>
        let AdminName = "<?php echo $_GET["name"] ?>"
    </script>
    <div class="container tablediv">
        <br>
        <table class="table table-striped bg-light" id="table1">
            <tr class="table-secondary table" >
                <th class="primary">No.</th>
                <th class="primary ">Name</th>
                <th class="primary">Transcation ID</th>
                <th class="primary">Buy Time</th>
                <th class="primary">Total Buget Used </th>
                <th class="primary"></th>
            </tr>


        </table>
    </div>
<div class="footer"> Copyright : <span>&#169;</span>ZAPP</div>
</body>

</html>