<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<body>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {

$scope.getProduct=function(){
	$http.get("../api/admin/ShowSingleProduct.php?pid="+$scope.pid)
	  .then(function(response) {
		     $scope.pid=response.data.pid; 
		     $scope.cid=response.data.cid;
		     $scope.pname=response.data.pname; 
		     $scope.pprice=response.data.pprice;
		     $scope.pavailable=response.data.pavailable;
		     $scope.pdescription=response.data.pdescription;		   
		 });
	};

});
</script>
<div ng-app="myApp" ng-controller="myCtrl"> 
<form action="../api/admin/DeleteProduct.php">
pid-<input placeholder=ProductId type=text name="pid" ng-model="pid" >
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


</body>
</html>



