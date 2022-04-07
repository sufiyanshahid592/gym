
<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
            <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <base href="https://gymdesk.com/" />
    <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
        
        <link href="/min/?b=styles&amp;f=fonts/css/mor.css,fonts.css,reset.css,site/form.css,site/main.css,site/login.css&amp;v=18e7b0213" rel="stylesheet" type="text/css" />  <!--[if IE 7 ]>
    <link rel="stylesheet" href="styles/fonts/css/mor-ie7.css" type="text/css" media="all" />
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta name="description" content="Modern software for gyms. Easily set up recurring payments, onboard your members, communicate with prospects and grow your business." />
<meta property="og:description" content="Modern software for gyms. Easily set up recurring payments, onboard your members, communicate with prospects and grow your business." />
<meta property="twitter:description" content="Modern software for gyms. Easily set up recurring payments, onboard your members, communicate with prospects and grow your business." />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://gymdesk.com/login" />
<meta property="og:image" content="https://gymdesk.com/images/facebook/og.png" />
<meta property="og:site_name" content="Gymdesk" />
<meta property="twitter:site" content="@gym_desk" />
<meta property="twitter:card" content="summary_large_image" />
<meta name="robots" content="noindex" />
<meta property="og:title" content="Login - Gymdesk" />
<meta property="twitter:title" content="Login - Gymdesk" />     <script type="text/javascript">var baseUrl ='';</script>
        
    
        <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/gymdesk.svg" />
    <link rel="apple-touch-icon" href="images/logo/gymdesk.svg" />
        
                <script defer data-domain="gymdesk.com" src="https://plausible.io/js/plausible.js"></script>
    <title>Login - Gymdesk</title></head>
