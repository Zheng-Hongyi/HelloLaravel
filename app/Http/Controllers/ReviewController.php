<?php

namespace App\Http\Controllers;

use App\Review;
use App\Http\Requests;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    protected $reviews;
    protected $requests;

    public function __construct(Review $reviews, Request $requests) {
        $this->requests = $requests;
        $this->reviews = $reviews;
    }

    public function index() {
        $tasks = $this->reviews->all();
//        return $tasks;
        return view('pages.index', compact('tasks'));
//        return 'Hello';
    }

    public function show($id) {
        $tasks = Review::findOrFail($id);
        return view('pages.show', compact('tasks'));
    }

    public function create() {
        return view('pages.create');
    }

    public function store(Request $request) {
        $review = new Review();
        $review->category = $request->category;
        $review->title = $request->title;
//        $review->content = $request->content;
        $review->rating = $request->rating;
        $review->save();
        return "Success";
    }

    public function editreview() {
        $tasks = $this->reviews->get();
        return view('pages.editreview', compact('tasks'));
    }

    public function edit($id) {
        $tasks = $this->reviews->find($id);
        return view('pages.edit', compact('tasks'));
    }

    public function update($id) {
        $review = $this->reviews->find($id);
        $request = $this->requests;
        $review->category = $request->category;
        $review->title = $request->title;
//        $review->content = $request->content;
        $review->rating = $request->rating;
        $review->save();
        return "Success";
    }




}
