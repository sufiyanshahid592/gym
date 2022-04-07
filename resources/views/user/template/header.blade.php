
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
    <!-- <base href="file:///C:/Users/Sufiyan%20Shahid/Desktop/gym/" /> -->
    <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
        <link rel="stylesheet" type="text/css" href="{{url('assets/fontawesome/css/all.css')}}">
        <link href="{{url('assets/user/css/style.css')}}" rel="stylesheet" type="text/css" />   <!--[if IE 7 ]>
    <link rel="stylesheet" href="styles/fonts/css/mor-ie7.css" type="text/css" media="all" />
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta property="og:title" content="Dashboard - hamza" />
<meta property="twitter:title" content="Dashboard - hamza" />       <script type="text/javascript">var baseUrl ='';</script>
        
    
    <link rel="shortcut icon" href="{{url('assets/user/images/favicon.ico')}}" />
    <link rel="apple-touch-icon-precomposed" href="{{url('assets/user/images/logo/gymdesk.svg')}}" />
    <link rel="apple-touch-icon" href="{{url('assets/user/images/logo/gymdesk.svg')}}" />
        
                                
         <!--        <script>
window['_fs_debug'] = false;
window['_fs_host'] = 'fullstory.com';
window['_fs_script'] = 'edge.fullstory.com/s/fs.js';
window['_fs_org'] = '179PFD';
window['_fs_namespace'] = 'FS';
(function(m,n,e,t,l,o,g,y){
    if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');} return;}
    g=m[e]=function(a,b,s){g.q?g.q.push([a,b,s]):g._api(a,b,s);};g.q=[];
    o=n.createElement(t);o.async=1;o.crossOrigin='anonymous';o.src='https://'+_fs_script;
    y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
    g.identify=function(i,v,s){g(l,{uid:i},s);if(v)g(l,v,s)};g.setUserVars=function(v,s){g(l,v,s)};g.event=function(i,v,s){g('event',{n:i,p:v},s)};
    g.anonymize=function(){g.identify(!!0)};
    g.shutdown=function(){g("rec",!1)};g.restart=function(){g("rec",!0)};
    g.log = function(a,b){g("log",[a,b])};
    g.consent=function(a){g("consent",!arguments.length||a)};
    g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
    g.clearUserCookie=function(){};
    g.setVars=function(n, p){g('setVars',[n,p]);};
    g._w={};y='XMLHttpRequest';g._w[y]=m[y];y='fetch';g._w[y]=m[y];
    if(m[y])m[y]=function(){return g._w[y].apply(this,arguments)};
    g._v="1.3.0";
})(window,document,window['_fs_namespace'],'script','user');
</script> -->
                   
    <link rel="manifest" href="/manager.json" />
    <title>Dashboard - hamza</title></head>
<body>
    <div id="container" class="manager-mode">
        <div id="header">
            <a name="top"></a>
            <div class="selector">
                <a id="logo" class="po" href="manager" title="hamza"><img src="{{url('assets/user/images/manager/icons/icn-gym-placeholder-so.png')}}" /></a>
                <em>hamza</em>
                <div class="location-selector">
                    <ul class="style-scroll"></ul>
                    <a class="button" href="manager/academies/add">Add New Location</a>
                </div>
            </div>
            <div id="menu">
                <ul>
                    <li>
                        <a href="{{url('manager/dashboard')}}" class="dashboard <?php if(Request::is('manager/dashboard')){echo 'selected';} ?>">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{url('manager/members/list')}}" class="members <?php if(Request::is('manager/members/list') OR Request::is('manager/attendance/checkin') OR Request::is('manager/attendance/overview') OR Request::is('manager/attendance/list') OR Request::is('manager/attendance/promotions') OR Request::is('manager/attendance/members') OR Request::is('manager/attendance/sessions') OR Request::is('manager/attendance/multi') OR Request::is('manager/attendance/settings') OR Request::is('manager/memberships/manage') OR Request::is('manager/docs/manage') OR Request::is('manager/content/members') OR Request::is('manager/members/summary') OR Request::is('manager/members/settings')){echo 'selected';} ?>">Members</a>               
                    </li>
                    <li class="mobile">
                        <a class="checkin <?php if(Request::is('manager/attendance/checkin')){echo 'selected';} ?>" href="{{url('manager/attendance/checkin')}}">Check-in</a>
                    </li>
                    <li>
                        <a href="{{url('manager/billing/overview')}}" class="billing <?php if(Request::is('manager/billing/overview') OR Request::is('manager/billing/payments') OR Request::is('manager/billing/recurring') OR Request::is('manager/billing/discounts') OR Request::is('manager/billing/forms') OR Request::is('manager/billing/accounting') OR Request::is('manager/billing/summary') OR Request::is('manager/billing/settings') OR Request::is('manager/billing/balances')){echo 'selected';} ?>">Billing</a>
                    </li>
                    <li>
                        <a href="{{url('manager/marketing/dashboard')}}" class="marketing <?php if(Request::is('manager/marketing/dashboard') OR Request::is("manager/marketing/referrals") OR Request::is('manager/marketing/leads') OR Request::is('manager/marketing/messaging') OR Request::is('manager/automations/manage') OR Request::is('manager/marketing/settings')){echo 'selected';} ?>">Marketing </a>
                    </li>
                    <li>
                        <a href="{{url('manager/website/settings')}}" class="website <?php if(Request::is('manager/website/settings') OR Request::is('manager/website/homepage') OR Request::is('manager_website_instructors') OR Request::is('manager/website/location') OR Request::is('manager/website/schedule') OR Request::is('manager_website_forms') OR Request::is('manager/website/content') OR Request::is('manager/website/gallery') OR Request::is('manager/website/pricing')){echo 'selected';} ?>">Website</a>
                    </li>
                    <li>
                        <a href="{{url('manager/sales/create')}}" class="sales <?php if(Request::is('manager/sales/create') OR Request::is('manager/products/report')){echo 'selected';} ?>">Sales</a>
                    </li>
                    <li>
                        <a href="{{url('manager/gym/settings')}}" class="academy <?php if(Request::is('manager/gym/settings')){echo 'selected';} ?>">Gym</a>
                    </li>
                    <li class="front-desk">
                        <a>Front Desk</a>
                    </li>
                    <li class="usermenu">
                        <a href="{{url('manager/account/settings')}}">
                            Account
                            <i class="fa-solid fa-user"></i>
                            <small>25 days left</small>
                        </a>
                    </li>
                    <li class="get-help">
                        <a title="Need help? Click here" href="{{url('help/docs')}}" target="_blank" class="icon-help-circle">Help</a>
                    </li>
                    <li class="mobile logout">
                        <a href="{{url('manager/login/logout')}}"><i class="icon-logout"></i> Log-out</a>
                    </li>
                    <li class="back-to-top">
                        <a href="{{url('manager/dashboard#top')}}"><i class="icon-angle-up"></i>Back to top</a>
                    </li>
                </ul>
            </div>
            <a class="showmenu"><i class="icon-menu"></i></a>
        </div>