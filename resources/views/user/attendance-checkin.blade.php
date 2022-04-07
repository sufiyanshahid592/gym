@include('user/template/header')
<div id="body">
			<script type="text/javascript">
	var MemberData = [{"id":"10142","code":null,"academy_id":"4340","user_id":"6953","photo":"images\/default-avatar.png","name":"hamza","email":"hamzafarooq454@gmail.com","type_title":"Manager","label":"hamza","type":"manager"}];
</script>
<input name="utc_offset" type="hidden" value="+05:00">
<input name="barcode" type="hidden">

<div class="section-header">
    <h2><img src="{{url('assets/user/images/manager/members/icn-members.png')}}"> Members</h2>
    <em class="location">hamza</em>
    <div class="subnav">
                <ul class="member-menu">
                @include('user/menus/members-menu')
            
                        </ul>
    </div>
</div>
<input type="hidden" name="membership_checkin" value="1">
<input type="hidden" name="overdue_checkin" value="0">
<input type="hidden" name="checkin_booking" value="0">
<input type="hidden" name="checkin_auto" value="0">
<div class="attendance">		
	<div class="main">
        <div class="bg">
                        <ul class="subnav">
                
                <li><a attr-name="code" class="code selected">Enter Code</a></li>
                                <li><a attr-name="search" class="name-search">Name Search</a></li>
                                            </ul>
            <h2>Check-In</h2>
            <div class="code active">
                <div class="input">
                    <input type="text" class="text code" placeholder="Enter check-in code...">
                    <a class="clear-code"><i class="icon-cancel-circle"></i></a>
                </div>
                <ul>
                    <li>
                        <a>1</a><a>2</a><a>3</a>
                    </li>
                    <li>
                        <a>4</a><a>5</a><a>6</a>
                    </li>
                    <li>
                        <a>7</a><a>8</a><a>9</a>
                    </li>
                    <li><a class="erase"><i class="icon-erase"></i></a><a>0</a><a class="enter"><i class="icon-ok-circle"></i></a></li>
                </ul>
                <a class="button signin">Check In <i class="icon-right"></i></a>

            </div>
            <div class="search">
                <input type="text" class="text ui-autocomplete-input" placeholder="Enter first or last name..." autocomplete="off">				
            </div>
                                </div>
    </div>
    <div class="sessions">
        <h3>Today's Sessions</h3>
        <div class="scroller style-scroll">	
                            <div class="placeholder">No upcoming sessions</div>
                <div class="unscheduled" style="display:none;">

                    <h4>Unscheduled</h4>
                    <ul>
                   </ul>    
                </div>
                       
        </div>
                <div class="buttons">
            <div class="schedule">
                <form class="event-popup style-scroll" method="post" action="manager/gym/addevent">
    <input type="hidden" name="type" value="1">
    <a class="close"><i class="icon-cancel-1"></i></a>
		<div class="head">
		<input type="hidden" name="id">
		
        
        <h3><i class="icon-calendar"></i> <span>Add</span> Session</h3>
	</div>
    <div class="labelpair title">
    <label>Title</label>
        <input name="title" placeholder="Title (Max 250 characters)" class="text title" value="" type="text">    </div>
    <div class="labelpair picker-label">
        <label>Color</label>
        <div class="color-pick">

            <em class="border-color-red" attr-color="red"></em>
            <input type="hidden" name="color" value="red">
            <ul class="style-scroll">
                                <li><span class="border-color-blue" attr-color="blue"></span></li>
                                                    <li><span class="border-color-purple" attr-color="purple"></span></li>
                                                                    <li><span class="border-color-yellow" attr-color="yellow"></span></li>
                                                    <li><span class="border-color-green" attr-color="green"></span></li>
                                                    <li><span class="border-color-orange" attr-color="orange"></span></li>
                                                    <li><span class="border-color-grey" attr-color="grey"></span></li>
                                                    <li><span class="border-color-magenta" attr-color="magenta"></span></li>
                                                    <li><span class="border-color-teal" attr-color="teal"></span></li>
                                                    <li><span class="border-color-mint" attr-color="mint"></span></li>
                                                    <li><span class="border-color-brown" attr-color="brown"></span></li>
                                                    <li><span class="border-color-linen" attr-color="linen"></span></li>
                                                    <li><span class="border-color-black" attr-color="black"></span></li>
                                                </ul>
        </div>
    </div>
    
    
    <div class="freq-container">
        <div class="time-spec">
            <label>Time &amp; Frequency</label>
            <select name="recurring" id="recurring">
    <option value="0" label="One-time">One-time</option>
    <option value="1" label="Weekly" selected="selected">Weekly</option>
    <option value="2" label="Bi-Weekly">Bi-Weekly</option>
    <option value="3" label="Monthly">Monthly</option>
</select>            <span>on</span>
            
            <input type="text" class="text date scheduled" placeholder="yyyy/mm/dd" name="scheduled">
                        <span>at</span>
            <div class="labelpair timelabel">
                <b>:</b>
                                                <select name="hour" id="hour">
    <option value="0" label="00">00</option>
    <option value="1" label="01">01</option>
    <option value="2" label="02">02</option>
    <option value="3" label="03">03</option>
    <option value="4" label="04">04</option>
    <option value="5" label="05">05</option>
    <option value="6" label="06">06</option>
    <option value="7" label="07">07</option>
    <option value="8" label="08">08</option>
    <option value="9" label="09">09</option>
    <option value="10" label="10">10</option>
    <option value="11" label="11" selected="selected">11</option>
    <option value="12" label="12">12</option>
    <option value="13" label="13">13</option>
    <option value="14" label="14">14</option>
    <option value="15" label="15">15</option>
    <option value="16" label="16">16</option>
    <option value="17" label="17">17</option>
    <option value="18" label="18">18</option>
    <option value="19" label="19">19</option>
    <option value="20" label="20">20</option>
    <option value="21" label="21">21</option>
    <option value="22" label="22">22</option>
    <option value="23" label="23">23</option>
</select> 
                <select name="minute" id="minute">
    <option value="00" label="00">00</option>
    <option value="05" label="05">05</option>
    <option value="10" label="10">10</option>
    <option value="15" label="15">15</option>
    <option value="20" label="20">20</option>
    <option value="25" label="25">25</option>
    <option value="30" label="30">30</option>
    <option value="35" label="35" selected="selected">35</option>
    <option value="40" label="40">40</option>
    <option value="45" label="45">45</option>
    <option value="50" label="50">50</option>
    <option value="55" label="55">55</option>
</select> 
                
            </div>

            <span>for</span>
        </div>
        <div class="labelpair dur-label">
            <input name="duration" value="90" class="text time" type="text">            min
        </div>
    </div>
    
    
    <div class="start-end">
        
        <div class="labelpair">
            <label>Start Date</label>
            <input type="text" class="text date" placeholder="yyyy/mm/dd" name="start_date" autocomplete="off">
        </div>
        <div class="labelpair">
            <label>End Date</label>
            <input type="text" class="text date" placeholder="yyyy/mm/dd" name="end_date" autocomplete="off">
        </div>
        <a class="show-start-end"><i class="icon-plus-1"></i> Start / End Dates</a>
    </div>
        <h4>Program &amp; Instructor</h4>
            <div class="labelpair sports">
        <label>Program</label>
        <select name="sport_id" id="sport_id">
    <option value="102044" label="CrossFit">CrossFit</option>
    <option value="0" label="All Programs">All Programs</option>
