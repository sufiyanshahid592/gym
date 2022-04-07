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
</div><div class="container automations width midsize">

    <div class="main-title">
        <h2>Automations</h2>
            </div>
        <p>Create Email and text sequences that go out automatically to leads, new members and more.</p>

        <a class="button" href="manager/automations/add">Create Automation</a>
       
</div>
			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')