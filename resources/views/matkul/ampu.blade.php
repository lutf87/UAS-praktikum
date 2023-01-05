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
                        <th scope="col">Nama Matkul</th>
                        <th scope="col">Kode Matkul</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row"></th>
                        <td>{{ $item->nama_matkul }}</td>
                        <td>{{ $item->kode_matkul }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
