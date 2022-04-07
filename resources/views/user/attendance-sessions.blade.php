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
</div><div class="width sessions">
	<div class="subnav attendance-subnav rightshadow">
    <ul>
                @include('user/menus/members-attandance-menu')
            </ul>
</div>
	
	<div class="container">
		
		<form class="filters" method="get" action="/manager/attendance/sessions">
                         <a class="hollow-button show-filters"><i class="icon-filter"></i><b> Filter</b></a>
            <div class="floater">
                <a class="hollow-button" title="Print" onclick="window.print()"><i class="icon-print"></i> <span>Print</span></a>
                <a class="hollow-button export" title="Export"><img src="images/manager/icons/icn-export.png"> <span>Export</span> <i class="icon-down-dir"></i></a>
                <div class="popup export-popup">
                    <a title="Export as PDF" href="/manager/attendance/sessions/export/pdf">Export as PDF</a>                    
                </div>
            </div>
            <div class="filter-popup">
                <div class="scrollable">
                    <div class="labelpair">
                        <label>Day of the week</label>
                        <select name="day" id="day">
    <option value="" label="Day ...">Day ...</option>
    <option value="0" label="Sunday">Sunday</option>
    <option value="1" label="Monday">Monday</option>
    <option value="2" label="Tuesday">Tuesday</option>
    <option value="3" label="Wednesday">Wednesday</option>
    <option value="4" label="Thursday">Thursday</option>
    <option value="5" label="Friday">Friday</option>
    <option value="6" label="Saturday">Saturday</option>
</select>                    </div>
                                        <div class="labelpair">
                        <label>Dates</label>
                        <input name="range" placeholder="yyyy/mm/dd - yyyy/mm/dd" class="text range" autocomplete="off" type="text"> 
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
				<div class="placeholder">No sessions found. Change the search parameters and try again.</div>
			</div>
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')