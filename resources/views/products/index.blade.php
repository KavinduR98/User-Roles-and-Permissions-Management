@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Users') }}</div>

                    <div class="card-body">

                        @session('success')
                            <div class="alert alert-success">
                                {{ $value }}
                            </div>
                        @endsession

                        @can('product-create')
                            <a class="btn btn-success mb-3" href="{{ route('products.create') }}">Create Product</a>
                        @endcan
                        
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                                                @csrf
                                                @method('DELETE')

                                                @can('product-list')
                                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Show</a>
                                                @endcan
                                                @can('product-edit')
                                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                @endcan
                                                @can('product-delete')
                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                                @endcan
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
