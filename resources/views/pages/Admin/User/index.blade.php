<!DOCTYPE html>
<html lang="en">
    <head>
        @include('pages.Admin.Components.head')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>

    </head>

  <body>
    @include('pages.Admin.Components.sidebar')


    <!-- Main Content -->
    <main class="content">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <div>
                <button
                  class="sidebarCollapseDefault btn p-0 border-0 d-none d-md-block"
                  aria-label="Hamburger Button"
                >
                  <i class="fa-solid fa-bars"></i>
                </button>
                <button
                  data-bs-toggle="offcanvas"
                  data-bs-target=".sidebar"
                  aria-controls="sidebar"
                  aria-label="Hamburger Button"
                  class="sidebarCollapseMobile btn p-0 border-0 d-block d-md-none"
                >
                  <i class="fa-solid fa-bars"></i>
                </button>
              </div>
            </div>
        </nav>
        <div class="container">
            <div class="main-body">

                <div class="row">
                    <h3>Tabel User</h3>
                    <table id="transaksi" class="table-responsive-lg table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">NPM</th>
                                <th class="text-center">Kelas</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($user as $item)
                            <tr>
                                <td class="text-center">{{$item->id}}</td>
                                <td class="text-center">{{$item->name}}</td>
                                <td class="text-center">{{$item->username}}</td>
                                <td class="text-center">{{$item->npm}}</td>
                                <td class="text-center">{{$item->kelas}}</td>
                                <td class="text-center">{{$item->email}}</td>
                                    <td class="d-flex"><button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#inlineForm{{$item->id}}">
                                            Perbarui
                                        </button>
                                        <div class="modal fade text-left" id="inlineForm{{$item->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel33" aria-hidden="true">
                                           <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                               <div class="modal-content">


                                                   <form action="{{ route('admin.user.update',$item->id)}}" method="post">
                                                       @method('put')
                                                       @csrf
                                                       <div class="modal-body">
                                                           Perbarui Data {{$item->name}}
                                                           <hr>
                                                           <div class="form-group">
                                                            <label>Nama Lengkap </label>
                                                            <input type="text" value=" {{$item->name}}"
                                                                   class="form-control" name="name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Username </label>
                                                            <input type="text" value=" {{$item->username}}"
                                                                   class="form-control" name="username" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>NPM </label>
                                                            <input type="text" value=" {{$item->npm}}"
                                                                   class="form-control" name="npm" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kelas</label>
                                                            <input type="text" value=" {{$item->kelas}}"
                                                                   class="form-control" name="kelas" required >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email </label>
                                                            <input type="email" value=" {{$item->email}}"
                                                                   class="form-control" name="email" required>
                                                        </div>

                                                       <div class="modal-footer">
                                                           <button type="button" class="btn btn-light-secondary"
                                                                   data-bs-dismiss="modal">
                                                               <i class="bx bx-x d-block d-sm-none"></i>
                                                               <span class="d-none d-sm-block">Close</span>
                                                           </button>
                                                           <button type="submit" class="btn btn-primary ml-1"
                                                           >
                                                               <i class="bx bx-check d-block d-sm-none"></i>
                                                               <span class="d-none d-sm-block">Perbarui</span>
                                                           </button>
                                                       </div>
                                                   </form>
                                               </div>
                                           </div>
                                       </div>


                                    </td>
                            </tr>
                            @empty
                            Tidak ada Transaksi
                            @endforelse

                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </main>
    <!-- Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="{{asset('dashboard/js/donut_chart.js')}}"></script>
    <script src="{{asset('dashboard/js/line_chart.js')}}"></script>

    <script>
      $(document).ready(function () {
        $('.sidebarCollapseDefault').on('click', function () {
          $('.sidebar').toggleClass('active');
          $('.content').toggleClass('active');
        });
      });
    </script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
<script>$(document).ready(function () {
    $('#transaksi').DataTable();
});</script>

<script>$(document).ready(function () {
    $('#saldo').DataTable();
});</script>
  </body>
</html>
