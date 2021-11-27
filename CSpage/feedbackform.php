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
    <script src="script.js" defer></script>
    <title>Forgot password</title>
</head>

<body>
    <form action="userfeedback.php?id=<?php echo $_GET['id'] ?>" method="POST" style="margin-top: 15%;">
        <div class="white-panel">
            <div class="login-show" align="center">
                <h2 class="form_head" align="center" style="margin-bottom:10vh ;">Leave us a review</h2>
                <input type="text-box" name="review" style="width: 50%;" style=" height:50vh;" align="center">
                <input class="loginbtn" type="submit" name="submit" value="Give Review">
            </div>
    </form>

</body>

</html>