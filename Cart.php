<?php session_start();?>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="http://yourjavascript.com/21051171187/jquery-touchswipe-min.js"></script>
<script type="text/javascript" src="http://yourjavascript.com/11873115711/jquery-1-12-4-min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script type="text/javascript" src="http://yourjavascript.com/71712155041/responsive-bootstrap-carousel.js"></script>
<script>
function prints(){
	  window.print();
}
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
  $http.get("api/user/ShowBill.php")
  .then(function(response) {
      $scope.products = response.data;
      var grand=0;
      for(i=0;i<response.data.length;i++){
    	  grand=grand+response.data[i].ptotal
      }
      
      $scope.grand=grand;
      
  });

  $http.get("api/user/CartCount.php")
  .then(function(response) {
      $scope.count = response.data;
     	
  });
});
</script>
</head>

<body ng-app="myApp" ng-controller="myCtrl">
<?php
require 'master.php';
?>
<div class="container"  >
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <tr  ng-repeat="x in products">
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" ng-src="{{x.img}}" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">{{x.pname}}</a></h4>
                                
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        {{x.qty}}
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{x.pprice}} Rs.</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{x.ptotal}} Rs.</strong></td>
                        
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>{{grand}} Rs.</strong></h5></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><h5>Shipping</h5></td>
                        <td class="text-right"><h5><strong>50 Rs.</strong></h5></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>{{grand+50}} Rs.</strong></h3></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                        <button onclick='window.location.href = ".";' type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success" onclick='window.location.href = "api/user/ValidForBill.php";'>
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>