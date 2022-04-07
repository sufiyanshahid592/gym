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
</div><div class="container width payments bulk-ops">
	
	
	
	<form class="filters" method="get" action="/manager/billing/payments">
				
		<div class="search">
            <i class="icon-search"></i>
            <input name="name" placeholder="Search first or last name..." type="text" class="text">            <button type="submit"><i class="icon-ok-circle"></i></button>
        </div>
                <a class="hollow-button show-filters"><i class="icon-filter"></i><b> Filter</b></a>
        
        <div class="floater">
            <a class="hollow-button" title="Print" onclick="window.print()"><i class="icon-print"></i> <span>Print</span></a>
            <a class="hollow-button export" title="Export"><img src="images/manager/icons/icn-export.png"> <span>Export</span> <i class="icon-down-dir"></i></a>
            <div class="popup export-popup" style="display: none;">
                <a title="Export as PDF" href="/manager/billing/payments/export/pdf"><i class="icon-file-pdf"></i> Export as PDF</a>
                <a title="Export as CSV" href="manager/billing/exportcsv?status=1"><i class="icon-file-excel"></i> Export as CSV</a>
            </div>
        </div>
        
        <div class="filter-popup">    
            <div class="scrollable">
                <div class="labelpair">
                    <label>Invoice Number</label>
                    
                    <input name="serial" placeholder="00001" type="text" class="text">                </div>
                <div class="labelpair">
                    <label>Transaction ID</label>
                    <input name="transaction_id" placeholder="Transaction ID" type="text" class="text">                </div>
                <div class="labelpair">
                    <label>Payment Dates (range)</label>
                    <input name="range" class="text range" placeholder="Dates" autocomplete="off" type="text">                </div>
                                <div class="labelpair">
                    <label>Payment Type</label>
                    <select name="payment_type" id="payment_type">
    <option value="" label="All Methods">All Methods</option>
    <option value="1" label="Payment Card">Payment Card</option>
    <option value="2" label="Bank Account">Bank Account</option>
    <option value="3" label="Manual Payment">Manual Payment</option>
    <option value="4" label="Cash">Cash</option>
    <option value="5" label="Check">Check</option>
    <option value="6" label="Referral Credit">Referral Credit</option>
    <option value="10" label="Balance">Balance</option>
    <option value="9" label="Bancontact">Bancontact</option>
</select>                </div>
                                <hr>
                <div class="labelpair">
                    <label>Program</label>
                    <select name="sport_id" id="sport_id">
    <option value="" label="Program / sport...">Program / sport...</option>
    <option value="102044" label="CrossFit">CrossFit</option>
</select>                </div>
                                                  
            </div>
			<div class="actions">
                <a class="reset">Reset</a>
                <span class="floater">
                    <a class="close">Cancel</a>
                    <button type="submit" class="apply">Apply</button>
                </span>
            </div>
		</div>
		        
        <div class="subnav">
            <ul>
                                <li><a class="selected" href="manager/billing/payments">Paid                    </a></li>
                                    <li><a href="manager/sales/list">Sales                    </a></li>
                                   
            </ul>
        </div>
	</form>
			<div class="placeholder">No payments found.</div>
		
</div>


<div class="popup charge-cancel">
	<span class="close icon-cancel-1"></span>
	<h2>Cancel Payment</h2>
	<form method="post" action="manager/billing/cancel">
		<p>Are you sure you want to cancel this payment?</p>
		<p><b>Note:</b> if this is a subscription payment, canceling the payment will stop the subscription.</p>
		<div class="buttons">
			<button class="red-button" type="submit">Cancel Payment</button>
			<a class="grey-button close">Abort</a>
		</div>
	</form>
	<div class="success">Payment Canceled</div>
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')