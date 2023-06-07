@extends ('templates.default')

@php
    $title = 'Data Pengunjung';
    $preTitle = 'Edit Data Pengunjung';
@endphp

@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{ route('pengunjungs.update', $pengunjung->id) }}" class="" method="post">

    @csrf
    @method('PUT')

      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="name" class="form-control @error('name')
          is-invalid
        @enderror" name="example-text-input" 
        placeholder="Tulis Namamu" value="{{ old('name') ?? $pengunjung->name }}">
        @error('name')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="address" class="form-control @error('address')
          is-invalid
        @enderror" name="example-text-input" 
        placeholder="Tulis Alamatmu" value="{{ old('address') ?? $pengunjung->address }}">
        @error('address')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Nomer Telephone</label>
        <input type="text" name="phone_number" class="form-control @error('phone_number')
          is-invalid
        @enderror" name="example-text-input" 
        placeholder="Tulis Nomermu" value="{{ old('phone_number') ?? $pengunjung->phone_number }}">
        @error('phone_number')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
      </div>
      <input type="submit" value="Simpan" class="btn btn-primary">
    </form>
  </div>
</div>
@endsection