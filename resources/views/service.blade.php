@extends('layouts.depan.menubar')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Service</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Service</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3">
                    <h6 class="text-uppercase">Layanan Kami</h6>
                    <h1 class="mb-4">Layanan Pengaduan</h1>
                    <p>Masyarakat dapat menyampaikan pengaduan kepada KPK melalui surat, datang langsung, telepon, SMS, atau KPK Whistleblower's System (KWS). Tindak lanjut penanganan laporan tersebut sangat bergantung pada kualitas laporan yang disampaikan.</p>
                    <!-- <a href="" class="btn btn-primary mt-2">More Services</a> -->
                </div>
                <div class="col-lg-9 pt-5 pt-lg-0">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-landmark"></i>
                            </div>
                            <h5 class="mb-4 px-4">WHISTLEBLOWER'S SYSTEM (KWS)</h5>
                            <p class="m-0">kerahasiaan pelapor dijamin dari kemungkinan terungkapnya identitas kepada publik</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-users"></i>
                            </div>
                            <h5 class="mb-4 px-4">DATA  PENDUKUNG LAPORAN</h5>
                            <p class="m-0">Data pendukung yang perlu disampaikan adalah data pendukung yang berkaitan dengan dugaan tindak pidana korupsi yang dilaporkan</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-hand-holding-usd"></i>
                            </div>
                            <h5 class="mb-4 px-4">PENGHARGAAN BAGI PELAPOR</h5>
                            <p class="m-0">Sesuai dengan pasal 13 Peraturan Pemerintah Republik Indonesia Nomor 43 tahun 2018 </p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-gavel"></i>
                            </div>
                            <h5 class="mb-4 px-4">LAPORAN/PENGADUAN YANG BAIK</h5>
                            <p class="m-0">Laporan/Pengaduan disampaikan secara tertulis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

@endsection
