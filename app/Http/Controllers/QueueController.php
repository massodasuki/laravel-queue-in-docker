<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendPostRequest;

class QueueController extends Controller
{
    //
    public function startQue()
    {
        $job = (new SendPostRequest());
 
        $this->dispatch($job);
        return view('Que Start');
    }
}
