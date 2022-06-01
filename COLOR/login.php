<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./dist/output.css">
    <title>Document</title>
</head>

<body>
    <div class="w-100 flex h-screen bg-[#131313] items-center justify-center">
        <form action="newuser.php" class="flex flex-col  mx-auto w-50 text-white ">
            <div class="flex flex-col mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="flex flex-col mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="flex flex-col mb-3">
                <button type="submit" name="submit" class="btn bg-blue-600 w-25 text-white min-w-10">Sign in</button>
            </div>
        </form>
    </div>
</body>

</html>