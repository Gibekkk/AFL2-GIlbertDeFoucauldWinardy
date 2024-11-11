<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gilbert's Portfolio</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">

    <!-- Bootstrap -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
    <!-- Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>

<body class="home">

    <header id="header">
        <div id="head" class="parallax" parallax-speed="2">
            <h1 id="logo" class="text-center">
                <img class="img-circle" src="{{ asset('assets/images/guy.jpg') }}" alt="">
                <span class="title" style="color: white; text-shadow: 2px 2px 5px black;">Gilbert De Foucauld
                    Winardy</span>
                <span class="tagline" style="color: white; text-shadow: 2px 2px 5px black;">Informatics Student<br>
                    <a href=""
                        style="color: white; text-shadow: 2px 2px 5px black;">gfoucauld@student.ciputra.ac.id</a></span>
            </h1>
        </div>

        <nav class="navbar navbar-default navbar-sticky">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/CV">CV</a></li>
                        <li class="active"><a href="#">Projects</a></li>
                    </ul>

                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </header>

    <main id="main">

        <div class="container">
            <div class="row section featured topspace">
                <h2 class="section-title"><span>My Projects</span></h2>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <h3 class="text-center">Game Wiki Page</h3>
                        <p>Wiki page about a Minecraft mod that me and my overseas friend develop. The web is also
                            developed by the both of us. This webpage is still in development and in premature state.
                        </p>
                        <p class="text-center"><a href="https://bot.telkom.club/Warredion/public"
                                class="btn btn-action">Go To Webpage</a></p>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h3 class="text-center">Weather Telegram Bot</h3>
                        <p>A telegram bot that I can be proud of that gets the weather data from API system in specific
                            coordinates. I developed this bot during an internship in STO Balaikota that is used to get
                            weather data from multiple STO offices everyday. But, it can also be used to get the weather
                            data from a sepcific location with the coordinate.</p>
                        <p class="text-center"><a href="https://t.me/arnetmkscuaca_bot" class="btn btn-action">Use
                                Bot!</a></p>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h3 class="text-center">Monster Shooter Game</h3>
                        <p>The game I developed during high school that's available in multiple platforms, desktop and
                            mobile. Sadly, this game files are gone during disk changes. But, it is still playable in
                            itch.io!</p>
                        <p class="text-center"><a href="https://glitchplayer88.itch.io/monster-shooter"
                                class="btn btn-action">Play Game!</a></p>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 widget">
                    <h3 class="widget-title">Contact</h3>
                    <div class="widget-body">
                        <p>+62 81356772225<br>
                            <a href="mailto:gfoucauld@student.ciputra.ac.id">gfoucauld@student.ciputra.ac.id</a><br>
                        </p>
                    </div>
                </div>

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Follow me</h3>
                    <div class="widget-body">
                        <p class="follow-me-icons">
                            <a href="https://wa.me/+6281356772225" target=”_blank”><i class="fa fa-phone fa-2"></i></a>
                            <a href="https://www.instagram.com/gilbertwinardy/" target=”_blank”><i
                                    class="fa fa-instagram fa-2"></i></a>
                            <a href="https://github.com/Gibekkk" target=”_blank”><i class="fa fa-github fa-2"></i></a>
                            <a href="https://www.facebook.com/PLAYER5.BRUH" target=”_blank”><i
                                    class="fa fa-facebook fa-2"></i></a>
                        </p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </footer>

    <footer id="underfooter">
        <div class="container">
            <div class="row">

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p>Jl. Baji Minasa 2 No. 8 </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="text-right">
                            Copyright &copy; 2023, Gilbert Winardy<br> </p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </footer>



    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
</body>

</html>
