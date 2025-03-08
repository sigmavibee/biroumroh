<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link href="{{ asset('build/assets/app-041e359a.css') }}" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{asset('build/assets/assets/css/style.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin.style.css') }}">
     <!-- Sidebar -->
	{{-- <link rel="stylesheet" href="{{asset('css/sidebar.style.css')}}"> --}}
	{{-- <link rel="stylesheet" href="{{asset('css/sidebar.style-2.css')}}"> --}}
    <title>Hana Safar | {{ $title }}</title>
    <link rel="shortcut icon" href="{{asset('assets/brand/favicon.ico')}}" type="image/x-icon">
</head>
<style>
    body {
        font-family: 'Lato', sans-serif;
        background-color: #f5f4f4
    }
    table.table,
    #detailMember .modal-body table.table {
        border-radius: 3px;
        overflow: hidden;
    }
    table.table tr th,
    #detailMember .modal-body table.table tr th {
        background-color: #FFC107 !important;
        color: #2A5044 !important;
    }
</style>
<body onload="removeLoader()">
    <div class="loader-section" id="loader-section">
        <div class="position-absolute top-50 start-50 translate-middle">
            <span class="loader-custom"></span>
        </div>
    </div>

    <div class="wrapper d-flex align-items-stretch">
    <!-- navbar -->
        @include('../partials/sidebar')
    <!-- end navbar -->

    <div class="container-fluid p-4 p-md-5 pt-5">
        <div class="row">
            {{-- main member page --}}
            <div class="col-md-8">
                <div class="member-admin">
                    <h4 class="fw-semibold mb-4 title text-green bg-yellow shadow">Member</h4>
                    <div class="mt-3 daftar-member">
                        <h5 class="mt-2 fw-semibold text-green">Member <i class="fa-solid fa-users text-yellow ms-2"></i></h5>
                        {{-- table member --}}
                        <table class="table table-hover shadow">
                            <tr class="bg-yellow text-green">
                                <th>ID Biro</th>
                                <th>Nama Biro</th>
                                <th>Jumlah Paket</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($biros as $biro )
                            <tr>
                                <td>{{$biro->id}}</td>
                                <td>{{$biro->nama}}</td>
                                <td>{{$biro->pakets->count()}}</td>
                                <td>
                                    <a data-bs-toggle="modal" data-bs-target="#detailMember{{$biro->id}}" class="badge text-decoration-none rounded-pill text-bg-success" style="cursor: pointer">lihat</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        {{-- table member end --}}
                    </div>
                </div>
            </div>
            {{-- end of member page --}}

            {{-- chart --}}
            <div class="col-md-4">
                <div class="w-100 bg-white shadow px-3 py-3 rounded">
                    <h5 class="mb-2 fw-semibold text-green">Member</h5>
                    <canvas id="member-chart"></canvas>
                </div>
                <div class="w-100 bg-white shadow px-3 py-3 rounded mt-3">
                    <h5 class="mb-2 fw-semibold text-green">Paket</h5>
                    <canvas id="paket-chart"></canvas>
                </div>
            </div>
            {{-- end chart --}}
        </div>
    </div>
    </div>

