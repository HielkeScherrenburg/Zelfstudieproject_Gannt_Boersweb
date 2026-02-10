<div class="left">
    <div class="title_block">
        <img class="icon" src="{{ asset('icons/chart-bar_green.svg') }}" alt="Chart icon">
        <div class="title">
            <div>Projectplanning systeem</div>
            <div>Houd gemakkelijk dagelijks overzicht</div>
        </div>
    </div>

    <div class="sidebar">
        @forelse ($clients as $client)
            <div class="client">

                <div class="item">
                    <div class="number">{{ $loop->iteration }}</div>
                    <div class="group">
                        <div class="icon icon-user"></div>
                        <div class="name">{{ $client->name }}</div>
                    </div>
                    <img class="arrow" src="{{ asset('icons/chevron-up.svg') }}" alt="Toggle projects">
                </div>

                <div class="projects">
                    @forelse ($client->projects as $project)
                        <div class="project">

                            <div class="item">
                                <div class="number">{{ $loop->parent->iteration }}.{{ $loop->iteration }}</div>
                                <div class="group">
                                    <div class="icon icon-folder"></div>
                                    <div class="name">{{ $project->name }}</div>
                                </div>
                                <img class="arrow" src="{{ asset('icons/chevron-up.svg') }}" alt="Toggle tasks">
                            </div>

                            <div class="tasks">
                                @forelse ($project->tasks as $task)
                                    <div class="task item">
                                        <div class="number">
                                            {{ $loop->parent->parent->iteration }}.{{ $loop->parent->iteration }}.{{ $loop->iteration }}
                                        </div>
                                        <div class="group">
                                            <div class="name">{{ $task->description }}</div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="task item">Geen tasks gevonden</div>
                                @endforelse
                            </div>

                        </div>
                    @empty
                        <div class="project">
                            <div class="item">Geen projecten gevonden</div>
                        </div>
                    @endforelse
                </div>

            </div>
        @empty
            <div class="client">
                <div class="item">Geen klanten gevonden</div>
            </div>
        @endforelse
    </div>
</div>
