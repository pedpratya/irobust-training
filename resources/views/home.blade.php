 @extends('layout.master')

 @section('content')
    <!-- Faith -->
    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <!-- End Faith -->


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

    <a class="btn btn-primary btn-block" href="http://localhost/irobust-training/public/category" role="button">Browse Course</a>

    <br>


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

        @stop