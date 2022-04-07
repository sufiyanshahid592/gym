@include('user/template/header')
<div id="body">
			<div class="overview products-revenue">
    <div class="top">        
        <div class="width">
            <div class="section-header">
    <h2><img src="images/manager/icons/ill-sales.png"> Point of Sale</h2>
    <em class="location">hamza</em>
	<div class="subnav">

		
		<ul>
						@include('user/menus/sales-menu')
						
					</ul>

	</div>
</div>            
            <form method="get" action="/manager/products/report">
                
                <input name="range" class="text range" type="text" value="2022/04/01 - 2022/04/04">                <input name="group" type="hidden" class="text">                <input name="category" type="hidden" class="text">                
            </form>
            
            <ul class="boxes">
                <li class="third">
                    <h4>Total <span class="desktop">Revenue</span></h4>
                    <img src="images/manager/icons/revenue.png">
                    <b>0.00</b>
                                    </li>
                <li class="third">
                    <h4><span class="desktop">Cost-of-goods</span><span class="mobile">COG</span></h4>
                    <img src="images/manager/icons/cog.png">
                    <b>0.00</b>
                                    </li>
                <li class="third">
                    <h4>Net Profit</h4>
                    <img src="images/manager/icons/profit.png">
                    <b>0.00</b>
                                    </li>
                <li class="half half-graph">
                    <h4>Profit</h4>
                    <div class="graph-container">
                    <div class="graph width12"><ol class="labels2"><li><span>$</span><em>5</em></li><li><span>$</span><em>3</em></li></ol><ul><li attr-data="0" class=""><em style="height:0%;"><span>$0<br>May</span></em><label>May</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0<br>Jun</span></em><label>Jun</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0<br>Jul</span></em><label>Jul</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0<br>Aug</span></em><label>Aug</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0<br>Sep</span></em><label>Sep</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0<br>Oct</span></em><label>Oct</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0<br>Nov</span></em><label>Nov</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0<br>Dec</span></em><label>Dec</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0<br>Jan</span></em><label>Jan</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0<br>Feb</span></em><label>Feb</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0<br>Mar</span></em><label>Mar</label></li><li attr-data="0" class=""><em style="height:0%;"><span>$0<br>Apr</span></em><label>Apr</label></li></ul></div>                    </div>
                </li>
                <li class="half mini">
                    <div>
                        <h4>Item Value</h4>
                        <b>0.00</b>
                    </div>
                    <div>
                        <h4>Taxes</h4>
                        <b>0.00                        
                        </b>
                    </div>
                    <div>
                        <h4>Discounts</h4>
                        <b>0.00</b>
                    </div>
                    
                    <div>
                        <h4>Refunds</h4>
                        <b>0.00</b>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
    
    <div class="container width">
        <form method="get" action="/manager/products/report">
            <button class="hollow-button download" type="button"><i class="icon-export"></i><span> Export</span></button>
            
            <h2>Product Revenue</h2>                
            
            <input name="range" type="hidden" class="text" value="2022/04/01 - 2022/04/04">              
            <div class="labelpair">
                <label>Report By</label>
                <select name="group" id="group">
    <option value="product" label="Product">Product</option>
    <option value="variant" label="Variant">Variant</option>
</select>            </div>
        </form>
                <div class="placeholder">No transactions found.</div>
            </div>
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')