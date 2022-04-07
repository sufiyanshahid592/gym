<li><a class="<?php if(Request::is('manager/attendance/overview')){echo 'selected';} ?>" href="{{url('manager/attendance/overview')}}">Overview</a></li>
<li><a class="<?php if(Request::is('manager/attendance/list')){echo 'selected';} ?>" href="{{url('manager/attendance/list')}}">Check-ins</a></li>
<li><a class="<?php if(Request::is('manager/attendance/promotions')){echo 'selected';} ?>" href="{{url('manager/attendance/promotions')}}">Promotions</a></li>
<li><a class="<?php if(Request::is('manager/attendance/members')){echo 'selected';} ?>" href="{{url('manager/attendance/members')}}">Members</a></li>
<li><a class="<?php if(Request::is('manager/attendance/sessions')){echo 'selected';} ?>" href="{{url('manager/attendance/sessions')}}">Sessions</a></li>
<li><a class="<?php if(Request::is('manager/attendance/multi')){echo 'selected';} ?>" href="{{url('manager/attendance/multi')}}">Multiple Check-in</a></li>
<li><a class="<?php if(Request::is('manager/attendance/settings')){echo 'selected';} ?>" href="{{url('manager/attendance/settings')}}">Settings</a></li>