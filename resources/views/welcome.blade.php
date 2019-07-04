
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/welcome.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ZSSN</title>
  </head>

  <body>
    <div class="container text-center">
        <img src="{{ url('../public/css/images/survivor.jpg') }}" class="img-fluid" alt="Responsive image">

        <a href="{{ url('/api/survivors') }}" class="btn btn-danger btn-lg">B E W A R E</a>
    </div>
  </body>
</html>
