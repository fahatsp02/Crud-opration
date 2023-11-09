@extends('layouts.header')
@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <h3 class="text-muted">Product Edit#{{ $product->name}}</h3>
                <form action="{{url('/')}}/products/{{ $product->id }}/update" method="post" enctype="multipart/form-data">  
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name',$product->name) }}">
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                     
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" rows="4" name="description" >{{ old('description',$product->description) }}</textarea>
                        @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                     
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image" value="{{ old('image',$product->image) }}">
                        @if ($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                     
                        @endif
                    </div>
                   <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection