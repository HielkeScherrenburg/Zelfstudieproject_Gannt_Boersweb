<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class GanntController extends Controller
{
    public function index() {
        $clients = Client::select('id', 'name')
            ->with(['projects' => function ($query) {
                $query->select('id', 'client_id', 'name')->with(['tasks' => function ($query) {
                    $query->select('id', 'project_id', 'description');}]);
            }])->get();
        return view('application.index', compact('clients'));
    }
}

