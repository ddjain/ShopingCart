
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>


<script>
function prints(){
	  window.print();
}
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {

	$http.get("api/user/GetUserDetails.php?uid="+<?php session_start(); echo $_SESSION['uid'];?>)
	  .then(function(response) {
	      $scope.user = response.data;  
	      alert(user.data);
	  });


	$http.get("api/user/ShowBill.php")
  .then(function(response) {
      $scope.products = response.data;
      var grand=0;
      for(i=0;i<response.data.length;i++){
    	  grand=grand+response.data[i].ptotal
      }
      
      $scope.grand=grand;
      
  });

  
  
});
</script>

<style>
.invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}
</style>
<div class="container"  ng-app="myApp" ng-controller="myCtrl" >
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Invoice</h2><h3 class="pull-right">Order  ONG12345</h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-12 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
    					{{user.name}}<br>
    					{{user.address}}<br>
    					
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					Cash on delivery<br>
    					nehaDeshmukh@gmail.com
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					Oct 4, 2017<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table  class="table table-condensed">
    						<thead>
                                <tr >
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							
    							<tr ng-repeat="x in products">
    								<td>{{x.pname}}</td>
    								<td class="text-center">{{x.pprice}}</td>
    								<td class="text-center">{{x.qty}}</td>
    								<td class="text-right">{{x.ptotal}}</td>
    							</tr>
                               
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">{{grand}}</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Shipping</strong></td>
    								<td class="no-line text-right">50</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">{{grand+50}}</td>
    							</tr>
    						</tbody>
    					</table>
    					<center><input type=button value='Print' onclick="window.print();" ></center>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>