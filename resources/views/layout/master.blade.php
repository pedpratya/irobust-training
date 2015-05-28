<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Irobust Trainging</title>

    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
    <!-- Faiith -->
    <link href="css/category/slidebar.css" rel="stylesheet" media="screen">
    <link href="css/app.css" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="{!! asset('css/demo.css') !!}">
    </head>

<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>

  

  <body>
    <!-- Navbars   ================================================== -->
    <!-- <div class="row"> -->
              <div class="col-md-12">
                <nav class="navbar navbar-inverse" role="navigation">
                  <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">
                      <ul class="nav navbar-nav">
                        <li>
                        <a class="navbar-brand" href="http://localhost/irobust-training/public/">Home</a>
                        </li>
                        <li>
                        <a class="navbar-brand" href="http://localhost/irobust-training/public/category">Browse Course</a>
                        </li>
                        <!-- <li class="disabled"><a href="#">Link</a></li> -->
                        <li>
                          <a class="navbar-brand" href="#">Blog</a>
                        </li>
                        <li>
                          <a class="navbar-brand" href="#">Payment</a>
                        </li>
                          </ul>
                        </li>
                      </ul>
                      <form class="navbar-form navbar-right" role="search">
                        <div class="form-search search-only">
                          <i class="search-icon glyphicon glyphicon-search"></i>
                          <input type="text" class="form-control search-query">
                        </div>
                      </form>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
              </div>
    <!-- </div> -->


  
      @yield('content')

      <br>
    <div class="col-md-12" style="height:100%;background-color:#1A1A1A;">
    <div class="container">
    <div class="copyRights">
    <p class="text-center"><br><font color ="white">Copyrights © 2015 - ICB Solution Co.,Ltd.</font></p>
    </div>
    </div>
    </div>

  </body>  

</html>

<!-- Bootstrap
    <script src="{!! asset('js/jquery.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>

    <!-- Bootflat's JS files.-->
    <script src="{!! asset('bootflat/js/icheck.min.js') !!}"></script>
    <script src="{!! asset('bootflat/js/jquery.fs.selecter.min.js') !!}"></script>
    <script src="{!! asset('bootflat/js/jquery.fs.stepper.min.js') !!}"></script>

    



