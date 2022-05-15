<div class="contact" id="contact">
    <div class="content-inner">
        <div class="content-header">
            <h2>Contact</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="contact-info">
                    <p><i class="fa fa-user"></i>{{ $contact->name }}</p>
                    <p><i class="fa fa-tag"></i>{{ $contact->role }}</p>
                    <p><i class="fa fa-envelope"></i><a href="{{ $contact->email }}">{{ $contact->email }}</a></p>
                    <p><i class="fa fa-phone"></i><a href="{{ $contact->phone }}">{{ $contact->phone }}</a></p>
                    <p><i class="fa fa-map-marker"></i>{{ $contact->adress }}</p>
                    <div class="social">
                        <a class="btn" href="{{ $contact->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form">
                    <form action="{{ route('message.send') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" />
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Your Email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div><button class="btn" type="submit" onclick="if(alert('Message will be send')) saveandsubmit(event);">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
