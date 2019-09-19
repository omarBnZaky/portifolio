@extends('default')

@section('title', 'Omar bn Zaky')


@section('content')

    <div id="content-wrapper">
        <!-- front page -->
        <section id="home" class="jumbotron vertical-centre bgd shadow" data-speed="5" data-type="background">
            <div class="container">
                <h1>My name is Omar Amr.</h1>
                <h3>Web developer</h3>
                <p>
                    <a href="https://twitter.com/omarAmrZaky1" target="_blank" title="Twitter profile" class="btn btn-primary btn-lg">
                        <i class="fa fa-twitter"></i>Twitter
                    </a>
                    <a href="https://www.linkedin.com/in/omar-amr-zaky-923467145/" target="_blank" title="LinkedIn profile" class="btn btn-info btn-lg">
                        <i class="fa fa-linkedin-square"></i>LinkedIn
                    </a>
                    <a href="https://github.com/omarBnZaky" target="_blank" title="GitHub profile" class="btn btn-light btn-lg">
                        <i class="fa fa-github"></i>GitHub
                    </a>
                    <a href="https://www.freelancer.com/u/Omar344?w=f" target="_blank" title="FreeLancer" class="btn btn-success btn-lg">
                        FreeLancer
                    </a>
                </p>
            </div>

        </section>
@endsection

@section('about')

        <!-- about -->
        <section id="about">
            <div class="container">

                <div class="col-sm-12">
                    <h1 class="page-header">Personal Statement</h1>
                    <p>I seek to gain mass experience at Development fields which qualify me to lead the Middle East’s future of Software Development,I have a passion to learn more about web development</p>
                    <h3>Learning more</h3>
                    <p>In the future I would like to learn about Robotics and CyberSecurity</p>
                </div>
            </div>
        </section>
@endsection

@section('portfolio')

        <!-- portfolio -->
        <section id="portfolio" class="bgd shadow" data-speed="5" data-type="background">
            <div class="container">
                <h1 class="page-header">Portfolio</h1>
                <h3>Oh look, stuff!</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img />
                            <p><strong>Project 1</strong></p>
                            <p>Meaningful description</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img />
                            <p><strong>Project 2</strong></p>
                            <p>Another meaningful description</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img />
                            <p><strong>Project 3</strong></p>
                            <p>Not a meaningful description</p>
                        </div>
                    </div>
                </div>
        </section>
@endsection

@section('services')
    <!-- services -->
        <section id="services">
            <div class="container">

                <div class="col-sm-12">
                    <h1 class="page-header">What Can I do ?</h1>
                    <br>
                    <div class="row">
                        <div class="col">
                            <div id =hexagon>
                                <i class="fa fa-code fa-5x" aria-hidden="true"></i>
                                <br>
                                Mainuplates web pages using HTML5 and CSS3
                            </div>

                        </div>
                        <div class="col">
                            <div id =hexagon>
                                <i class="fa fa-database fa-5x" aria-hidden="true"></i>
                                <br>
                                Creating and manipulating SQL databases (MySQL / PostgreSQL / SQLite)
                            </div>
                        </div>
                        <div class="col">
                            <div id =hexagon>
                                <i class="fa fa-server fa-5x" aria-hidden="true"></i>
                                <br>
                                Creating back-end services for mobile applications (RESTful APIs)                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection



@section('skills')
    <!-- skills -->
        <section id="skills">
            <div class="container">

                <div class="col-sm-12">
                    <h1 class="page-header">My Skills</h1>
                    <div class="row">
                        <div class="col-4 html">
                            <h1 class="innerText"> Html5</h1>
                        </div>

                        <div class="col-4 css">
                            <h1 class="innerText"> Css3</h1>
                        </div>


                        <div class="col-4 bootstrap">
                            <h1 class="innerText"> bootstrap</h1>
                        </div>

                        <div class="col-4 js">
                            <h1 class="innerText"> javascript</h1>
                        </div>


                        <div class="col-4 jq">
                            <h1 class="innerText"> jquery</h1>
                        </div>

                        <div class="col-4 vue">
                            <h1 class="innerText"> vue.js</h1>
                        </div>

                        <div class="col-4 php">
                            <h1 class="innerText"> php</h1>
                        </div>

                        <div class="col-4 laravel">
                            <h1 class="innerText"> laravel</h1>

                        </div>
                        <div class="col-4 mysql">
                            <h1 class="innerText"> mysql</h1>
                        </div>
                    </div>

                </div>
            </div>
        </section>
@endsection




@section('contact')
        <!-- contact -->
        <section id="contact" class="jumbotron vertical-centre bgd shadow">
            <div class="container">
                <h1 class="page-header">Contact me</h1>
                <div class="row">
                    <div class="col-sm-5">
                        <p>Contact me and I’ll get back to you within a day.</p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>

                            Alexandria, Egypt</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i>
                            20 11 41 37 11 05</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i>
                            omarbnzaky@gmail.com</p>
                    </div>
                    <div class="col-sm-7">
                        <form action="{{route('mail')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text"  value="{{old('name')}}" required>

                                </div>
                                <div class="col-sm-6 form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" value="{{old('email')}}" required>

                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" placeholder="send Message" rows="5">{{old('message')}}</textarea>
                            </div>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                     <div class="alert alert-danger small"> <b>Error!</b> : {{$error}}</div>
                                @endforeach
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger"> <b>Error!</b> : {{session('error')}} </div>
                            @endif

                            <button type="submit" class="btn btn-success btn-lg float-right">Send</button>
                            <br>
                            <br>
                            <br>
                            @if(session('success'))
                            <div class="alert alert-success"> {{session('success')}}</div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </section>

@endsection
