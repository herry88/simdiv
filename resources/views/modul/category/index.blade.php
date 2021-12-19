@extends('master')

@section('title')
    <title>Index Category</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Category Page</h1>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('category.create') }}" class="btn btn-primary">Add Page</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Category</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($category as $ct)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ct->name }}</td>
                                    <td>
                                        <a href="{{ route('category.edit', $ct->id) }}"
                                            class="btn btn-warning btn-outline-warning">Edit</a>
                                        <form action="{{ route('category.destroy', $ct->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
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