{{-- MODAL START --}}

    {{-- LIHAT MEMBER --}}
    @foreach ($biros as $biro )
    <div class="modal fade" id="detailMember{{$biro->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
            <div class="modal-header bg-green">
              <h1 class="modal-title fs-5 text-light" id="staticBackdropLabel">Detail</h1>
              <a type="button" class="text-light" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark fs-5"></i></a>
            </div>
            <div class="modal-body">
                <div class="row">
                    {{-- profile --}}
                    <div class="col-md-5">
                        <div class="detail-content shadow p-3">
                            <h4 class="text-green fw-semibold">Profile Biro</h4>
                            <hr>
                            <div class="text-start">
                                <div class="mb-3">
                                    <div class="text-green fw-semibold">Nama Biro : </div>
                                    <input type="text" class="form-control py-1 mt-1" value="{{$biro->nama}}" disabled>
                                </div>
                                <div class="mb-3">
                                    <div class="text-green fw-semibold">Nama PT : </div>
                                    <input type="text" class="form-control py-1 mt-1" value="{{$biro->nama_pt}}" disabled>
                                </div>
                                <div class="mb-3">
                                    <div class="text-green fw-semibold">Nama Pemilik : </div>
                                    <input type="text" class="form-control py-1 mt-1" value="{{$biro->pemilik}}" disabled>
                                </div>
                                <div class="mb-3">
                                    <div class="text-green fw-semibold">Ijin Biro Umroh : </div>
                                    <input type="text" class="form-control py-1 mt-1" value="{{$biro->ijin_biro}}" disabled>
                                </div>
                                {{-- <div class="mb-3">
                                    <div class="text-green fw-semibold">Nama Biro : </div>
                                    <input type="text" class="form-control py-1 mt-1" value="Heru Saja" disabled>
                                </div> --}}
                                <div class="mb-3">
                                    <div class="text-green fw-semibold">Nomor Telepon : </div>
                                    <input type="text" class="form-control py-1 mt-1" value="{{$biro->telepon}}" disabled>
                                </div>
                                <div class="mb-3">
                                    <div class="text-green fw-semibold">Alamat : </div>
                                    <input type="text" class="form-control py-1 mt-1" value="{{$biro->alamat}}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end profile --}}

                    {{-- table paket --}}
                    <div class="col-md-7">
                        <div class="paket bg-white p-3 shadow">
                            <h4 class="text-green fw-semibold">Paket</h4>
                            <hr>
                            <table class="table table-hover shadow bg-white">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Paket</th>
                                    <th>Kode Paket</th>
                                    <th>Kota</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($biro->pakets as $paket )

                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$paket->name}}</td>
                                    <td>{{$paket->kode}}</td>
                                    <td>{{$paket->kota}}</td>
                                    <td>
                                        <a data-bs-toggle="modal" data-bs-target="#detailPaket{{$paket->id}}" class="badge rounded-pill text-bg-success text-decoration-none" style="cursor: pointer">Lihat</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    {{-- table paket end --}}
                </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    {{-- LIHAT MEMBER END --}}

    {{-- DETAIL PAKET --}}
    @foreach ($biro->pakets as $paket )
        <div class="modal fade" id="detailPaket{{$paket->id}}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="border-radius: 10px;">
                    <div class="modal-body p-0 overflow-x-hidden">
                        <div class="detail-modal-bg"
                            style="background: url('{{asset('storage/'. $paket->media)}}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                        </div>
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-auto">
                                    <a type="button" class="my-3 text-dark" data-bs-toggle="modal" data-bs-target="#detailMember" title="Kembali"><i
                                            class="fa-solid fa-xmark fs-5"></i></a>
                                </div>
                            </div>
                            <div class="text-start">
                                <h4 class="mb-0 fw-bold mt-0" style="color: #2A5044;">Detail Paket <i
                                        class="fa-solid fa-kaaba" style="color: #FFC20B;"></i></h4>
                                <p class="mb-0 text-secondary mt-2">Selalu Membantu Perjalanan Ibadah Anda</p>
                            </div>
                            <hr>
                            @csrf
                            <div class="sub-detail">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <h6 class="fw-semibold text-green mb-3 judul-sub-detail shadow">
                                            Mengenai
                                            Paket
                                        </h6>
                                        <hr>
                                    </div>
                                    <!--  -->
                                    <div class="col-6">
                                        <p class="ms-3 mt-0 mb-2 me-0">Nama Paket</p>
                                    </div>
                                    <div class="col-1">:</div>
                                    <div class="col-5">{{$paket->name}}</div>
                                    <!--  -->
                                    <!--  -->
                                    <div class="col-6">
                                        <p class="ms-3 mt-0 mb-2 me-0">Kode Paket</p>
                                    </div>
                                    <div class="col-1">:</div>
                                    <div class="col-5">{{$paket->kode}}</div>
                                    <!--  -->
                                </div>
                            </div>
                            <div class="sub-detail mt-4 mb-5">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <h6 class="fw-semibold text-green-custom mb-3 judul-sub-detail shadow">
                                            Detail
                                            Keberangkatan dan
                                            Kepulangan</h6>
                                        <hr>
                                    </div>
                                    <!--  -->
                                    <div class="col-6">
                                        <p class="ms-3 mt-0 mb-2 me-0">Tanggal Keberangkatan</p>
                                    </div>
                                    <div class="col-1">:</div>
                                    <div class="col-5">{{date('d-m-Y', strtotime($paket->tanggal_keberangkatan))}}</div>
                                    <!--  -->
                                    <div class="col-6">
                                        <p class="ms-3 mt-0 mb-2 me-0">Tanggal Kepulangan</p>
                                    </div>
                                    <div class="col-1">:</div>
                                    <div class="col-5">{{date('d-m-Y', strtotime($paket->tanggal_kepulangan))}}</div>
                                    <!--  -->
                                    <!--  -->
                                    <div class="col-6">
                                        <p class="ms-3 mt-0 mb-2 me-0">Kota</p>
                                    </div>
                                    <div class="col-1">:</div>
                                    <div class="col-5">{{$paket->kota}}</div>
                                    <!--  -->
                                    <!--  -->
                                    <div class="col-6">
                                        <p class="ms-3 mt-0 mb-2 me-0">Bandara Keberangkatan</p>
                                    </div>
                                    <div class="col-1">:</div>
                                    <div class="col-5">{{$paket->bandara}}</div>
                                    <!--  -->
                                    <!--  -->
                                    <div class="col-6">
                                        <p class="ms-3 mt-0 mb-2 me-0">Nama Airlines</p>
                                    </div>
                                    <div class="col-1">:</div>
                                    <div class="col-5">{{$paket->airline}}</div>
                                    <!--  -->
                                    <!--  -->
                                    <div class="col-6">
                                        <p class="ms-3 mt-0 mb-2 me-0">Jenis Pemberangkatan</p>
                                    </div>
                                    <div class="col-1">:</div>
                                    <div class="col-5">{{$paket->flight}}</div>
                                    <!--  -->
                                    <!--  -->
                                    @if ($paket->flight == 'transit')
                                    <div class="col-6">
                                        <p class="ms-3 mt-0 mb-2 me-0">Kota Transit</p>
                                    </div>
                                    <div class="col-1">:</div>
                                    <div class="col-5">{{$paket->kota_transit}}</div>
                                    @endif
                                    <!--  -->
                                    <div class="col-6">
                                        <p class="ms-3 mt-0 mb-2 me-0">Harga Paket</p>
                                    </div>
                                    <div class="col-1">:</div>
                                    <div class="col-5">Rp. {{$paket->harga}}</div>
                                    <!--  -->
                                    <!--  -->
                                    <div class="col-12 mt-5">
                                        <h6 class="fw-semibold text-green-custom mb-3 judul-sub-detail shadow">Harga
                                            Sudah
                                            Termasuk</h6>
                                        <hr>
                                    </div>
                                    <!--  -->
                                    <!--  -->
                                    <div class="col-12">
                                        <div class="row justify-content-start text-center">
                                            @if ($paket->tiket == 'yes')
                                            <div class="col-xl-3 col-md-6 col-sm-6">
                                                <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Tiket Pesawat <i
                                                        class="fa-solid fa-plane-departure ms-2"></i></p>
                                            </div>
                                            @endif
                                            @if ($paket->visa == 'yes')
                                            <div class="col-xl-3 col-md-6 col-sm-6">
                                                <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Visa-Siskohat <i
                                                        class="fa-brands fa-cc-visa ms-2"></i></p>
                                            </div>
                                            @endif
                                            @if ($paket->akomodasi == 'yes')
                                            <div class="col-xl-3 col-md-6 col-sm-6">
                                                <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Akomodasi di Saudi <i
                                                        class="fa-solid fa-hotel ms-2"></i></p>
                                            </div>
                                            @endif
                                            @if ($paket->makan == 'yes')
                                            <div class="col-xl-3 col-md-6 col-sm-6">
                                                <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Makan di Saudi <i
                                                        class="fa-solid fa-utensils ms-2"></i></p>
                                            </div>
                                            @endif
                                            @if ($paket->umroh == 'yes')
                                            <div class="col-xl-3 col-md-6 col-sm-6">
                                                <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Umroh 3 Kali <i
                                                        class="fa-solid fa-kaaba ms-2"></i></p>
                                            </div>
                                            @endif
                                            @if ($paket->tour == !null)
                                            <div class="col-xl-3 col-md-6 col-sm-6">
                                                <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Paket Tour <i
                                                        class="fa-solid fa-kaaba ms-2"></i></p>
                                            </div>
                                            @endif
                                            @if ($paket->airpot == 'yes')
                                            <div class="col-xl-3 col-md-6 col-sm-6">
                                                <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Airport Handling <i
                                                        class="fa-solid fa-plane-departure ms-2"></i></p>
                                            </div>
                                            @endif
                                            @if ($paket->bus == 'yes')
                                            <div class="col-xl-3 col-md-6 col-sm-6">
                                                <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Bus Selama di Saudi <i
                                                        class="fa-solid fa-bus ms-2"></i></p>
                                            </div>
                                            @endif
                                            @if ($paket->zam == 'yes')
                                            <div class="col-xl-3 col-md-6 col-sm-6">
                                                <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Zam-zam 5 Liter <i
                                                        class="fa-solid fa-bottle-water ms-2"></i></p>
                                            </div>
                                            @endif
                                            @if ($paket->passport == 'yes')
                                            <div class="col-xl-3 col-md-6 col-sm-6">
                                                <p class="ms-0 mt-0 mb-3 me-0 fasilitas">Passport <i
                                                        class="fa-solid fa-passport ms-2"></i></p>
                                            </div>
                                            @endif
                                            <!--  -->
                                        </div>
                                    </div>
                                    <!--  -->
                                    <!--  -->
                                    <div class="col-12">
                                        <hr>
                                        <div class="row justify-content-start">
                                            <div class="col-auto">
                                                <div class="text-green fw-semibold mb-2">saya tertarik dengan paket ini</div>
                                                <a class="btn btn-warning px-5 text-green fw-semibold shadow" href="https://wa.me/089658978803" target="_blank">Hubungi kami <i class="fa-brands fa-whatsapp"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- END DETAIL PAKET --}}

{{-- MODAL END --}}

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"> </script>
<!-- sidebar script -->
<script src="{{asset('js/sidebar.jquery.min.js')}}"></script>
<script src="{{asset('js/sidebar.popper.js')}}"></script>
<script src="{{asset('js/sidebar.bootstrap.min.js')}}"></script>
<script src="{{asset('js/sidebar.main.js')}}"></script>
<!-- end sidebar script -->
<script>

    function removeLoader() {
        document.getElementById('loader-section').classList.add('d-none')
    }

    // chart member
    const member = document.getElementById('member-chart');
    new Chart(member, {
      type: 'line',
      data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
        datasets: [{
          label: 'Tren Pendaftaran Anggota',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1,
          borderColor: '#2A5044',
          backgroundColor: '#FFC107',
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
    // end member chart

    // paket chart
    const paket = document.getElementById('paket-chart');
    new Chart(paket, {
      type: 'line',
      data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
        datasets: [{
          label: 'Tren Paket Biro',
          data: [20, 40, 15, 35, 5, 10],
          borderWidth: 1,
          borderColor: '#2A5044',
          backgroundColor: '#FFC107',
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
    // end paket chart

</script>
</body>
</html>
