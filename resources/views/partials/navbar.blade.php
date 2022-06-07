<nav class="navbar navbar-expand-lg navbar-dark" style="background: #0D6EFD">
    <div class="container-fluid">
        <a href="/dashboard" class="navbar-brand">
            <img src="/image/logo.png" alt="Logo JABAR" width="34">
            UMKM APP
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="/barang" class="nav-link">List Barang</a>
                </li>
                <li class="nav-item">
                    <a href="/toko" class="nav-link">List Toko</a>
                </li>
            </ul>
        </div>
        <form class="d-flex" role="search">
            <i class="fa-solid fa-magnifying-glass position-absolute" style="margin-top: 12px; margin-left:18px; opacity: 60%"></i>
            <input class="form-control me-5 ps-5" style="width: 20rem" type="search" placeholder="Silahkan ketik untuk mencari..." aria-label="Search">
            {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
        </form>
        <div class="float-end">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <img class="" src="/image/pp.png" alt="" width="34">
                    <a class="nav-link dropdown-toggle d-inline" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Agus Setiabudi
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>