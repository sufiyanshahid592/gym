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
</div><div class="container gallery width">
	
    <div class="explanation">
        <h3>Gallery</h3>
        <p>High quality photos can make a big difference convincing website visitors to visit your gym. Upload photos of your gym's facilities, training and members at competitions. <b>Note: 5MB size limit per photo</b></p>
    </div>
    <div id="lionite-gallery-manager">
        <!-- The global progress bar -->


        <!-- The container for the uploaded files -->
        <div id="files" class="files"></div>

        <div class="dropzone">
            <div id="progress" class="progress">
                <div class="bar"></div>
                <em></em>
            </div>
            <div class="interactive">
                <strong>Drag photos here or</strong>
                <span class="fileinput-button button">

                    <span>Upload Photos</span>
                    <!-- The file input field used as target for the file upload widget -->
                    <input id="lionite-file-upload" type="file" name="files[]" multiple="">
                </span>
            </div>
        </div>
    </div>

    <ul class="images ui-sortable">
            </ul>
	
</div>
			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')