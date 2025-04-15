@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-nu-blue">Authors Directory</h1>
        <a href="{{ route('home') }}" class="btn btn-outline-nu-blue">
            <i class="fas fa-arrow-left me-1"></i> Back to Home
        </a>
    </div>

    <div class="row g-4">
        @foreach($authors as $author)
        <div class="col-md-6 col-lg-4">
            <div class="card bg-nu-light h-100 border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-nu-gold-light p-3 rounded-circle me-3">
                            <i class="fas fa-user-edit text-nu-blue fs-4"></i>
                        </div>
                        <div>
                            <h5 class="mb-0 text-nu-blue">{{ $author->name }}</h5>
                            <small class="text-muted">Age: {{ $author->age }}</small>
                        </div>
                    </div>
                    <p class="text-muted mb-2"><i class="fas fa-map-marker-alt me-2 text-nu-blue"></i>{{ $author->address }}</p>
                    <p class="mb-3">{{ Str::limit($author->details, 100) }}</p>
                    <a href="{{ route('authors.show', $author->id) }}" class="btn btn-sm btn-nu">
                        <i class="fas fa-eye me-1"></i> View Profile
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection