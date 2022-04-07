<li><a href="{{url('manager/billing/overview')}}" class="<?php if(Request::is('manager/billing/overview')){echo 'selected';} ?>">Overview</a></li>
<li><a href="{{url('manager/billing/payments')}}" class="<?php if(Request::is('manager/billing/payments')){echo 'selected';} ?>">Payments</a></li>
<li><a href="{{url('manager/billing/recurring')}}" class="<?php if(Request::is('manager/billing/recurring')){echo 'selected';} ?>">Recurring</a></li>
<li><a href="{{url('manager/billing/discounts')}}" class="<?php if(Request::is('manager/billing/discounts')){echo 'selected';} ?>">Discounts</a></li>
<li><a href="{{url('manager/billing/forms')}}" class="<?php if(Request::is('manager/billing/forms')){echo 'selected';} ?>">Payment Forms</a></li>
<li><a href="{{url('manager/billing/accounting')}}" class="<?php if(Request::is('manager/billing/accounting')){echo 'selected';} ?>">Accounting</a></li>
<li><a href="{{url('manager/billing/summary')}}" class="<?php if(Request::is('manager/billing/summary')){echo 'selected';} ?>">Summary</a></li>
<li><a href="{{url('manager/billing/settings')}}" class="<?php if(Request::is('manager/billing/settings')){echo 'selected';} ?>">Settings</a></li>