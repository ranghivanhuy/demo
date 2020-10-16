<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">LOGIN</h3>
        </div>
        <div class="panel-body">

            <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter your email">
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password">
                </div>
                <div class="form-group">
                    <label for="">Password Confirm</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Enter your password">
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</body>

</html>