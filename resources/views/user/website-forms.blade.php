@include('user/template/header')
<div id="body">
			<div class="section-header">
	
		
    <h2><img src="images/manager/icons/ill-website.png"> Website</h2>
    <em class="location">hamza</em>
	<div class="subnav">

		<ul class="menu">
						@include('user/menus/website-menu')
		</ul>
	</div>
</div><div class="container website-forms width">
    <div class="explanation">
        
        <h3>Lead generation and contact forms</h3>
                <p>Create forms for capturing Email and phone leads with specific targeting, such as kids' classes or starting a free 14 day trial.</p>
    </div>
    
        <div class="buttons">
        <a class="button" href="manager/website/addform">Create Website Form</a>
    </div>
    	
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')