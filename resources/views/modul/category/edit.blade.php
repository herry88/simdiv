@extends('master')

@section('title')
    <title>Edit Category</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Category</h1>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Page</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update', $category->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <table class="table table-bordered">
                            <tr>
                                <td>Nama</td>
                                <td>
                                    <input class="form-control" type="text" name="name_category"
                                        value="{{ $category->name }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>
                                    <input class="form-control" type="text" value="{{ $category->description }}"
                                        name="description">
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><button class="btn btn-primary">Simpan </button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
