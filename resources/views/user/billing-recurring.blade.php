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
<div class="container payments recurring">
	
	
	
	<form class="filters" method="get" action="/manager/billing/recurring">
        		<input name="first_name" placeholder="First Name" type="text" class="text">		<input name="last_name" placeholder="Last Name" type="text" class="text">		<button type="submit">Search</button>
	</form>
	
		<div class="placeholder">No recurring payments found.</div>
		<div class="popup sub">
		<span class="close icon-cancel-1"></span>
		<h2>Create Recurring Payment</h2>
		<form method="post" action="/manager/billing/recurring" class="payment-form sub-form">
			
	<input type="hidden" name="action" value="manager/billing/createsub">
		<div class="labelpair amount">
		<label>Amount</label>
				<span class="currency">$</span>
		<input name="amount" class="text number" value="" type="text">        <a class="add-discount">+ Discount</a>
	</div>
	
	<div class="labelpair subscription">
		<label>Every</label>
		<input name="frequency" class="text number" value="1" type="text"> 
		<select name="period" id="period">
    <option value="day" label="Day(s)">Day(s)</option>
    <option value="week" label="Week(s)">Week(s)</option>
    <option value="month" label="Month(s)" selected="selected">Month(s)</option>
    <option value="year" label="Year(s)">Year(s)</option>
</select>	</div>
    <span class="tax-amount">
			<a class="show-tax">Add Sales Tax</a>
		</span>
	<div class="tax">
        <div class="labelpair">
            <label>Tax</label>
            <input name="tax1_rate" value="0" class="text number" type="text"> %
        </div>
        	</div>
    <div class="discount">
        
    <label>Discount: </label>
    <input type="hidden" name="discount_id"> 
        <input name="discount_amount" type="tel" value="" class="text">    <select name="discount_type" id="discount_type">
    <option value="1" label="%" selected="selected">%</option>
    <option value="2" label="USD">USD</option>
</select>        
</div>	<div class="description">
		<label>Description</label>
		<input name="description" placeholder="Membership dues" type="text" class="text">		<br>
		<small>Appears on invoices and payment history</small>
	</div>
    
		<div class="charge-date">
				
		<label>First Payment</label>
		
		<ul class="radio">
			<li class="selected">
				<input type="radio" name="charge_date" value="1" checked="checked">
				Now
			</li>
			
			<li>
				<input type="radio" name="charge_date" value="2">
				<input name="scheduled" class="text date hasDatepicker" placeholder="yyyy/mm/dd" type="text" id="dp1649062586669">			</li>
			
		</ul>
		
		
	</div>
	       
        
 		<div class="pm">
        
		<label>Payment Method</label>		
		<ul class="radio">
			
						<li title="Use Payment Card" class="check-card">
                <input type="radio" name="type" value="1">
				<i class="icon-credit-card"></i> Payment Card
			</li>
			                        			<li title="Payment will be provided in person, via cash, check or other means" class="manual selected">
				<input type="radio" name="type" value="3" checked="checked">
				<i class="icon-money"></i> Manual Payment
			</li>
			
		</ul>
		<input type="hidden" name="has_card" value="0">
        <div class="card-notice notice" style="display:none;"><i class="icon-attention"></i> Add a payment card before first payment is due.</div>
			
	</div>
    <input type="hidden" name="use_balance" value="0">
    <label class="has-checkbox use-balance">
        <input type="checkbox" name="use_balance" value="1">
        <span class="checkbox"></span>
        Use existing balance
    </label>
	<div class="confirmation-popup authentication">
        <h2>Authentication Required</h2>
        <p>The bank has requested additional authentication. The member can authenticate through the member portal or in person with a staff member.</p>
        <div class="actions">
            <a class="red-button" href="manager/billing/charge/id/{paymentId}">Authenticate Now</a>
            <a class="button close">Authenticate Later</a> 
            <a class="grey-button cancel" href="manager/billing/cancelsub/id/{id}">Cancel Payment</a>
        </div>
    </div>	
	
	    
    	<div class="buttons">        
		<button class="button" type="submit">Create Recurring Payment</button>        
	</div>
    </form>		<div class="success">Created successfully!</div>
	</div>
	
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')