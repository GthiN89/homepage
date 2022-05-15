                <!-- Header Start -->
                <div class="header" id="header">
                    <div class="content-inner">
                        <p>I'm</p>
                        <h1>{{ $home->name }}</h1>
                        <h2></h2>
                        <div class="typed-text">{{ $home->roles }}</div>
                    </div>
                </div>
                <!-- Header End -->

                <!-- Large Button Start -->
                <div class="large-btn">
                    <div class="content-inner">
                        <a class="btn" href="{{ asset($home->resume) }}"><i class="fa fa-download"></i>Resume</a>
                        <a class="btn" href="#contact"><i class="fa fa-hands-helping"></i>Hire Me</a>
                    </div>
                </div>
                <!-- Large Button End -->
