<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Login</title>
</head>

<body>
    {{-- <div class="shadow mb-5" style="background-color: #14141486;font-family: Josefin Sans;">
        <div class="container">
            <div class="py-5 ">
                <h2 style="font-weight: bold; color:white">Register As Admin</h2>
            </div>
        </div>
    </div> --}}
    <div class="row py-5 justify-content-center ">
        <div class="col-md-4 mt-5" style="background-color:#14141486;">
            <div class="text-center py-5 font-weight-bold">
                <img src="/img/logo.png" style="width: 100px">
            </div>
            <main class="form-register">
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        </div>
                    <button class="w-100 btn btn-lg btn-primary " type="submit">Register</button>
                </form>
            </main>
            <small class="d-block my-3 text-center">
                <a href="/login" style="color: #8f8f8f; font-size: 13px;">Already have account? Login here</a>
            </small>
        </div>
    </div>
</body>

<style>
 html, body
 {
  height: 100%;
  background-image: url('/img/bg-foot.png');
}

.form-register .form-floating:focus-within {
  z-index: 2;
}

.form-register input[type="email"] {
  margin-bottom: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-register input[type="text"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-register input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>

</html>
