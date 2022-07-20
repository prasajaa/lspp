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
                    <h3>Tabel Kursus</h3>
                    <div style="margin-top: 10px; margin-bottom: 10px">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#baru">
                                            + Kursus
                                        </button>
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#jenis">
                                            + Jadwal
                                        </button>
                                        <div class="modal fade text-left" id="baru" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel33" aria-hidden="true">
                                           <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                               <div class="modal-content">
                                                   <form action="{{ route('admin.kursus.store')}}" method="post">
                                                       @csrf
                                                       <div class="modal-body">
                                                           Tambah Kursus
                                                           <hr>
                                                           <div class="form-group">
                                                            <label>Nama Kursus </label>
                                                            <input type="text"
                                                                   class="form-control" name="title" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Keterangan </label>
                                                            <input type="text"
                                                                   class="form-control" name="keterangan" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Waktu </label>
                                                            <input type="text"
                                                                   class="form-control" name="waktu" required>
                                                        </div>
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

                                       <div class="modal fade text-left" id="jenis" tabindex="-1" role="dialog"
                                       aria-labelledby="myModalLabel33" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                           role="document">
                                          <div class="modal-content">
                                              <form action="{{route('admin.jadwal.store')}}" method="post">
                                                  @csrf
                                                  <div class="modal-body">
                                                      Tambah Jadwal
                                                      <hr>
                                                      <div class="form-group">
                                                        <label>Pilih Kursus : </label>
                                                        <select name="kursuses_id" id="kursuses_id" class="form-control">
                                                            @foreach ($kursus as $item)
                                                            <option value="{{ $item->id }}">
                                                                {{ $item->title }}
                                                            </option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                   <div class="form-group">
                                                       <label>Keterangan </label>
                                                       <input type="text"
                                                              class="form-control" name="keterangan" required>
                                                   </div>
                                                   <div class="form-group">
                                                    <label>Jadwal </label>
                                                    <input type="datetime-local"
                                                           class="form-control" name="hari" required>
                                                </div>
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
                                  <table id="transaksi" class="table-responsive-lg table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">keterangan</th>
                                            <th class="text-center">Waktu</th>
                                            <th class="text-center">Jadwal</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($kursus as $item)
                                        <tr>
                                            <td class="text-center">{{$item->id}}</td>
                                            <td class="text-center">{{$item->title}}</td>
                                            <td class="text-center">{{$item->keterangan}}</td>
                                            <td class="text-center">{{$item->waktu}} Hari</td>
                                            <td class="text-center">
                                                <ol>
                                                    @foreach ($item->Jadwal as $jadwal )
                                                    <li>
                                                        {{$jadwal->keterangan}}: {{ date('d M Y - H:i', strtotime($jadwal->hari)) }}
                                                        </li>
                                                    @endforeach
                                                </ol>
                                            </td>

                                                <td class=" text-center d-flex"><button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                    data-bs-target="#inlineForm{{$item->id}}">
                                                        Perbarui
                                                    </button>
                                                    <div class="modal fade text-left" id="inlineForm{{$item->id}}" tabindex="-1" role="dialog"
                                                        aria-labelledby="myModalLabel33" aria-hidden="true">
                                                       <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                            role="document">
                                                           <div class="modal-content">


                                                               <form action="{{ route('admin.kursus.update',$item->id)}}" method="post">
                                                                   @method('put')
                                                                   @csrf
                                                                   <div class="modal-body">
                                                                       Perbarui Data {{$item->name}}
                                                                       <hr>
                                                                       <div class="form-group">
                                                                        <label>Nama Sampah </label>
                                                                        <input type="text" value=" {{$item->title}}"
                                                                               class="form-control" name="title" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Harga </label>
                                                                        <input type="text" value=" {{$item->price}}"
                                                                               class="form-control" name="price" required>
                                                                    </div>

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

                                                   <form action="{{route('admin.kursus.destroy',$item->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                               <!-- Button trigger for danger theme modal -->
                                                           <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                               data-bs-target="#danger{{$item->id}}">
                                                               Hapus
                                                           </button>
                                                           <!--Danger theme Modal -->
                                                           <div class="modal fade text-left" id="danger{{$item->id}}" tabindex="-1" role="dialog"
                                                               aria-labelledby="myModalLabel120" aria-hidden="true">
                                                               <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                                   role="document">
                                                                   <div class="modal-content">

                                                                       <div class="modal-body">
                                                                           Yakin untuk menghapus data transaksi dengan Nomor Invoice {{ $item->invoice }} ?
                                                                       </div>
                                                                       <div class="modal-footer">
                                                                           <button type="button" class="btn btn-light-secondary"
                                                                               data-bs-dismiss="modal">
                                                                               <i class="bx bx-x d-block d-sm-none"></i>
                                                                               <span class="d-none d-sm-block">Close</span>
                                                                           </button>
                                                                           <button type="submit" class="btn btn-danger ml-1">
                                                                               <i class="bx bx-check d-block d-sm-none"></i>
                                                                               <span class="d-none d-sm-block">Yakin</span>
                                                                           </button>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                </form>
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
