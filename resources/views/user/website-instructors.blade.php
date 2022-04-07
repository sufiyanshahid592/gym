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
</div><div class="container instructors width">
    <form method="post" action="/manager/website/instructors">
                        <div class="explanation">
            <h3>Instructors</h3>
            <span class="show-ranks">
                <label>Ranks visibility</label>
                                <select name="rank_display" id="rank_display">
    <option value="noranks" label="No ranks">No ranks</option>
    <option value="titles" label="Titles only">Titles only</option>
    <option value="visual" label="Visual only">Visual only</option>
    <option value="all" label="Rank title and visual" selected="selected">Rank title and visual</option>
</select>            </span>
            <p>Move instructors photos to change the order they appear on the website</p>
        </div>
        
                <div class="placeholder">
            No instructors added yet! 
            <br>
            <a href="manager/gym/addstaff?type=2" class="button">Add Instructor</a>
        </div>
            </form>
</div>
			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')