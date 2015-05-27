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
                $i++;
                // insert color for category
                $color = array('#4BA883','#6D6E35', '#D5C312', '#E93E00', '#3B3C4D', '#006A90', '#746E84');
            ?>
            <div class="col-md-3 col-sm-6" style="font-family: 'Lato', sans-serif;font-size: 25px;background-color:<?php echo $color[$i]?>;height:150px;">
                  <center>{!! $category->name !!}</center>
            </div>
          @endif
        @endforeach

          </div>
      </div>

      <ul>
        <i> <font face="Light ITALIC" size="12" color="#006600" style="text-decoration: underline" ; > New Release !</font></i>
        <hr> 
      </ul>

<!-- New Release -->
      <div class="example">          
        <div class="row">
          <?php $j = 0 ?>
            @foreach ($courses as $course)
              @if ($course->is_new_release == 1 && $j < 4)
                <div class="col-sm-6 col-md-3">
                  <a href="###">
                    <div class="thumbnail" style="width:190px; height:250px; ">
                      <!-- Use Picture From course(id) -->
                      <img class="img-rounded" src="images/new_release/course<?php echo $course->id ?>.jpg">
                      <div class="caption text-center">

                        <!-- Use Text From course(name) -->
                        <font size="3"><?php echo substr_utf8( $course->name, 0 , 50) ?></font>
                        <!-- Use Text From course(description) -->
                        <p><?php echo substr_utf8( $course->description, 0 , 50) ?></p>


                      </div>
                    </div>
                  </a>
                </div>
              <?php $j++; ?>
              @endif
            @endforeach
          </div>
        </div>
<!-- End New Release -->
      <hr>

    </div>



    <div class="container">
    <a class="btn btn-primary btn-block" href="http://localhost/irobust-training/public/category" role="button">Browse Course</a>
    </div>

    <br>

    <div class="col-md-12" style="height:100%;background-color:#1A1A1A;">
    <div class="container">
    <div class="copyRights">
    <p class="text-center"><br><font color ="white">Copyrights © 2015 - icb@solution</font></p>
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


<!-- substr and insert ... -->
          <?php
          //- ส่วนของการประกาศ Function --------------------------------------------------------
              function utf8_to_tis620($string) {
                 $str = $string;
                 $res = "";
                 for ($i = 0; $i < strlen($str); $i++) {
                   if (ord($str[$i]) == 224) {
                     $unicode = ord($str[$i+2]) & 0x3F;
                     $unicode |= (ord($str[$i+1]) & 0x3F) << 6;
                     $unicode |= (ord($str[$i]) & 0x0F) << 12;
                     $res .= chr($unicode-0x0E00+0xA0);
                     $i += 2;
                   } else {
                     $res .= $str[$i];
                   }
                 }
                 return $res;
               }
           
              function substr_utf8( $str, $start_p , $len_p) {
                 $str_post = "";
                 if(strlen(utf8_to_tis620($str)) > $len_p)
                 {
                   $str_post = "...";
                 }
                 return preg_replace( '#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$start_p.'}'.
                  '((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len_p.'}).*#s',
                  '$1' , $str ) . $str_post;
               };
            //--------------------------------------------------------------------------------------------
          
        ?>



