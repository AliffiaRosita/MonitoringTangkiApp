@extends('template.main')
@section('content')

<h4 class="text-center mb-5">Form Tambah Tangki</h4>
<div class="row justify-content-center">
    <div class="col-md-7 ">
        <div class="card">
                <div class="card-body">
                        <form method="POST" action="{{ route('tangki.store') }}">
                            @csrf
                            <small>Catatan: tanda * menunjukkan kolom inputan wajib diisi</small>
                                <div class="mb-3 mt-3">
                                  <label for="nama" class="form-label @error('nama') is-invalid @enderror">Nama Tangki *</label>
                                  <input type="text"  name="nama" class="form-control" value="{{ old('nama') }}" id="nama">
                                  @error('nama')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                                  @enderror
                                </div>
                                <div class="mb-3">
                                  <label for="tinggi" class="form-label @error('tinggi') is-invalid @enderror">Tinggi *</label>
                                  <input type="number" value="{{ old('tinggi') }}" name="tinggi" step="0.01" class="form-control" id="tinggi">
                                  @error('tinggi')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                                  @enderror
                                </div>
                                <div class="mb-3">
                                  <label for="volume" class="form-label @error('volume') is-invalid @enderror">Volume *</label>
                                  <input type="number" name="volume" value="{{ old('volume') }}" step="0.01" class="form-control" id="volume">
                                  @error('volume')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                                  @enderror
                                </div>
                                <div class="mb-3">
                                  <label for="suhu" class="form-label @error('suhu') is-invalid @enderror">Suhu *</label>
                                  <input type="number" name="suhu" step="0.01" value="{{ old('suhu') }}" class="form-control" id="suhu">
                                  @error('suhu')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                                  @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                </div>
              </div>
    </div>
</div>
@endsection
