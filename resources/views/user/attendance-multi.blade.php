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
</div><div class="width member-attendance">
	<div class="subnav attendance-subnav rightshadow">
    <ul>
                @include('user/menus/members-attandance-menu')
            </ul>
</div>

    <div class="container multi-checkin">
        <div class="sessions">
            <h4>Date</h4>
                        <div class="date-container">
                <input type="text" class="text date hasDatepicker" value="2022/04/04" placeholder="yyyy/mm/dd" id="dp1649057159286"><button type="button" class="ui-datepicker-trigger"></button>
            </div>
            
                        <h4 class="session-heading">Select Session:</h4>
                        <div class="scroller">                
                <div class="placeholder">No sessions on this date</div>
            </div>
                        <h4>Programs and Ranks</h4>
            <script>var ranks = {"102044":{"":"All Ranks"}};</script><select name="sport_id" id="sport_id">
    <option value="" label="All Programs">All Programs</option>
    <option value="102044" label="CrossFit">CrossFit</option>
</select><select name="rank_id" id="rank_id">
    <option value="" label="Select program...">Select program...</option>
</select>            <label class="has-checkbox"><input type="checkbox" name="has_access" value="1" checked="">
                <span class="checkbox"></span>
                Has active membership
            </label>
            <label class="has-checkbox"><input type="checkbox" name="booked" value="1">
                <span class="checkbox"></span>
                Bookings Only
            </label>
            <label class="has-checkbox"><input type="checkbox" name="include_staff" value="1">
                <span class="checkbox"></span>
                Include staff members
                
            </label>
                    </div>
        <div class="members">
            <div class="search-container">
                
                <input type="text" name="search" class="text search" placeholder="Search by name...">
                <i class="icon-cancel-circle"></i>
            </div>
            <h3>Select members<span> to check-in</span>:</h3>
            <div class="scroller"><div class="placeholder"><i class="icon-left"></i> Select session first</div></div>
            <div class="bottom disabled">
                <em class="counter"><b>0</b> members selected</em>
                <a class="confirm button">Check-in Members</a>
            </div>
        </div>
    </div>
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')