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
</div><div class="container messaging width smaller">
	
			
		<form method="post" action="/manager/marketing/messaging">
			<p>Send an Email message to gym members about upcoming events and competitions, schedule changes and other relevant information.</p>
            <div class="placeholder">
                To prevent abuse, Email messaging is only available to paid accounts. 
                <a class="button" href="manager/account/pickplan">Upgrade Your Plan Here</a>            </div>

</form></div>
			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')