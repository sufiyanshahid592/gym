@extends('layouts/admin')



@section('content')


<div class="right_col" role="main">


    <div class="clearfix"></div>

    @if (Session::has('message'))
      <div class="alert alert-success session-destroy mt-sm-4 mx-sm-4">
             <?php
                      echo Session::get('message');
                    //    Session::flush();
                    //    Session::forget('message') ;
            ?>
      </div>
    @endif

    @if (Session::has('error'))
    <div class="alert alert-danger session-destroy mt-sm-4 mx-sm-4">
           <?php
                    echo Session::get('error');
          ?>
    </div>
  @endif



    <div class="">
        <div class="page-title px-sm-4">
            <div class="title_left mb-sm-4 w-100">
                <h3>Add Sections</h3>
            </div>

            {{-- <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="clearfix"></div>
        {{-- <div class="row mt-3">
            <div class="col-sm-4 ">
                <div class="form-group material-style">
                    <input type="text" class="form-control" required="required" placeholder=" " />
                    <label>Email address</label>
                </div>

            </div>
            <div class="col-sm-4 ">
                <div class="form-group material-style">
                    <input type="text" class="form-control" required="required" placeholder=" " />
                    <label>Email address</label>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="form-group material-style">
                    <input type="text" class="form-control" required="required" placeholder=" " />
                    <label>Email address</label>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="form-group material-style">
                    <input type="text" class="form-control" required="required" placeholder=" " />
                    <label>Email address</label>
                </div>
            </div>
        </div> --}}

     <form class="form px-sm-4" method="post" action="{{ url('/create-section') }}" enctype="multipart/form-data" >

        @csrf

        <div class="row">
            <div  class="col-md-12 mb-sm-4">
                <div class="form-group material-style">
                    <input id="inputText1" type="text" name="section_title" class="form-control" required=" required" />
                    <label for="inputText1" class="col-form-label">Section Title</label>
                </div>
            </div>
            <div  class="col-md-12 mb-sm-4">
                <div class="form-group material-style">
                    <textarea class="form-control bg-light small" id="editor1" required="required" name="longdescription"></textarea>
                    <label for="editor1" class="col-form-label">Long Description</label>
                </div>
            </div>
            <div  class="col-md-12 mb-sm-4">
                <div class="form-group material-style ">
                    <button type="submit" class="btn btn-submit-view  px-sm-5">Save</button>
                </div>
            </div>


        </div>

     </form>



    </div>
</div>

@endsection


@section('scripts')



@endsection
