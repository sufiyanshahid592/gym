@include('user/template/header')
<div id="body">
			<div class="section-header">
    <h2><img src="images/manager/members/icn-members.png"> Members</h2>
    <em class="location">hamza</em>
    <div class="subnav">
                <ul class="member-menu">

           @include('user/menus/members-menu')
                        </ul>
    </div>
</div>
<div class="attendance-settings width">
    <div class="subnav attendance-subnav">
    <ul>
                @include('user/menus/members-attandance-menu')
            </ul>
</div>
	<div class="container">
	
        
        <div class="main-title nomargin">
            <a class="floater button" href="manager/attendance/import">Import</a>
            <h2>Attendance Settings</h2>
        </div>
        
        <form method="post" action="/manager/attendance/settings">
                                    <div class="half">
                <div class="explanation">
                    <h3>Attendance Tracking</h3>
                    <p>Track member attendance at your gym with a numeric code or name search. Also enables attendance information in member accounts.</p>
                </div>
                <div class="fields">
                    <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="attendance_tracking" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="attendance_tracking" value="1" checked="checked"></span></span>                    <label>Enable Attendance Tracking</label>
                    <br>
                    <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="recent_checkins" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="recent_checkins" value="1" checked="checked"></span></span>                
                    <label>Show recent check-ins</label>
                    <br>
                    <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="allow_name_search" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="allow_name_search" value="1" checked="checked"></span></span>                
                    <label>Allow check-in with name search</label>

                </div>
            </div><div class="half right">
                <div class="explanation">
                    <h3>Check-ins per page</h3>
                    <p>Number of check-ins to show per page in the attendance report.</p>
                </div>
                
                    <label>Check-ins per page</label>
                    <select name="checkins_per_page" id="checkins_per_page">
    <option value="10" label="10">10</option>
    <option value="25" label="25" selected="selected">25</option>
    <option value="50" label="50">50</option>
    <option value="100" label="100">100</option>
</select>                
            </div>
            <div class="half">
                <div class="explanation">
                    <h3>Check-in Code Digits</h3>
                    <p>The number of digits a member needs to enter to check-in. Default is 4</p>
                </div>
                <div class="fields">
                    <div class="code-edit">
                        
                        <label>Allow members to edit their code</label>
                        <span class="toggle on"><span><em attr-val="0">Off</em><input type="radio" name="checkin_code_edit" value="0"><i class="control"></i><em attr-val="1">On</em><input type="radio" name="checkin_code_edit" value="1" checked="checked"></span></span>   
                        
                    </div>
                    <label>Check-in Code Digits</label>
                    <input name="checkin_digits" class="text number" type="text" value="4">                    
                </div>
                <div class="explanation">
                    <h3>Check-in confirmation sound</h3>
                    <p>Play a notification sound when a member checks-in successfully.</p>
                    
                </div>
                <div class="fields">
                    <span class="toggle off"><span><em attr-val="0">Off</em><input type="radio" name="checkin_sound" value="0" checked="checked"><i class="control"></i><em attr-val="1">On</em><input type="radio" name="checkin_sound" value="1"></span></span>         
                    <label>Check-in notification sound</label>
                </div>
            </div><div class="half right">
                <div class="explanation">
                    <h3>Check-in control</h3>
                    <p>Control which members can check-in based on their membership status.</p>
                </div>
                <div class="fields toggles">
                    <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="membership_checkin" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="membership_checkin" value="1" checked="checked"></span></span>                    <label>Require Active Membership</label>
                    
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="checkin_require_card" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="checkin_require_card" value="1"></span></span>                    <label>Require Card-on-file</label>
                    
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="checkin_require_sig" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="checkin_require_sig" value="1"></span></span>                    <label>Require Document Signature</label>
                    
                    <select name="overdue_checkin" id="overdue_checkin">
    <option value="0" label="No" selected="selected">No</option>
    <option value="1" label="Yes, immediately">Yes, immediately</option>
    <option value="2" label="1 day overdue">1 day overdue</option>
    <option value="3" label="2 days overdue">2 days overdue</option>
    <option value="4" label="3 days overdue">3 days overdue</option>
    <option value="10" label="10 days overdue">10 days overdue</option>
