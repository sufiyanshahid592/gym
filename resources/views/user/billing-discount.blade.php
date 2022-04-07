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
</div><div class="container discounts width">
    
    <div class="main-title ">        
        <h2>Discounts</h2>
        <a class="button floater add-discount">Add Discount</a>
    </div>
    
    
    <div class="placeholder">No discounts created yet. <br><a class="button add-discount">Add Discount</a></div>
    
    <table class="list" cellpadding="0" cellspacing="0">
            </table>
            <form method="post" action="/manager/billing/discounts" class="discount-form popup">
        <h2><span>Add</span> Discount</h2>
        <label>Title</label>
        <input type="text" class="text" name="title" placeholder="Discount title...">
        <label>Discount</label>
        <input type="tel" name="amount" class="text"> 
                <select name="type" id="type">
    <option value="1" label="%" selected="selected">%</option>
    <option value="2" label="USD">USD</option>
</select>        <hr>
                <br>
        <label>Sign-up discount</label>
        <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="ship_usage" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="ship_usage" value="1"></span></span>        
        <div class="apply">
            <label>Apply For </label>
            <select name="apply" id="apply">
    <option value="1" label="All payments" selected="selected">All payments</option>
    <option value="2" label="First payment only">First payment only</option>
</select>        </div>
        <label class="code-label">Public Discount Code</label>
        <input type="text" class="text" placeholder="20OFF" name="code">
        <br>
        <div class="labelpair">
            <label>Limited Use</label>
            <input type="tel" class="text amount" name="limit_use"> times
        </div>
        <div class="labelpair">
            <label>Expiration Date</label>
            <input type="text" class="text date hasDatepicker" name="end_date" placeholder="yyyy/mm/dd" id="dp1649062994923"><button type="button" class="ui-datepicker-trigger"></button>
        </div>
        <br>
        <input type="hidden" name="id">
        
        <button type="submit">Save Discount</button>
    </form>
    <div class="confirmation-popup">
        <input type="hidden" name="id">
        <h2>Remove Discount</h2>
        <p>Are you sure you want to remove this discount?</p>
        <div class="buttons">
            <a class="grey-button cancel">Cancel</a> <a class="red-button remove">Remove</a>
        </div>
    </div>
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')