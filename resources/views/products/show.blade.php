@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Product') }}</div>

                <div class="card-body">

                    <a class="btn btn-info mb-3" href="{{ route('products.index') }}">Back</a>
                    
                    <p><strong>Name: </strong> {{ $product->name }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
