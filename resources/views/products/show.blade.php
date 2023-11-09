@extends('layouts.header')
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="card p-4">
                <p>Name : <b>{{ $product->name}}</b></p>
                <p>Description : <b>{{ $product->description}}</b></p>
                <img src="/products/{{ $product->image }}" class="rounded" width="20%">
            </div>

        </div>

    </div>
</div>
@endsection