@extends('layouts.depan.menubar')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Cari Aduan</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Cari Aduan</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

<!-- Appointment Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="bg-appointment rounded">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-lg-6 py-5">
                    <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                        <h1 class="text-center text-white mb-4">Cari Laporan Anda</h1>

                        <form action="{{ route('/cari') }}" method="post">
                            <div class="form-group input-group mb-3">
                                <input name="search" type="number" class="form-control border-0 p-4" placeholder="Tulis Kode Aduan Anda" aria-label="Tulis Kode Aduan Anda" aria-describedby="button1" required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit" id="button1">Cari</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->


@endsection
