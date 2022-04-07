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
<div class="accounting balances width">
    <div class="subnav">
        <ul>
        <li><a class="<?php if(Request::is('manager/billing/accounting')){echo "selected";} ?>" href="{{url('manager/billing/accounting')}}">All Payments</a></li>
        <li><a class="<?php if(Request::is('manager/products/report')){echo "selected";} ?>" href="{{url('manager/products/report')}}">Product Revenue</a></li>
        <li><a class="<?php if(Request::is('manager/billing/balances')){echo "selected";} ?>" href="{{url('manager/billing/balances')}}">Member Balances</a></li>
    </ul>
</div>    <div class="container">
        <form method="get" action="/manager/billing/balances">
            <button class="hollow-button download" type="button"><i class="icon-export"></i><span> Export</span></button>
            <div class="accounting-title">
                <h2>Member Balances</h2>
                
            </div>
            
            
        </form>
                <div class="placeholder">No members with balance found.</div>
            </div>
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')