@extends('template')

@section('content')
    <h2>Halaman Data Mata Kuliah Yang diampu</h2>
    <div class="card mt-4 border-0 shadow rounded" style="width: auto">
        <div class="card-header text-bg-secondary">
            <h4>Data Mata Kuliah</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Dosen</th>
                        <th scope="col">Mata Kuliah Yang Diampu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
