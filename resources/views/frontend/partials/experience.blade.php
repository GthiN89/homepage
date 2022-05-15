<div class="experience" id="experience">
    <div class="content-inner">
        <div class="content-header">
            <h2>Experience</h2>
        </div>
        <div class="row align-items-center">
            @foreach ($experiences as $experience )
            <div class="col-md-6">
                <div class="exp-col">
                    <span>{{ $experience->start_date }} <i>to</i>
                    @if ($experience->end_date == NULL)
                        Current
                    @else
                        {{ $experience->end_date }}
                    @endif
                    </span>
                    <h3>{{ $experience->company }} </h3>
                    <h4>{{ $experience->location }} </h4>
                    <h5>{{ $experience->role }} </h5>
                    <p>{{ $experience->text }} </p>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
