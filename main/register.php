<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="re.css">
</head>
<body>
    <div class="all">
    <div>
        <h1 class="text-center">Register</h1>
    </div>
    <form action="user.php" method="POST">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="name">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Username</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="username">
    </div>
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    </div>
    <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>   
    <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="login">
            <p>Already have an account ? <a href="login.php" id="re">Login here!</a></p>
    </div>
    </form>
    </div>
</body>
</html>