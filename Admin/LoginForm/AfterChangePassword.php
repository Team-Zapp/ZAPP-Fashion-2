<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="Logo 2.png" type="image/x-icon" />
    <link rel="stylesheet" href="forget.css">
    <script src="jquery.js"></script>
    <script src="UpdatePassword.js" defer></script>
    <title>Change password</title>
</head>

<body>
    <script>
        let UserName = "<?php echo $_GET["name"] ?>"
    </script>

    <form action="" method="POST" id="form" required>
        <div class="white-panel">
            <div class="login-show">
                <h4 class="form_head">Change Your Password</h4>

                <input type="text" name="password" required>
                <input class="loginbtn" type="submit" name="submit" value="Enter">



            </div>
    </form>

</body>

</html>