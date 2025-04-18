@extends('layouts.layout')
@section('content')
    <div class="container">
        <h2>Product Details</h2>

        <div class="card">
            <div class="card-body">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" width="250" class="mb-3">
                @endif

                <p><strong>Name:</strong> {{ $product->name }}</p>
                <p><strong>Description:</strong> {{ $product->description }}</p>
                <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
                <p><strong>Category:</strong> {{ $product->category->name ?? '-' }}</p>
                <p><strong>Status:</strong>
                    <span class="badge bg-{{ $product->status === 'active' ? 'success' : 'secondary' }}">
                        {{ ucfirst($product->status) }}
                    </span>
                </p>

                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('product.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>

@endsection