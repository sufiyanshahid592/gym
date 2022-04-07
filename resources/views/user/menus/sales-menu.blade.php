<li><a href="{{url('manager/sales/create')}}" class="<?php if(Request::is('manager/sales/create')){echo "selected";} ?>">Create Sale</a></li>
<li><a href="{{url('manager/sales/list')}}" class="<?php if(Request::is('manager/sales/list')){echo "selected";} ?>">Sales</a></li>
<li><a href="{{url('manager/products/list')}}" class="<?php if(Request::is('manager/products/list')){echo "selected";} ?>">Products</a></li>
<li><a href="{{url('manager/products/report')}}" class="<?php if(Request::is('manager/products/report')){echo "selected";} ?>">Report</a></li>
<li><a href="{{url('manager/sales/settings')}}" class="<?php if(Request::is('manager/sales/settings')){echo "selected";} ?>">Settings</a></li>