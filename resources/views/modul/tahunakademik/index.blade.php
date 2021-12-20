@extends('master')

@section('title')
    <title>Index tahun akademik</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tahun Akademik</h1>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('tahunakademik.create') }}" class="btn btn-primary">Add Data</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tahun Akademik</th>
                                <th>Keterangan</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tahunAkademik as $ta)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ta->nama_tahunakademik }}</td>
                                    <td>{{ $ta->keterangan }}</td>
                                    <td><a href="{{ route('tahunakademik.edit', $ta->id) }}" class="btn btn-warning"><i
                                                class="fas fa-edit"></i></a>
                                        <form action="{{ route('tahunakademik.destroy', $ta->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
