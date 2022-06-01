<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="w-100 vh-100 bg-dark flex-column align-items-center justify-content-center">
        <form action="newuser.php" class=" d-flex flex-column mx-auto w-50 text-white ">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <button type="submit" name="submit" class="btn btn-primary w-25 mx-auto min-w-10">Sign in</button>
            </div>
        </form>
    </div>
</body>

</html>