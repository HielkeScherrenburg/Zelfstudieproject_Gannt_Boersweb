<div class="right">
    <div class="timeline">
        <div class="months">
            @foreach ($months as $month)
                <div
                    class="{{ $month['name'] == \Carbon\Carbon::now()->format('F') ? 'active' : '' }}"
                    style="width: {{ $month['count'] * 45 }}px">
                    {{ $month['name'] }}
                </div>
            @endforeach
        </div>

        <div class="weeks">
            @foreach ($isoWeeks as $weekNumber => $days)
                <div
                    class="{{ $weekNumber == \Carbon\Carbon::now()->isoWeek ? 'active' : '' }}"
                    style="width: {{ $days * 45 }}px">
                    Week {{ $weekNumber }}
                </div>
            @endforeach
        </div>

        <div
            class="days"
            style="display: grid; grid-template-columns: repeat({{ count($workDays) }}, 45px);">

            @forelse ($workDays as $workday)
                <div
                    class="{{ $workday == \Carbon\Carbon::now()->toDateString() ? 'active' : '' }}">
                    {{ \Carbon\Carbon::parse($workday)->format('d') }}
                </div>
            @empty
                Geen werkdagen
            @endforelse
        </div>
    </div>

    <div class="gannt_body">
        @forelse ($clients as $client)

            <div class="client row"
                 data-client-id="{{ $client->id }}">
                @for ($i = 0; $i < $calculateDivs; $i++)
                    <div class="column {{ $i == $daysUntilToday ? 'active' : '' }}"></div>
                @endfor
            </div>

            @forelse ($client->projects as $project)

                <div class="project row"
                     data-project-id="{{ $project->id }}"
                     data-client-id="{{ $client->id }}">
                    @for ($i = 0; $i < $calculateDivs; $i++)
                        <div class="column {{ $i == $daysUntilToday ? 'active' : '' }}"></div>
                    @endfor
                </div>

                @forelse ($project->tasks as $task)

                    <div class="task row" data-project-id="{{ $project->id }}" data-client-id="{{ $client->id }}">
                        @for ($i = 0; $i < $calculateDivs; $i++)
                            <div class="column{{ $i == $daysUntilToday ? ' active' : '' }}"></div>
                        @endfor
                        <div class="item"
                             title="{{ $task->description }}"
                             style="max-width: {{ $task->working_duration * 45}}px; min-width: {{ $task->working_duration * 45}}px; left: {{ $task->working_days_to_start_date * 45 }}px;">
                            {{ $task->description }}
                        </div>
                    </div>

                @empty
                    <div>geen taken</div>
                @endforelse

            @empty
                <div>geen project</div>
            @endforelse

        @empty
        @endforelse
    </div>
</div>

