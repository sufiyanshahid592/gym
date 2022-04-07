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
</div><div class="container pages width midsize">
        <h2>Website Content</h2>   

    <p>Create standalone pages for your website. Provide information about seminars, special events, monthly specials, the disciplines taught at the gym and more.</p>

        <div class="placeholder" style="margin-top:20px;">

        <a class="button" href="manager/website/addpage" title="Add page">Add a new website page</a>
    </div>
     
		
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')