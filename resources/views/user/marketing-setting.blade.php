@include('user/template/header')
<div id="body">
			<div class="section-header">
    <h2><img src="images/manager/icons/ill-marketing.png"> Marketing</h2>
    <em class="location">hamza</em>
	<div class="subnav">
				<ul>
						@include('user/menus/marketing-menu')
					</ul>
	</div>
</div><div class="container marketing-settings member-settings width">
    <div class="main-title nomargin">
        <h2>Marketing Settings</h2>
    </div>
	
            <form method="post" action="/manager/marketing/settings">
        <div class="half">
            <div class="explanation">
                <h3>Referral Rewards</h3>
                <p>Set up rewards for referring new people to the gym. Learn more on <a href="blog/how-to-make-a-referral-program-your-gyms-most-powerful-marketing-tool/">why you should have a referral program</a></p>
            </div>
            <div class="fields">
                <span class="toggle off"><span><em attr-val="0">Off</em><input type="radio" name="referral_rewards" value="0" checked="checked"><i class="control"></i><em attr-val="1">On</em><input type="radio" name="referral_rewards" value="1"></span></span>                <label>Enable Referral Rewards</label>


            </div>
            <hr>
            <div class="explanation">
                <h3>Rewards Settings</h3>
                <p>Referrals can be rewarded as a percentage or fixed amount off the next scheduled recurring payment for the referrer. <a target="_blank" href="help/referral-rewards">Learn more about referral rewards</a></p>

            </div>
            <div class="fields">
                <div class="labelpair">
                    <label>Reward Amount</label>
                    <input name="referral_amount" class="text number" type="number" value="0"> USD                </div>
                <div class="labelpair">
                    <label>Reward Percent off next payment</label>
                    <input name="referral_pct" class="text number" type="number" value="100"> %
                </div>
                <div class="labelpair">
                    <label>Apply Referral Reward</label>
                    <select name="referral_apply" id="referral_apply">
    <option value="1" label="To Next Payment Only">To Next Payment Only</option>
    <option value="2" label="Continuously">Continuously</option>
</select>                </div>

                <br>
                <span class="toggle on"><span><em attr-val="0">No</em><input type="radio" name="auto_reward" value="0"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="auto_reward" value="1" checked="checked"></span></span>                <label>Automatically reward referrals?</label>

                <p>If turned off, you will approve each referral reward manually from the gym dashboard. This provides you with greater control of the referral program, but requires more manual actions.</p>

            </div>
            <hr>
            <div class="explanation">
                <h3>Active Campaign Integration</h3>
                <p>New Leads and members would be added to your Active Campaign account using the appropriate tags.</p>
                <p>In your account, go to "Settings" -&gt; "Developer" in the left sidebar, and enter the API access credentials below:</p>
            </div>
            <div class="fields ac">
                <div class="labelpair">
                    <label>API URL</label>
                    <input name="ac_url" type="text" class="text">                </div>
                <div class="labelpair">
                    <label>API Key</label>
                    <input name="ac_key" type="text" class="text">                </div>
                <div class="labelpair">
                    <label>Leads tag</label>
                    <input name="ac_leads_tag" value="Lead" type="text" class="text">                </div>
                <div class="labelpair">
                    <label>Members tag</label>
                    <input name="ac_members_tag" value="Member" type="text" class="text">                </div>
            </div>
            <a name="number"></a>
            <hr>

            <div class="explanation">
                <h3>Text Messaging</h3>
                <p>Set up a texting number to starting sending text / SMS to members and leads.</p>
            </div>
            <div class="fields sms-settings">
                                <a class="button" href="manager/marketing/sms">Choose Texting Number</a>
                            </div>
        </div><div class="half right">
            <a name="custom-fields"></a>
            <div class="explanation">
                <h3>Custom Lead Fields</h3>
                <p>Add additional fields to the lead profile</p>
            </div>
                        <ul class="custom-fields">
                                <li class="field">				
                                        <div class="labelpair title">

                        <input name="fields[0][title]" placeholder="Field title..." value="" type="text" class="text">                    </div>
                    <div class="labelpair">
                        <label>Field Type</label>
                        <select name="fields[0][type]" id="fields-0-type">
    <option value="text" label="Text input">Text input</option>
    <option value="checkbox" label="Checkbox">Checkbox</option>
    <option value="select" label="Dropdown">Dropdown</option>
    <option value="radio" label="Toggle">Toggle</option>
</select>                    </div>
                                        
                    <a class="manage-options icon-list-bullet"><em></em></a>
                    <div class="labelpair">
                        <label>Use for</label>
                        <select name="fields[0][member_type]" id="fields-0-member_type">
    <option value="0" label="Members &amp; Leads">Members &amp; Leads</option>
    <option value="1" label="Members">Members</option>
    <option value="2" label="Leads" selected="selected">Leads</option>
</select>                    </div>


                    <div class="options">
                        <ul class="style-scroll shadow-scroll">
                                                <li><input type="text" class="text" name="fields[0][options][]" placeholder="Enter option ..." value=""><i class="icon-cancel-1 remove-option"></i><i class="icon-plus-1 add-option"></i></li>
                                                </ul>
                    </div>
                    <a class="remove-field icon-trash"></a>
                    
                </li>
                            </ul>
            <a class="hollow-button add-field">Add field</a>
        </div>
        
        

        <hr>
        <div class="buttons">
            <button type="submit">Save Settings</button>
        </div>
    </form>
	
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')