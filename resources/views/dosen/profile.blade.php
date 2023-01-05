@extends('template')

@section('content')
    <div class="card border-0 shadow rounded" style="width: 700px">
        <div class="card-header text-bg-secondary">
            <div class="row">
                <div class="col">
                    <h4>Profil Dosen</h4>
                </div>
                <div class="col">
                    <a href="{{ route('dosen.index') }}" class="btn btn-danger btn-sm f">Kembali</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('images/profile-sarpras.jpg') }}" alt="Foto Dosen" style="height: 200px">
                </div>
                <div class="col-6">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>nama dosen</td>
                            </tr>
                            <tr>
                                <td>NIP</td>
                                <td>nip</td>
                            </tr>
                            <tr>
                                <td>Mata Kuliah Yang Diampu</td>
                                <td><a href="#" class="btn btn-primary">matkul</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
