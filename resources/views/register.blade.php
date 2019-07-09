<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container" style="padding:50px;">
    <div class="row">
        <div class="col-md-6 offset-3">

            <div class="card shadow">
                <div class="card-header text-center" ><h3>Register</h3></div>
                <form>
                <div class="card-body">

                        <div class="form-group">
                            <label for="name">User Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">User Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div><div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div><div class="form-group">
                            <label for="name">Password</label>
                            <input type="text" id="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Confirm Password</label>
                            <input type="text" id="confirm_password" name="confirm_password" class="form-control">
                        </div>
                </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-primary btn-block ">Register</button>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-danger btn-block" href="{{'/'}}">Cancel</a>
                            </div>
                        </div>
                        <a href="login_back" class="btn-link" >Go to Login</a>
            </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