</select>                   
                    <label>Disable check-in for overdue payments</label>
                   
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="checkin_booking" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="checkin_booking" value="1"></span></span>                    <label>Require booking for bookable sessions</label>
                    
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="location_checkin" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="location_checkin" value="1"></span></span>                    <label>Members can check-in at other account gyms</label>
                    
                    <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="checkin_email_notifications" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="checkin_email_notifications" value="1" checked="checked"></span></span>                    <label>Receive Email notifications for failed check-ins</label>
                    
                    
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="checkin_upcoming_only" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="checkin_upcoming_only" value="1"></span></span>                    <label>Members can only check-in before session starts</label>                    
                    
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="front-desk-logout" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="front-desk-logout" value="1"></span></span>                    <label>Allow to log-out from front-desk mode</label>
                    
                    <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="checkin_unscheduled" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="checkin_unscheduled" value="1" checked="checked"></span></span>                    <label>Allow managers to add unscheduled sessions</label>
                    
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="checkin_required_payment" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="checkin_required_payment" value="1"></span></span>                    <label>First membership payment required to check-in</label>
                    <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="checkin_multi" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="checkin_multi" value="1" checked="checked"></span></span>                    <label>Members can check-in to multiple sessions at once</label>
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="checkin_auto" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="checkin_auto" value="1"></span></span>                    <label>Automatically check-in to first available session</label>
                    <select name="pre_checkin" id="pre_checkin">
    <option value="0" label="Unlimited" selected="selected">Unlimited</option>
    <option value="10" label="15 Minutes">15 Minutes</option>
    <option value="1" label="30 minutes">30 minutes</option>
    <option value="2" label="1 hour">1 hour</option>
    <option value="3" label="1.5 hours">1.5 hours</option>
    <option value="4" label="2 hours">2 hours</option>
</select>                    <label>Time to check-in before class</label>
                </div>
            </div>
            <div class="half">
                <div class="explanation">
                    <h3>Allow Member Account Check-in</h3>
                    <p>Members can check-in from their account through their mobile device. <b>Note:</b> We can't verify a member is physically in the gym.</p>
                </div>
                <div class="fields">
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="account_checkin" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="account_checkin" value="1"></span></span>                </div>
            </div><div class="half right">
                <div class="explanation">
                    <h3>Promotion Indicators</h3>
                    <p>Show current progress in rank in attendance reporting</p>
                </div>
                <div class="fields">
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="show_checkin_promotion" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="show_checkin_promotion" value="1"></span></span>                </div>
            </div>
            <div class="half">
                <div class="explanation">
                    <h3>Check-in Waiver</h3>
                    <p>Members must read and agree to a waiver before being able to check-in to a session.</p>
                </div>
                <div class="fields">
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="show_checkin_waiver" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="show_checkin_waiver" value="1"></span></span>                    <label>Show check-in waiver</label>
                    
                    <div class="waiver-area">
                        <textarea name="checkin_waiver" class="text minimal-rte"></textarea>
                        <div class="placeholders">
                            You can use <b>{checkbox}</b> in the waiver content to display a required check-box.
                        </div>
                    </div>
                </div>
                
            </div><div class="half right membership-cards">
                <div class="explanation">
                    <h3>Membership Cards</h3>
                    <p>Print membership cards to check-in members. <a href="help/membership-cards">Learn more</a></p>
                </div>
                
                <label>Check-in Method</label>
                <div class="fields">
                    <div class="has-radio">
                                                <input id="type-1" type="radio" name="code_type" value="1" checked="checked">
                        <label for="type-1">Barcode</label>
                        <input id="type-2" type="radio" name="code_type" value="2">
                        <label for="type-2">QR Code</label>

                    </div>
                </div>
                <div class="fields toggles">
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="membership_on_card" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="membership_on_card" value="1"></span></span>                    <label>Show current membership on card</label>
                </div>
                                
            </div>
            <hr>
            <div class="buttons">
                <button type="submit">Save Settings</button>
            </div>
        </form>
    </div>
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')