@extends('layout.master')

@section('content')



		    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
       <!--  <link rel="stylesheet" href="{!! asset('bootflat/css/bootflat.css') !!}"> -->


        <div class="col-sm-2 col-md-2">
          <div id="well_slidebar">
            <div class="panel-group" id="accordion">
              @foreach ($categories as $category)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{!! $category->id !!}" class="collapsed"><span class="glyphicon glyphicon-folder-close">
                            </span>{{$category->name}}</a>
                        </h4>
                    </div>
                        <div id="collapse{!! $category->id !!}" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <table class="table">
                                    <tbody>                                    
                                    @foreach ($category->c_course as $x)
                                      <tr>
                                          <td>
                                              <!-- <span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://localhost/irobust-training/public/detail-course$url = route('routeName', $params);">{{$x->name}}</a> -->
                                              <span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://localhost/irobust-training/public/detail-course$url = route('routeName', $params);">{{$x->name}}</a>
                                          </td>
                                      </tr>
                                    @endforeach
                                </tbody></table>
                            </div>
                        </div>
                  </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="col-sm-10 col-md-10">
                  <div class="row" id="sC">
						@foreach($sections as $section)
							{!!$section!!}
						@endforeach
                  </div>
        </div>

@stop

