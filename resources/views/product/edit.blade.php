@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Product
            </div>
            <div class="card-body">
                <form action="{{ route('product.update',$id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('product.form')

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('product.index')}}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>

    </div>

@endsection