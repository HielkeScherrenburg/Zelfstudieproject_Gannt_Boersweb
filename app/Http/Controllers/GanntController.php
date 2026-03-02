<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Services\TimelineService;
use Carbon\Carbon;

class GanntController extends Controller
{
    public function index(Timelineservice $timelineService) {
        $clients = Client::select('id', 'name')
            ->with(['projects' => function ($query) {
                $query->select('id', 'client_id', 'name')->with(['tasks' => function ($query) {
                    $query->select('id', 'project_id', 'description', 'start_date', 'end_date');}]);
            }])->get();

        $calculateDivs = Carbon::now()->startOfYear()->diffInWeekdays(Carbon::now()->endOfYear());
        $daysUntilToday = Carbon::now()->startOfYear()->diffInWeekdays(Carbon::now());

        $months = $timelineService->getMonths();
        $isoWeeks = $timelineService->getIsoWeeks();
        $workDays = $timelineService->getWorkDaysOfYear();

        return view('application.index', compact('clients', 'months', 'isoWeeks', 'workDays', 'calculateDivs', 'daysUntilToday'));
    }
}

