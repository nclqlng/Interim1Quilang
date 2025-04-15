@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-nu-blue">Book Details</h1>
        <a href="{{ route('books.index') }}" class="btn btn-outline-nu-blue">
            <i class="fas fa-arrow-left me-1"></i> Back to Books
        </a>
    </div>

    <div class="card bg-nu-light border-0 shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <div class="bg-nu-blue-light p-4 rounded">
                        <i class="fas fa-book-open text-nu-blue" style="font-size: 5rem;"></i>
                    </div>
                </div>
                <div class="col-md-8">
                    <h2 class="text-nu-blue">{{ $book->title }}</h2>
                    <p class="text-muted">by {{ $book->author }}</p>
                    
                    <div class="mb-3">
                        <span class="badge bg-nu-gold text-nu-blue">Published: {{ $book->year_published }}</span>
                    </div>
                    
                    <div class="card bg-nu-blue-lighter border-0 mb-3">
                        <div class="card-body">
                            <h5 class="text-nu-blue">Details</h5>
                            <p>{{ $book->details }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection