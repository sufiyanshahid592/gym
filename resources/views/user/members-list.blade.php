@include('user/template/header')
<div id="front-desk-popup" class="popup">
		<h2>Activate Front Desk Mode</h2>
	<div class="body">
		<p>Activating the front desk mode hides all the manager tools aside from <b>attendance tracking</b> and <b>member sign-up</b>. You can turn off this mode at any time by entering your password.</p>
		<div class="buttons">
			<a class="button activate">Activate Front Desk Mode</a>
		</div>
	</div>
	</div>
		<div id="body">
			<div class="section-header">
    <h2><img src="{{url('assets/user/images/manager/members/icn-members.png')}}" /> Members</h2>
    <em class="location">hamza</em>
    <div class="subnav">
                <ul class="member-menu">
                @include('user/menus/members-menu')
            
                        </ul>
    </div>
</div><div class="container members bulk-ops">
	
	<input type="hidden" id="range-format" value="YYYY/MM/DD" />
	<form class="filters" action="manager/members/list" method="get">
        <div class="search">
            <i class="icon-search"></i>
            <input name="name" placeholder="Search first or last name..." type="text" class="text" />            <button type="submit"><i class="icon-ok-circle"></i></button>
        </div>
                <a class="hollow-button show-filters"><i class="icon-filter"></i><b> Filter</b></a>
        
        <a class="button" href="manager/members/add">Add<b> Member</b></a> 
        <a class="grey-button invite" href="manager/members/invite">Invite</a>
            
        <div class="floater">
            <a class="hollow-button" title="Print" onclick="window.print()"><i class="icon-print"></i> <span>Print</span></a>
            <a class="hollow-button export" title="Export"><img src="{{url('assets/user/images/manager/icons/icn-export.png')}}" /> <span>Export</span> <i class="icon-down-dir"></i></a>
            <div class="popup export-popup">
                <a title="Export as PDF" href="/manager/members/list/export/pdf">Export as PDF</a>
                                <a title="Export as CSV" href="/manager/members/exportcsv?type=2&status=1">Export as CSV</a>
            </div>
        </div>
			
		
		<div class="filter-popup">    
            <div class="scrollable">
                <div class="labelpair shorter">
                    <label>Email Address</label>
                    <input name="email" type="text" class="text" />                    <label>
                        <input type="checkbox" value="1" name="do_not_email" />                        
                        Unsubscribed from all
                    </label>
                </div>
                <div class="labelpair shorter">
                    <label>Phone number</label>
                    <input name="phone" type="text" class="text" />                    <label>
                        <input type="checkbox" value="1" name="do_not_text" />                        
                        Unsubscribed from all
                    </label>
                </div>
                                                <div class="labelpair">
                    <label>Program</label>
                     <div class="multi-dropdown" id="multi-sport"default="All Programs" ><em class="selection" attr-default="All Programs">All Programs</em><div class="dropdown-menu"><label class="has-checkbox"><input type="checkbox" name="sport[]" value="102044"  /><span class="checkbox"></span> <span class="title">CrossFit</span></label></div></div>                </div>
                <div class="labelpair rank">
                    <label>Rank</label>
                    <div class="multi-dropdown" id="multi-rank"default="Select ranks..." ><em class="selection" attr-default="Select ranks...">Select ranks...</em><div class="dropdown-menu"></div></div>                    <script type="text/javascript">var ranks = {"102044":[{"rank":"All","id":""}]};</script>
                </div>
                                <div class="labelpair">
                    <label>Payment Method</label>
                <select name="cc" id="cc">
    <option value="" label="Payment Card ...">Payment Card ...</option>
    <option value="none" label="No card on file">No card on file</option>
    <option value="pending" label="Pending verification">Pending verification</option>
    <option value="has" label="Card on file">Card on file</option>
</select>                </div>
                                <div class="labelpair">
                    <label>Documents</label>
                                        <select name="doc" id="doc">
    <option value="" label="Document ...">Document ...</option>
    <option value="428927" label="Waiver">Waiver</option>
</select>                    <select name="doc_status" id="doc_status" style="display:none">
    <option value="" label="Status ...">Status ...</option>
    <option value="signed" label="Signed">Signed</option>
    <option value="unsigned" label="Unsigned">Unsigned</option>
</select>                </div>
                                <div class="labelpair">
                                        <label>Unsubscribed From</label>
                     <div class="multi-dropdown" id="multi-comms"default="Select..." ><em class="selection" attr-default="Select...">Select...</em><div class="dropdown-menu"><h3>Email Preferences</h3><label class="has-checkbox"><input type="checkbox" name="comms[]" value="email_updates"  /><span class="checkbox"></span> <span class="title">Important Updates</span></label><label class="has-checkbox"><input type="checkbox" name="comms[]" value="email_events"  /><span class="checkbox"></span> <span class="title">Events and Announcements</span></label><label class="has-checkbox"><input type="checkbox" name="comms[]" value="email_billing"  /><span class="checkbox"></span> <span class="title">Billing Notifications</span></label><label class="has-checkbox"><input type="checkbox" name="comms[]" value="email_booking"  /><span class="checkbox"></span> <span class="title">Booking Notifications</span></label></div></div>                </div>
                <hr />
                <div class="labelpair">
                    <label>Joined After</label>
                    <input name="joined" class="text date" placeholder="Join date" autocomplete="off" type="text" />                </div>
                <div class="labelpair">
                    <label>Membership End Dates</label>
                                        <input name="membership-end" class="text range" placeholder="yyyy/mm/dd - yyyy/mm/dd" autocomplete="off" type="text" />                </div>
                <div class="labelpair">
                    <label>Birthday Month</label>
                    <select name="bdmonth" id="bdmonth">
    <option value="" label="...">...</option>
    <option value="1" label="January">January</option>
    <option value="2" label="February">February</option>
    <option value="3" label="March">March</option>
    <option value="4" label="April">April</option>
    <option value="5" label="May">May</option>
    <option value="6" label="June">June</option>
    <option value="7" label="July">July</option>
    <option value="8" label="August">August</option>
    <option value="9" label="September">September</option>
    <option value="10" label="October">October</option>
    <option value="11" label="November">November</option>
    <option value="12" label="December">December</option>
</select>                </div>
                <div class="labelpair">
                    <label>Gender</label>
                    <select name="gender" id="gender">
    <option value="" label="All">All</option>
    <option value="m" label="Male">Male</option>
    <option value="f" label="Female">Female</option>
    <option value="o" label="Other">Other</option>
</select>                </div>
                <div class="labelpair">
                    <label>Absent since</label>
                    <input name="absent" class="text date" placeholder="Enter date" autocomplete="off" type="text" />                </div>

                                    
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
                <li><a href="/manager/members/list/type/2/status/1" class="selected">Members                <span>0</span>
            </a></li>
            </ul>
    
</div>	</form>
    
    
					<div class="placeholder get-started">
			<h3>How To Add Members</h3>
			<p>You can add members in a couple of different ways:</p>
			<ul>
				<li><a href="manager/members/add">Enter member information through your account <span class="button">Add a member</span></a></li>
				<li><a target="_blank" href="help/front-desk">Have them fill out their information at your front desk <span class="button">Learn more</span></a></li>
				<li><a href="manager/members/import">Import existing members using a spreadsheet file <span class="button">Import Members</span></a></li>
				<li><a href="manager/members/invite">Invite members via Email to sign-up online <span class="button">Invite Members</span></a></li>
			</ul>
			</div>
					
	<div class="confirmation-popup reminder-popup">
		<h2>Send Billing Reminder</h2>
		<p>Send member an Email reminder to add a payment card to their account.</p>
		<div class="buttons-container">
			<a class="red-button confirm">Confirm</a> <a class="grey-button cancel">Cancel</a>
		</div>
	</div>
    
    <form class="mass-operations popup" method="post" action="manager/members/change">
        <input name="ids" type="hidden" />
        <a class="close">&times;</a>
        <h2>Mass Member Changes</h2>
        <p><em class="count"></em> members selected</p>
        <select name="operation">
            <option value="">Pick option...</option>
            <option value="status">Change status</option>
            <option value="delete">Delete Members</option>
            <option value="discount">Apply Discount</option>
                        <option value="doc-assign">Assign Document</option>
                        <option value="email">Send Email</option>
                        <option value="card">Prepare membership cards</option>
            <option value="mailing-labels">Mailing Labels</option>
        </select>
        <div class="operation status">
            <label>New Status</label>
            <select name="status" id="status">
    <option value="2" label="Frozen">Frozen</option>
    <option value="3" label="Canceled">Canceled</option>
    <option value="1" label="Active">Active</option>
</select>            <div class="freeze">
                <label class="has-checkbox">
                    <input type="checkbox" name="freeze_payments" value="1" checked="checked" />
                    <span class="checkbox"></span>
                    Freeze recurring / scheduled payments
                </label>
                
                <select name="auto_action">
                    <option value="">Schedule...</option>
                    <option value="reminder">Reminder</option>
                    <option value="activate">Unfreeze</option>
                </select>
                <div class="time">
                    <em>on</em>  
                    
                    <input name="action_date" class="text date" placeholder="yyyy/mm/dd" type="text" />                </div>
                <div class="unfreeze">
                    <em>Unfreeze Settings</em>
                    
                    <div class="labelpair">
                        
                        <select name="payment_timing" id="payment_timing">
    <option value="original" label="Continue original payment schedule" selected="selected">Continue original payment schedule</option>
    <option value="now" label="Charge on unfreeze date">Charge on unfreeze date</option>
</select>                    </div>
                    <br />
                    <input type="hidden" name="prorate_initial" value="0" />
                    <div class="labelpair prorate">
                        <label class="has-checkbox">
                            <input type="checkbox" name="prorate_initial" value="1" checked="checked" />
                            <span class="checkbox"></span>
                            Prorate till next payment
                            <span class="style-tooltip" data-tooltip="Charge for remaining time until the next full payment"><i class="icon-help-circle"></i></span>
                        </label>

                    </div>
                    <input type="hidden" name="apply_credit" value="0" />

                    <div class="labelpair">
                        <label class="has-checkbox">
                            <input type="checkbox" name="apply_credit" value="1" checked="checked" />
                            <span class="checkbox"></span>
                            Apply credit
                            <span class="style-tooltip" data-tooltip="Apply credit for time paid for before the freeze took place"><i class="icon-help-circle"></i></span>
                        </label>

                    </div>
                    

                    <div class="labelpair">
                        <input type="hidden" value="0" name="extend_memberships" />
                        <label class="has-checkbox">
                            <input type="checkbox" value="1" name="extend_memberships" checked="checked" />
                            <span class="checkbox"></span>
                            Extend memberships by freeze duration
                            
                        </label>

                    </div>
                
                </div>
            </div>
            <div class="cancel">
                <label class="has-checkbox">
                    <input type="checkbox" value="1" name="cancel_fee" />
                    <span class="checkbox"></span>
                    Charge cancellation fee (if any)
                </label>
            </div>
            <hr />
            <div class="buttons">
                <button type="submit">Change Status</button>
            </div>
        </div>
        <div class="operation discount">
            
                        <div class="discount">
        
    <label>Discount: </label>
    <input type="hidden" name="discount_id" /> 
        <input name="discount_amount" type="tel" value="" class="text" />    <select name="discount_type" id="discount_type">
    <option value="1" label="%" selected="selected">%</option>
    <option value="2" label="USD">USD</option>
</select>        
</div>            <label>Apply To</label>
            <select name="discount_on">
                <option value="scheduled">Next Payment</option>
                <option value="membership">Membership</option>
            </select>
            <hr />
            <div class="buttons">
                <button type="submit">Apply Discount</button>
            </div>
        </div>
        <div class="operation delete">
            Are you sure you want to remove selected members?
            <hr />
            <div class="buttons">
                <button type="submit" class="red-button">Delete members</button>
            </div>
        </div>
                <div class="operation doc-assign">
            
            <label>Pick Document</label>

            <select name="doc_id" id="doc_id">
    <option value="" label="Document ...">Document ...</option>
    <option value="428927" label="Waiver">Waiver</option>
</select>            <label class="has-checkbox">
                <input type="checkbox" name="doc-notify" value="1" checked="checked" />
                <span class="checkbox"></span>
                Send Email notification
            </label>
            <hr />
            <div class="buttons">
                <button type="submit">Assign Document</button>
            </div>       
 
        </div>
            </form>
</div>			<div class="clear" style="clear:both;"></div>
		</div>
		
	</div>
@include('user/template/footer')