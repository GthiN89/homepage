<div class="service" id="service">
    <div class="content-inner">
        <div class="content-header">
            <h2>Skills</h2>
        </div>
        <div class="row align-items-center">
            @foreach ($skills as $skill)
            <div class="col-md-6">
                <div class="srv-col">
                    <i class="fa"></i>
                    <h3>{{ $skill->header }}</h3>
                    <p>{{ $skill->text }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
