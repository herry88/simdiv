@extends('master')

@section('title')
    <title>Halaman Add tahun akademik</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Tahun Akademik</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('tahunakademik.store') }}" method="post">
                    @csrf
                    @method('POST')
                    <table class="table table-bordered">
                        <tr>
                            <td>Nama Tahun Akademik</td>
                            <td><input type="text" name="namatahunakademik" class="form-control" id=""></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><input type="text" name="keterangan" class="form-control" id=""></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="btn btn-primary" type="submit">Simpan</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </section>
@endsection
