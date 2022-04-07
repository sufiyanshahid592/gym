@include('user/template/header')
<div id="body">
			<div class="overview">
    <div class="top">        
        <div class="width">
            <div class="section-header">
		<h2><img src="{{url('assets/user/images/manager/icons/ill-billing.png')}}"> Billing</h2>
    <em class="location">hamza</em>
	<div class="subnav">
				<ul>
					@include('user/menus/billing-menu')
						
					</ul>
	</div>
</div>            <div class="numbers">
                <span class="input">
                    <input name="range" class="text range" type="text" value="2022/04/01 - 2022/04/30">                    <i class="icon-angle-down"></i>
                </span>
                <h2>Totals</h2>
                <ul class="revenue">
    <li>
        <div class="pie-chart" attr-percent="0">
            <span>0.00</span>
            <svg width="120" height="120" viewBox="0 0 120 120">
            <defs>
            <linearGradient id="red" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#EDB183"></stop>
              <stop offset="100%" stop-color="#CB343E"></stop>
            </linearGradient>
            <linearGradient id="green" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#61D0F8"></stop>
              <stop offset="100%" stop-color="#65FA8B"></stop>
            </linearGradient>
            <linearGradient id="blue" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#3AABC9"></stop>
              <stop offset="100%" stop-color="#409EF7"></stop>
            </linearGradient>
            </defs>
            <circle class="progress-meter" cx="60" cy="60" r="50" stroke-width="8"></circle>
            <circle class="progress-value" cx="60" cy="60" r="50" stroke-width="8" stroke="url(/manager/billing/overview#blue)" style="stroke-dasharray: 314.159px; stroke-dashoffset: 314.159px;"></circle>
        </svg></div>
        <em>Scheduled</em>
    </li><li>
        <div class="pie-chart" attr-percent="0">
            <span>0.00</span>
            <svg width="120" height="120" viewBox="0 0 120 120">
            <defs>
            <linearGradient id="red" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#EDB183"></stop>
              <stop offset="100%" stop-color="#CB343E"></stop>
            </linearGradient>
            <linearGradient id="green" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#61D0F8"></stop>
              <stop offset="100%" stop-color="#65FA8B"></stop>
            </linearGradient>
            <linearGradient id="blue" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#3AABC9"></stop>
              <stop offset="100%" stop-color="#409EF7"></stop>
            </linearGradient>
            </defs>
            <circle class="progress-meter" cx="60" cy="60" r="50" stroke-width="8"></circle>
            <circle class="progress-value" cx="60" cy="60" r="50" stroke-width="8" stroke="url(/manager/billing/overview#green)" style="stroke-dasharray: 314.159px; stroke-dashoffset: 314.159px;"></circle>
        </svg></div>        <em>Paid</em>
    </li><li><div class="pie-chart" attr-percent="0">
            <span>0.00</span>
            <svg width="120" height="120" viewBox="0 0 120 120">
            <defs>
            <linearGradient id="red" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#EDB183"></stop>
              <stop offset="100%" stop-color="#CB343E"></stop>
            </linearGradient>
            <linearGradient id="green" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#61D0F8"></stop>
              <stop offset="100%" stop-color="#65FA8B"></stop>
            </linearGradient>
            <linearGradient id="blue" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#3AABC9"></stop>
              <stop offset="100%" stop-color="#409EF7"></stop>
            </linearGradient>
            </defs>
            <circle class="progress-meter" cx="60" cy="60" r="50" stroke-width="8"></circle>
            <circle class="progress-value" cx="60" cy="60" r="50" stroke-width="8" stroke="url(/manager/billing/overview#red)" style="stroke-dasharray: 314.159px; stroke-dashoffset: 314.159px;"></circle>
        </svg></div>        <em>Overdue</em>
    </li>
</ul>            </div>
            <div class="graphs">

                <h2>Revenue</h2>                
                <div class="graph-container">
                    <div class="graph width12"><ol class="labels2"><li><span>$</span><em>5.00</em></li><li><span>$</span><em>2.50</em></li></ol><ul><li attr-data="0" class=""><em style="height:0%;"><span>$0.00<br>May</span></em><label>May</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0.00<br>Jun</span></em><label>Jun</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0.00<br>Jul</span></em><label>Jul</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0.00<br>Aug</span></em><label>Aug</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0.00<br>Sep</span></em><label>Sep</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0.00<br>Oct</span></em><label>Oct</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0.00<br>Nov</span></em><label>Nov</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0.00<br>Dec</span></em><label>Dec</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0.00<br>Jan</span></em><label>Jan</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0.00<br>Feb</span></em><label>Feb</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0.00<br>Mar</span></em><label>Mar</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0.00<br>Apr</span></em><label>Apr</label></li></ul></div>                </div>
            </div>
        </div>
    </div>
    <div class="container width">
                <div class="payments">

            <h3>Recent Payments</h3>
            <a class="floater button" href="manager/billing/payments">All Payments</a>
                        <div class="placeholder">No payments found.</div>
                    </div>
    </div>
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')