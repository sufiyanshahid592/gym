@include('user/template/header')
<div id="body">
			<div class="section-header">
    <h2><img src="images/manager/members/icn-members.png"> Members</h2>
    <em class="location">hamza</em>
    <div class="subnav">
                <ul class="member-menu">

            @include('user/menus/members-menu')
                        </ul>
    </div>
</div>
<div class="member-settings width">
    <div class="subnav">
	
		<ul class="member-menu">
		
		<li><a href="manager/members/settings" class="selected">Members Settings</a>
        </li><li><a href="manager/attendance/settings">Attendance Settings</a>
        </li>	</ul>
</div>    <div class="container">
        <div class="main-title nomargin">
            <h2>Member Settings</h2>
        </div>

        <form method="post" action="/manager/members/settings">
            
            <div class="mass-operations">
                <div class="explanation">
                    <h3>Mass Operations</h3>
                    <p>Import and export your member base using a CSV file.</p>
                </div>
                <div class="fields">
                    <a href="manager/members/import" class="button"><i class="icon-upload"></i> Import Members</a>
                    <a href="manager/members/export" class="grey-button"><i class="icon-download"></i> Export Members</a>
                    <a href="manager/members/merge" class="hollow-button floater"><i class="icon-flow-merge"></i> Merge Duplicates</a>
                </div>
            </div>
            <hr>
                                    <div class="half">
                <div class="explanation">
                    <h3>Member Accounts</h3>
                    <p>Allow members to log-in and view information about their membership and attendance, and update their payment method.</p>
                </div>
                <div class="fields">
                    <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="member_accounts" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="member_accounts" value="1" checked="checked"></span></span>                    <label>Enable Member Accounts</label>
                    
                    <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="member_accounts_visitors" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="member_accounts_visitors" value="1" checked="checked"></span></span>                    <label>Visitors can access the member portal</label>
                    
                    <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="member_payments_show" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="member_payments_show" value="1" checked="checked"></span></span>   
                  
                    <label>Show payments in member accounts</label>                    
                    
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="member_removemethod" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="member_removemethod" value="1"></span></span>                                    
                    <label>Allow members to remove their payment method</label>

                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="member_changeranks" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="member_changeranks" value="1"></span></span>                    <label>Allow members to update their rank / level</label>
                    
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="member_show_promotion" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="member_show_promotion" value="1"></span></span>                    <label>Show promotion criteria in member accounts</label>
                   
                    <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="member_renew_memberships" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="member_renew_memberships" value="1" checked="checked"></span></span>                    <label>Allow members to renew their memberships</label>
                    
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="member_add_memberships" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="member_add_memberships" value="1"></span></span>					<label>Allow members to add memberships to their profile</label>
                    
                    <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="member_use_manual" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="member_use_manual" value="1" checked="checked"></span></span>					<label>Allow members / visitors to use manual payments</label>
                    
                    <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="member_payment_checkbox" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="member_payment_checkbox" value="1" checked="checked"></span></span>                    <label class="overline">Allow members to assign new cards to existing overdue / scheduled payments</label>
                    <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="member_prepay" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="member_prepay" value="1" checked="checked"></span></span>                    <label class="overline">Allow members to process payments before the scheduled date</label>
                    
                     <span class="toggle off"><span><em attr-val="0">no</em><input type="radio" name="separate_invoice_name" value="0" checked="checked"><i class="control"></i><em attr-val="1">yes</em><input type="radio" name="separate_invoice_name" value="1"></span></span>                    <label>Customize name on invoices</label>
                    
                    <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="member_addfamily" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="member_addfamily" value="1" checked="checked"></span></span>                    <label class="overline">Allow members to sign-up family members through their account</label>
                                                  <a class="hollow-button" href="manager/portal/contact">Manage member portal contact subjects</a>
                    
                </div>
                <div class="explanation">
                    <h3>Member Notifications</h3>                    
                </div>
                <div class="fields">
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="member_welcome_email" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="member_welcome_email" value="1"></span></span>                    <label>Send Welcome Email to new signups <a href="manager/email/edittemplate/type/1006">(edit)</a></label>
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="member_birthday_wishes" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="member_birthday_wishes" value="1"></span></span>                    <label>Send Happy Birthday Notices <a href="manager/email/edittemplate/type/1007">(edit)</a></label>
                    <div class="birthday">
                        Send happy birthday to 
                        <select name="member_birthday_status" id="member_birthday_status">
    <option value="0" label="All members">All members</option>
    <option value="1" label="Active members">Active members</option>
