<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

class Task extends Model
{
    protected $fillable = ['project_id', 'start_date', 'end_date', 'description'];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function getWorkingDaysToStartDateAttribute() {
        return Carbon::now()->startOfYear()->diffInWeekdays(Carbon::parse($this->start_date));
    }

    public function getWorkingDurationAttribute() {
        return Carbon::parse($this->start_date)->diffInWeekdays(Carbon::parse($this->end_date)->addDay(), true);
    }
}
