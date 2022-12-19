
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Đăng kí</title>
</head>


<body>
<form  method="post">
    <h1>Đăng Kí</h1>
    <table>
        <input type="hidden" value="1" name="s" >
        <tr>
            <td>Tên Đăng Nhập : </td>
            <td><input type="text" name="tenTK1" minlength = "6"></td>
        </tr>
        <tr>
            <td>Mật Khẩu : </td>
            <td><input type="password" name="MK1" minlength = "6"></td>
        </tr>
        <tr>
            <td>Nhập Lại Mật Khẩu : </td>
            <td><input type="password" name="reMK1" minlength = "6"></td>
        </tr>
        <tr>
            <td><input type="submit" name="DangKi" value="Đăng kí"></td>
            <td><a href="Index.php?action=">Đã có tài khoản</a></td>
        </tr>
        </form>
    </table>
</body>
</html>
