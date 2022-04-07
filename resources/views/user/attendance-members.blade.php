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
	
		<div class="container">
		
		<form class="filters" method="get" action="/manager/attendance/members">
            <div class="search">
                <i class="icon-search"></i>
                <input name="name" placeholder="Search first or last name..." type="text" class="text">                <button type="submit"><i class="icon-ok-circle"></i></button>
            </div>
                        <a class="hollow-button show-filters"><i class="icon-filter"></i><b> Filter</b></a>
            <div class="floater">
                <a class="hollow-button" title="Print" onclick="window.print()"><i class="icon-print"></i> <span>Print</span></a>
                <a class="hollow-button export" title="Export"><img src="images/manager/icons/icn-export.png"> <span>Export</span> <i class="icon-down-dir"></i></a>
                <div class="popup export-popup">
                                         <a title="Export as CSV" href="/manager/attendance/members?export=csv">Export as CSV</a>
                    <a title="Export as PDF" href="/manager/attendance/members/export/pdf">Export as PDF</a>                  
                </div>
            </div>
           
			<div class="filter-popup">
                <div class="scrollable">
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
				<div class="placeholder">No members found. Change the search parameters and try again.</div>
			</div>
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')