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
<div class="accounting width">
    <div class="subnav">
        <ul>
        <li><a class="<?php if(Request::is('manager/billing/accounting')){echo "selected";} ?>" href="{{url('manager/billing/accounting')}}">All Payments</a></li>
        <li><a class="<?php if(Request::is('manager/products/report')){echo "selected";} ?>" href="{{url('manager/products/report')}}">Product Revenue</a></li>
        <li><a class="<?php if(Request::is('manager/billing/balances')){echo "selected";} ?>" href="{{url('manager/billing/balances')}}">Member Balances</a></li>
    </ul>
</div>    <div class="container">
        <form method="get" action="/manager/billing/accounting">
            <button class="hollow-button download" type="button"><i class="icon-export"></i><span> Export</span></button>
            <div class="accounting-title">
                <h2>Accounting</h2>
                <p>All account transactions are listed below for bookkeeping purposes.</p>
            </div>
            <div class="labelpair">
                <label>Dates</label>
                <input name="range" class="text range" type="text" value="2022/04/01 - 2022/04/04">            </div>
                    
            <div class="labelpair">
                <label>Program</label>
                <select name="sport_id" id="sport_id">
    <option value="" label="Program / sport...">Program / sport...</option>
    <option value="102044" label="CrossFit">CrossFit</option>
</select>            </div>
                  
            <div class="labelpair">
                <label>Transaction Type</label>
                <select name="type" id="type">
    <option value="" label="All">All</option>
    <option value="payments" label="Member Payments">Member Payments</option>
    <option value="sales" label="Product Sales">Product Sales</option>
</select>            </div>
            <div class="labelpair">
                <label>Payment method</label>
                <select name="payment_type" id="payment_type">
    <option value="" label="All">All</option>
    <option value="1" label="Payment Card">Payment Card</option>
    <option value="2" label="Bank Debit">Bank Debit</option>
    <option value="3" label="Manual Payment">Manual Payment</option>
</select>            </div>
        </form>
                <div class="placeholder">No transactions found.</div>
            </div>
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')