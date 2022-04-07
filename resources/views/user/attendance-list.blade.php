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
</div><div class="width checkins-list">
	<div class="subnav attendance-subnav rightshadow">
    <ul>
                @include('user/menus/members-attandance-menu')
            </ul>
</div>
	
	<div class="checkins container noskills">	
		<form class="filters" method="get" action="/manager/attendance/list">
            <div class="search">
                <i class="icon-search"></i>
                <input name="name" placeholder="Search first or last name..." type="text" class="text">                <button type="submit"><i class="icon-ok-circle"></i></button>
            </div>
                        <a class="hollow-button show-filters"><i class="icon-filter"></i><b> Filter</b></a>
            <div class="floater">
                <a class="hollow-button" title="Print" onclick="window.print()"><i class="icon-print"></i> <span>Print</span></a>
                <a class="hollow-button export" title="Export"><img src="images/manager/icons/icn-export.png"> <span>Export</span> <i class="icon-down-dir"></i></a>
                <div class="popup export-popup">
                    <a title="Export as PDF" href="/manager/attendance/list/export/pdf">Export as PDF</a>
                    <a title="Export as CSV" href="/manager/attendance/list/export/csv">Export as CSV</a>
                </div>
            </div>
			<div class="filter-popup">
                <div class="scrollable">
                    <div class="labelpair">
                        <label>Dates</label>
                        <input name="range" placeholder="yyyy/mm/dd - yyyy/mm/dd" class="text range" autocomplete="off" type="text">  
                    </div>
                                        <div class="labelpair">
                        <label>Session</label>
                        <input name="session" placeholder="Search session name..." type="text" class="text">  
                    </div>
                                                        </div>
                <div class="actions">
                    <a class="reset">Reset</a>
                    <span class="floater">
                        <a class="close">Cancel</a>
                        <button type="submit" class="apply">Apply</button>
                    </span>
                </div>
            </div>

		</form>
        		
        				<div class="placeholder">No check-ins found. Change the search parameters and try again.</div>
			</div>
	
	<div class="confirmation-popup remove-log">
		<h2>Remove Check-in</h2>
		<p>Are you sure you want to remove this check-in?</p>
		<input type="hidden" name="id">
		<div class="buttons-container">
			<a class="red-button confirm">Confirm</a> <a class="grey-button cancel">Cancel</a>
		</div>
	</div>
		<form class="event-popup style-scroll" method="post" action="manager/attendance/track">
			
    <div class="head">
        <a class="close icon-cancel-1"></a>
        
        <h3 class="add">Log Attendance</h3>
        <h3 class="edit">Edit Attendance</h3>
    </div>
    <input type="hidden" name="member_id" value="">
    
    <input type="hidden" name="id">
    
    <input type="hidden" name="past_log" value="0">
    
    
    
    <div class="subnav">
        <ul>
            <li><a class="selected single">Session</a></li>
            <li><a class="show-bulk">Bulk</a></li>
                        
        </ul>
    </div>
    <div class="select-box checked_date hasDatepicker" id="dp1649056528113">
                
        <span class="regular">Date</span>
        <span class="past" style="display:none;">Apply From</span>
        <input name="checked_in" class="text date" type="text" value="2022/04/04" placeholder="yyyy/mm/dd">
        
    <div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style=""><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">April</span>&nbsp;<span class="ui-datepicker-year">2022</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="1">1</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="2">2</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="3">3</a></td></tr><tr><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#" aria-current="true" data-date="4">4</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="5">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="6">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="7">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="8">8</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="9">9</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="10">10</a></td></tr><tr><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="11">11</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="12">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="13">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="14">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="15">15</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="16">16</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="17">17</a></td></tr><tr><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="18">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="19">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="20">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="21">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="22">22</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="23">23</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="24">24</a></td></tr><tr><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="25">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="26">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="27">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="28">28</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="29">29</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="30">30</a></td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div></div>
            <div class="scroller sessions">  
        <a class="add-note"><i class="icon-plus-1"></i> Add Note</a>
        <textarea name="notes" cols="60" rows="8" class="text notes" placeholder="Enter note..."></textarea>
                <label>Choose a session:</label>
                
        <div class="placeholder">No sessions on this date</div>
    </div>
    
    <div class="bulk">
        
        <div class="labelpair timeinputs">
            <label>Days</label>
            <input name="days" value="0" class="text time" type="text">        </div>
        
        <div class="labelpair timeinputs">
            <label>Hours</label>
            <input name="hours" value="0" class="text time" type="text">        </div>

        <div class="labelpair timeinputs">
            <label>Sessions</label>
            <input name="sessions" value="0" class="text time" type="text">        </div>
        <br>
            </div>
        
    
    
    <div class="buttons">
        <button class="button" type="submit">Log Attendance</button>				
    </div>
    <script>
        
        var skills = {};
    </script>
</form>    
</div>
			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')