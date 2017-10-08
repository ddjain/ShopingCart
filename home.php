<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl"> 
<table style="margin-left: 700px">
  <tr ng-repeat="x in category">
    <td><h2>{{ x.cid }}</h2></td>
    <td><h2><a ng-href="product.php?cid={{x.cid}}" >{{ x.cname }}</a></h2></td>
  </tr>
</table>

</div>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
  $http.get("api/user/ShowCategory.php")
  .then(function(response) {
      $scope.category = response.data;
  });
});
</script>

</body>
</html>
