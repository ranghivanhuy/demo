<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style>
        .panel.panel-default {
            width: 60%;
            padding: 15px;
            margin: 0 20%;
        }
        .panel-title {
            text-align: center;
        }
    </style>
    
</head>

<body>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">LOGIN</h3>
        </div>
        <div class="panel-body">

            <form action="{{route('login')}}" method="POST" class="form-horizontal" role="form">
                @csrf
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter your email">
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password">
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