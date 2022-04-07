@include('user/template/header')
<div id="body">
			<div class="section-header">
	
		
    <h2><img src="images/manager/icons/ill-website.png"> Website</h2>
    <em class="location">hamza</em>
	<div class="subnav">

		<ul class="menu">
			@include('user/menus/website-menu')
						
		</ul>
	</div>
</div><div class="container width body">
            <form method="post" action="/manager/website/settings" class="website-form" enctype="multipart/form-data">
        <div class="website-status unpublished">
            <div class="explanation">
                <h3>Status</h3>
                <p>Visitors will not be able to access your website until you publish it.</p>
            </div>
            <div class="fields">
                <label>Published</label>
                <span class="toggle off"><span><em attr-val="0">No</em><input type="radio" name="public" value="0" checked="checked"><i class="control"></i><em attr-val="1">Yes</em><input type="radio" name="public" value="1"></span></span>            </div>
        </div>
                <div class="login-link">
            <div class="explanation">
                <h3>Members Log-in Link</h3>
                <p>You can provide members with online access even if your use your own website. You can link to the log-in screen using the link below.</p>
            </div>
            <div class="fields">
                <input type="text" readonly="readonly" value="https://hamza.gymdesk.com/login">
            </div>
            <div class="explanation">
                <h3>Sign-up Form</h3>
                <p>Direct link into a sign-up form from your own website.</p>
            </div>
            <div class="fields">
                <input type="text" readonly="readonly" value="https://hamza.gymdesk.com/signup">
            </div>
        </div>
        <div class="explanation">
            <h3>Web Address</h3>
            <p>Pick a web address for your gym's website. You can use a subdomain on our domain (gymdesk.com) or connect <a target="_blank" href="manager/website/mapping-domains">your own domain</a>, if you have one. 
            </p>
        </div>

        <div class="fields">


            <div class="labelpair domain">
                <label>Custom Domain (Optional)</label>
                <input name="domain" type="text" class="text">                <br>
                <a target="_blank" href="manager/website/mapping-domains">Learn how to connect your own domain</a>
            </div>

            <div class="labelpair subdomain">
                <label>Subdomain</label>
                <input name="subdomain" type="text" class="text" value="hamza"><em>.gymdesk.com</em>
            </div>
                    </div>
        <hr>
        <div class="half">
            <div class="explanation color-selection">
                <h3>Color Scheme</h3>
                
                <div class="template has-radio">
                                        <input id="template-1" type="radio" name="template" value="light">
                    <label for="template-1">Light Theme</label>
                    <input id="template-2" type="radio" name="template" value="dark">
                    <label for="template-2">Dark Theme</label>

                </div>
                
                <div class="labelpair">
                    <label>UI Color (Buttons, borders)</label>                    
                                        <input class="ui-color" type="text" name="ui_color" value="" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner sp-clear-display" style="background-color: transparent;"></div></div><div class="sp-dd">▼</div></div>
                </div>
                <div class="labelpair">
                    <label>Button text color</label>                    
                                        <input class="text-color" type="text" name="text_color" value="" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner sp-clear-display" style="background-color: transparent;"></div></div><div class="sp-dd">▼</div></div>
                </div>
                <a class="ui-test-button" style="">Example Button</a>
            </div>
            <hr>
            <div class="explanation">
                <h3>Website Navigation</h3>
                <p>Adjust the order and appearance of the website navigation links.</p>
            </div>
            
            <ul class="menu ui-sortable">
                                <li>
                    <i class="drag icon-move ui-sortable-handle"></i>
                    <input type="hidden" name="nav[1][position]" value="1">
                    <input type="hidden" name="nav[1][link]" value="instructors">
                    <input type="text" class="text" name="nav[1][title]" value="Instructors">
                    <span class="toggle on"><span><em attr-val="0">off</em><input type="radio" name="nav[1][active]" value="0"><i class="control"></i><em attr-val="1">on</em><input type="radio" name="nav[1][active]" value="1" checked="checked"></span></span>                                    </li>
                                <li>
                    <i class="drag icon-move ui-sortable-handle"></i>
                    <input type="hidden" name="nav[2][position]" value="2">
                    <input type="hidden" name="nav[2][link]" value="schedule">
                    <input type="text" class="text" name="nav[2][title]" value="Schedule">
                    <span class="toggle on"><span><em attr-val="0">off</em><input type="radio" name="nav[2][active]" value="0"><i class="control"></i><em attr-val="1">on</em><input type="radio" name="nav[2][active]" value="1" checked="checked"></span></span>                                    </li>
                                <li>
                    <i class="drag icon-move ui-sortable-handle"></i>
                    <input type="hidden" name="nav[3][position]" value="3">
                    <input type="hidden" name="nav[3][link]" value="gallery">
                    <input type="text" class="text" name="nav[3][title]" value="Gallery">
                    <span class="toggle on"><span><em attr-val="0">off</em><input type="radio" name="nav[3][active]" value="0"><i class="control"></i><em attr-val="1">on</em><input type="radio" name="nav[3][active]" value="1" checked="checked"></span></span>                                    </li>
                                <li>
                    <i class="drag icon-move ui-sortable-handle"></i>
                    <input type="hidden" name="nav[4][position]" value="4">
                    <input type="hidden" name="nav[4][link]" value="contact">
                    <input type="text" class="text" name="nav[4][title]" value="Contact">
                    <span class="toggle on"><span><em attr-val="0">off</em><input type="radio" name="nav[4][active]" value="0"><i class="control"></i><em attr-val="1">on</em><input type="radio" name="nav[4][active]" value="1" checked="checked"></span></span>                                    </li>
                                <li>
                    <i class="drag icon-move ui-sortable-handle"></i>
                    <input type="hidden" name="nav[5][position]" value="5">
                    <input type="hidden" name="nav[5][link]" value="pricing">
                    <input type="text" class="text" name="nav[5][title]" value="Pricing">
                    <span class="toggle off"><span><em attr-val="0">off</em><input type="radio" name="nav[5][active]" value="0" checked="checked"><i class="control"></i><em attr-val="1">on</em><input type="radio" name="nav[5][active]" value="1"></span></span>                                    </li>
                                <li>
                    <i class="drag icon-move ui-sortable-handle"></i>
                    <input type="hidden" name="nav[6][position]" value="6">
                    <input type="hidden" name="nav[6][link]" value="shop">
                    <input type="text" class="text" name="nav[6][title]" value="Shop">
                    <span class="toggle off"><span><em attr-val="0">off</em><input type="radio" name="nav[6][active]" value="0" checked="checked"><i class="control"></i><em attr-val="1">on</em><input type="radio" name="nav[6][active]" value="1"></span></span>                                    </li>
                                <li>
                    <i class="drag icon-move ui-sortable-handle"></i>
                    <input type="hidden" name="nav[7][position]" value="7">
                    <input type="hidden" name="nav[7][link]" value="book">
                    <input type="text" class="text" name="nav[7][title]" value="Book">
                    <span class="toggle off"><span><em attr-val="0">off</em><input type="radio" name="nav[7][active]" value="0" checked="checked"><i class="control"></i><em attr-val="1">on</em><input type="radio" name="nav[7][active]" value="1"></span></span>                                    </li>
                                <li>
                    <i class="drag icon-move ui-sortable-handle"></i>
                    <input type="hidden" name="nav[8][position]" value="8">
                    <input type="hidden" name="nav[8][link]" value="more">
                    <input type="text" class="text" name="nav[8][title]" value="More...">
                    <span class="toggle on"><span><em attr-val="0">off</em><input type="radio" name="nav[8][active]" value="0"><i class="control"></i><em attr-val="1">on</em><input type="radio" name="nav[8][active]" value="1" checked="checked"></span></span>                                    </li>
                                <li>
                    <i class="drag icon-move ui-sortable-handle"></i>
                    <input type="hidden" name="nav[9][position]" value="9">
                    <input type="hidden" name="nav[9][link]" value="login">
                    <input type="text" class="text" name="nav[9][title]" value="Login">
                    <span class="toggle on"><span><em attr-val="0">off</em><input type="radio" name="nav[9][active]" value="0"><i class="control"></i><em attr-val="1">on</em><input type="radio" name="nav[9][active]" value="1" checked="checked"></span></span>                                    </li>
                                <li>
                    <i class="drag icon-move ui-sortable-handle"></i>
                    <input type="hidden" name="nav[10][position]" value="10">
                    <input type="hidden" name="nav[10][link]" value="signup">
                    <input type="text" class="text" name="nav[10][title]" value="Signup">
                    <span class="toggle on"><span><em attr-val="0">off</em><input type="radio" name="nav[10][active]" value="0"><i class="control"></i><em attr-val="1">on</em><input type="radio" name="nav[10][active]" value="1" checked="checked"></span></span>                                    </li>
                            </ul>
                        
        </div><div class="half right">
            <div class="explanation">
                <h3>Website logo</h3>
                <p>Upload a logo for the website. The <a href="manager/gym/settings">gym logo</a> would be used otherwise.</p>
            </div>
            <div class="fields logo">
                                <div class="labelpair">
                    <label>Upload Logo</label>
                    <input type="file" name="logo">
                </div>
            </div>
            <hr>
            <div class="social">
                <div class="explanation">
                    <h3>Social Accounts</h3>
                    <p>Social accounts appear on the website footer and the contact page.</p>
                </div>

                <div class="labelpair">
                    <label>Facebook page <small>(Link)</small></label>
                    <input name="facebook" type="text" class="text">                </div>

                <div class="labelpair">
                    <label>Twitter account <small>(Link)</small></label>
                    <input name="twitter" type="text" class="text">                </div>

                <div class="labelpair">
                    <label>YouTube channel <small>(Link)</small></label>
                    <input name="youtube" type="text" class="text">                </div>

                <div class="labelpair">
                    <label>Instagram <small>(Link)</small></label>
                    <input name="instagram" type="text" class="text">                </div>
            </div>
            
        </div>
        
        <hr>
        <div class="explanation">
            <h3>Tracking and Analytics</h3>
            <p>Add the tracking ID of a Google Analytics to track visitor traffic on your gym website. <a target="_blank" href="help/website#settings">Learn more</a></p>
        </div>
        <div class="fields">
            <label>Google Analytics Tracking ID</label>
            <input name="ga_code" placeholder="UA-*******-*" type="text" class="text">            <br><br>
            <label>&lt;head&gt; Scripts</label>
            <textarea name="head_scripts"></textarea>
            <label>&lt;body&gt; Scripts</label>
            <textarea name="body_scripts"></textarea>
        </div>

        <hr>
        <div class="buttons">
            <button type="submit">Save Settings</button>
        </div>
    </form>

</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')