<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

    <title>Gilbert's Portfolio</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">

    <!-- Bootstrap -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
    <!-- Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
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
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="/CV">CV</a></li>
                        <li><a href="/projects">Projects</a></li>
                    </ul>

                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </header>

    <main id="main">

        <div class="container">

            <div class="row section topspace">
                <div class="col-md-12">
                    <p class="lead text-center text-muted">Welcome To My Home Page!</p>
                </div>
            </div> <!-- / section -->

            <div class="row section featured topspace">
                <h2 class="section-title"><span>Skills</span></h2>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <h3 class="text-center">Web Development</h3>
                        <p>I have experiences and skills on web development. Especially with PHP.</p>
                        <div class="progress" style="margin-top: 72px;">
                            <div class="progress-bar" role="progressbar" style="width: 80%; background-color: lime;"
                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h3 class="text-center">Microsoft Office</h3>
                        <p>I can use microsoft services such as word, excel, and powerpoint well.</p>
                        <div class="progress" style="margin-top: 72px;">
                            <div class="progress-bar" role="progressbar" style="width: 65%; background-color: lime;"
                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h3 class="text-center">Database</h3>
                        <p>I have experiences and skills on database management with mysql.</p>
                        <div class="progress" style="margin-top: 72px;">
                            <div class="progress-bar" role="progressbar" style="width: 80%; background-color: lime;"
                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h3 class="text-center">App Development</h3>
                        <p>I have learnt and experience app building with dart and flutter. I am currently focused on
                            developing this skill.</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 40%; background-color: lime;"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div> <!-- / section -->

            <div class="row section recentworks topspace">

                <h2 class="section-title"><span>About Me</span></h2>

                <div class="thumbnails recentworks row">
                    <p>I am a graduate of Telkom Makassar Vocational High School majoring in Software Engineering, with
                        expertise in various programming languages, particularly in back-end development, specializing
                        in PHP. Currently, I am also a student at Universitas Ciputra Makassar, majoring in Mobile
                        Application Development. This dual educational background has equipped me with a diverse skill
                        set and a deep understanding of both back-end and mobile development. I have honed my skills and
                        technical knowledge through both school curriculum and hands-on experience in various projects.
                        I have a strong interest in continuous learning and expanding my skill set within the realm of
                        technology. Additionally, I possess the ability to work effectively in a team, enabling me to
                        contribute positively towards achieving common goals.</p>
                    <p>More Info About Me in My <a href="{{ asset('assets/CV.jpg') }}" target="_blank">CV!</a></p>
                </div> <!-- /section -->
            </div> <!-- /container -->

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
                            <a href="https://wa.me/+6281356772225" target=”_blank”><i
                                    class="fa fa-phone fa-2"></i></a>
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
</body>

</html>
