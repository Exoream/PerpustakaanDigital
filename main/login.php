<?php
session_start();

if(isset($_SESSION['status']) && $_SESSION['status'] === 'login'){
    if($_SESSION['role'] === 'admin'){
        header('location: admin.php');
    } else if($_SESSION['role'] === 'user'){
        header('location: pengguna.php');
    }
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="all">
    <div>
        <h1 class="text-center">Login</h1>
    </div>
    <form action="masuk.php" method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Username</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="username">
        </div>
        <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="register">
            <p>Dont' have an account ? <a href="register.php" id="re">Register</a></p>
        </div>
        </form>
        </div>
</body>
</html>