<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Jobs\FeedbackProcess;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('contact_form');
    }

    public function store(FeedbackRequest $request)
    {
        $data = $request->validated();
        FeedbackProcess::dispatch($data);

        return redirect(route('feedback'));
    }
}
