@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Product') }}</div>

                <div class="card-body">

                    <a class="btn btn-info" href="{{ route('products.index') }}">Back</a>
                    
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf

                        <div class="mt-2">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class=" mt-2">
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
