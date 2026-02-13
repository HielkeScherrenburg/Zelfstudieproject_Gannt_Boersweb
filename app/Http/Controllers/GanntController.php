<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Services\TimelineService;
use Illuminate\Http\Request;

class GanntController extends Controller
{
    public function index(Timelineservice $timelineService) {
        $clients = Client::select('id', 'name')
            ->with(['projects' => function ($query) {
                $query->select('id', 'client_id', 'name')->with(['tasks' => function ($query) {
                    $query->select('id', 'project_id', 'description');}]);
            }])->get();

        $months = $timelineService->getMonths();
        $isoWeeks = $timelineService->getIsoWeeks();
        $workDays = $timelineService->getWorkDaysOfMonth();

        return view('application.index', compact('clients', 'months', 'isoWeeks', 'workDays'));
    }
}

