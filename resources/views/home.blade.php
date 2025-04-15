@extends('layouts.app')

@section('content')
    <section class="hero-section">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="display-4 fw-bold mb-4 text-shadow">Discover Knowledge at NU Laguna LRC</h1>
                    <p class="lead mb-4">Explore our extensive collection of academic resources, research materials, and literary works to support your educational journey.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('books.index') }}" class="btn btn-nu btn-lg px-4">
                            <i class="fas fa-book me-2"></i>Browse Collection
                        </a>
                        <a href="#resources" class="btn btn-nu-outline btn-lg px-4">
                            <i class="fas fa-search me-2"></i>Explore Resources
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             class="img-fluid rounded-xl shadow-lg floating" 
                             alt="Library Books" 
                             style="max-height: 400px; width: 100%; object-fit: cover;">
                        <div class="position-absolute bottom-0 start-0 bg-nu-gold text-nu-blue p-3 rounded-tr-xl">
                            <i class="fas fa-award fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-nu-light" id="resources">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="h1 text-nu-blue mb-3">Our Resources</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Access a wide range of academic materials to support your learning and research needs.</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0">
                        <div class="card-img-top bg-nu-blue-light d-flex align-items-center justify-content-center" style="height: 180px;">
                            <i class="fas fa-book-open text-nu-blue" style="font-size: 3rem;"></i>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 text-nu-blue">Books Collection</h3>
                            <p class="text-muted">Explore thousands of academic and reference books across various disciplines.</p>
                            <a href="{{ route('books.index') }}" class="btn btn-sm btn-nu mt-3">View Books</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 border-0">
                        <div class="card-img-top bg-nu-gold-light d-flex align-items-center justify-content-center" style="height: 180px;">
                            <i class="fas fa-user-edit text-nu-blue" style="font-size: 3rem;"></i>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 text-nu-blue">Authors Directory</h3>
                            <p class="text-muted">Discover the brilliant minds behind our collection of academic works.</p>
                            <a href="{{ route('authors.index') }}" class="btn btn-sm btn-nu mt-3">View Authors</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 border-0">
                        <div class="card-img-top bg-nu-blue-light d-flex align-items-center justify-content-center" style="height: 180px;">
                            <i class="fas fa-building text-nu-blue" style="font-size: 3rem;"></i>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 text-nu-blue">Publishers</h3>
                            <p class="text-muted">Explore the publishers that contribute to our academic resources.</p>
                            <a href="{{ route('publishers.index') }}" class="btn btn-sm btn-nu mt-3">View Publishers</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-nu-blue-lighter">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                         class="img-fluid rounded-xl shadow-lg" 
                         alt="Students studying"
                         style="max-height: 400px; width: 100%; object-fit: cover;">
                </div>
                <div class="col-lg-6">
                    <h2 class="h1 text-nu-blue mb-3">Enhance Your Learning Experience</h2>
                    <p class="lead text-muted mb-4">Our Learning Resource Center provides more than just books - it's a hub for academic growth and discovery.</p>
                    
                    <div class="d-flex mb-4">
                        <div class="me-4">
                            <div class="bg-nu-gold text-nu-blue rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="h5 text-nu-blue">Quality Resources</h3>
                            <p class="text-muted mb-0">Curated collection of academic materials from trusted sources.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="me-4">
                            <div class="bg-nu-gold text-nu-blue rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="h5 text-nu-blue">Modern Facilities</h3>
                            <p class="text-muted mb-0">Comfortable spaces designed for focused study and research.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <div class="me-4">
                            <div class="bg-nu-gold text-nu-blue rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="h5 text-nu-blue">Expert Assistance</h3>
                            <p class="text-muted mb-0">Knowledgeable staff ready to help with your research needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-nu-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="h1 text-nu-blue mb-3">Latest Additions</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Discover our most recently acquired resources.</p>
            </div>
            
            <div class="row g-4">
                @foreach($latestBooks as $book)
                <div class="col-md-4">
                    <div class="card h-100 border-0">
                        <div class="card-img-top bg-nu-blue-light d-flex align-items-center justify-content-center" style="height: 180px;">
                            <i class="fas fa-book text-nu-blue" style="font-size: 3rem;"></i>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 text-nu-blue">{{ $book->title }}</h3>
                            <p class="text-muted small">by {{ $book->author }}</p>
                            <p class="small text-muted">{{ Str::limit($book->details, 100) }}</p>
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-nu">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="text-center mt-5">
                <a href="{{ route('books.index') }}" class="btn btn-nu px-4">
                    <i class="fas fa-book me-2"></i>View All Books
                </a>
            </div>
        </div>
    </section>
@endsection