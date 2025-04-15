@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-nu-blue">Publisher Information</h1>
        <a href="{{ route('publishers.index') }}" class="btn btn-outline-nu-blue">
            <i class="fas fa-arrow-left me-1"></i> Back to Publishers
        </a>
    </div>

    <div class="card bg-nu-light border-0 shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <div class="bg-nu-blue-light p-5 rounded d-inline-block">
                        <i class="fas fa-building text-nu-blue" style="font-size: 3rem;"></i>
                    </div>
                </div>
                <div class="col-md-8">
                    <h2 class="text-nu-blue">{{ $publisher->name }}</h2>
                    
                    <div class="mb-4">
                        <h5 class="text-nu-blue"><i class="fas fa-map-marker-alt me-2"></i>Address</h5>
                        <p>{{ $publisher->address }}</p>
                    </div>
                    
                    <div class="card bg-nu-blue-lighter border-0">
                        <div class="card-body">
                            <h5 class="text-nu-blue">About</h5>
                            <p>{{ $publisher->details }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection