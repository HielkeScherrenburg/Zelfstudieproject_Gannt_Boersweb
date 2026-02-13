<?php

namespace App\Services;

use Illuminate\Support\Arr;
use Carbon\Carbon;

class TimelineService
{

    public function getMonths() {

        $year = Carbon::now()->year;
        $months = [];

        for ($month = 1; $month <= 12; $month++) {
            $monthName = Carbon::create($year, $month)->format('F');
            $workDaysCount = 0;

            $startDay = Carbon::create($year, $month)->startOfMonth();
            $endDay = Carbon::create($year, $month)->endOfMonth();

            while ($startDay <= $endDay) {
                if (!$startDay->isWeekend()) {
                    $workDaysCount++;
                }
                $startDay->addDay();
            }

            $months[] = ['name' => $monthName, 'count' => $workDaysCount];
        }

        return $months;
    }


    public function getIsoWeeks() {

        $startDay = Carbon::now()->startOfYear();
        $endDay = Carbon::now()->endOfYear();

        $isoWeeks = [];

        while ($startDay <= $endDay) {
            if ($startDay->isWeekday()) {
                $weekNumber = $startDay->isoWeek();

                if (!isset($isoWeeks[$weekNumber])) {
                    $isoWeeks[$weekNumber] = 0;
                }

                $isoWeeks[$weekNumber]++;
            }

            $startDay->addDay();
        }

        return $isoWeeks;

    }

    public function getWorkDaysOfMonth() {

        $year = Carbon::now()->year;
        $day = Carbon::create($year)->startOfYear();
        $lastDay = Carbon::create($year)->endOfYear();

        $workdays = [];

        while ($day <= $lastDay) {

            if (!$day->isWeekend()) {
                $workdays[] = $day->toDateString();
            }

            $day->addDay();
        }


        return $workdays;
    }
}
