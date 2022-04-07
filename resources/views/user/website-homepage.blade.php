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
</div><div class="container width">
    <div class="main-title">
        <h2>Homepage Content</h2>
    </div>
            <form method="post" action="/manager/website/homepage" class="homepage-form" enctype="multipart/form-data">
        <div class="left">
            <div class="explanation">
                <h3>Main Heading</h3>
                <p>Top heading on the homepage to welcome new visitors to the website</p>
            </div>
            <div class="fields">
                <input name="title" value="Welcome to hamza" type="text" class="text">            </div>
            <div class="explanation">
                <h3>Short description</h3>
                <p>One or two paragraphs about your gym, and what is unique about it. </p>
            </div>

            <div class="fields">
                <div id="mceu_14" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" role="application" style="visibility: hidden; border-width: 1px; width: 100%;"><div id="mceu_14-body" class="mce-container-body mce-stack-layout"><div id="mceu_15" class="mce-top-part mce-container mce-stack-layout-item mce-first"><div id="mceu_15-body" class="mce-container-body"><div id="mceu_16" class="mce-toolbar-grp mce-container mce-panel mce-first mce-last" hidefocus="1" tabindex="-1" role="group"><div id="mceu_16-body" class="mce-container-body mce-stack-layout"><div id="mceu_17" class="mce-container mce-toolbar mce-stack-layout-item mce-first mce-last" role="toolbar"><div id="mceu_17-body" class="mce-container-body mce-flow-layout"><div id="mceu_18" class="mce-container mce-flow-layout-item mce-first mce-btn-group" role="group"><div id="mceu_18-body"><div id="mceu_0" class="mce-widget mce-btn mce-first" tabindex="-1" aria-pressed="false" role="button" aria-label="Bold"><button id="mceu_0-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div id="mceu_1" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Italic"><button id="mceu_1-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div><div id="mceu_2" class="mce-widget mce-btn mce-last" tabindex="-1" aria-pressed="false" role="button" aria-label="Underline"><button id="mceu_2-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-underline"></i></button></div></div></div><div id="mceu_19" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_19-body"><div id="mceu_3" class="mce-widget mce-btn mce-splitbtn mce-menubtn mce-first" role="button" aria-pressed="false" tabindex="-1" aria-label="Bullet list" aria-haspopup="true"><button type="button" hidefocus="1" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button><button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mceu_4" class="mce-widget mce-btn mce-splitbtn mce-menubtn mce-last" role="button" aria-pressed="false" tabindex="-1" aria-label="Numbered list" aria-haspopup="true"><button type="button" hidefocus="1" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button><button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button></div></div></div><div id="mceu_20" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_20-body"><div id="mceu_5" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-label="Decrease indent"><button id="mceu_5-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div id="mceu_6" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Increase indent"><button id="mceu_6-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div></div></div><div id="mceu_21" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_21-body"></div></div><div id="mceu_22" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_22-body"><div id="mceu_7" class="mce-widget mce-btn mce-first" tabindex="-1" aria-pressed="false" role="button" aria-label="Insert/edit link"><button id="mceu_7-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button></div><div id="mceu_8" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Remove link"><button id="mceu_8-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-unlink"></i></button></div><div id="mceu_9" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="File Manager"><button id="mceu_9-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-none" style="background-image: url('https://gymdesk.com/js/tinymce/plugins/lioniteimages/img/icon.png')"></i></button></div><div id="mceu_10" class="mce-widget mce-btn mce-last" tabindex="-1" aria-pressed="false" role="button" aria-label="Insert/edit media"><button id="mceu_10-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-media"></i></button></div></div></div><div id="mceu_23" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_23-body"><div id="mceu_11" class="mce-widget mce-btn mce-first mce-last" tabindex="-1" aria-pressed="false" role="button" aria-label="Paste as text"><button id="mceu_11-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-pastetext"></i></button></div></div></div><div id="mceu_24" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_24-body"><div id="mceu_12" class="mce-widget mce-btn mce-menubtn mce-first mce-last mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_12" role="button" aria-haspopup="true"><button id="mceu_12-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">Formats</span> <i class="mce-caret"></i></button></div></div></div><div id="mceu_25" class="mce-container mce-flow-layout-item mce-last mce-btn-group" role="group"><div id="mceu_25-body"><div id="mceu_13" class="mce-widget mce-btn mce-first mce-last" tabindex="-1" role="button" aria-label="Source code"><button id="mceu_13-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-code"></i></button></div></div></div></div></div></div></div></div></div><div id="mceu_26" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;"><iframe id="description_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area. Press ALT-F9 for menu. Press ALT-F10 for toolbar. Press ALT-0 for help" style="width: 100%; height: 194px; display: block;"></iframe></div><div id="mceu_27" class="mce-statusbar mce-container mce-panel mce-stack-layout-item mce-last" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;"><div id="mceu_27-body" class="mce-container-body mce-flow-layout"><div id="mceu_28" class="mce-path mce-flow-layout-item mce-first"><div class="mce-path-item">&nbsp;</div></div><div id="mceu_29" class="mce-flow-layout-item mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div><span id="mceu_30" class="mce-branding mce-widget mce-label mce-flow-layout-item mce-last"> Powered by <a href="https://www.tiny.cloud/?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce" rel="noopener" target="_blank" role="presentation" tabindex="-1">Tiny</a></span></div></div></div></div><textarea class="rte vid" cols="80" rows="8" name="description" placeholder="(Optional) Enter a short description of your gym..." id="description" aria-hidden="true" style="display: none;"></textarea>
            </div>
        </div><div class="right">
            <div class="explanation">
                <h3>Layout</h3>
                <p>Pick the layout for the top of the homepage</p>
            </div>            
                        <ul class="layout">
                <li class="selected">
                    <input id="layout-1" name="layout" type="radio" value="1" checked="checked">
                    
                    <label for="layout-1"><img src="images/manager/website/fw.png"> Full-width photo</label>
                    
                </li>
                <li>
                    
                    <input id="layout-2" name="layout" type="radio" value="2">
                    <label for="layout-2"><img src="images/manager/website/cw.png"> Content width photo</label>
                    
                </li>
                <li>
                    
                    <input id="layout-3" name="layout" type="radio" value="3">
                    <label for="layout-3"><img src="images/manager/website/sp.png"> Side photo</label>
                    
                </li>
            </ul>
            <div class="explanation">
                <h3>Background photo</h3>
                <p>Personalize the homepage with a high-quality photo of the gym. For best results, image should be at least 1920 pixels wide, and 700 pixels high.</p>
            </div>
            <div class="fields background">
                <div id="photo">


                    <img>
                                    </div>
                <span class="fileinput-button hollow-button">

                    <span>Upload photo</span>
                    <!-- The file input field used as target for the file upload widget -->
                    <input id="photo-upload" type="file" name="upload-photo">
                </span>
            </div>
        </div>
        <hr>
        <div class="explanation">
            <h3>Homepage Sections</h3>
            <p>You can choose which sections to show on the homepage. Sorting the sections also affects the order in which they appear on the page.</p>
        </div>
        <ul class="sections ui-sortable">
                        <li class="toggled">

                <div class="toggle-button">
                    <i class="icon-move ui-sortable-handle"></i>
                    <input type="checkbox" value="instructors" name="homepage_sections[]" checked="checked">
                    Instructors                </div>

            </li>
                        <li class="toggled">

                <div class="toggle-button">
                    <i class="icon-move ui-sortable-handle"></i>
                    <input type="checkbox" value="schedule" name="homepage_sections[]" checked="checked">
                    Schedule                </div>

            </li>
                        <li>

                <div class="toggle-button">
                    <i class="icon-move ui-sortable-handle"></i>
                    <input type="checkbox" value="content" name="homepage_sections[]">
                    Content                </div>

            </li>
                    </ul>

        <div class="explanation">
            <h3>Additional Content</h3>
            <p>The "Content" section above must be enabled for this to appear on the homepage.</p>
        </div>
        <div class="content">

            <div id="mceu_45" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" role="application" style="visibility: hidden; border-width: 1px; width: 100%;"><div id="mceu_45-body" class="mce-container-body mce-stack-layout"><div id="mceu_46" class="mce-top-part mce-container mce-stack-layout-item mce-first"><div id="mceu_46-body" class="mce-container-body"><div id="mceu_47" class="mce-toolbar-grp mce-container mce-panel mce-first mce-last" hidefocus="1" tabindex="-1" role="group"><div id="mceu_47-body" class="mce-container-body mce-stack-layout"><div id="mceu_48" class="mce-container mce-toolbar mce-stack-layout-item mce-first mce-last" role="toolbar"><div id="mceu_48-body" class="mce-container-body mce-flow-layout"><div id="mceu_49" class="mce-container mce-flow-layout-item mce-first mce-btn-group" role="group"><div id="mceu_49-body"><div id="mceu_31" class="mce-widget mce-btn mce-first" tabindex="-1" aria-pressed="false" role="button" aria-label="Bold"><button id="mceu_31-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div id="mceu_32" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Italic"><button id="mceu_32-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div><div id="mceu_33" class="mce-widget mce-btn mce-last" tabindex="-1" aria-pressed="false" role="button" aria-label="Underline"><button id="mceu_33-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-underline"></i></button></div></div></div><div id="mceu_50" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_50-body"><div id="mceu_34" class="mce-widget mce-btn mce-splitbtn mce-menubtn mce-first" role="button" aria-pressed="false" tabindex="-1" aria-label="Bullet list" aria-haspopup="true"><button type="button" hidefocus="1" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button><button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mceu_35" class="mce-widget mce-btn mce-splitbtn mce-menubtn mce-last" role="button" aria-pressed="false" tabindex="-1" aria-label="Numbered list" aria-haspopup="true"><button type="button" hidefocus="1" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button><button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button></div></div></div><div id="mceu_51" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_51-body"><div id="mceu_36" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-label="Decrease indent"><button id="mceu_36-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div id="mceu_37" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Increase indent"><button id="mceu_37-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div></div></div><div id="mceu_52" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_52-body"></div></div><div id="mceu_53" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_53-body"><div id="mceu_38" class="mce-widget mce-btn mce-first" tabindex="-1" aria-pressed="false" role="button" aria-label="Insert/edit link"><button id="mceu_38-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button></div><div id="mceu_39" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Remove link"><button id="mceu_39-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-unlink"></i></button></div><div id="mceu_40" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="File Manager"><button id="mceu_40-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-none" style="background-image: url('https://gymdesk.com/js/tinymce/plugins/lioniteimages/img/icon.png')"></i></button></div><div id="mceu_41" class="mce-widget mce-btn mce-last" tabindex="-1" aria-pressed="false" role="button" aria-label="Insert/edit media"><button id="mceu_41-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-media"></i></button></div></div></div><div id="mceu_54" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_54-body"><div id="mceu_42" class="mce-widget mce-btn mce-first mce-last" tabindex="-1" aria-pressed="false" role="button" aria-label="Paste as text"><button id="mceu_42-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-pastetext"></i></button></div></div></div><div id="mceu_55" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_55-body"><div id="mceu_43" class="mce-widget mce-btn mce-menubtn mce-first mce-last mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_43" role="button" aria-haspopup="true"><button id="mceu_43-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">Formats</span> <i class="mce-caret"></i></button></div></div></div><div id="mceu_56" class="mce-container mce-flow-layout-item mce-last mce-btn-group" role="group"><div id="mceu_56-body"><div id="mceu_44" class="mce-widget mce-btn mce-first mce-last" tabindex="-1" role="button" aria-label="Source code"><button id="mceu_44-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-code"></i></button></div></div></div></div></div></div></div></div></div><div id="mceu_57" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;"><iframe id="homepage_content_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area. Press ALT-F9 for menu. Press ALT-F10 for toolbar. Press ALT-0 for help" style="width: 100%; height: 277px; display: block;"></iframe></div><div id="mceu_58" class="mce-statusbar mce-container mce-panel mce-stack-layout-item mce-last" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;"><div id="mceu_58-body" class="mce-container-body mce-flow-layout"><div id="mceu_59" class="mce-path mce-flow-layout-item mce-first"><div class="mce-path-item">&nbsp;</div></div><div id="mceu_60" class="mce-flow-layout-item mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div><span id="mceu_61" class="mce-branding mce-widget mce-label mce-flow-layout-item mce-last"> Powered by <a href="https://www.tiny.cloud/?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce" rel="noopener" target="_blank" role="presentation" tabindex="-1">Tiny</a></span></div></div></div></div><textarea name="homepage_content" cols="60" rows="12" class="rte vid" id="homepage_content" aria-hidden="true" style="display: none;"></textarea>
        </div>

        <hr>
        <div class="buttons">
            <button type="submit">Save Changes</button>
        </div>
    </form>
	
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')