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
</div><div class="acq width container">
    <div class="main-title">
        <h2>Monthly Member Summary</h2>
    </div>
    <div class="pagination">
    
    </div>
    <form method="get" action="/manager/members/summary">
        <input type="hidden" name="year" value="2022">
                <select name="source" id="source">
    <option value="" label="All Acquisition Sources">All Acquisition Sources</option>
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
</select>    </form>
    <div class="notice">No data found.</div>        
       
    
</div>
			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')