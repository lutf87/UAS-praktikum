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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <div class="row">
                                Nama
                            </div>
                            <div class="row mt-2">
                                <a href="{{ route('dosen.profile', 1) }}" class="btn btn-primary" style="width: auto">Lihat Profile</a>
                            </div>
                        </td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
