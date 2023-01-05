@extends('template')

{{-- @section('title', 'Dosen | Profil') --}}
@section('content')
    <h2>Hamalan Profile Dosen</h2>
    <div class="card mt-4 border-0 shadow rounded" style="width: auto">
        <div class="card-header text-bg-secondary">
            <h4>Data Dosen</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Foto</th>
                        <td scope="col">Matkul</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dosen as $item1)
                    <tr>
                        <td></td>
                        <td>
                            <div class="row">{{ $item1->nama_dosen }}</div>
                            <div class="row mt-2">
                                <a href="{{ route('dosen.profile', 1) }}" class="btn btn-primary" style="width: auto">Lihat Profile</a>
                            </div>
                        </td>
                        <td>{{ $item1->nip }}</td>
                        <td>{{ $item1->foto_dosen }}</td>
                        <td></td>
                        <th scope="row"></th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
