<div class="right">
    <div class="timeline">
        <div class="months">
            @foreach ($months as $month)
                <div  class="{{ $month['name'] == \Carbon\Carbon::now()->format('F') ? 'active' : '' }}" style="width: {{ $month['count'] * 45 }}px">{{ $month['name'] }}</div>
            @endforeach
        </div>
        <div class="weeks">
            @foreach ($isoWeeks as $weekNumber => $days)
                <div class="{{ $weekNumber ==  \Carbon\Carbon::now()->isoWeek ? 'active' : '' }}" style="width: {{ $days * 45 }}px">Week {{ $weekNumber }}</div>
            @endforeach
        </div>
        <div class="days" style="display: grid; grid-template-columns: repeat({{ count($workDays) }}, 45px);}">

            @forelse ($workDays as $workday)
                <div class="{{ $workday == Carbon\Carbon::now()->toDateString() ? 'active' : '' }}" data-valuedate="{{ $workday}}">{{ \Carbon\Carbon::parse($workday)->format('d') }}</div>
            @empty

            @endforelse
        </div>
    </div>
    <div class="grid" style="display: grid; grid-template-columns: repeat({{ count($workDays) }}, 45px);">
        @foreach ($workDays as $workday)
            <div></div>
        @endforeach
    </div>
</div>