</select>                    </div>
                    <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="membership_notify_expiring" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="membership_notify_expiring" value="1"></span></span>                    <label>Remind of membership expiry 1 week prior <a href="manager/email/edittemplate/type/1103">(edit)</a></label>
                    
                     <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="membership_notify_expired" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="membership_notify_expired" value="1" checked="checked"></span></span>                    <label>Membership expiration notification <a href="manager/email/edittemplate/type/1100">(edit)</a></label>
                    
                </div>
            </div><div class="half right">
                <div class="explanation">
                    <h3>Members per page</h3>
                    <p>Number of members to show per page in the listing.</p>
                </div>
                <div class="labelpair">
                    <label>Members per page</label>
                    <select name="members_per_page" id="members_per_page">
    <option value="10" label="10" selected="selected">10</option>
    <option value="25" label="25">25</option>
    <option value="50" label="50">50</option>
    <option value="100" label="100">100</option>
</select>                </div>
                <div class="labelpair">
                    <label>Default sort</label>
                    <select name="member_sort" id="member_sort">
    <option value="created" label="Join date" selected="selected">Join date</option>
    <option value="last_name" label="Last Name">Last Name</option>
    <option value="first_name" label="First Name">First Name</option>
</select>                </div>
                <div class="explanation">
                    <h3>Absence Notifications</h3>
                    <p>Show a notification when member has not checked-in for a specific duration. Only shown if attendance tracking is enabled.</p>
                </div>

                <label>Absence Duration</label>
                <select name="absence_duration" id="absence_duration">
    <option value="0" label="Do not notify">Do not notify</option>
    <option value="1" label="1 Week absence">1 Week absence</option>
    <option value="2" label="2 Weeks absence" selected="selected">2 Weeks absence</option>
    <option value="3" label="3 Weeks absence">3 Weeks absence</option>
    <option value="4" label="1 Month absence">1 Month absence</option>
</select>                <div class="explanation">
                    <h3>Weekly Membership Expiration Report</h3>
                    <p>Receive a report at the beginning of the week with a list of all expiring memberships for that week.</p>
                </div>
                
                <label>Membership expiration report</label>
                <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="membership_expiration_report" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="membership_expiration_report" value="1"></span></span>                <br>
                <br>
                <div class="explanation">
                    <h3>Membership Staff Notifications</h3>
                    <p>Track new memberships, membership freezes and membership cancellations.</p>                    
                </div>
                
                <label>Membership staff notifications</label>
                <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="membership_notifications" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="membership_notifications" value="1"></span></span>                <br>
                <br>
                <div class="explanation">
                    <h3>Incoming message notification</h3>
                    <p>Receive an Email for new Email/text message from a member or lead.</p>
                </div>
                <label>Incoming message notifications</label>
                <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="message_notifications" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="message_notifications" value="1" checked="checked"></span></span>            </div>

            <hr>
            <div class="explanation">
                <h3>Document Settings</h3>
            </div>
            <div class="fields document-settings">
                <div class="half">
                    <div class="labelpair">
                        <span class="toggle on"><span><em attr-val="0">no</em><input type="radio" name="need_guardian" value="0"><i class="control"></i><em attr-val="1">yes</em><input type="radio" name="need_guardian" value="1" checked="checked"></span></span>                        <label>Require Guardian Signature for minors</label>
                    </div>
                    <div class="labelpair">
                        <label>Minor age</label>
                        <input name="guardian_age" class="text number" value="18" type="text"> years old
                    </div>
                </div><div class="half right">
                    <div class="labelpair">
                        <span class="toggle off"><span><em attr-val="0">no</em><input type="radio" name="need_both" value="0" checked="checked"><i class="control"></i><em attr-val="1">yes</em><input type="radio" name="need_both" value="1"></span></span>                        <label>Require both minor and guardian signatures</label>

                    </div>
                    <div class="labelpair">

                        <label>Email signed document copy</label>
                        <select name="send_copy" id="send_copy">
    <option value="0" label="No">No</option>
    <option value="1" label="To manager" selected="selected">To manager</option>
    <option value="2" label="To manager and member">To manager and member</option>
    <option value="3" label="To member">To member</option>
