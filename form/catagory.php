<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="../style/bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../style/startmin.css">
<link rel="stylesheet" href="../style/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../style/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="../style/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="../style/bootstrap-datepicker3.min.css">
<script src="../js/bootstrap-datepicker.min.js"></script>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		 <a class="navbar-brand" href="#">Startmin</a>
	</div>
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
     </button>
     
     <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
      </ul>
      
      <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
</nav>
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Page Title</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
   <div class="row" >
    <div class="panel-body">
	<ul class="nav nav-tabs">
		<li class="active">
		  <a href="#home"  data-toggle="tab" >Data</a>
		</li>
		<li>
		  <a  href="#frm" data-toggle="tab" >Form</a>
		</li>
	</ul>
	<div class="tab-content">
		<div id="home" class="container tab-pane active"><br>
			<table class="table table-bordered table-striped" style="width: 90%;overflow-x: s">
				<thead >
					<tr>
						<th >Id</th>
						<th >Name</th>
						<th >Gender</th>
						<th >Dob</th>
						<th >Address</th>
						<th >Phnone Number</th>
						<th >Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>01</td>
						<td>ke seyha</td>
						<td>male</td>
						<td>1994-07-27</td>
						<td>Kampot</td>
						<td>081 834 985</td>
						<td>
							<a href="#" class="btn btn-primary"  id="edit"><i class="fa fa-edit"></i></a>
							<a href="#" class="btn btn-danger" id="delete"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					<tr>
						<td>02</td>
						<td>ke seyha</td>
						<td>male</td>
						<td>1994-07-27</td>
						<td>Kampot</td>
						<td>081 834 985</td>
						<td>
							<a href="#" class="btn btn-primary"  id="edit"><i class="fa fa-edit"></i></a>
							<a href="#" class="btn btn-danger" id="delete"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="frm" class="container tab-pane fade"><br>
		  <div class="row">
		  	<div class="col-lg-4">
		  	 <div class="panel panel-default">
		  	 	<div class="panel-heading">
		  	 		Student Registration
		  	 	</div>
		  	 <div class="panel-body">
			  <form action="insert.php" method="post">
			  	 <div class="form-group input-group">
					
					<span class="input-group-addon">ID</span>
					
					<input type="text" class="form-control" name="txt-no" id="txt-no" value="..." readonly style="background-color: white">
				  </div>
				  <input type="hidden" name="txt-n" id="txt-n" value="1">
				  
				  <div class="form-group input-group">
			  	 	
			  	 		<span class="input-group-addon">Name</span>
			  	 	
				  	 <input type="text" class="form-control" name="txt-name" >
				  </div>
				  				
				  <div class="form-group input-group">
			  	 	
			  	 		<span class="input-group-addon">Gender</span>
			  	 	
				  	 <select class="form-control" name="txt-gender">
				  	 	<option value="male">Male</option>
				  	 	<option value="female">Female</option>
				  	 </select>
				  </div>
				  <div class="form-group input-group">
			  	 	<div class="input-group  date" id="dateRangPicker"> 
			  	 		<span class="input-group-addon">Date of Birth</span> 	 	
			  	 		<input type="text" class="form-control " name="date" />
			  	 		<span class="input-group-addon">
			  	 			<i class="fa fa-calendar"></i>
			  	 	</span> 
			  	 	</div> 			
			  	 </div>
				  	
				  
				  <div class="form-group input-group">
			  	 	<span class="input-group-addon">Address</span>
				  	<input type="text" class="form-control" name="txt-address" >
				  </div>
				  <div class="form-group input-group">
			  	 	
			  	 		<span class="input-group-addon">Phone</span>
			  	 	
				  	<input type="text" class="form-control" name="txt-phone" ><br>
				  </div>					
					<button type="submit" class="btn btn-primary btn-save">
					<i class="fa fa-save"></i> Save
					</button>
					
			  	</form>
			  </div>
			  </div>
			  
			  </div>
			</div>
		</div>
  	</div>
  </div>
</div>

        </div>
    </div>




</body>
<script>
	$(document).ready(function(){
		$('#dateRangPicker').datepicker({
    format: 'yyyy/mm/dd',
    
});
		
	});
</script>
</html>