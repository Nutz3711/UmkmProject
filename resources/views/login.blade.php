<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login UMKM</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Custom styles -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body>
    <div class="d-flex justify-content-center ">
        <div class="card p-5 rounded-0 mt-5" style="max-width: 580px">
            <div class="logo d-flex justify-content-center">
                <img src="image/logo.png"  alt="logo" style="width: 120px">
            </div>
            <div class="card-body mt-3">
                <h5 class="card-title text-center">Aplikasi UMKM Kecamatan Katapang</h5>
                <h6 class="card-subtitle mb-2 text-muted text-center">Masuk ke akun anda</h6>
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <div class="input-group-text bg-light border-end-0"><i class="fa-solid fa-envelope pal-1"></i></div>
                            <input type="text" class="form-control border-start-0" id="autoSizingInputGroup" placeholder="Masukan email">
                          </div>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <div class="input-group">
                        <div class="input-group-text bg-light border-end-0"><i class="fa-solid fa-lock pal-1"></i></div>
                        <input type="text" class="form-control border-start-0" id="autoSizingInputGroup" placeholder="Masukan password">
                      </div>
                    </div>
                    <p class="text-end"><a href="" class="text-decoration-none">Lupa password?</a></p>
                    <button type="submit" class="btn btn-primary text-center w-100 mt-3">Masuk</button>
                    {{-- <p class="text-center mt-2"><a href="">Tidak punya akun?</a></p> --}}
                  </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
