    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->

    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
       <!--  <link rel="stylesheet" href="{!! asset('bootflat/css/bootflat.css') !!}"> -->

       <div class="col-sm-10 col-md-10">

                  <div class="row">
                  @foreach ($categories as $category)
<!--                     <?php $j = 0 ?> -->
                      @foreach ($category->c_course as $course)
                          <div class="col-sm-6 col-md-3">
                            <a href="###">
                              <div class="thumbnail">
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
<!--                         <?php $j++; ?> -->
                      @endforeach
                    @endforeach
<!--                     <?php echo $j ?> -->
                    </div>
        </div>

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
