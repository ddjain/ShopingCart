<!DOCTYPE html>
<html lang="en">
<head>
  <title>MyKart.com</title>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {

	$http.get("../api/admin/ShowAllProducts.php")
	  .then(function(response) {
	      $scope.products = response.data;
	  //   alert(response.data);
	  });
	
	$http.get("../api/user/ShowCategory.php")
	  .then(function(response) {
	      $scope.category = response.data;
	  //   alert(response.data);
	  });

	
$scope.removeCategory=function(){
	$http.get("../api/admin/RemoveCategory.php?cid="+$scope.selectedName.cid)
	  .then(function(response) {
	     alert(response.data);
	  });
};
	
	
$scope.addCategory=function(){
	if($scope.catname!=""){
		$http.get("../api/admin/AddCategory.php?cname="+$scope.catname)
	    .then(function(response) {
	       alert( response.data);
	       $scope.catname='';
	    });
	}
	else{
			alert("Please Enter Category name");
		}	
};


$scope.addCategory=function(){
	$http.get("../api/admin/AddCategory.php?cname="+$scope.catname)
    .then(function(response) {
       alert( response.data);
       $scope.catname='';
    });
};

$scope.addProduct=function(){
	$http.get("../api/admin/AddProduct.php?pcid="+$scope.AselectedName.cid+"&pname="+$scope.apname+"&pprice="+$scope.apprice+"&pdis="+$scope.apdis+"&pavailable="+$scope.apavl+"&pdes="+$scope.apdes+"&img=bbb"+$scope.apimg)
    .then(function(response) {

           alert( response.data);
		//clear form
   		$scope.AselectedName.cid="";
   		$scope.apname="";
   		$scope.apprice="";
   		$scope.apdis="";
   		$scope.apavl="";
   		$scope.apdes="";
   		$scope.apimg="";
   	 
    });

	$scope.viewProductDetails=function(){
	alert($scope.selectedProduct.pid);
	};
    
	
};

});
</script>



</head>

<body ng-app="myApp" ng-controller="myCtrl" >

<div class="container" class="form-group">
<center>  <h1>ADMIN PANEL</h1></center>
  
  <center> <p>ADD,UPDATE & DELETE PRODUCT FROM HERE</p> </center>     
  <BR>
  <BR>
   
 <!-- start of 1st row -->   
  <div class="row" >

  <!-- Add Category -->  
			<div class="col-sm-6">
				<div class="card" style="width: 50rem;">
					<div class="card-body">
						<h2 class="card-title">
						<IMG WIDTH=40PX HEIGHT=40PX SRC="https://cdn0.iconfinder.com/data/icons/round-ui-icons/512/add_blue.png">	ADD CATEGORIES
							</h2>
							<h5 class="card-subtitle mb-2 text-muted">
								PLEASE ENTER NAME OF NEW CATEGORY.
								</h5>
								<BR> <BR> 
								
								<br>
									<input class="form-control" placeholder="Category Name" type=text name=cname ng-model="catname">{{catname}}
									 <br>
									 <button value=ADD ng-click="addCategory()" type="button" class="btn btn-primary ">Add</button>
									 
								<br>
					
					</div>
				</div>
			</div>

  <!-- End of Add Category -->  

<!-- View Category -->   
    <div class="col-sm-6">
				<div class="card" style="width: 50rem;">
					<div class="card-body">
						<h2 class="card-title">
						<IMG WIDTH=30PX HEIGHT=30PX SRC="data:image/png;base64,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" >	REMOVE CATEGORIES
							</h2>
							<BR>
							<h5 class="card-subtitle mb-2 text-muted">
								List of Available Categories
								</h5>
								<BR> <BR>
								<div class="form-group">
								  <label for="sel1">Select Categories</label>
								  
						
								  
								  <select ng-model="selectedName" ng-options="x.cname for x in category"  ng-change="removeCategory()"  class="form-control" id="categories"  >
								    <option>{{{{ x.cname }}}}</option>
								   </select>
								</div>
								
								
								<br>
					</div>
				</div>
			</div>
 <!-- End of View Category -->   
  </div>
 <!-- End of 1st row -->   

