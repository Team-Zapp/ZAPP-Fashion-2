<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo 2.png" type="image/x-icon" />

    <title>Customer Info</title>
    <script src="jquery.js"></script>
    <script src="customerinfo.js"></script>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <script>
        let AdminName = "<?php echo $_GET["name"] ?>"
    </script>
    <div class="goldTier">
        <h4>Gold Tier</h4>

        <div class="table">
            <table class="table-secondary table" id="table1">
                <tr class="table-secondary table">
                    <th class="primary"></th>
                    <th class="primary ">Name</th>
                    <th class="primary">E-mail</th>
                    <th class="primary">Phone Number</th>
                    <th class="primary">Address</th>
                    <th class="primary">Total Buget Used</th>
                </tr>

            </table>
        </div>
    </div>
    <div class="secondblk">
        <div class="silverTier">
            <h4>Silver Tier</h4>
            <table class="table-secondary table" id="table2">
                <tr class="table-secondary table">
                    <th class="primary"></th>
                    <th class="primary ">Name</th>
                    <th class="primary">E-mail</th>
                    <th class="primary">Phone Number</th>
                    <th class="primary">Address</th>
                    <th class="primary">Total Buget Used</th>
                </tr>

        </table>
    </div>

        <div class="bronzeTier">
            <h4>Bronze Tier</h4>
            <table class="table-secondary table" id="table3">
                <tr class="table-secondary table">
                    <th class="primary"></th>
                    <th class="primary ">Name</th>
                    <th class="primary">E-mail</th>
                    <th class="primary">Phone Number</th>
                    <th class="primary">Address</th>
                    <th class="primary">Total Buget Used</th>
                </tr>

            </table>
        </div>
    </div>
    <div class="footer"> Copyright : <span>&#169;</span>ZAPP</div>
</body>

</html>