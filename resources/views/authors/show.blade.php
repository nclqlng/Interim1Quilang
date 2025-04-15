@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-nu-blue">Author Profile</h1>
        <a href="{{ route('authors.index') }}" class="btn btn-outline-nu-blue">
            <i class="fas fa-arrow-left me-1"></i> Back to Authors
        </a>
    </div>

    <div class="card bg-nu-light border-0 shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <div class="bg-nu-blue-light p-5 rounded-circle d-inline-block">
                        <i class="fas fa-user-edit text-nu-blue" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="mt-3 text-nu-blue">{{ $author->name }}</h3>
                    <p class="text-muted mb-0">Age: {{ $author->age }}</p>
                </div>
                <div class="col-md-8">
                    <div class="mb-4">
                        <h5 class="text-nu-blue"><i class="fas fa-map-marker-alt me-2"></i>Address</h5>
                        <p>{{ $author->address }}</p>
                    </div>
                    
                    <div class="card bg-nu-blue-lighter border-0">
                        <div class="card-body">
                            <h5 class="text-nu-blue">Biography</h5>
                            <p>{{ $author->details }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection