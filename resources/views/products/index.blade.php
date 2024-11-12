@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Menu</h2>
        </div>
        <div class="pull-right">
            @can('product-create')
            <a class="btn btn-success btn-sm mb-2" href="{{ route('products.create') }}"><i class="fa fa-plus"></i> Create New Menu</a>
            @endcan
        </div>
    </div>
</div>

@session('success')
    <div class="alert alert-success" role="alert"> 
        {{ $value }}
    </div>
@endsession

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Details</th>
        <th width="280px">Action</th>
    </tr>
    @php $i = 0 @endphp
    @foreach ($products as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td> 
            <img src="{{ asset('storage/'.$product->image_path) }}" alt="Image" class="img-fluid" width="100px" height="100px">
            <div>{{ $product->name }}</div>
        </td>
        <td>{{ $product->description }}</td>
        <td>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                <a class="btn btn-info btn-sm" href="{{ route('products.show',$product->id) }}"><i class="fa-solid fa-list"></i> Show</a>
                @can('product-edit')
                <a class="btn btn-primary btn-sm" href="{{ route('products.edit',$product->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                @endcan

                @csrf
                @method('DELETE')

                @can('product-delete')
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                @endcan
            </form>
        </td>
    </tr>
    @endforeach
</table>

<p class="text-center text-primary"><small>Katering App</small></p>
@endsection