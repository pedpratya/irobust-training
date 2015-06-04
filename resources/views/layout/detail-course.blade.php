@extends('layout.master')

@section('content')

<link rel="stylesheet" href="{!! asset('css/course/detail-course.css') !!}">

          @foreach($courses as $course)

      <!-- Section Head is Name Course -->
          <div class="main-top">
                  <div class="container">
                      <div class="row course-desc">
                          <div class="col-md-12">
                              <h2 class="course-title" data-purpose="course-title">
                                  {{$course->name}} </h2>
                              <div class="ci-d">
                                  {{$course->description}}
                                  </div>
                              <div class="enrolled">
                                  <span class="rate fxac flex-col-xs">
                                      <a href="#reviews">
                                          <span class="rate-count ml10">
                                              28 ratings, 28523 students enrolled 
                                          </span>
                                      </a>
                                  </span>
                              </div>

                              <div class="by mb10 flex-col-xs">
                                      <span class="mr30">Instructed by 
                                          <a href="" class="thb-n prox ud-popup"> Wajanachai </a>
                                      </span>
                                      <span class="cats">
                                          <a class="cd-ca" href="">Office Productivity</a>
                                              /
                                          <a class="" href="">Microsoft</a>
                                      </span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>


    <!-- Section Middle is Video , Price , Detail , Take a Course -->

    <div class="main-details mt10">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                  <div class="thumbnail">
                  <img class="img-rounded" src="{!! asset('images/new_release/course' . $course->id . '.jpg') !!}">
                  </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="row fxdc right-wrap mh0-force-md">
                        <div class="fxw-md fdrr-md db-force-xs">
                        <!--  -->
                            <div class="right-top col-md-12 col-sm-6">
                              <div class="take-btn">
                                <div class="price fxac">
                                <span class="current-price"> <h4>${{$course->price}}</h4></span>
                                </div>

                                <a class="btn btn-primary btn-lg" data-requirelogin="true" href="http://localhost/irobust-training/public/auth/login">
                                  Take This Course
                                </a>
                              </div>
                          <hr> <!--  -->
                          <div class="right-middle col-md-11 col-sm-6">
                              <ul class="list">
                                  <li class="list-item">
                                      <span class="list-left">Lectures</span>
                                      <span class="list-right">128</span>
                                  </li>
                                  <li class="list-item">
                                      <span class="list-left">Video</span>
                                      <span class="list-right"> {{$course->duration}}</span>
                                  </li>
                                  <li class="list-item">
                                      <span class="list-left">Languages</span>
                                      <span class="list-right">English</span>
                                  </li>
                              </ul>
                          </div>
                          <!--  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Bottom is Detail of Course -->

    <div class="main-middle fs12-xs show-nav-on-this">
      <div class="container">
        <div class="row">

          <h3 class="tab-title">Curriculum</h3>
            <div class="table-responsive b0-xs">
                <table class="cur-list table table-hover ud-landingpage-curriculum" data-course-id="39292" data-is-more-to-load="1" data-is-seo-traffic="0" data-is-new-landing-page="1">
                    <tbody>
                  @foreach($course->c_section as $section)
                      <tr class="cur-list-title">
                      <th colspan="4" class=" w30 tal hm">Section {{$section->id}} : {{$section->name}}</th></tr>
                      @foreach($section->s_topic as $topic)
                          <tr class="cur-list-row ">
                              <td class="count wa-force-xs">{{$topic->id}}</td>
                              <td class="cur-icon wa-force-xs">
                                  <i class="glyphicon glyphicon-play-circle"></i>
                              </td>
                              <td class="lec-title-and-preview">
                                  <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                      <div class="lec-title fx"> {{$topic->name}} </div>
                                  </div>
                              </td>
                              <td class="tar lec-det">{{$topic->duration}}</td>
                          </tr>
                      @endforeach
                  @endforeach 
                      <tr class="cur-list-row js-load-more load-more ud-discover-tracker" data-action="full-curriculum-read" data-user-id="XwZHLQ==" data-course-id="E0ASc1dQVw==" data-dtcode="Ptwc61L31R6F" data-target-selector-class="js-discover-tracker-elm" style="padding: 10px;">
                        <td colspan="4" class="border-bottom-none">
                            <a href="#" class="js-discover-tracker-elm">Full curriculum</a>
                            <div class="ajax-loader-stick" style="display:none; position: relative; margin-top: 10px; margin-bottom: 10px;">
                            </div>
                        </td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
            @endforeach



@stop


<!--     @foreach($courses as $course)
        @foreach($course->c_section as $section)
        
          <?php echo $section->name ?>
          <br>
            @foreach($section->s_topic as $topic)
              <?php echo $topic->name ?>
              <br>
            @endforeach
            <br>
        @endforeach 
      @endforeach -->