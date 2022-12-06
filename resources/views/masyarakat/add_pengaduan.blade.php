@extends('layouts.app')
@section('content')

   {{-- datatable --}}
    <form action="{{route('send.pengaduan')}}" method="post" enctype="multipart/form-data">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="input-group mb-3">
        <div class="col-2">
            <label for="title" class="col-form-label">Judul</label>
        </div>
        <div class="col-3">
            <input type="text" name="judul" class="form-control" value="{{ old('judul') }}" required>
        </div>
    </div>
    <div class="input-group mb-3">
        <div class="col-2">
            <label for="isi" class="col-form-label" rows="3">Isi Pengaduan</label>
        </div>
        <div class="col-3">
            <textarea class="form-control" rows="3" type="textarea" name="isi" class="form-control" value="{{ old('isi') }}" required></textarea>

        </div>
    </div>
    <div class="input-group mb-3">
        <div class="col-2">
            <label for="filename" class="col-form-label">{{ __('File') }}</label>
        </div>
        <div class="col-3">
            <input type="file" name="file" required>
            <br><span>file harus ppt,pptx,doc,docx,pdf,xls,xlsx max ukuran 2MB  </span>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mfs-3">Tambah</button>
    </form>
@endsection
