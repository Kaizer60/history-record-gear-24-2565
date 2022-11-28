<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    
        <div class="container my-3">
            <h2 class="text-center">Log In</h2>
            <form action="loginData.php" method="POST">
                <div class="from-group">
                    <label for="id">รหัสนิสิต</label>
                    <input type="text" name="id" id="" class="form-control my-2">
                </div>

                <div class="from-group">
                    <label for="pass">password</label>
                    <input type="password" name="pass" id="" class="form-control my-2">
                </div>
                <input type="submit" value="เข้าสู่ระบบ" class="btn btn-success">
            </form>
        </div>
</body>
</html>