<body>
        <div id="container">
            <div id="header" class="container">
                <div class="width">
                <div class="nav">
                    <div class="links-wrap">
                        <div class="links">
                            <div class="more-links"> <em>Software <i class="icon-angle-down"></i></em>
                                <ul>
                                    <li><a href="{{url('software/gyms')}}" title="Fitness Gyms">Fitness Gyms</a></li>
                                    <li><a href="{{url('software/martial-arts')}}" title="Martial Arts Schools">Martial Arts Schools</a></li>
                                    <li><a href="{{url('software/gymnastics')}}" title="Gymnastics">Gymnastics</a></li>
                                    <li><a href="{{url('software/yoga')}}" title="Yoga Studios">Yoga Studios</a></li>
                                    <li><a href="{{url('software/dance')}}" title="Dance Studios">Dance Studios</a></li>
                                </ul>
                            </div>
                            <div class="more-links"> <em>Features <i class="icon-angle-down"></i></em>
                                <ul>
                                    <li><a href="{{url('features/members')}}" title="Members">Members</a></li>
                                    <li><a href="{{url('features/billing')}}" title="Billing">Billing</a></li>
                                    <li><a href="{{url('features/attendance')}}" title="Attendance">Attendance</a></li>
                                    <li><a href="{{url('features/booking')}}" title="Booking">Booking</a></li>
                                    <li><a href="{{url('features/website')}}" title="Website">Website</a></li>
                                    <li><a href="{{url('features/reporting')}}" title="Reporting">Reporting</a></li>
                                    <li><a href="{{url('features/marketing')}}" title="Marketing">Marketing</a></li>
                                    <li><a href="{{url('features/pos')}}" title="Point-of-sale">Point-of-sale</a></li>
                                </ul>
                            </div>
                            <a href="{{url('pricing')}}">Pricing</a>
                            <div class="more-links"> <em>Resources <i class="icon-angle-down"></i></em>
                                <ul>
                                    <li> <a href="{{url('blog/')}}">Articles</a> </li>
                                    <li> <a href="{{url('podcast')}}">Gym Heroes Podcast</a> </li>
                                </ul>
                            </div> <span class="actions">
                        <a href="{{url('contact')}}">Contact</a>
                                        <a href="{{url('login')}}">Login</a>
                                        <a class="button" href="{{url('register')}}">Sign-up</a>
                                        </span> </div>
                    </div>
                    <a class="show-menu icon-menu"></a>
                </div>
                <a id="logo" href="{{url('/')}}" title="Homepage - Gymdesk"> <em>Gymdesk</em> <small>Formerly Martial Arts on Rails</small> </a>
            </div>
            </div>

            <div id="body">
                <div class="head head2">
                    <div class="dots"></div>
                </div>
                <div class="bg-view" style="background: #f3f4f7; padding-bottom: 20px">
                    <div id="login" class="container access-form">
                        <em class="circles"></em>
                        <h1>Welcome back!</h1>
    
                        <form method="post" action="{{url('login-process')}}" class="login">
                        	@csrf
							@if(Session::get("success"))
							<div class="alert alert-success">{{Session("success")}}</div>
							@endif
							@if(Session::get("error"))
							<div class="alert alert-danger">{{Session("error")}}</div>
							@endif
                            <div class="labelpair">
                                <label>Email Address</label>
                                <input name="e_mail" placeholder="name@domain.com" tabindex="3" type="text" class="text" />
                            </div>
    
                            <div class="labelpair">
                                <a href="login/forgot" class="forgot">Forgot password?</a>
                                <label>Password</label>
                                <input name="password" type="password" class="text password" placeholder="Your password" tabindex="4" />
                            </div>
    
                            <button class="red-button" type="submit" tabindex="5">Sign-in</button>
                        </form>
                    </div>
                </div>
                <div class="clear" style="clear: both;"></div>
            </div>
            <div id="footer-push"></div>
        </div>
        <div id="footer" class="bg-white">
            <div class="width">
        <div class="top">
            <div class="col brand">
                <img src="{{url('assets/login-register/images/gymdesk.png')}}" height="40" width="40" alt="Logo" />
                <p>Built and run in<br />
                    Austin, TX
                </p>
            </div>
            <div class="col">
                <h3>Company</h3>
                <a href="{{url('content/about')}}">About us</a>         
                <a href="{{url('contact')}}">Contact Us</a>
                <a href="{{url('blog')}}">Resources</a>
                <h3>Comparison</h3>
                <a href="{{url('alternative/mindbody')}}">Mindbody</a>
                <a href="{{url('alternative/zenplanner')}}">ZenPlanner</a>
                <a href="{{url('alternative/kicksite')}}">Kicksite</a>
                <a href="{{url('alternative/spark')}}">Spark Membership</a>
                <a href="{{url('alternative/pushpress')}}">PushPress</a>
                <a href="{{url('alternative/gymmaster')}}">GymMaster</a>
            </div>
            <div class="col">
                <h3>Features</h3>
                <a href="{{url('features/reporting')}}">Reporting and Dashboards</a>
                <a href="{{url('features/marketing')}}">Gym Marketing</a>
                <a href="{{url('features/website')}}">Gym Website</a>
            
                <a href="{{url('features/members')}}">Member Management</a>
                <a href="{{url('features/billing')}}">Billing management</a>
                <a href="{{url('features/attendance')}}">Attendance Tracking</a>
                <h3>Sports</h3>
                <span></span>
                <a href="{{url('software/martial-arts')}}">Martial Arts</a>
                <a href="{{url('software/gyms')}}">Fitness Gyms</a>
                <a href="{{url('software/membership-clubs')}}">Membership Clubs</a>
                <a href="{{url('software/gymnastics')}}">Gymnastics Gyms</a>
                <a href="{{url('software/yoga')}}">Yoga Studios</a>
                <a href="{{url('software/dance')}}">Dance Studios</a>
            </div>
            
            <div class="col">
                <h3>Resources</h3>            
                <a href="https://docs.gymdesk.com/help/docs">Documentation</a>
                <a href="{{url('pricing')}}">Pricing</a>
                <a href="{{url('lp/contract-template')}}">Membership Contract Template</a>
                
                <a href="{{url('lp/bbwidget')}}">Black belt widget</a>
                <a href="{{url('best-gym-management-software')}}">Gym software guide</a>
                <a href="{{url('page/trust')}}">Trust Center</a>
                <a href="{{url('page/terms')}}">Terms of Service</a>
                <a href="{{url('page/privacy')}}">Privacy Policy</a>
                
            </div>
           
        </div>
        
        <div class="bottom">
            <p class="copy">&copy; 2022 Gymdesk</p>
            <div class="social">
                
                <a class="icon-facebook" href="https://www.facebook.com/gymdeskfb" aria-label="Our Facebook Page"></a>
                <a class="icon-twitter" href="https://www.twitter.com/gym_desk" aria-label="Our Twitter profile"></a>
                <a class="icon-linkedin" href="https://www.linkedin.com/company/gymdesk/" aria-label="Find us on LinkedIn"></a>
                <a class="icon-youtube" href="https://www.youtube.com/channel/UC5Rr8HzbJtx3AAzPs3IBKSQ/" aria-label="Our Youtube Channel"></a>
            </div>
           
            
        </div>
    </div>
            <input type="hidden" name="module" value="site" />
        </div>
     
       
        <script src="files/jquery-2.2.4.min.js"></script>
        <script src="files/vendor.d03036c7.js"></script>
        <script src="files/container-frame.5d997355.chunk.js"></script>
        <script src="files/owl.carousel.min.js"></script>
        <script src="files/main.d410a393.js"></script>
    </body>
</html>

