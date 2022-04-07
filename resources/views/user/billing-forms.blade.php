@include('user/template/header')
<div id="body">
			<div class="section-header">
		<h2><img src="images/manager/icons/ill-billing.png"> Billing</h2>
    <em class="location">hamza</em>
	<div class="subnav">
				<ul>
						@include('user/menus/billing-menu')
					</ul>
	</div>
</div>	
<div class="container payment-forms width">
        <div class="main-title">
        <h2>Payment Forms</h2>
    </div>
            <div class="placeholder">
        <p>Create hosted payment forms with your gym's branding.</p>
                <p>You need to connect a payment processor first. <a class="button" href="manager/billing/settings">Billing Settings</a></p>
            </div>
    </div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')