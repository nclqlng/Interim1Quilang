<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the publishers.
     *
     */
    public function index()
    {
        $publishers = Publisher::all();
        return view('publishers.index', compact('publishers'));
    }

    /**
     * Display the specified publisher.
     *
     */
    public function show(Publisher $publisher)
    {
        return view('publishers.show', compact('publisher'));
    }
}