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
</div><div class="container width docs">
	
	
	
    <a class="button floater" href="manager/docs/add">New document template</a>
    <h2>Document Templates</h2>
    <p>Create templates for documents such as member contracts and agreements. <a href="help/document-management">Learn more</a></p>
        <div class="table-container">
        <table cellspacing="0" cellpadding="0" class="list scroll">
            <tbody><tr>
                <th>Document</th>
                <th>Members</th>
                <th>Signatures</th>
                <th>Last Updated</th>
                <th>&nbsp;</th>
            </tr>
            <tr>
	<td><em><a href="manager/docs/edit/id/428927">Waiver</a></em>
        
    </td>
	<td><em>0</em></td>
	<td><em> 
                0</em></td>
	<td>2022/03/30</td>
	<td>
        <a class="show-settings">⋮</a>
        <div class="popup actions">
            <a href="manager/docs/read/id/428927">View</a>
            <a href="manager/docs/edit/id/428927">Edit</a>
            
            <a href="manager/docs/delete/id/428927" class="delete">Delete</a>
          
        </div>
	</td>
</tr>        </tbody></table>
    </div>
    	
	
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')