<br><br>
 <!-- start of 2nd row -->
	<div class="row">

			<!-- start of coloumn -->
			<div class="col-sm-6">
				<div class="card" style="width: 50rem;">
					<div class="card-body">
						<h2 class="card-title">
						<IMG HEIGHT=80PX WIDTH=80PX SRC="https://marketplace.canva.com/MACYoYDcBnc/1/thumbnail_large/canva-pickup-truck-icon-MACYoYDcBnc.png">	ADD PRODUCT
							</h2>
							<h5 class="card-subtitle mb-2 text-muted">
								PLEASE ENTER DETAILS OF NEW PRODUCT. 
								</h5>
								<BR> <BR> <BR>
								
								
								
								<br>
								 <b>Select Category:</b></b> <select ng-model="AselectedName"  placeholder="CATEGORY" ng-options="x.cname for x in category"    class="form-control" id="categories"  >
								    <option>{{{{ x.cname }}}}</option>
								   </select>
								   <br><br>
								   <input ng-model="apname" class="form-control" placeholder="Product Name" type=text name=pname ><br><br>
								<input ng-model="apprice" class="form-control" placeholder="Product Price" min="0" type=number name=pprice><br><br>
								
								<input ng-model="apdis" class="form-control" type=number placeholder="DISCOUNT %" min="0" max="100"  name=pdis><br><br>
								<input ng-model="apavl" class="form-control" type=number placeholder="AVAILABILITY" min="0" name=pavailable><br><br>
								<input ng-model="apdes" class="form-control" type=text placeholder="SHORT DESCRIPTION" name=pdes><br><br>
								<input ng-model="apimg" class="form-control" type=text placeholder="IMAGE PATH" name=img><br><br>
								 <button value=ADD ng-click="addProduct()" type="button" class="btn btn-primary ">Add</button>
						
														
								<br>
					
					</div>
				</div>
			</div>
					
			<!-- End of coloumn -->
			<!-- start of coloumn -->
			<div class="col-sm-6">
				<div class="card" style="width: 50rem;">
					<div class="card-body">
						<h2 class="card-title">
						<IMG HEIGHT=60PX WIDTH=60PX SRC="data:image/jpeg;base64,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">	
							REMOVE PRODUCT
							</h2><BR>
							<h5 class="card-subtitle mb-2 text-muted">
								SELECT PRODUCT NAME 
							</h5>
							<BR>
							 <select ng-model="selectedProduct" ng-options="x.pname for x in products"  ng-change="viewProductDetails()"  class="form-control"   >
								    <option>{{{{ x.cname }}}}</option>
								   </select>
							<BR>
							<BR>
							<IMG ALT="IMAGE HERE"  HEIGHT=128PX WIDTH=128PX SRC="https://cdn0.iconfinder.com/data/icons/gray-business-toolbar/512/product-3-512.png"><BR><BR>
							PRODUCT NAME: <BR><BR>
							PRODUCT CATEGORIES: <BR><BR>
							PRODUCT PRICE: <BR><BR>
							PRODUCT AVAILABLE: <BR><BR>
							PRODUCT DESCRIPTION: <BR><BR>
							
					
					</div>
				</div>
			</div>			<!-- End of coloumn -->
	</div>					 <!-- End of 2st row --> 
	
	<BR>
	<BR>
	<!-- start of 3RD row -->
	<div class="row">
			
			<!-- start of coloumn -->
			<div class="col-sm-6">
   				<div class="card" style="width: 50rem;">
					<div class="card-body">
						<h2 class="card-title">
							UPDATE PRODUCTS DETAIL
							</h2>
							<h5 class="card-subtitle mb-2 text-muted">
								SELECT PRODUCT NAME 
							</h5>
							
							<form action="../api/admin/UpdateSingleProduct.php">
			
								pid- <input placeholder=ProductId type=text name="pid" ng-model="pid" >
								<input type=button value=search ng-click="getProduct()"> <br><br><br>
								pcid<input placeholder=pcid type=text name=pcid ng-model="cid" ><br>
								pname<input placeholder=pname type=text name=pname ng-model="pname"><br>
								pprice<input placeholder=pprice type=text name=pprice ng-model="pprice"><br>
								pava<input type=text placeholder=pavailable name=pavailable ng-model="pavailable"><br>
								pdes<input type=text placeholder=des name=pdes ng-model="pdescription"><br>
								pimg<input type=text placeholder=img name=img><br>
								<input type=submit>
						</form>
					
					</div>
				</div>
   			</div>
			<!-- End of coloumn -->
   			
			

			
	</div>
 <!-- End of 2st row --> 
	
			
			
</div>
    <!-- END OF GRID -->
    
    
     
    
</body>
</html>