</select>                    </div>
                </div>

                <div class="half">
                    <div class="labelpair">
                        <span class="toggle on"><span><em attr-val="0">no</em><input type="radio" name="email_membership_doc" value="0"><i class="control"></i><em attr-val="1">yes</em><input type="radio" name="email_membership_doc" value="1" checked="checked"></span></span>                        <label>Email membership contracts for signature</label>
                    </div>
                    <div class="explanation">
                        <p>When assigning a membership option that includes a contract, send an Email asking the member to add their signature online.</p>
                    </div>
                </div>
            </div>
            <hr>

            <a name="forms"></a>
            <div class="half website">

                <div class="explanation">
                    <h3>Sign-up Forms</h3>
                    <p>Manage and customize member sign-up forms.</p>
                </div>
                                <div class="fields forms">
                    <span class="toggle off"><span><em attr-val="0">no</em><input type="radio" name="website_signup_confirm" value="0" checked="checked"><i class="control"></i><em attr-val="1">yes</em><input type="radio" name="website_signup_confirm" value="1"></span></span>                    <label>Manually confirm website sign-ups</label>
                                       <ul class="no-delete">
                                                <li>
                            <span class="actions">
                                <a href="manager/forms/edit/id/5224" class="grey-button icon-pencil" title="Edit form"></a>
                                <a href="manager/forms/remove/id/5224" class="red-button icon-trash" title="Remove Form"></a>
                            </span>
                            <a target="_blank" title="Link to sign-up form" href="https://hamza.gymdesk.com/signup/v/DJmq1"><span>Main Sign-up Form</span> <i class="icon-link-ext"></i></a>
                                                        <span class="tags">
                            <span class="tag-el">Manager form</span>                            <span class="tag-el">Front-desk</span>                            <span class="tag-el">Website</span>                            </span>
                                                    </li>
                                            </ul>
                               
                    <a class="button" href="manager/forms/add">Add Form</a>
                </div>
                
            </div><div class="half right">
                <a name="custom-fields"></a>
                <div class="explanation">
                    <h3>Custom Member Fields</h3>
                    <p>Add additional fields to the member profile</p>
                </div>
                                <ul class="custom-fields">
                                        <li class="field">				
                                                <div class="labelpair title">
                            
                            <input name="fields[0][title]" placeholder="Field title..." value="" type="text" class="text">                        </div>
                        <div class="labelpair">
                            <label>Field Type</label>
                            <select name="fields[0][type]" id="fields-0-type">
    <option value="text" label="Text input">Text input</option>
    <option value="checkbox" label="Checkbox">Checkbox</option>
    <option value="select" label="Dropdown">Dropdown</option>
    <option value="radio" label="Toggle">Toggle</option>
</select>                        </div>
                                                
                        <a class="manage-options icon-list-bullet"><em></em></a>
                        <div class="labelpair">
                            <label>Use for</label>
                            <select name="fields[0][member_type]" id="fields-0-member_type">
    <option value="0" label="Members &amp; Leads">Members &amp; Leads</option>
    <option value="1" label="Members" selected="selected">Members</option>
    <option value="2" label="Leads">Leads</option>
</select>                        </div>
                        
                        
                        <div class="options">
                            <ul class="style-scroll shadow-scroll">
                                                        <li><input type="text" class="text" name="fields[0][options][]" placeholder="Enter option ..." value=""><i class="icon-cancel-1 remove-option"></i><i class="icon-plus-1 add-option"></i></li>
                                                        </ul>
                        </div>
                        <a class="remove-field icon-trash"></a>
                        <a class="open-settings icon-cog"></a>
                        <div class="popup actions">
                            
                            
                            
                                                        <input type="hidden" name="fields[0][visible]" value="0">
                            <label class="has-checkbox visible">
                                <input type="checkbox" name="fields[0][visible]" value="1" checked="checked">
                                <span class="checkbox"></span>
                                Visible to members
                            </label>
                            
                                                        <input type="hidden" name="fields[0][checkin]" value="0">
                            <label class="has-checkbox checkin">
                                <input type="checkbox" name="fields[0][checkin]" value="1">
                                <span class="checkbox"></span>
                                Required for check-in

                            </label>
                            
                            <label class="minage">
                                Minimum Age <input type="text" class="text" name="fields[0][age]" value="">
                            </label>
                        </div>
                    </li>
                                    </ul>
                <a class="hollow-button add-field">Add field</a>
            </div>

            <hr>
            <div class="buttons">
                <button type="submit">Save Changes</button>
            </div>
        </form>

    </div>
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')