</select>    </div>
            
    
        <h4>Session Settings</h4>
    <div class="settings">
        
        <input type="hidden" name="website_visible" value="0">

        <label class="website-visible has-checkbox">
            <input type="checkbox" value="1" name="website_visible" checked="checked">
            <span class="checkbox"></span>
            Show on public schedule
        </label>
        <input type="hidden" name="attendance_tracking" value="0">
        <label class="has-checkbox">
            <input type="checkbox" name="attendance_tracking" value="1" checked="checked"> 
            <span class="checkbox"></span>
            Attendance Tracking
        </label>
        <input type="hidden" name="bookable" value="0">
        <label class="has-checkbox">
            <input type="checkbox" name="bookable" value="1"> 
            <span class="checkbox"></span>
            Available for booking

        </label>
        
        
        <div class="can-book">
            
            
            <div class="book-limit">
                <input type="tel" class="text" maxlength="3" name="book_limit" value="1">
                Max capacity
            </div>
            <div class="book-cost">
                $                <input type="tel" class="text" maxlength="6" name="book_cost" value="0">
                Cost
            </div>
            <input type="hidden" name="create_lead" value="0">
            <label class="save-lead has-checkbox">
                <input type="checkbox" name="create_lead" value="1">
                <span class="checkbox"></span>
                Save booking as a lead
            </label>
            <input type="hidden" name="members_only" value="0">
            <label class="members-only has-checkbox">
                <input type="checkbox" name="members_only" value="1">
                <span class="checkbox"></span>
                Show only to members
            </label>
            
            <input type="hidden" name="managers_only" value="0">
            <label class="members-only has-checkbox">
                <input type="checkbox" name="managers_only" value="1">
                <span class="checkbox"></span>
                Show only to managers
            </label>
                        
            
        </div>
        <input type="hidden" name="remote" value="0">
        <label class="has-checkbox has-remote">
            <input type="checkbox" name="remote" value="1"> 
            <span class="checkbox"></span>
            Remote session

        </label>
        <div class="zoom-link"></div>
        <div class="remote-link">
            <label>Remote Session Link (*optional)</label>
            <input name="remote_link" type="text" class="text">        </div>        
        
        <div class="session-count labelpair">
            <label>Session Count</label>
            <input name="sessions" type="text" class="text">        </div>
    </div>
	<div class="buttons">
		<button class="button" type="submit">Create</button>
        <a class="grey-button restore-event">Restore Session</a>
        <a class="grey-button remove-event">Cancel Session</a>
		<button type="submit" class="button edit-button">Save</button>
		<div class="confirmation-popup">
            <h2>Cancel Session</h2>
            <p>Cancel session at this date or delete permanently?</p>
            <div class="buttons-container">                
                 <a class="grey-button cancel">Cancel Session</a>
                 <a class="red-button delete">Delete</a>
            </div>
        </div>
        <a class="show-session-count hollow-button icon-cog"></a>
	</div>
</form>            </div>	
            <a class="hollow-button add-unscheduled">Add Unscheduled Session</a>
        </div>
            </div>
        <div class="checkins">

        
        <h3>Recent Check-ins</h3>
        <div class="scroller style-scroll">
            <ul>
                            </ul>
                        <div class="placeholder">No check-ins yet today</div>
                    </div>
        <div class="buttons">            
            <a class="button" href="manager/attendance/list">All Check-ins</a>
        </div>
    </div>
    	
</div>

<div id="signin">
    <div class="window">
        <input type="hidden" name="id">
        <input type="hidden" name="type">
        <div class="left">
            <a class="close"><span><i class="icon-level-up"></i> Go Back</span><b><i class="icon-cancel-1"></i></b></a>
            <h2>Welcome back!</h2>
            <span class="avatar">
                EM
            </span>
            <em class="name">Last Name</em>
            
            <div class="memberships">
                <span class="spinner"></span>
            </div>
            
        </div>
        
        
        
        <div class="signin-sessions">
                        <div class="top">
                                <div class="multi">
                    <label>Select Multiple</label>
                    <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="select_multi" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="select_multi" value="1" checked="checked"></span></span>                </div>
                                <h2>Available Sessions</h2>
                <p>Choose the sessions you are checking into:</p>
            </div>
            <div class="scroller">
                                <div class="upcoming" style="display:none;">

                    <h4>Upcoming</h4>
                    <ul>
                    </ul>
                </div>
                <div class="unscheduled" style="display:none;">

                    <h4>Unscheduled</h4>
                    <ul>
                                    </ul></div>
                                <div class="placeholder">No sessions available</div>
            </div>
            <div class="confirm blurred">
                <a class="signin-confirm button">Confirm Check-In</a>
            </div>
        </div>
    </div>
</div>
			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')