



@php
      $dynamic_page =  DB::table('dynamic_pages')->get();
      $our_socials  = DB::table('socials_media')->get();
@endphp

 <!-- ========================= Footer Area Start ========================= -->

 <div class="footer pt-2 pt-sm-2 position-relative">
    <div class="overlay-view"></div>
    <div class="content_wrapper py-2 pt-sm-5 pb-4">
        <div class="container px-lg-0">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 footer-block">
                    <div class="pb-footer-item">
                        <div class="pb-footer-title">
                            about us
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                        <!-- <div class="sosmed-icon icon-bg-primary d-inline-flex">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div> -->
                        <div class="footer-widget-area">
                            <div class="widget-contact">
                                <ul class="contact-info list-style-type-none">
                                    <li>
                                        <a href="mailto:info@cosmeticboxes.com">
                                            <i class="fas fa-envelope mr-sm-2" aria-hidden="true"></i>
                                            <span class="anchor-span">Contact@Business.Com</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:345 678 900">
                                            <i class="fas fa-phone mr-sm-2"  aria-hidden="true"></i>
                                            <span class="anchor-span"> 345 678 900 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-map-marker-alt mr-sm-2" aria-hidden="true"></i>
                                            <span class="anchor-span"> Lorem ipsum</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 footer-block">
                    <div class="pb-footer-item">
                        <div class="pb-footer-title">
                            INFORMATION
                        </div>

                        <ul class="footer_list_view">
                            @foreach ($dynamic_page as $item)
                                <li><a href="{{ str_replace(' ', '-', strtolower($item->page_url))}}" title="{{$item->page_name}}">{{$item->page_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-4 col-xl-2 footer-block">
                    <div class="pb-footer-item">
                        <div class="pb-footer-title">
                            shipper
                        </div>

                        <ul class="footer_list_view">
                            <li><a href="about.html" title="About Us">About Us</a></li>
                            <li><a href="attorneys.html" title="Attorney">Attorney</a></li>
                            <li><a href="practice-area.html" title="Practice Areas">Practice Areas</a></li>
                            <li><a href="page-faq.html" title="FAQ">FAQ</a></li>
                            <li><a href="contact.html" title="Contact Us">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-12 col-xl-4 footer-block">
                    <div class="pb-footer-item">
                        <div class="pb-footer-title">
                            newsletter
                        </div>
                        <ul class="social_media_icons">
                            <li class="my-3">
                                <a href="https://www.pakboxes.com">
                                    <img src="https://www.pakboxes.com/assets/images/dmca.png" alt="DMCA" style="border-radius: 9px;" />
                                    <img src="https://www.pakboxes.com/assets/images/ssl.png" alt="SSL" style="border-radius: 9px;" />
                                    <img title="thecustomboxes.com SSL" alt="thecustomboxes.com SSL" style="border: 0;" src="http://printcustompackaging.com/web/images/thecustomboxesSSL.png" class="lazy footer-t-image" />
                                    <img src="https://www.pakboxes.com/assets/images/sitelock.png" alt="sitelock" />
                                </a>
                            </li>
                        </ul>
                        <div class="footer-menu">
                            <!-- <h4 class="footer-widget-title headings"> Account </h4> -->
                            <div class="copyright-text"><p>Subscribe to our newsletter to get helpful industry news and the latest packaging ideas!</p></div>
                            <form class="form-inline justify-content-start mb-2 mb-sm-5 my-lg-0" active="{{url('email_subcribe/')}}" method="post">
                                @csrf
                                <input class="form-control" type="text" name="email" placeholder="Enter your Email here" aria-label="" required="" />
                                <button class="btn pb_btn_footer btn-footer mt-xl-0" type="submit" name="submit">Subscribe</button>
                            </form>
                            <div class="copyright-text mt-2"><p>I Promise We dont spam you!</p></div>
                        </div>

                        <ul class="gcp-footer-nav mt-sm-3 mt-4">
                            <li class="footer-icons-social">

                                @foreach ($our_socials as $socials_links)
                                    <a href="{{ $socials_links->facebook_link }}" target="_blank" class="social facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    <a href="{{ $socials_links->twitter_link }}" target="_blank" class="social twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    <a href="{{ $socials_links->pinterest_link }}" target="_blank" class="social linkedIn"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                    <a href="{{ $socials_links->instagram_link }}" target="_blank" class="social instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-sm-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 my-md-0 my-3">
                    <a href="" class="la-foot_img">
                        <img src="assets/pics/tcb-logo-01.png" style="width: 280px; height: auto;" alt="logo bottom" class="logo-bottom">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pb-footer-item ">
                        <div class="pb-footer-title position-static ">
                            Mobile App
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,etuer adipiscing elit, sed diam nonummy.</p>
                    </div> 
                </div>
                <div class="col-lg-4 col-md-6 pl-md-0">
                    <div class="">
                        <ul class="d-flex justify-content-between ">
                            <li class="my-3">
                                <a href="#">
                                        <img src="{{asset('assets/pics/icon-appstore.png')}}"  class="img-fluid" alt="DMCA" style="margin-bottom: 14px;"></br>
                                        <img src="{{asset('assets/pics/icon-googleplay.png')}}"  class="img-fluid" alt="SSL" >
                                </a>
                            </li>
                                <li class="my-3">
                                    <a href="#">
                                            <img src="{{asset('assets/pics/tab-icon.png ')}}"  class="img-fluid" alt="DMCA" style=" "></br>
                                    </a>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="La_copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 text-left">
                    <p class="La_foot_text">Copyright 2019 © <span class="color-primary">Lawe Html Template</span>. Designed by <span class="color-primary">Rometheme.</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ========================= Footer Area End ========================= -->


<a id="goback2Top" title="Back to top" href="#" ><i class="fa fa-angle-up"></i></a>


