<div class="portfolio" id="portfolio">
    <div class="content-inner">
        <div class="content-header">
            <h2>Portfolio</h2>
        </div>
        <div class="row portfolio-container">
            @foreach ($portfolios as $portfolio )
            <div class="col-lg-4 col-md-6 portfolio-item web-des">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset($portfolio->image) }}" class="img-fluid" alt="">
                        <a href="https://{{ $portfolio->link }}"  data-title="Project Name" class="link-preview" title="Live Version"><i class="fa fa-eye"></i></a>
                        <a href="https://{{ $portfolio->github }}" class="link-details" title="github"><i class="fa fa-link"></i></a>
                        <a class="portfolio-title" href="#">{{ $portfolio->name }}</a>
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
