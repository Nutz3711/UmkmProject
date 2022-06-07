@extends('layouts.main')

@section('content')
    <div class="container-fluid pt-3">
        <h3>Dashboard</h3>
        
        <div class="card p-4" style="width: ">
            <div class="d-flex">
                <div class="dropdown me-3">
                    <a style="background: #0D6EFD" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Daging
                    </a>
                
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a style="background: #0D6EFD" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Bulan
                    </a>
                
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">sadf</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
            
            <canvas id="myChart"></canvas>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const labels = [
                  'January',
                  'February',
                  'March',
                  'April',
                  'May',
                  'June',
                ];
              
                const data = {
                  labels: labels,
                  datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgba(13,110,253,1)',
                    borderColor: 'rgba(13,110,253,1)',
                    data: [0, 10, 5, 2, 20, 30, 45],
                  }]
                };
              
                const config = {
                  type: 'line',
                  data: data,
                  options: {}
                };
              </script>
            <script>
                const myChart = new Chart(
                  document.getElementById('myChart'),
                  config
                );
              </script>
              
        </div>

        <div class="card p-4 my-4">
            <h3>Toko Terbaru</h3>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Toko</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Pemilik</th>
                        <th scope="col">Barang</th>
                        <th scope="col">Jenis Toko</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>Thornton</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card p-4 my-4">
            <h3>Barang Terbaru</h3>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Nama Toko</th>
                        <th scope="col">Jenis Barang</th>
                        <th scope="col">Harga Barang</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
       
    </div>

@endsection