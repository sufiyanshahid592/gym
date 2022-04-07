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
<div class="container memberships width">
    
    <div class="main-title">
        <a class="button floater" href="manager/memberships/add">Add<span> Membership Option</span></a>
        <h2>Membership Options</h2>
    </div>

        <div class="placeholder">No membership options have been added yet.<br>
        <a class="button" href="manager/memberships/add">New membership option</a>
    </div>
    	
	
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')