<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gilbert's Portfolio</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/gt_favicon.png') }}">

    <!-- Bootstrap -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
    <!-- Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
    <!-- Custom styles -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}"> --}}
    <style>
        html {
  font-size: 100%;
}
body {
  font-size: 15px;
  font-size: 0.9375rem;
  font-family: "Open sans", Helvetica, Arial, sans-serif;
  color: #666666;
  padding: 0;
}
.topspace {
  margin-top: 40px;
}
/*********************************************************************


                            Navigation in header


**********************************************************************/
.navbar {
  border-width: 1px 0;
  -webkit-border-radius: 0;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 0;
  -moz-background-clip: padding;
  border-radius: 0;
  background-clip: padding-box;
  width: 100%;
}
.navbar.stick {
  position: fixed;
  top: 0;
  left: 0;
  opacity: .85;
}
.navbar-collapse {
  -webkit-border-radius: 0;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 0;
  -moz-background-clip: padding;
  border-radius: 0;
  background-clip: padding-box;
  font-family: "Open sans", Helvetica, Arial, sans-serif;
  font-weight: 300;
  text-transform: uppercase;
}
.navbar-collapse .navbar-nav {
  float: none;
  margin: 0 auto;
  text-align: center;
}
.navbar-collapse .navbar-nav > li {
  float: none;
  display: inline-block;
}
.navbar-collapse .navbar-nav > li > a {
  padding: 20px 30px;
}
.dropdown ul.dropdown-menu {
  top: 85%;
  text-align: left;
}
.dropdown ul.dropdown-menu > li > a {
  padding: 5px 30px;
}
.navbar-default {
  background-color: #ffffff;
  border-color: #cccccc;
}
.navbar-default .navbar-nav > li > a {
  color: #454545;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #000000;
  background-color: #ffffff;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #000000;
  background-color: #ffffff;
}
.navbar-default .dropdown ul.dropdown-menu > li > a {
  color: #454545;
}
.navbar-default .dropdown ul.dropdown-menu > li > a:hover {
  background-color: #eeeeee;
  color: #000000;
}
.navbar-default .navbar-toggle {
  border-color: #666666;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #ffffff;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #333333;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #cccccc;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  background-color: #ffffff;
  color: #000000;
}
/****************************************************************************************


                                     Sidebar special Nav


*****************************************************************************************/
.nav-side {
  font-size: 24px;
  font-size: 1.5rem;
  font-weight: 300;
  margin-top: -0.37em;
}
.nav-side > li > a {
  padding-top: 5px;
  padding-bottom: 5px;
  color: #f392b4;
}
.nav-side > li > a:hover {
  color: #bd1550;
  background: none;
}
.nav-side > li.active > a {
  color: #bd1550;
}
/*********************************************************************


                                TYPOGRAPHY


**********************************************************************/
p {
  line-height: 1.6em;
  margin: 0 0 30px 0;
}
ul,
ol {
  line-height: 1.6em;
  margin: 0 0 30px 0;
}
blockquote {
  padding: 10px 20px;
  margin: 0 0 30px;
  border-left: 5px solid #eee;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: "Open sans", Helvetica, Arial, sans-serif;
  font-weight: 400;
  color: #333333;
}
h1 {
  font-size: 40px;
  font-size: 2.5rem;
}
h2 {
  font-size: 36px;
  font-size: 2.25rem;
}
h3 {
  font-size: 30px;
  font-size: 1.875rem;
}
h4 {
  font-size: 24px;
  font-size: 1.5rem;
}
h5 {
  font-size: 20px;
  font-size: 1.25rem;
}
a {
  color: #bd1550;
}
a:hover {
  color: #e93675;
}
.lead {
  font-weight: 300;
  font-size: 21px;
  font-size: 1.3125rem;
}
.text-msg {
  line-height: 1.7em;
  color: #b3b3b3;
  font-weight: 300;
  text-transform: capitalize;
  margin-top: -0.23em;
}
.size-auto,
.size-full,
.size-large,
.size-medium,
.size-thumbnail {
  max-width: 100%;
  height: auto;
}
/*********************************************************************


                                HEADER


**********************************************************************/
#head {
  background: #f4f4f4 url(../images/bg_head.jpg) top center;
  background-size: cover;
  color: #7C7C7C;
  padding: 30px 0 35px 0;
}
#head img.img-circle {
  display: block;
  width: 140px;
  height: 140px;
  overflow: hidden;
  border: 9px solid rgba(0, 0, 0, 0.05);
  margin: 0 auto;
}
#head .title {
  font-family: Alice, Georgia, serif;
  font-size: 49px;
  font-size: 3.0625rem;
}
#head .title a {
  text-decoration: none;
  color: #333333;
}
#head .tagline {
  display: block;
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 1.2em;
  color: #7C7C7C;
  margin: 5px 0 0;
}
#head .tagline b {
  font-weight: normal;
}
#head .tagline a {
  color: #5E5E5E;
}
.home #head {
  padding: 90px 0;
}
.home #head .title {
  font-size: 49px;
  font-size: 3.0625rem;
}
.home #head .tagline {
  font-size: 16px;
  font-size: 1rem;
  margin: 15px 0 0;
}
/*********************************************************************


                                CONTENT


**********************************************************************/
img {
  max-width: 100%;
}
.btn {
  font-size: 12px;
  font-size: 0.75rem;
  text-decoration: none;
  text-transform: uppercase;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: #333;
  -webkit-border-radius: 0px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 0px;
  -moz-background-clip: padding;
  border-radius: 0px;
  background-clip: padding-box;
  -webkit-transition-property: all;
  -moz-transition-property: all;
  -o-transition-property: all;
  -ms-transition-property: all;
  transition-property: all;
  -webkit-transition-duration: 0.2s;
  -moz-transition-duration: 0.2s;
  -o-transition-duration: 0.2s;
  transition-duration: 0.2s;
  border: 0 none;
  padding: 12px 35px;
  text-shadow: 0 1px 0px #780d33;
}
.btn-primary {
  color: #fff;
  background-color: #bd1550;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active {
  color: #fff;
  background-color: #e61f65;
}
.btn-action {
  font-weight: bold;
  background: transparent!important;
  border: 1px solid #333;
  text-shadow: none;
}
.btn-action:hover,
.btn-action:focus,
.btn-action:active,
.btn-action.active {
  color: #bd1550;
  border-color: #bd1550;
}
.btn-lg {
  padding: 15px 60px;
  font-size: 12px;
  line-height: 1.33;
  font-weight: bold;
}
.panel-cta {
  box-shadow: 0 0 0 1px #e1e1e1, 0 0 0 3px #fff, 0 0 0 4px #e1e1e1;
  background: #f3f3f3;
  -webkit-border-radius: 0;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 0;
  -moz-background-clip: padding;
  border-radius: 0;
  background-clip: padding-box;
}
.panel-cta p,
.panel-cta h3,
.panel-cta h4,
.panel-cta h5,
.panel-cta h6 {
  margin: 0;
}
.panel-cta .panel-body {
  padding: 35px;
}
/* Section - Featured */
.featured {
  font-size: 13px;
  font-size: 0.8125rem;
}
.featured h3 {
  font-weight: bold;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 24px;
  font-size: 1.5rem;
  text-transform: uppercase;
  line-height: 1.4em;
  vertical-align: middle;
  margin: 0 0 25px 0;
}
/* Section - Recent works */
.thumbnails {
  padding: 0;
}
.thumbnails li {
  margin-bottom: 30px;
}
.thumbnails .details {
  display: block;
  text-align: center;
  font-size: 12px;
  font-size: 0.75rem;
}
.thumbnail {
  display: block;
  -webkit-border-radius: 0;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 0;
  -moz-background-clip: padding;
  border-radius: 0;
  background-clip: padding-box;
  border: 0 none;
  margin-bottom: 10px;
  padding: 0;
  text-align: center;
  text-decoration: none;
  color: #333;
}
.thumbnail .img {
  display: block;
  width: 100%;
  overflow: hidden;
  height: 180px;
  margin: 0 0 20px;
  position: relative;
}
.thumbnail .title {
  text-transform: uppercase;
  margin: 0 2em;
  display: block;
  text-indent: 0;
}
.thumbnail .cover {
  position: absolute;
  display: block;
  opacity: 0;
  width: 100%;
  height: 180px;
  background-color: rgba(255, 255, 255, 0.8);
  -webkit-transition-property: all;
  -moz-transition-property: all;
  -o-transition-property: all;
  -ms-transition-property: all;
  transition-property: all;
  -webkit-transition-duration: 550ms;
  -moz-transition-duration: 550ms;
  -o-transition-duration: 550ms;
  transition-duration: 550ms;
}
.thumbnail .cover .more {
  position: absolute;
  bottom: 15px;
  right: 0;
  height: 32px;
  line-height: 32px;
  padding: 0 20px;
  -webkit-border-radius: 1px 0 0 1px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 1px 0 0 1px;
  -moz-background-clip: padding;
  border-radius: 1px 0 0 1px;
  background-clip: padding-box;
  font-size: 12px;
  font-size: 0.75rem;
  text-transform: uppercase;
  text-shadow: 0 1px 0px #780d33;
  background: #bd1550;
  color: white;
}
.thumbnail img {
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
}
.thumbnail:hover {
  color: #333;
  text-decoration: none;
}
.thumbnail:hover img {
  -webkit-filter: saturate(0%);
}
.thumbnail:hover .cover {
  opacity: 1;
}
/* pagination */
.pagination > li > a {
  color: #808080;
  border: 0 none;
  font-size: 20px;
  font-size: 1.25rem;
  font-family: Georgia, serif;
}
.pagination > li > a:hover {
  color: #000000;
  background: none;
}
.pagination > li.active > a {
  color: #333333;
  background: none;
}
.pagination > li.active > a:hover {
  color: #000000;
  background: none;
}
/*********************************************************************


                                 BLOG


**********************************************************************/
.section-title,
.entry-title {
  display: block;
  width: 100%;
  overflow: hidden;
  margin: 0px 0 25px;
  text-align: center;
  font-weight: 300;
  text-transform: uppercase;
  font-size: 36px;
  font-size: 2.25rem;
  letter-spacing: 1px;
}
.section-title a,
.entry-title a {
  color: #333333;
}
.section-title span,
.entry-title span {
  display: inline-block;
  position: relative;
}
.section-title span:before,
.entry-title span:before,
.section-title span:after,
.entry-title span:after {
  content: "";
  position: absolute;
  height: 4px;
  top: .53em;
  width: 400%;
  border-bottom: 1px solid #ccc;
  border-top: 1px solid #ccc;
}
.section-title span:before,
.entry-title span:before {
  right: 100%;
  margin-right: 45px;
}
.section-title span:after,
.entry-title span:after {
  left: 100%;
  margin-left: 45px;
}
.entry-header .entry-meta {
  text-align: center;
  font-family: Georgia, serif;
  font-size: 18px;
  font-size: 1.125rem;
  font-style: italic;
  font-weight: normal;
  color: #a5a5a5;
  margin: 0 0 15px 0;
}
.entry-header .entry-meta a {
  color: #a5a5a5;
}
.entry-content {
  margin: 0 0 60px 0;
}
.entry-content h2 {
  line-height: 1.2;
  font-size: 30px;
  font-size: 1.875rem;
  padding-top: 20px;
  margin-bottom: 20px;
}
.meta-nav,
.more-link {
  font-family: Georgia, serif;
  font-style: italic;
  font-weight: bold;
  color: #666666;
  text-decoration: none;
}
.meta-nav:hover,
.more-link:hover {
  color: #333333;
  text-decoration: underline;
}
.more-link {
  display: block;
  width: 100%;
  text-align: right;
}
/* Posts navigation */
#nav-below {
  position: fixed;
  top: 48%;
}
#nav-below .meta-nav {
  display: block;
  padding: 27px 7px;
  background: #444;
  color: #fff;
  -webkit-border-radius: 3px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 3px;
  -moz-background-clip: padding;
  border-radius: 3px;
  background-clip: padding-box;
  font-family: "Open sans", Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  text-decoration: none;
  opacity: 0.2;
}
#nav-below .meta-nav:hover {
  text-decoration: none;
  color: #333;
}
#nav-below .nav-next {
  position: fixed;
  right: -3px;
}
#nav-below .nav-previous {
  position: fixed;
  left: -3px;
}
#nav-below b {
  display: none;
}
footer.entry-meta {
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  margin: 0 0 35px 0;
  padding: 2px 0;
  color: #888888;
  font-size: 12px;
  font-size: 0.75rem;
}
footer.entry-meta a {
  color: #333333;
}
footer.entry-meta .meta-in {
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  padding: 10px 0;
}
.page-header {
  padding-bottom: 0;
  margin: 0;
  border-bottom: none;
  text-align: left;
}
.page-header .page-title {
  margin-top: 0;
  margin-bottom: 30px;
}
/*********************************************************************


                                COMMENTS


**********************************************************************/
#comments {
  font-size: 13px;
  font-size: 0.8125rem;
}
#comments .comments-title {
  margin: 0 0 5px 0;
}
#comments .leave-comment {
  display: block;
  margin: 0 0 40px 0;
}
#comments ul,
#comments ol {
  margin: 0;
  padding: 0;
}
#comments .comment {
  margin: 0;
  padding: 0;
  list-style: none;
  clear: both;
}
#comments .comments-title {
  text-shadow: none;
  margin-bottom: 0;
}
#comments .avatar {
  float: left;
  width: 70px;
  height: 70px;
  margin-bottom: 30px;
  border: 5px solid #eeeeee;
  -webkit-border-radius: 50%;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 50%;
  -moz-background-clip: padding;
  border-radius: 50%;
  background-clip: padding-box;
}
#comments .children {
  margin: 0 0 0 90px;
}
#comments .comment-meta {
  margin: 0 0 0 90px;
}
#comments .comment-meta a {
  color: #333333;
}
#comments .comment-meta a:hover {
  color: #bd1550;
}
#comments .comment-meta .author {
  margin: 0 20px 0 0;
  font-weight: bold;
}
#comments .comment-meta .date {
  margin: 0 20px 0 0;
}
#comments .comment-meta .date a {
  color: #666666;
}
#comments .comment-meta .reply {
  float: right;
}
#comments .comment-body {
  margin: 0 0 35px 90px;
}
.comment-navigation {
  width: 100%;
  border-top: 1px solid #ccc;
  padding: 2px 0 0 0;
}
.comment-navigation .nav-content {
  border-top: 1px solid #ccc;
  width: 100%;
  padding: 10px 0 0 0;
}
.comment-navigation .nav-previous {
  float: left;
  width: 50%;
}
.comment-navigation .nav-next {
  float: right;
  width: 50%;
  text-align: right;
}
#respond {
  margin: 55px 0 0 0;
}
/*********************************************************************


                                FOOTER


**********************************************************************/
#footer {
  background: #232323;
  padding: 30px 0 0 0;
  font-size: 12px;
  color: #999;
}
#footer a {
  color: #ccc;
}
#footer a:hover {
  color: #fff;
}
#footer h3.widget-title {
  font-size: 15px;
  font-size: 0.9375rem;
  text-transform: uppercase;
  color: #ccc;
  margin: 0 0 20px;
}
#underfooter {
  background: #191919;
  padding: 15px 0;
  color: #777;
  font-size: 12px;
}
#underfooter a {
  color: #aaa;
}
#underfooter a:hover {
  color: #fff;
}
#underfooter p {
  margin: 0;
}
.follow-me-icons {
  font-size: 30px;
}
.follow-me-icons i {
  float: left;
  margin: 0 10px 0 0;
}
/* Max page width
/////////////////////////////////////////////////////////////////////*/
@media (min-width: 1200px) {
  .container {
    max-width: 1080px;
  }
}

    </style>

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
    {{-- <script src="{{ asset('assets/js/template.js') }}"></script> --}}
    <script>
        jQuery(document).ready(function($) {

            var my_nav = $('.navbar-sticky');
            // grab the initial top offset of the navigation
            var sticky_navigation_offset_top = my_nav.offset().top;

            // our function that decides weather the navigation bar should have "fixed" css position or not.
            var sticky_navigation = function() {
                var scroll_top = $(window).scrollTop(); // our current vertical position from the top

                // if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
                if (scroll_top > sticky_navigation_offset_top) {
                    my_nav.addClass('stick');
                } else {
                    my_nav.removeClass('stick');
                }
            };

            var initio_parallax_animation = function() {
                $('.parallax').each(function(i, obj) {
                    var speed = $(this).attr('parallax-speed');
                    if (speed) {
                        var background_pos = '-' + (window.pageYOffset / speed) + "px";
                        $(this).css('background-position', 'center ' + background_pos);
                    }
                });
            }

            // run our function on load
            sticky_navigation();

            // and run it again every time you scroll
            $(window).scroll(function() {
                sticky_navigation();
                initio_parallax_animation();
            });

        });
    </script>
</body>

</html>
