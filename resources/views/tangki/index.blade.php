@extends('template.main')
@section('content')
<h3 class="d-inline">Data Tangki</h3>
{{-- <a href="{{ route('tangki.create') }}" class="btn btn-primary float-end">Tambah Data</a> --}}
<hr>
@if (session()->has('success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<table class="table table-striped mt-5">
    <thead>
        <th scope="col">No</th>
        <th scope="col">Nama Tangki</th>
        <th scope="col">Tinggi</th>
        <th scope="col">Volume</th>
        <th scope="col">Suhu</th>
        <th scope="col">Aksi</th>
    </thead>
    <tbody>
        @foreach ($tangki as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->tinggi }}</td>
            <td>{{ $item->volume }}</td>
            <td>{{ $item->suhu }}</td>
            <td>
                <a href="{{ route('tangki.edit',['tangki'=>$item]) }}" class="btn btn-sm btn-success"><i class="bi bi-pencil"></i></a>
                <a href="{{ route('tangki.show',['tangki'=>$item]) }}" class="btn btn-sm btn-warning"><i class="bi bi-eye"></i></a>
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$loop->iteration  }}"><i class="bi bi-trash"></i></button>
                {{-- </form> --}}

                      <!-- Modal -->
                      <div class="modal fade" id="modal-{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Apakah Anda yakin ingin Menghapus data ?</h5>
                                    <br> <br>
                                    <div class="row justify-content-center">

                                        <div class="col-5">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                            <form action="{{ route('tangki.destroy',['tangki'=>$item]) }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                          </div>
                        </div>
                      </div>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
