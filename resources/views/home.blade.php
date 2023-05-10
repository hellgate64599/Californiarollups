@extends('layouts.app')

@section('content')
    <div id="content">
        <section class="about">
            <div class="divider"></div>
            <div class="container">
                <div class="row">
                    <h3>OVER 20 YEARS EXPERIENCE! FAST REPAIRS AND INSTALLATION!</h3>
                    <h2>Serving Sonoma County Since 2013</h2>
                    <a href="{{route('contact')}}" class="button">CONTACT US</a>
                </div>
            </div>
        </section>

        <section class="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{asset('images/welcome.jpg')}}" alt="welcome">
                    </div>
                    <div class="col-lg-6">
                        <h3>WELCOME</h3>
                        <h1>CA ROLLUPS</h1>
                        <h2>Garage Doors and Motors</h2>
                        <h4>Fast repairs and installation!</h4>
                        <p>
                            With over 20 years experience, we have seen and handled every type of situation in garage door installation and repair. 
                        </p>
    
                        <p>
                            Honest and fair, we take pride in our work and excellent relationships with customers. Contact us today for a quote!    
                        </p>
    
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{asset('images/contact.png')}}" alt="contact">
                            </div>
                            <div class="col-md-8">
                                <p>707-337-2161 Main</p>
                                <p>707-337-2200 Home</p>
                                <p>707-938-7965 Fax</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="brands">
            <div class="container">
                <h3>BRANDS WE SERVICE</h3>
                <div class="row justify-content-between align-items-center">
                    <div><img src="{{asset('images/service_one.png')}}" alt=""></div> 
                    <div><img src="{{asset('images/service_two.png')}}" alt=""></div> 
                    <div><img src="{{asset('images/service_three.png')}}" alt=""></div> 
                    <div><img src="{{asset('images/service_four.png')}}" alt=""></div> 
                    <div><img src="{{asset('images/service_five.png')}}" alt=""></div> 
                    <div><img src="{{asset('images/service_six.png')}}" alt=""></div> 
                </div>
            </div>
        </section>
        
        <section class="services">
            <div class="container">
                <h3>WHAT WE DO</h3>
                <h2>Our Services</h2>
                <p>
                    Count on us for any problem with your garage door. We can repair and replace any part, from a new remote to the entire door. Contact CA Rollups for the best service in Sonoma County.
                </p>
                <div class="row justify-content-between">
                    <div class="col-lg-4">
                        <img src="{{asset('images/installation.png')}}" alt="installation">
                        <h4>INSTALLATION</h4>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{asset('images/repair.png')}}" alt="installation">
                        <h4>REPAIR</h4>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{asset('images/framing.png')}}" alt="installation">
                        <h4>FRAMING</h4>
                    </div>
                </div>
                <a href="{{route('contact')}}" class="button">CONTACT US</a>
           </div>
        </section>

        <section class="choose">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-1 col-lg-5">
                        <img src="{{asset('images/why.png')}}" alt="Why Choose Us">
                    </div>
                    <div class="col-lg-1">

                    </div>
                    <div class="col-lg-6">
                        <h2>Why Choose Us</h2>
                        <h3>For the best garage door company in Sonoma County, choose us!</h3>
                        <p class="d-flex align-items-center justify-content-start"><img src="{{asset('images/w1.png')}}" alt=""> From Basic to Custom, we can do it all!</p>
                        <p class="d-flex align-items-center justify-content-start"><img src="{{asset('images/w2.png')}}" alt=""> Repair of all makes and models of garage doors and motors </p>
                        <p class="d-flex align-items-center justify-content-start"><img src="{{asset('images/w3.png')}}" alt=""> Custom framing openings</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery">
            <div class="container">
                <h3>OUR WORKS</h3>
                <h2>Our Gallery</h2>
                <div class="row">
                    <div><img src="{{asset('images/g1.png')}}" alt="gallery image"></div>
                    <div><img src="{{asset('images/g2.png')}}" alt="gallery image"></div>
                    <div><img src="{{asset('images/g3.png')}}" alt="gallery image"></div>
                    <div><img src="{{asset('images/g4.png')}}" alt="gallery image"></div>
                    <div><img src="{{asset('images/g5.png')}}" alt="gallery image"></div>
                    <div><img src="{{asset('images/g6.png')}}" alt="gallery image"></div>
                    <div><img src="{{asset('images/g7.png')}}" alt="gallery image"></div>
                    <div><img src="{{asset('images/g8.png')}}" alt="gallery image"></div>
                    <div><img src="{{asset('images/g9.png')}}" alt="gallery image"></div>
                    <div><img src="{{asset('images/g10.png')}}" alt="gallery image"></div>
                </div>
            </div>
        </section>

        <div class="section">
            <div class="container">
                <h3>SEND YOUR THOUGHTS</h3>
                <h2>Get in touch. We’re here to help</h2>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="pName" class="form-label"></label>
                        <input type="text" class="form-control" id="pName" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="pEmail" class="form-label"></label>
                        <input typeEmailemail
                        " class="form-control" id="pEmail" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="pPhone" class="form-label"></label>
                        <input type="text" class="form-control" id="pPhone" placeholder="Phone">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Message</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
