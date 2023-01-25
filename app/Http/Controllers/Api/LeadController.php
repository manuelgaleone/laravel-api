<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $new_lead = new Lead();
        $new_lead->fill($data);
        $new_lead->save();
    }
}
