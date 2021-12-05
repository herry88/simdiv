@extends('master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Category Page</h1>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <p>ini add</p>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($category as $ct)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ct->name }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center">Tidak Ada Data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
