@extends ('templates.default')

@php
  $title = 'Data Pengunjung';
  $preTitle = 'Tambah Data Pengunjung';
@endphp

@section('content')
<div class="card">
  <div class="card-body">
    <form action="/pengunjungs" class="" method="post" enctype="multipart/form-data">

    @csrf

      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="name" class="form-control @error('name')
          is-invalid
        @enderror"  placeholder="Tulis Namamu" value="{{ old('name')}}">
        @error('name')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="address" class="form-control @error('address')
          is-invalid
        @enderror" placeholder="Tulis Alamat" value="{{ old('address')}}">
        @error('address')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Nomer Telephone</label>
        <input type="text" name="phone_number" class="form-control @error('phone_number')
          is-invalid
        @enderror" placeholder="Tulis No" value="{{ old('phone_number')}}">
        @error('phone_number')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Foto</label>
        <input type="file" name="photo" class="form-control @error('photo')
          is-invalid
        @enderror"  placeholder="Tulis No" value="{{ old('photo')}}">
        @error('photo')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <input type="submit" value="Simpan" class="btn btn-primary">
    </form>
  </div>
</div>
@endsection