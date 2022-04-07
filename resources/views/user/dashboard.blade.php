@include('user/template/header')
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
                        <h3><img src="{{url('assets/user/images/manager/icons/icn-sessions-module.png')}}" /> Schedule Today {{Request::is()}}</h3>
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
@include('user/template/footer')