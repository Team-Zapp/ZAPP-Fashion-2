<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquary.js"></script>
    <script src="script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="logo 2.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>

<body>
    <script>
        let AdminName = "<?php echo $_GET["name"] ?>";
    </script>
    <div class="row">
        <div class="Torder">
            <p class="head"> Orders</p>
            <p class="foot" id="totalorder"></p>
        </div>
        <div class="Torder">
            <p class="head">Total Stocks</p>
            <p class="foot" id="totalstocks"></p>
        </div>
        <div class="Torder">
            <p class="head">Total Revenue</p>
            <p class="foot" id="revenue"></p>
        </div>
        <div class="Torder">
            <p class="head">Visit</p>
            <p class="foot" id="visit"></p>
        </div>
        <div class="Torder">
            <p class="head">Feedback</p>
            <p class="foot" id="feedback"></p>
        </div>
    </div>

    <div class="row2">
        <div class="lineChart">
            <div id="chart"></div>
        </div>

        <div class="secondChart">
            <div id="secChart"></div>
        </div>
    </div>

    <div class="row3">
        <div class="pieChart">
            <h4>Popular Items</h4>
            <div id="pie"></div>
        </div>
        <div class="donutChart">
            <h4>Un-popular Items</h4>
            <div id="donut"></div>
        </div>
    </div>
    <div class="footer"> Copyright : <span>&#169;</span>ZAPP</div>
</body>

</html>