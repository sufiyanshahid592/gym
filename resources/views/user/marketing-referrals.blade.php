@include('user/template/header')
<div id="body">
			<script type="text/javascript">
	var MemberData = [];
</script>
<div class="section-header">
    <h2><img src="images/manager/icons/ill-marketing.png"> Marketing</h2>
    <em class="location">hamza</em>
	<div class="subnav">
				<ul>
						@include('user/menus/marketing-menu')
					</ul>
	</div>
</div><div class="container referrals width">
    
    <h2>Referrals</h2>
        <form class="filters" action="/manager/marketing/referrals" method="get">
        <a class="hollow-button show-filters"><i class="icon-filter"></i><b> Filter</b></a>
        <div class="filter-popup">
            <div class="scrollable">
                <div class="labelpair">
                    <label>Referrer</label>
                    <input name="referrer" placeholder="Referrer name..." class="text search ui-autocomplete-input" type="text" autocomplete="off">                </div>
                <div class="labelpair">
                    <label>Referral<label>
                    <input name="referral" placeholder="Referral name..." class="text search ui-autocomplete-input" type="text" autocomplete="off">                </label></label></div>
                                <div class="labelpair">
                    <label>From Date</label>
                    <input name="from" placeholder="yyyy/mm/dd" class="text date hasDatepicker" type="text" id="dp1649064196282">                </div>
                <div class="labelpair">
                    <label>To Date</label>
                    <input name="to" placeholder="yyyy/mm/dd" class="text date hasDatepicker" type="text" id="dp1649064196283">                </div>
                
            </div>
            <div class="actions">
                <a class="reset">Reset</a>
                <span class="floater">
                    <a class="close">Cancel</a>
                    <button type="submit" class="apply">Apply</button>
                </span>
            </div>
        </div>
       
    </form>
    
            <div class="placeholder">
                No referrals have been made yet.
            </div>
    	
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')