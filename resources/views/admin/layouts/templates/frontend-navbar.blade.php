    <!-- ========================= Header Area Start ========================= -->


    <!-- New Tcb layout -->




    <?php 
    
        $why_tcb  =  DB::table('dynamic_pages')->orderBy('id', 'asc')->limit(1)->get();
        $clients_feedback  = DB::table('blogs')->orderBy('id', 'desc')->limit(2)->get();

    ?>
    <div id="top-header-bar" class="px-3">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-sm-7 col-md-7 col-lg-7 col-xl-6 col-12 align-self-center pos-sm-to-md">
                    <a class="icons_view mr-lg-5 mr-md-3 mr-sm-3" href="mailto:info@cosmeticboxes.com"><i class="fa fa-envelope" aria-hidden="true"></i> contact@printcustompackaging.com </a>
                    <a class="icons_view" href="tel:345 678 900"><i class="fa fa-phone"  aria-hidden="true"></i> 123 123 123 </a>
                </div>
                <div class="col-sm-5 col-md-5 col-lg-5 col-xl-6 col-12 align-self-center text-lg-right pos2-sm-to-md">
                    <ul class="list-unstyled list-inline navbar-right top-nav text-md-right">
                        <!-- <li><a href="#">Signin</a></li><li><a href="#">Signup</a></li> --><!-- <li><a href="http://printcustompackaging.com/contact-us" title="">Contact Us</a></li> -->
                        <li class="nav-item dropdown nav-item-left-border  nav-item-left-border-remove nav-item-left-border-md-show">
                            <a class="" href="#" role="button" id="dropdownLanguage" data-toggle="collapse" data-target="#demo" aria-expanded="true">
                                <img src="https://www.thecustomboxes.com/dist/img/usa.jpg" class="flag flag-us" alt="English" /> US <i class="fa fa-angle-down"></i>
                            </a>
                            <div id="demo" class="dropdown-menu collapse" aria-labelledby="dropdownLanguage">
                                <a class="dropdown-item" href="https://www.thecustomboxes.com.au/"><img src="https://www.thecustomboxes.com/dist/img/au.jpg" class="flag flag-us" alt="English" /> Australia</a>
                                <a class="dropdown-item" href="https://www.thecustomboxes.co.uk/"><img src="https://www.thecustomboxes.com/dist/img/uk.jpg" class="flag flag-es" alt="English" /> United Kingdom</a>
                            </div>
                        </li>
                        
                        <li><a href="{{url('blog')}}">blog</a></li>
                        <li><a href="{{url('request-quote')}}">request quote</a></li>
                        <!-- <li><a href="{{url('')}}">Why PCP</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pakBoxes_main_menu">
        <div class="container-fluid px-lg-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <a class="navbar-brand img-class-brand-1" href="{{url('/')}}">
                        <img src="{{ asset('assets/img/logo1.jpg')}}" class="img-fluid pb-hf-logo d-block mx-auto logo-margin" alt="logo" />
                    </a>
                </div>
                <div class="col-md-6">
                    <!-- <ul class="list-unstyled list-inline  myBox_nav">
                    <li><a href="myBox_nav-after">Login/Register</a></li>
                    <li class="card-blog"><a href=""><i class="fas fa-search"></i></a></li>
                    <li><a href="" title=""><i class="fas fa-heart"></i></a></li>
                    <li><a href="" title=""><i class="fas fa-heart"></i></a></li>
                </ul> -->

                    <div class="main float-md-right">
                        <form action=""  method=""  class="">
                            <div class="input-group">
                                <input type="text" class="form-control border-right-0" placeholder="Search" style="border: 1px solid #e8e8e8;" />
                                <div class="input-group-append">
                                    <button class="btn btn-secondary bg-transparent border-left-0 py-sm-2" style="border: 1px solid #e8e8e8;" type="button"> <i class="fa-solid fa-search" style="color: #000000;" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="clearfix"></div>
   
    <header id="pb-sticky-wrapper" class="pb-sticky-wrapper">
        <div id="pb" class="header-body border-top-0">
            <div class="header-container" id="sticky-header">
                <div class="container-fluid">
                    <!-- Navbar -->
                    <nav id="unique-bg" class="p-0 navbar navbar-expand-xl jcb_navigationWrap">
                        <div class="header-logo d-none">
                            <a href="{{url('/')}}">
                                <img alt="tcb" src="https://www.thecustomboxes.com/images/logo_m.png" />
                            </a>
                        </div>
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse justify-content-around" id="navbarNavDropdown">
                            <!-- Left nav -->
                            <ul class="nav navbar-nav uniq---ul">
                                <li class="nav-item"><a class="nav-link active-view" href="{{url('/')}}">Home</a></li>
                              
                             @foreach ($parent_category as $mainCate)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle " href="{{ str_replace( ' ','-',strtolower($mainCate->cate_url)) }}">{{ $mainCate->cate_name }}</a>
                                    <ul class="dropdown-menu">
                                        @foreach ($all_subcategory as $subCate)
                                           @if ($subCate->parent_cate == $mainCate->id )       
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="{{ str_replace( ' ','-',strtolower($subCate->cate_url)) }}">{{$subCate->cate_name}}</a>
                                                <ul class="dropdown-menu mega-dropdown-2">
                                                    @foreach ($all_products as $singleProd)
                                                      @if ($singleProd->prod_category == $subCate->id )
                                                         <li class="mega-dropdown-items"><a class="dropdown-item" href="{{ str_replace( ' ','-',strtolower($singleProd->prod_url)) }}">{{ $singleProd->prod_name  }}</a></li>
                                                      @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                           @endif
                                        @endforeach
                                        <li class=""><a class="dropdown-item" href="category.html">View All</a></li>
                                    </ul>
                                </li>
                             @endforeach


                                 <li class="nav-item"><a class="nav-link" href="{{ url('other-product/')}}">Other Product</a></li>

                                 @foreach ($why_tcb as $aboutus)
                                     <li class="nav-item"><a class="nav-link" href="{{ str_replace( ' ','-',strtolower($aboutus->page_url)) }}">{{ $aboutus->page_name }}</a></li> 
                                 @endforeach
                              
                                
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#">Rigid Boxes</a>
                                    <ul class="dropdown-menu">
                                        <li class=""><a class="dropdown-item" href="category.html">Action</a></li>
                                        <li class=""><a class="dropdown-item"href="category.html">Separated link</a></li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="category.html">One more separated link</a>
                                            <ul class="dropdown-menu mega-dropdown-2">
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#">By Box Styles</a>
                                    <ul class="dropdown-menu">
                                        <li class=""><a class="dropdown-item"href="category.html">Action</a></li>
                                        <li class=""><a class="dropdown-item" href="category.html">Separated link</a></li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="category.html">One more separated link</a>
                                            <ul class="dropdown-menu mega-dropdown-2">
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#">Other Product</a>
                                    <ul class="dropdown-menu">
                                        <li class=""><a class="dropdown-item" href="category.html">Action</a></li>
                                        <li class=""><a class="dropdown-item" href="category.html">Separated link</a></li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="category.html">One more separated link</a>
                                            <ul class="dropdown-menu mega-dropdown-2">
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                                <li class="mega-dropdown-items"><a class="dropdown-item" href="product-detail.html">Another action</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                <!-- <li class="nav-item"><a class="nav-link" href="request-a-quote.html">Gallery</a></li>
                                <li class="nav-item"><a class="nav-link" href="other-product.html">Why TcB</a></li> -->
                            </ul>

                            <ul class="uniq---ul2">
                                <li><a href="#">Get a Quote</a></li>
                            </ul>
                        </div>

                        <!-- <ul class="navbar-nav attr-nav align-items-center">
                        <li>
                            <a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                            <div class="search_wrap">
                                <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                                <form action="https://www.justcustomboxes.com/search" method="get">
                                    <input type="text" placeholder="Search" name="keyword" class="form-control" id="search_input" /> <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                            <div class="search_overlay"></div>
                            <div class="search_overlay"></div>
                            <div class="search_overlay"></div>
                        </li>
                    </ul> -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
