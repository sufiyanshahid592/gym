@include('user/template/header')
<div id="body">
			<div class="section-header">
    <h2><img src="images/manager/icons/ill-marketing.png"> Marketing</h2>
    <em class="location">hamza</em>
	<div class="subnav">
				<ul>
						@include('user/menus/marketing-menu')
					</ul>
	</div>
</div><div class="container members leads full-width bulk-ops">
    
    <form class="filters" action="/manager/marketing/leads" method="get">
        
            
        
        <div class="search">
            <i class="icon-search"></i>
            <input name="name" placeholder="Search first or last name..." type="text" class="text">            <button type="submit"><i class="icon-ok-circle"></i></button>
        </div>
                <a class="hollow-button show-filters"><i class="icon-filter"></i><b> Filter</b></a>
        
        <a class="button" href="manager/marketing/create-lead">Create<b> Lead</b></a>
        
        <div class="floater">
            <a class="grey-button" href="manager/marketing/importleads" title="Import Products"><i class="icon-upload-cloud"></i><span>Import</span></a>  
            <a class="hollow-button" href="manager/marketing/exportleads" title="Export"><img src="images/manager/icons/icn-export.png"> <span>Export</span></a>
            
        </div>
        <div class="filter-popup">    
            <div class="scrollable">
                <div class="labelpair shorter">
                    <label>Email Address</label>
                    <input name="email" type="text" class="text">                    
                </div>
                <div class="labelpair shorter">
                    <label>Phone number</label>
                    <input name="phone" type="text" class="text">                    
                </div>
                
                <br>
                <div class="labelpair">
                    <label>Lead Source</label>
                    <select name="source" id="source">
    <option value="" label="Source ...">Source ...</option>
    <option value="search" label="Search engine (Google, Bing, etc)">Search engine (Google, Bing, etc)</option>
    <option value="map-service" label="Google Maps search">Google Maps search</option>
    <option value="referral" label="Referral">Referral</option>
    <option value="social" label="Social Media">Social Media</option>
    <option value="communities" label="Online communities / forums">Online communities / forums</option>
    <option value="online-ad" label="Online advertisement">Online advertisement</option>
    <option value="offline-ad" label="Offline advertisement">Offline advertisement</option>
    <option value="location" label="Noticed the physical location">Noticed the physical location</option>
    <option value="website" label="Website">Website</option>
    <option value="event" label="Event">Event</option>
    <option value="school" label="School">School</option>
    <option value="other" label="Other">Other</option>
</select>                </div>
                                            </div>
            <div class="actions">
                <a class="reset">Reset</a>
                <span class="floater">
                    <a class="close">Cancel</a>
                    <button type="submit" class="apply">Apply</button>
                </span>
            </div>
        </div>
        
                <div class="subnav">
    <ul>
                <li><a href="/manager/marketing/leads/status/1" class="selected">New                <span>0</span>
            </a></li>
            </ul>
    
</div>    </form>

        <div class="placeholder">
                No leads have been added yet.
            </div>
    
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')