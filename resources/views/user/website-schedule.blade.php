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
</div><div class="container width schedule">
		
    
    <div class="main-title">
        
        <h2>Gym Schedule</h2>
        
    </div>
    
    <a href="manager/gym/schedule" class="hollow-button floater">Manage Schedule</a>
        <a href="manager/gym/embedschedule" class="hollow-button floater">Embed Code</a>
    <form method="post" action="/manager/website/schedule">
                        
        <div class="explanation">
            <h3>Website Schedule</h3>
            <p>Add text description for additional details on each training session.</p>
        </div>
        
        <div id="mceu_13" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" role="application" style="visibility: hidden; border-width: 1px; width: 100%;"><div id="mceu_13-body" class="mce-container-body mce-stack-layout"><div id="mceu_14" class="mce-top-part mce-container mce-stack-layout-item mce-first"><div id="mceu_14-body" class="mce-container-body"><div id="mceu_15" class="mce-toolbar-grp mce-container mce-panel mce-first mce-last" hidefocus="1" tabindex="-1" role="group"><div id="mceu_15-body" class="mce-container-body mce-stack-layout"><div id="mceu_16" class="mce-container mce-toolbar mce-stack-layout-item mce-first mce-last" role="toolbar"><div id="mceu_16-body" class="mce-container-body mce-flow-layout"><div id="mceu_17" class="mce-container mce-flow-layout-item mce-first mce-btn-group" role="group"><div id="mceu_17-body"><div id="mceu_0" class="mce-widget mce-btn mce-first" tabindex="-1" aria-pressed="false" role="button" aria-label="Bold"><button id="mceu_0-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div id="mceu_1" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Italic"><button id="mceu_1-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div><div id="mceu_2" class="mce-widget mce-btn mce-last" tabindex="-1" aria-pressed="false" role="button" aria-label="Underline"><button id="mceu_2-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-underline"></i></button></div></div></div><div id="mceu_18" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_18-body"><div id="mceu_3" class="mce-widget mce-btn mce-splitbtn mce-menubtn mce-first" role="button" aria-pressed="false" tabindex="-1" aria-label="Bullet list" aria-haspopup="true"><button type="button" hidefocus="1" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button><button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mceu_4" class="mce-widget mce-btn mce-splitbtn mce-menubtn mce-last" role="button" aria-pressed="false" tabindex="-1" aria-label="Numbered list" aria-haspopup="true"><button type="button" hidefocus="1" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button><button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button></div></div></div><div id="mceu_19" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_19-body"><div id="mceu_5" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-label="Decrease indent"><button id="mceu_5-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div id="mceu_6" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Increase indent"><button id="mceu_6-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div></div></div><div id="mceu_20" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_20-body"></div></div><div id="mceu_21" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_21-body"><div id="mceu_7" class="mce-widget mce-btn mce-first" tabindex="-1" aria-pressed="false" role="button" aria-label="Insert/edit link"><button id="mceu_7-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button></div><div id="mceu_8" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Remove link"><button id="mceu_8-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-unlink"></i></button></div><div id="mceu_9" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="File Manager"><button id="mceu_9-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-none" style="background-image: url('https://gymdesk.com/js/tinymce/plugins/lioniteimages/img/icon.png')"></i></button></div></div></div><div id="mceu_22" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_22-body"><div id="mceu_10" class="mce-widget mce-btn mce-first mce-last" tabindex="-1" aria-pressed="false" role="button" aria-label="Paste as text"><button id="mceu_10-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-pastetext"></i></button></div></div></div><div id="mceu_23" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_23-body"><div id="mceu_11" class="mce-widget mce-btn mce-menubtn mce-first mce-last mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_11" role="button" aria-haspopup="true"><button id="mceu_11-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">Formats</span> <i class="mce-caret"></i></button></div></div></div><div id="mceu_24" class="mce-container mce-flow-layout-item mce-last mce-btn-group" role="group"><div id="mceu_24-body"><div id="mceu_12" class="mce-widget mce-btn mce-first mce-last" tabindex="-1" role="button" aria-label="Source code"><button id="mceu_12-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-code"></i></button></div></div></div></div></div></div></div></div></div><div id="mceu_25" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;"><iframe id="schedule_description_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area. Press ALT-F9 for menu. Press ALT-F10 for toolbar. Press ALT-0 for help" style="width: 100%; height: 373px; display: block;"></iframe></div><div id="mceu_26" class="mce-statusbar mce-container mce-panel mce-stack-layout-item mce-last" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;"><div id="mceu_26-body" class="mce-container-body mce-flow-layout"><div id="mceu_27" class="mce-path mce-flow-layout-item mce-first"><div class="mce-path-item">&nbsp;</div></div><div id="mceu_28" class="mce-flow-layout-item mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div><span id="mceu_29" class="mce-branding mce-widget mce-label mce-flow-layout-item mce-last"> Powered by <a href="https://www.tiny.cloud/?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce" rel="noopener" target="_blank" role="presentation" tabindex="-1">Tiny</a></span></div></div></div></div><textarea class="rte" cols="40" rows="18" name="schedule_description" id="schedule_description" aria-hidden="true" style="display: none;"></textarea>
        
        <div class="session-visibility">
            <label>Canceled sessions visibility on the schedule</label>
            <div class="has-radio">
                                <input id="type-1" type="radio" name="session_visibility" value="1" checked="checked">
                <label for="type-1">Crossed-off</label>
                <input id="type-2" type="radio" name="session_visibility" value="2">
                <label for="type-2">Hidden</label>

            </div>
        </div>
        <div class="buttons"><button type="submit">Save Changes</button></div>
    </form>
	
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')