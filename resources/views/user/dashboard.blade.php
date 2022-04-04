
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
		<link href="{{url('assets/user/css/style.css')}}" rel="stylesheet" type="text/css" />	<!--[if IE 7 ]>
	<link rel="stylesheet" href="styles/fonts/css/mor-ie7.css" type="text/css" media="all" />
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <meta property="og:title" content="Dashboard - hamza" />
<meta property="twitter:title" content="Dashboard - hamza" />		<script type="text/javascript">var baseUrl ='';</script>
		
	
		<link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/gymdesk.svg" />
    <link rel="apple-touch-icon" href="images/logo/gymdesk.svg" />
		
	                            
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
                        <a href="{{url('manager/dashboard')}}" class="dashboard selected">Dashboard</a>
                    </li>
        			<li>
                        <a href="{{url('manager/members/list')}}" class="members">Members</a>				
        			</li>
                    <li class="mobile">
                        <a class="checkin" href="{{url('manager/attendance/checkin')}}">Check-in</a>
                    </li>
        			<li>
                        <a href="{{url('manager/billing/overview')}}" class="billing">Billing</a>
        			</li>
                    <li>
                        <a href="{{url('manager/marketing/dashboard')}}" class="marketing">Marketing </a>
        			</li>
        			<li>
                        <a href="{{url('manager/website/settings')}}" class="website">Website</a>
        			</li>
                    <li>
                        <a href="{{url('manager/sales/create')}}" class="sales">Sales</a>
        			</li>
        			<li>
                        <a href="{{url('manager/gym/settings')}}" class="academy">Gym</a>
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
        <div id="front-desk-popup" class="popup">
            <h2>Activate Front Desk Mode</h2>
            <div class="body">
                <p>Activating the front desk mode hides all the manager tools aside from <b>attendance tracking</b> and <b>member sign-up</b>. You can turn off this mode at any time by entering your password.</p>
                <div class="buttons">
                    <a class="button activate">Activate Front Desk Mode</a>
                </div>
            </div>
        </div>
        <div id="body">
            <div id="dashboard">
                <div class="section-header nonav">
                    <div class="width">
                        <div class="trial-notice">25 days left on free trial <a class="hollow-button" href="manager/account/pickplan">Upgrade</a></div>
                        <h2>
                            <img src="{{url('assets/user/images/manager/icons/ill-dashboard.png')}}" /> Dashboard
                        </h2>            
                        <em class="location">hamza</em>
                    </div>
                </div>
                <div class="main width">
                    <div class="sidebar container sessions">
                        <h3><img src="{{url('assets/user/images/manager/icons/icn-sessions-module.png')}}" /> Schedule Today</h3>
                        <div class="placeholder">No upcoming training sessions<br />
                            <a class="button" href="manager/gym/schedule">Manage schedule</a>
                        </div>
                    </div>
                    <div class="mainbar">
                        <div class="notifications container list-section"> 
                            <h3><img src="{{url('assets/user/images/manager/icons/icn-notifications-module.png')}}" /> Notifications</h3>
                            <div class="placeholder">There are no notifications at this time</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear" style="clear:both;"></div>
        </div>
	</div>
	<div id="footer" >
		<div class="links">
            <a href="https://gymdesk.com/contact">Contact</a> | 
            <a href="https://gymdesk.com/help/docs">Documentation</a> |  
            <a href="https://gymdesk.com/login/logout">Logout</a>
    	</div>
        <div class="powered">    
    		<p>Powered by <a href="https://gymdesk.com">Gymdesk</a></p>
    	</div>
        <input type="hidden" id="date-format" value="yy/mm/dd" />
        <input type="hidden" id="range-date-format" value="YYYY/MM/DD" />
        <input id="first_day_week" type="hidden" name="first_day_week" value="1" />
        <input type="hidden" name="module" value="manager" />
    </div>	
<!-- <script
  src="//code.jquery.com/jquery-3.6.0.min.js"
  
  crossorigin="anonymous"></script>

<link rel="stylesheet" href="/styles/jq/jquery-ui.css" type="text/css" media="all" />
<script
  src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"
  integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="/min/?b=js&amp;v=18e7b0213&amp;f=mor.js,media.js,jq/jquery.placeholder.js,manager/main.js" ></script>
<script type="text/javascript" src="/min/?b=js&amp;v=18e7b0213&amp;f=manager/dashboard.js" ></script> -->
    
</body>
</html>