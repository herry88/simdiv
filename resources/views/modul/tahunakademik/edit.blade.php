@extends('master')

@section('title')
    <title>Halaman Edit tahun akademik</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Tahun Akademik</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('tahunakademik.update', $tahunAkademik->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <table class="table table-bordered">
                        <tr>
                            <td>Nama Tahun Akademik</td>
                            <td><input type="text" value="{{ $tahunAkademik->nama_tahunakademik }}"
                                    name="namatahunakademik" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><input type="text" name="keterangan" value="{{ $tahunAkademik->keterangan }}"
                                    class="form-control"></td>
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
