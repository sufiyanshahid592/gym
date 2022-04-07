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
</div><div class="width promotions">
	<div class="subnav attendance-subnav rightshadow">
    <ul>
                @include('user/menus/members-attandance-menu')
            </ul>
</div>
	
	<div class="container">
		
		<form class="filters" method="get" action="/manager/attendance/promotions">
            <div class="search">
                <i class="icon-search"></i>
                <input name="name" placeholder="Search first or last name..." type="text" class="text">                <button type="submit"><i class="icon-ok-circle"></i></button>
            </div>
                        <a class="hollow-button show-filters"><i class="icon-filter"></i><b> Filter</b></a>
            <div class="floater">
                
                <a class="hollow-button" title="Print" onclick="window.print()"><i class="icon-print"></i> <span>Print</span></a>
                <a class="hollow-button export" title="Export"><img src="images/manager/icons/icn-export.png"> <span>Export</span> <i class="icon-down-dir"></i></a>
                <div class="popup export-popup">
                    <a title="Export as PDF" href="/manager/attendance/promotions/export/pdf">Export as PDF</a>
                    <a title="Export as CSV" href="/manager/attendance/promotions/export/csv">Export as CSV</a>
                </div>
                <div class="member-counter">
                    <div class="labelpair">
                        <label>Selected:</label>
                        <em><span>0</span> members</em>
                    </div>
                    <a class="grey-button cancel">Cancel</a>
                    <span class="popup">
                        Select members to grade / promote by checking the box at the left side of each row.
                    </span>
                </div>
                <a class="button promote-continue disabled">Continue</a>
                <a class="button promote">Promote</a>
                
            </div>
            <div class="filter-popup">
                <div class="scrollable">
                    <div class="labelpair">
                        <label>Members</label>
                        <select name="members" id="members">
    <option value="" label="All Members">All Members</option>
    <option value="ready" label="Ready for promotion">Ready for promotion</option>
    <option value="notready" label="Not ready for promotion">Not ready for promotion</option>
</select>                    </div>
                                        <div class="labelpair">
                        <label>Program</label>
                        <select name="sport_id" id="sport_id">
    <option value="" label="All Programs">All Programs</option>
    <option value="102044" label="CrossFit">CrossFit</option>
</select>                    </div>
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
        				<div class="placeholder">
                        No promotion data found. Have you set up promotion settings for your programs?
            <br>
            <a class="button" href="manager/sports/manage">Manage Programs</a>
                    </div>
			</div>
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')