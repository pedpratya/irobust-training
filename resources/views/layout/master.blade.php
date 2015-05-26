<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Faith -->
    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <!-- End Faith -->

    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('bootflat/css/bootflat.css') !!}">

    <link rel="stylesheet" href="{!! asset('css/demo.css') !!}">
    </head>

<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
          
  

  <body>
    <!-- Navbars   ================================================== -->
    <div class="row">
              <div class="col-md-12">
                <nav class="navbar navbar-inverse" role="navigation">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-5">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Home</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">
                      <ul class="nav navbar-nav">
                        <li>
                        <a class="navbar-brand" href="#">Browse Course</a></li>
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
    </div>

    <div class="container documents">
      <div class="category">  
          <div class="row">

        @foreach ($categories as $category)

          @if ($category->size == 4)
            <div class="col-md-3 col-sm-12 category-lg" style="font-family: 'Lato', sans-serif;font-size: 35px;background-color:#4BA883;height:300px;">
                  <center>{!! $category->name !!}</center>
            </div>
          @elseif ($category->size == 2)

            <?php
                $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
                $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
            ?>
            <div class="col-md-3 col-sm-6" style="font-family: 'Lato', sans-serif;font-size: 25px;background-color:<?php echo $color?>;height:150px;">
                  <center>{!! $category->name !!}</center>
            </div>
          @endif

<!--             <div class="col-md-3 col-sm-12 category-lg" style="background-color:#4BA883;height:300px;">
                  Excel
            </div>
            <div class="col-md-3 col-sm-6" style="background-color:#6D6E35;height:150px;">
                  Web     
            </div>
            <div class="col-md-3 col-sm-6" style="background-color:#D5C312;height:150px;">
                  Programming     
            </div>
            <div class="col-md-3 col-sm-12" style="background-color:#E93E00;height:150px;">
                  Database     
            </div> 
            <div class="col-md-3 col-sm-6" style="background-color:#3B3C4D;height:150px;">
                  Mobile    
            </div>
            <div class="col-md-3 col-sm-6" style="background-color:#006A90;height:150px;">
                  CMS    
            </div>
            <div class="col-md-3 col-sm-12" style="background-color:#746E84;height:150px;">
                  Teacher     
            </div> -->

        @endforeach

          </div>
  </div>
<ul>

  
<i> <font face="Light ITALIC" size="12" color="006600 " style="text-decoration: underline" ; > New Release !</font>
<hr> </i>





</ul>
          
    <a href="###">
      <div class="example">          
          <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img class="img-rounded" src="images/thumbnail-1.jpg">
                  <div class="caption text-center">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                    <p></p>
                  </div>
                </div>
              </div>
              </a>
             <a href="###">
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img class="img-rounded" src="images/thumbnail-2.jpg">
                  <div class="caption text-center">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                    <p></p>
                  </div>
                </div>
              </div>
              </a>
              <a href="###">
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img class="img-rounded" src="images/thumbnail-3.jpg">
                  <div class="caption text-center">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                    <p></p>
                  </div>
                </div>
              </div>
              </a>
              <a href="###">
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img class="img-rounded" src="images/thumbnail-4.jpg">
                  <div class="caption text-center">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
      </div>
   </a>


       <a href="###">
      <div class="example">          
          <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img class="img-rounded" src="images/thumbnail-1.jpg">
                  <div class="caption text-center">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                    <p></p>
                  </div>
                </div>
              </div>
              </a>
             <a href="###">
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img class="img-rounded" src="images/thumbnail-2.jpg">
                  <div class="caption text-center">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                    <p></p>
                  </div>
                </div>
              </div>
              </a>
              <a href="###">
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img class="img-rounded" src="images/thumbnail-3.jpg">
                  <div class="caption text-center">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                    <p></p>
                  </div>
                </div>
              </div>
              </a>
              <a href="###">
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img class="img-rounded" src="images/thumbnail-4.jpg">
                  <div class="caption text-center">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
      </div>
   </a>




     <a href="###">
      <div class="example">          
          <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img class="img-rounded" src="images/thumbnail-1.jpg">
                  <div class="caption text-center">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                    <p></p>
                  </div>
                </div>
              </div>
              </a>
             <a href="###">
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img class="img-rounded" src="images/thumbnail-2.jpg">
                  <div class="caption text-center">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                    <p></p>
                  </div>
                </div>
              </div>
              </a>
              <a href="###">
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img class="img-rounded" src="images/thumbnail-3.jpg">
                  <div class="caption text-center">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                    <p></p>
                  </div>
                </div>
              </div>
              </a>
              <a href="###">
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img class="img-rounded" src="images/thumbnail-4.jpg">
                  <div class="caption text-center">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
      </div>
   </a>
 


<!-- Browse Courses Button-->
<button type="button" class="btn btn-primary btn-lg btn-block " size="25" style="background-color:#003399;height:80px">Browse Courses</button>
</div>
</div>

<ul>

</ul>


<!--     Footer   -->  
    <div class="footer" style="background-color:#101010 ;height:40px;">
        <div class="col-lg-12">

            <ul class="nav nav-pills nav-justified">
                <a class="grey-text text-lighten-5 " style="color:#3333FF ;height:40px;" href="#">About us</a>
                

                <li align = "right"> © 2015 Company Name.</li>


            </ul>
      
        </div>
    </div>




  </body>

    

</html>



<!-- Bootstrap -->
    <script src="{!! asset('js/jquery.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>

    <!-- Bootflat's JS files.-->
    <script src="{!! asset('bootflat/js/icheck.min.js') !!}"></script>
    <script src="{!! asset('bootflat/js/jquery.fs.selecter.min.js') !!}"></script>
    <script src="{!! asset('bootflat/js/jquery.fs.stepper.min.js') !!}"></script>





