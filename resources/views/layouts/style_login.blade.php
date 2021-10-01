

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title> Amarsusu </title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #d5dce8;
    }

    h1 {
      font-weight: bold;
    }
  .navbar-nav {
    letter-spacing: 1.5px;
    color: light;
  }

  .navbar-brand {
    font-family: 'Lobster', cursive;
    font-size: 40px;
  }

  .card-header {
    font-weight: bold;
  }

  #footer {
    margin-top: 9rem;
  }

  .card {
    border-radius: 30px;
  }

  #judul {
    font-family: 'Rubik', sans-serif;
    text-transform:uppercase ;
  }

  #brand {
    font-family: 'Lobster', cursive;
    font-size: 45px;
  }
  </style>
  <body>



    <!-- Content -->
   @yield('content')
   
    


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
  </body>
</html>