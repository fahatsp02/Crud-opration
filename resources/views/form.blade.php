<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form action="{{url('/')}}/register" method="post">
        @csrf
        <h1 class="text-center">Registration Form</h1>
        <div class="container">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email">
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" name="password">
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="text" class="form-control" name="confirm_password">
                <span class="text-danger">
                    @error('confirm_password')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">City</label>
                <input type="text" class="form-control" name="city">
                <span class="text-danger">
                    @error('city')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>