@include('user/template/header')
<div id="body">
			<div class="overview">
    <div class="top-dash">        
        <div class="width">
            <div class="section-header">
    <h2><img src="images/manager/icons/ill-marketing.png"> Marketing</h2>
    <em class="location">hamza</em>
	<div class="subnav">
				<ul>
                    @include('user/menus/marketing-menu')
						
					</ul>
	</div>
</div>            <div class="graphs">                

                <h3>Lead Generation</h3>
                <form method="get" autocomplete="off" class="stats-controls">	                    
                                        <ul class="periods">
                    <li class="selected">
                             <input type="radio" class="radio" name="period" value="daily" checked="checked"> Day                         </li><li>
                             <input type="radio" class="radio" name="period" value="weekly"> Week                         </li><li>
                             <input type="radio" class="radio" name="period" value="monthly"> Month                         </li>                    </ul>
                                        <input type="text" name="dates" class="range" value="2022/03/04 - 2022/04/04">

                </form>
                <div class="graph-container">
                                        <div class="graph width30"><ol class="labels2"><li><em>5</em><span></span></li><li><em>3</em><span></span></li></ol><ul><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 4</span></em><label>Mar 4</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 5</span></em><label>Mar 5</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 6</span></em><label>Mar 6</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 7</span></em><label>Mar 7</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 8</span></em><label>Mar 8</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 9</span></em><label>Mar 9</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 10</span></em><label>Mar 10</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 11</span></em><label>Mar 11</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 12</span></em><label>Mar 12</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 13</span></em><label>Mar 13</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 14</span></em><label>Mar 14</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 15</span></em><label>Mar 15</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 16</span></em><label>Mar 16</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 17</span></em><label>Mar 17</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 18</span></em><label>Mar 18</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 19</span></em><label>Mar 19</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 20</span></em><label>Mar 20</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 21</span></em><label>Mar 21</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 22</span></em><label>Mar 22</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 23</span></em><label>Mar 23</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 24</span></em><label>Mar 24</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 25</span></em><label>Mar 25</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 26</span></em><label>Mar 26</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 27</span></em><label>Mar 27</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 28</span></em><label>Mar 28</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 29</span></em><label>Mar 29</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 30</span></em><label>Mar 30</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 31</span></em><label>Mar 31</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Apr 1</span></em><label>Apr 1</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Apr 2</span></em><label>Apr 2</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Apr 3</span></em><label>Apr 3</label></li><li attr-data="0" class="todate"><em style="height:0%;"><span>0 <br>Apr 4</span></em><label>Apr 4</label></li></ul></div>                </div>

            </div>
            <div class="graphs members">

                <h3>New Signups</h3>
                <form method="get" autocomplete="off" class="stats-controls">	                    
                                        <ul class="periods">
                    <li class="selected">
                             <input type="radio" class="radio" name="period" value="daily" checked="checked"> Day                         </li><li>
                             <input type="radio" class="radio" name="period" value="weekly"> Week                         </li><li>
                             <input type="radio" class="radio" name="period" value="monthly"> Month                         </li>                    </ul>
                                        <input type="text" name="dates" class="range" value="2022/03/04 - 2022/04/04">

                </form>
                <div class="graph-container">
                                        <div class="graph width30"><ol class="labels2"><li><em>5</em><span></span></li><li><em>3</em><span></span></li></ol><ul><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 4</span></em><label>Mar 4</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 5</span></em><label>Mar 5</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 6</span></em><label>Mar 6</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 7</span></em><label>Mar 7</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 8</span></em><label>Mar 8</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 9</span></em><label>Mar 9</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 10</span></em><label>Mar 10</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 11</span></em><label>Mar 11</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 12</span></em><label>Mar 12</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 13</span></em><label>Mar 13</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 14</span></em><label>Mar 14</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 15</span></em><label>Mar 15</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 16</span></em><label>Mar 16</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 17</span></em><label>Mar 17</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 18</span></em><label>Mar 18</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 19</span></em><label>Mar 19</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 20</span></em><label>Mar 20</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 21</span></em><label>Mar 21</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 22</span></em><label>Mar 22</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 23</span></em><label>Mar 23</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 24</span></em><label>Mar 24</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 25</span></em><label>Mar 25</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 26</span></em><label>Mar 26</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 27</span></em><label>Mar 27</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 28</span></em><label>Mar 28</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 29</span></em><label>Mar 29</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 30</span></em><label>Mar 30</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Mar 31</span></em><label>Mar 31</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Apr 1</span></em><label>Apr 1</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Apr 2</span></em><label>Apr 2</label></li><li attr-data="0" class=""><em style="height:0%;"><span>0 <br>Apr 3</span></em><label>Apr 3</label></li><li attr-data="0" class="todate"><em style="height:0%;"><span>0 <br>Apr 4</span></em><label>Apr 4</label></li></ul></div>                </div>
            </div>
        </div>
    </div>
    <div class="container sources width">

        <h3>Acquisition Channels</h3>
                <div class="placeholder">Member acquisition data has not been collected yet.<br> When you add new members, mark the channel through which they found your gym at the bottom of the form.</div>
                <h3>Latest Referrals</h3>
                <div class="placeholder">No referrals have been made yet.</div>
                

    </div>
</div>			<div class="clear" style="clear:both;"></div>
		</div>
@include('user/template/footer')