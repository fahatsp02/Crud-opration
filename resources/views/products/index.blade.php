@extends('layouts.header')
@section('main')
    <div class="container">
        <div class="text-right">
            <a href="products/create" class="btn btn-dark mt-2 mb-2">New Product</a>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)

                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td><a href="products/{{ $product->id }}/show" class="text-dark">{{  $product->name  }}</a></td>
                    <td>{{ $product->description }}</td>
                    <td><img src="/products/{{ $product->image }}" class="rounded-circle" width="40" height="40"></td>
                    <td><a href="products/{{ $product->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
                        <form method="POST" class="d-inline" action="products/{{ $product->id}}/delete">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
        {{ $products->links() }}
    </div>
@endsection