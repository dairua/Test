<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="DEMOMVC/assets/css/style.css">
    <title>Đăng Nhập</title>
</head>
<body>
<div id="wrapper">
    <form id="form-login" action="Index.php?action=DN"  method="post">
    <h1 class="form-heading">Đăng Nhập</h1>
        <input type="hidden" value="1" name="s">
            <div class="form-group">
                <input class="form-input" placeholder="Username" type="text" name="tenTK" minlength = "5">
            </div>
            <div class="form-group"> 
                <input class="form-input" placeholder="Password" type="password" name="MK"  minlength = "5">
            </div>
        
            <input class="form-submit" type="submit" name="DN" value="Đăng Nhập" >
    </form>
    <form action="" method ="get" >
        <a class="" href="Index.php?action=DK">đăng kí</a>
    </form>
</div>
</body>
</html>