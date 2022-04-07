@extends('layouts/admin')



@section('content')

<div class="right_col" role="main">
    <div class="clearfix"></div>


    @if (Session::has('message'))
            <div class="alert alert-success session-destroy mt-sm-4 mx-sm-4">
                <?php echo Session::get('message'); ?>
            </div>
    @endif


    @if (Session::has('error'))
        <div class="alert alert-danger session-destroy mt-sm-4 mx-sm-4">
            <?php echo Session::get('error'); ?>
        </div>
    @endif

    <div class="">
        <div class="page-title px-sm-4">
            <div class="title_left mb-sm-4 w-100">
                <h3> Update Other Product</h3>
            </div>
        </div>
        <div class="clearfix"></div>



        @foreach ($edit_products as $edit_prod_item)

        @endforeach


        <form class="form px-sm-4" method="post" action="{{ url('update-otherproduct/'. $edit_prod_item->id) }}" enctype="multipart/form-data">

            @csrf

            <div class="row">
                <div class="col-md-12 mb-sm-4">
                    <div class="form-group material-style">
                        <input id="inputText1" type="text" name="productname" class="form-control" value="{{ $edit_prod_item->prod_name }}" required=" required" />
                        <label for="inputText1" class="col-form-label">Product Name</label>
                    </div>
                </div>

                <div class="col-md-12 mb-sm-4">
                    <div class="form-group material-style">
                        <input id="inputText2" type="text" name="producturl" value="{{ $edit_prod_item->prod_url }}" class="form-control"  />
                        <label for="inputText2" class="col-form-label">Product URL</label>
                    </div>
                </div>

                <div class="col-md-12 mb-sm-4">
                    <div class="form-group material-style">
                        <input id="inputText3" type="text" name="metatitle" value="{{ $edit_prod_item->meta_title }}" class="form-control" />
                        <label for="inputText3" class="col-form-label">Meta Title</label>
                    </div>
                </div>

                <div class="col-md-12 mb-sm-4">
                    <div class="form-group material-style">
                        <input id="inputText4" type="text" name="metadescription" value="{{ $edit_prod_item->meta_description }}"  class="form-control" />
                        <label for="inputText4" class="col-form-label">Meta Description</label>
                    </div>
                </div>

                <div class="col-md-12 mb-sm-4">
                    <div class="form-group material-style">
                        <input id="inputText5" type="text" name="metatags" value="{{ $edit_prod_item->meta_tags }}" class="form-control" />
                        <label for="inputText5" class="col-form-label">Meta Tags</label>
                    </div>
                </div>

                <div class="col-md-12 mb-sm-4">
                    <div class="form-group material-style">
                        <textarea class="form-control" id="editor1" required="required" name="shortdescription">{{ $edit_prod_item->prod_short_desc }}</textarea>
                        <label for="editor1" class="col-form-label">Short Description</label>
                    </div>
                </div>

                <div class="col-md-12 mb-sm-4">
                    <div class="form-group material-style">
                        <textarea class="form-control" id="editor2" required="required" name="longdescription"> {{ $edit_prod_item->prod_long_desc }} </textarea>
                        <label for="editor2" class="col-form-label">Long Description</label>
                    </div>
                </div>

                <div class="col-md-12 mb-sm-4">
                    <div class="form-group material-style">

                        <input id="categoryimage" type="file" name="image" class="form-control" />
                        <label for="categoryimage" class="col-form-label"> Image </label>

                        <img src="{{ url('images/' . $edit_prod_item->prod_image ) }}" alt=""  class="img-fluid mt-sm-4 d-inline-block img-thumbnail"  width="60px"  height="60px"  />
                        <input type="hidden" name="oldimage" id="altname"  value="{{ $edit_prod_item->prod_image }}"  />

                    </div>
                </div>

                <div class="col-md-12 mb-sm-4">
                    <div class="form-group material-style">
                        <input type="text" name="altname" id="altname"  value="{{ $edit_prod_item->prod_altname }}" class="form-control bg-light smalll" />
                        <label for="prod_altname" class="col-form-label" >Altname</label>
                    </div>
                </div>


                <div class="col-md-12 mb-sm-4">
                    <div class="form-group material-style mt-2">
                        <input id="fileuploadbasic" type="file" name="images[]" class="form-control bg-light smalll" multiple />
                        <label for="fileuploadbasic" class="col-form-label">Gallery</label>

                        <?php

                           $images = json_decode($edit_prod_item->prod_gallery);

                             if(!empty($images)){

                                 foreach ( $images as $image ) { ?>


                                    <div class="mt-sm-4 d-inline-block">
                                        <img src="{{ url('images/'.$image ) }}" alt=""  class="img-fluid img-thumbnail"   height="150px"  width="150px" />

                                        <a href="{{ url('del-otherprod-image/'.$image."/".$edit_prod_item->id ) }}">
                                            <button type="button"  class="btn btn-danger px-sm-2"> Delete</button>
                                        </a>


                                    </div>


                            <?php } } ?>

                            <input type="hidden" name="oldgallery" id="altname"  value="{{ $edit_prod_item->prod_gallery }}"  />

                    </div>
                </div>

                <div class="col-md-12 mb-sm-4 mt-sm-3 mb-sm-4 ">
                    <div class="form-group material-style">

                        <label for="multipleSelect" class=""  style=" top: -29px; " > Related Product </label>
                        <select id="multipleSelect" name="relatedProd[]" class="js-states form-control px-sm-4" multiple>
                            <option value="0" > -- select a other Product --</option>
                            <?php
                                $relatedProd = json_decode($edit_prod_item->related_prod);
                                if(!empty($relatedProd)){

                                    foreach ($all_otherproducts as $single_otherprod) { ?>
                                     <option value={{ $single_otherprod->id }}

                                        @foreach ($relatedProd as $perItem) {{  $single_otherprod->id == $perItem  ? "selected" : "" }}  @endforeach>

                                         {{ $single_otherprod->prod_name }}
                                      </option>

                            <?php  } }  ?>
                      </select>
                    </div>
                </div>

                <div class="col-md-12 mb-sm-4">
                    <div class="form-group material-style">
                        <button type="submit" class="btn btn-submit-view px-sm-5"> Update </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')

@endsection
