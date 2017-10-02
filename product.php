<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<body>

<script>
function addToCart(btn){
	alert(btn);
}


var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {

$scope.myFunc=function(pid){
	$http.get("api/user/AddProductToCart.php?pid="+pid)
	  .then(function(response) {
	      alert(response.data);
	      
	  });
	
};
	$http.get("api/user/ShowProducts.php?cid="+<?php echo $_REQUEST['cid']?>)
  .then(function(response) {
      $scope.product = response.data;
      
      
  });
});
</script>
<div ng-app="myApp" ng-controller="myCtrl"> 
<table height=500 width=700 border=1 style="margin-left: 500px">
 <th>Image</th> <th>Product id</th>   <th>Product Name</th>   <th>  price</th>   <th>Availability</th>   <th>Description</th>  <th>Your Requirement</th> <th>      </th>   
  <tr ng-repeat="x in product">
    <td><h2> <img ng-src="{{ x.image }}" height=150px width=150px></h2></td>
    <td><h2>{{ x.pid }}</h2></td>
    <td><h2>{{ x.pname }}</h2></td>
    <td><h2>{{ x.pprice }} rs.</h2></td>
    <td><h2>{{ x.pavailable }} items</h2></td>
    <td><h2>{{ x.pdescription }}</h2></td>
 	<td><input type=number id=q{{x.pid}} min=0 max=10 placeholder=0></td>
 	<td><input type=button value=ADD id={{x.pid}} ng-click="myFunc(x.pid)" ></td>
  </tr>
</table>

</div>


</body>
</html>
