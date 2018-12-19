<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TaxEasy Login</title>
    

</head>
<body style="background-image>:url(/pictures/Camera Roll/calculator-385506_960_720)">
    <br />
    <div class="container box">
    <h3 text-align="center">Easy Tax Login System</h3>
    <br />

    @if(isset(Auth::user()->email))
    <div class="alert alert-danger success-block">
    <strong>Welcome {{ Auth::user()->email }} </strong>
    <a href="{{URL('/home/logout')}}">Logout</a>
    </div>
    else
      <script>window.location="/home"; </script> 

    @endif
</body>
</html>