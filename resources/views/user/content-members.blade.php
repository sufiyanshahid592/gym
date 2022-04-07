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
</div><div class="container member-content posts width">
    
    <div class="main-title">
    
    <h2>Member Portal Content</h2>    
    
    <ul class="subnav">
        <li><a class="selected" href="manager/content/members">Posts</a></li>
                <li><a href="manager/content/addpost">Add New Post</a></li>
        
        <li><a href="manager/content/settings">Settings</a></li>
    </ul>
</div>
    <p>Create content exclusively for your members including training materials, instructional videos and more.</p>

        <div class="placeholder">

        <a class="button" href="manager/content/addpost" title="Add Post">Add a new post</a>
    </div>
     
		
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')