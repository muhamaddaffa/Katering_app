@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Menu</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary btn-sm mb-2" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
    <div class="form-group">
                <strong>Upload Menu:</strong>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="price" class="form-control" placeholder="Price" values="{{ $product->price }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary btn-sm mb-2 mt-2"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
        </div>
    </div>
</form>

<p class="text-center text-primary"><small>Katering App</small></p>
@endsection