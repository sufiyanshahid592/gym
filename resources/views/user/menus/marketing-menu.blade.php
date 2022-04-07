<li><a href="{{url('manager/marketing/dashboard')}}" class="<?php if(Request::is('manager/marketing/dashboard')){echo "selected";} ?>">Dashboard</a></li>
<li><a href="{{url('manager/marketing/referrals')}}" class="<?php if(Request::is('manager/marketing/referrals')){echo "selected";} ?>">Referrals</a></li>
<li><a href="{{url('manager/marketing/leads')}}" class="<?php if(Request::is('manager/marketing/leads')){echo "selected";} ?>">Leads</a></li>
<li><a href="{{url('manager/marketing/messaging')}}" class="<?php if(Request::is('manager/marketing/messaging')){echo "selected";} ?>">Messaging</a></li>
<li><a href="{{url('manager/automations/manage')}}" class="<?php if(Request::is('manager/automations/manage')){echo "selected";} ?>">Automations</a></li>
<li><a href="{{url('manager/marketing/settings')}}" class="<?php if(Request::is('manager/marketing/settings')){echo "selected";} ?>">Settings</a></li>