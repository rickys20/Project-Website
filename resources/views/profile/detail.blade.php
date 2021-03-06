@extends('welcome')
@section('content')
<div class="container-fluid">    
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-5 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Details</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <img src="{{ asset('admin/img/gbr1.png') }}" width="300" height="300">
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-7 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Deskripsi</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <p>Nama : Baju A</p>
                    <p>Jenis : Type B</p>
                    <p>Ukuran : 100, 200</p>
                    <p>Alamat Toko: Perum Jati Asri No.100, Jombang</p>
                    <a href="https://wa.me/082323995527">
                        <button class="btn btn-primary" type="button">Hubungi Penjual</button>
                        <!-- <input type="submit" value="Hubungi Penjual" /> -->
                    </a>
                    <br><br>
                    <a href="/ukuran">
                        <button class="btn btn-primary" type="button">Ubah Postur</button>
                        <!-- <input type="submit" value="Hubungi Penjual" /> -->
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection