<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard UMKM</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Custom styles -->
    {{-- <link href="css/signin.css" rel="stylesheet"> --}}

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@100;300;400;500;600;700&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Montserrat&family=PT+Sans:wght@400;700&family=Poppins:wght@100;300;400;500;600;700&display=swap");
      body {
          font-family: "PT Sans", sans-serif;
      }
      .card {
        background: #F6F6F6;
        border: none;
      }
      .page-link{
        background: #F6F6F6;
        color: #D4D4D4;
        border: none;
      }
      .active>.page-link, .page-link.active{
        color: #0D6EFD;
        background: #F6F6F6
      }

      .detail-toko table th{
        padding-right: 32px;
      }
      .detail-toko .btn{
        width: 12rem;
      }
    </style>
  </head>
  <body>
    @include('partials.navbar')
    
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
