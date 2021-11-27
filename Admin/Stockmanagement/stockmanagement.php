<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Management</title>
    <script src="jquery.js"></script>
    <script src="stockmgmt.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="logo 2.png" type="image/x-icon" />
    <link rel="stylesheet" href="stockmgmt.css">
</head>

<body>

    <div class="chartbg">
        <div id="chart"></div>
    </div>
    <form id="form" enctype="multipart/form-data">
        <div class="mgmtdiv">
            <h3 class="stockhead">Stock Management</h3>
            <div class="mgmt">
                <div class="inputdiv">
                    <div class="findpd">
                        <input type="text" name="pdname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Product Name" id="name" required>
                        <span class="searchbtn"><button type="button" class="btn btn-secondary text-center searchbtn" id="search">Search</button></span>
                    </div>

                    <input class="form-control" type="text" placeholder="Create Date" aria-label="Disabled input example" disabled>
                    <input type="file" name="pdimage" class="form-control" id="inputGroupFile02" placeholder="Choose Image">
                </div>
                <div class="inputdiv">
                    <select class="form-select" id="inputGroupSelect01" name="pdgender">
                        <option value="1" id="men">Men</option>
                        <option value="2" id="women">Women</option>
                        <option value="3" id="kid">Kid</option>
                    </select>
                    <select class="form-select" id="inputGroupSelect02" name="category">
                        <option value="1" id="shirt">Shirt</option>
                        <option value="2" id="pant">Pant</option>
                        <option value="3" id="shoe">Shoes</option>
                    </select>
                    <p id="forid" hidden></p>
                    <input type="text" name="madeof" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Made" id="made">
                </div>
                <div class="inputdiv">
                    <div class="money">
                        <input type="number" class="form-control " id="orgprice" name="orgprice" aria-label="Dollar amount (with dot and two decimal places)" placeholder="Original Price" required>
                        <span class="input-group-text">$</span>
                    </div>
                    <div class="money">
                        <input type="number" class="form-control" id="saleprice" name="saleprice" aria-label="Dollar amount (with dot and two decimal places)" placeholder="Sale Price" required>
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="number" name="stock" id="stock" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Quantities" required>
                </div>

                <input class="subbtn" id="submit" type="submit" value="Submit">
                <p class="update" id="update">Update</p>
                <p class="delbth" id="delete">Delete</p>
            </div>
        </div>
    </form>
    <div class="container-fluid" id="table1">
        <div class="row">
            <div class="col-10 text-center ">
                <table class="table table-hover mx-5 mt-5 mytable">
                    <thead class="table-dark" id="table">

                    </thead>
                </table>
            </div>
        </div>
    </div>
    <div class="footer"> Copyright : <span>&#169;</span>ZAPP</div>
    <script>
        let AdminName = "<?php echo $_GET["name"] ?>"
    </script>
</body>

</html>