<li><a href="{{url('manager/members/list')}}" class="<?php if(Request::is('manager/members/list')){echo 'selected';} ?>">Members</a>
            </li>
                <li><a href="{{url('manager/attendance/checkin')}}" class="<?php if(Request::is('manager/attendance/checkin')){echo 'selected';} ?>">Check-in</a>
            </li>
                <li><a href="{{url('manager/attendance/overview')}}" class="<?php if(Request::is('manager/attendance/overview')){echo 'selected';} ?>">Attendance</a>
            </li>
                <li><a href="{{url('manager/memberships/manage')}}" class="<?php if(Request::is('manager/memberships/manage')){echo 'selected';} ?>">Memberships</a>
            </li>
                <li><a href="{{url('manager/docs/manage')}}" class="<?php if(Request::is('manager/docs/manage')){echo 'selected';} ?>">Documents</a>
            </li>
                <li><a href="{{url('manager/content/members')}}" class="<?php if(Request::is('manager/content/members')){echo 'selected';} ?>">Content</a>
            </li>
                <li><a href="{{url('manager/members/summary')}}" class="<?php if(Request::is('manager/members/summary')){echo 'selected';} ?>">Summary</a>
            </li>
                <li><a href="{{url('manager/members/settings')}}" class="<?php if(Request::is('manager/members/settings')){echo 'selected';} ?>">Settings</a>
            </li>