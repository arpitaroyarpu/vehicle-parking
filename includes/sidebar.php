<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
		<div class="profile-userpic">
				<img src="https://www.w3schools.com/howto/img_avatar.png" width="20" class="img-responsive" alt="Icon">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Admin</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>

		<form role="search" action="search-results.php" name="search" method="POST" enctype="multipart/form-data">

			<!--  -->

			<div class="form-group">
				<input type="text" class="form-control" id="searchdata" name="searchdata" placeholder="Search Vehicle-Reg">
			</div>

		</form>
		<ul class="nav menu">
			<li class="<?php if($page=="dashboard") {echo "active";}?>"><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="<?php if($page=="vehicle-category") {echo "active";}?>"><a href="vehicle-category.php"><em class="fa fa-th-large">&nbsp;</em> Vehicle Category</a></li>
			<li class="<?php if($page=="manage-vehicles") {echo "active";}?>"><a href="manage-vehicles.php"><em class="fa fa-car">&nbsp;</em> Vehicle Entry</a></li>
			<li class="<?php if($page=="in-vehicle") {echo "active";}?>"><a href="in-vehicles.php"><em class="fa fa-toggle-on">&nbsp;</em> IN Vehicles</a></li>
            <li class="<?php if($page=="out-vehicle") {echo "active";}?>"><a href="out-vehicles.php"><em class="fa fa-toggle-off">&nbsp;</em> OUT Vehicles</a></li>
			
			
		</ul>
		
	</div><!--/.sidebar-->