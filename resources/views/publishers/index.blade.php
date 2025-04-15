@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-nu-blue">Publishers</h1>
        <a href="{{ route('home') }}" class="btn btn-outline-nu-blue">
            <i class="fas fa-arrow-left me-1"></i> Back to Home
        </a>
    </div>

    <div class="row g-4">
        @foreach($publishers as $publisher)
        <div class="col-md-6">
            <div class="card bg-nu-light h-100 border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-start mb-3">
                        <div class="bg-nu-gold-light p-3 rounded me-3">
                            <i class="fas fa-building text-nu-blue fs-4"></i>
                        </div>
                        <div>
                            <h5 class="mb-1 text-nu-blue">{{ $publisher->name }}</h5>
                            <p class="text-muted mb-2"><i class="fas fa-map-marker-alt me-1"></i>{{ $publisher->address }}</p>
                        </div>
                    </div>
                    <p class="mb-3">{{ Str::limit($publisher->details, 150) }}</p>
                    <a href="{{ route('publishers.show', $publisher->id) }}" class="btn btn-sm btn-nu">
                        <i class="fas fa-info-circle me-1"></i> Details
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection