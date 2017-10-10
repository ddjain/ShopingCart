<?php 
	 session_start();
?>
<html>


<head>
<title>Mykart.com </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style>
.team_columns_carousel_wrapper {
    padding: 25px;
    overflow: hidden
}
.team_columns_carousel_control_left,
.team_columns_carousel_control_right {
    top: 26px;
    z-index: 2;
    opacity: 1;
    width: 35px;
    height: 35px;
    border: 0;
    text-shadow: none;
    text-align: center;
    -webkit-transition: all ease-in-out .3s;
    transition: all ease-in-out .3s
}
.team_columns_carousel_control_icons {
    line-height: 35px;
    font-size: 20px!important;
    font-weight: normal!important;
    margin-top:8px;
}
.team_columns_carousel_control_left {
    left: 26px!important
}
.team_columns_carousel_control_right {
    left: 63px!important
}
.adv_left {
    left: 41px!important
}
.adv_right {
    left: 78px!important
}
.team_columns_item_image {
    padding-top: 60px;
    padding-bottom: 25px
}
.team_columns_item_image img {
    width: 100%;
    -webkit-filter: grayscale(70%);
    -moz-filter: grayscale(70%);
    -ms-filter: grayscale(70%);
    -o-filter: grayscale(70%);
    filter: grayscale(70%);
    -webkit-transition: all ease-in-out .3s;
    -moz-transition: all ease-in-out .3s;
    -ms-transition: all ease-in-out .3s;
    -o-transition: all ease-in-out .3s;
    transition: all ease-in-out .3s
}
.team_columns_item_image:hover img {
    -webkit-filter: grayscale(0%);
    -moz-filter: grayscale(0%);
    -ms-filter: grayscale(0%);
    -o-filter: grayscale(0%);
    filter: grayscale(0%)
}
.team_columns_item_caption {
    padding: 10px;
    text-align: center;
    padding-bottom: 30px
}
.team_columns_item_caption>hr {
    width: 15%
}
.team_columns_item_caption h4 {
    font-weight: 800;
    text-transform: uppercase;
    font-family: 'Open Sans', sans-serif
}
.team_columns_item_caption h5 {
    font-weight: 600;
    text-transform: uppercase;
    font-family: 'Open Sans', sans-serif
}
.team_columns_item_caption p {
    font-weight: 400;
    margin-top: 20px;
    font-family: 'Open Sans', sans-serif
}
.team_columns_item_caption p a,
.team_columns_item_caption p a:visited {
    text-decoration: none;
    -webkit-transition: all ease-in-out .3s;
    transition: all ease-in-out .3s
}
.team_columns_item_social a,
.team_columns_item_social a:visited {
    width: 25px;
    float: left;
    height: 25px;
    display: block;
    line-height: 25px;
    margin-right: 2px;
    text-decoration: none;
    -webkit-transition: background ease-in-out .3s;
    transition: background ease-in-out .3s
}
@media(min-width:768px) and (max-width:789px) {
    .adv_team_columns_item_social a, .adv_team_columns_item_social a:visited {
        margin-right: 0
    }
}
.team_columns_carousel_wrapper {
    background: #fff
}
.team_columns_carousel_control_left,
.team_columns_carousel_control_left:hover,
.team_columns_carousel_control_left:active,
.team_columns_carousel_control_left:focus,
.team_columns_carousel_control_right,
.team_columns_carousel_control_right:hover,
.team_columns_carousel_control_right:active,
.team_columns_carousel_control_right:focus {
    color: #fff;
    background: #feb600!important
}
.team_columns_item_caption {
    color: #fff;
    background: #171717
}
.team_columns_item_caption>hr {
    border-top: 2px solid #feb600
}
.team_columns_item_caption p a,
.team_columns_item_caption p a:visited {
    color: #feb600
}
.team_columns_item_caption p a:hover,
.team_columns_item_caption p a:active {
    color: #cb9200
}
.team_columns_item_social a,
.team_columns_item_social a:visited {
    color: #171717;
    background: #feb600
}
.team_columns_item_social a:hover,
.team_columns_item_social a:active {
    background: #cb9200
}
.four_shows_one_move .cloneditem-1,
.four_shows_one_move .cloneditem-2,
.four_shows_one_move .cloneditem-3 {
    display: none
}
@media all and (min-width: 768px) {
    .four_shows_one_move .carousel-inner>.active.left,
    .four_shows_one_move .carousel-inner>.prev {
        left: -50%
    }
    .four_shows_one_move .carousel-inner>.active.right,
    .four_shows_one_move .carousel-inner>.next {
        left: 50%
    }
    .four_shows_one_move .carousel-inner>.left,
    .four_shows_one_move .carousel-inner>.prev.right,
    .four_shows_one_move .carousel-inner>.active {
        left: 0
    }
    .four_shows_one_move .carousel-inner .cloneditem-1 {
        display: block
    }
}
@media all and (min-width: 768px) and (transform-3d),
all and (min-width: 768px) and (-webkit-transform-3d) {
    .four_shows_one_move .carousel-inner>.item.active.right,
    .four_shows_one_move .carousel-inner>.item.next {
        -webkit-transform: translate3d(50%, 0, 0);
        transform: translate3d(50%, 0, 0);
        left: 0
    }
    .four_shows_one_move .carousel-inner>.item.active.left,
    .four_shows_one_move .carousel-inner>.item.prev {
        -webkit-transform: translate3d(-50%, 0, 0);
        transform: translate3d(-50%, 0, 0);
        left: 0
    }
    .four_shows_one_move .carousel-inner>.item.left,
    .four_shows_one_move .carousel-inner>.item.prev.right,
    .four_shows_one_move .carousel-inner>.item.active {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        left: 0
    }
}
@media all and (min-width: 992px) {
    .four_shows_one_move .carousel-inner>.active.left,
    .four_shows_one_move .carousel-inner>.prev {
        left: -25%
    }
    .four_shows_one_move .carousel-inner>.active.right,
    .four_shows_one_move .carousel-inner>.next {
        left: 25%
    }
    .four_shows_one_move .carousel-inner>.left,
    .four_shows_one_move .carousel-inner>.prev.right,
    .four_shows_one_move .carousel-inner>.active {
        left: 0
    }
    .four_shows_one_move .carousel-inner .cloneditem-2,
    .four_shows_one_move .carousel-inner .cloneditem-3 {
        display: block
    }
}
@media all and (min-width: 992px) and (transform-3d),
all and (min-width: 992px) and (-webkit-transform-3d) {
    .four_shows_one_move .carousel-inner>.item.active.right,
    .four_shows_one_move .carousel-inner>.item.next {
        -webkit-transform: translate3d(25%, 0, 0);
        transform: translate3d(25%, 0, 0);
        left: 0
    }
    .four_shows_one_move .carousel-inner>.item.active.left,
    .four_shows_one_move .carousel-inner>.item.prev {
        -webkit-transform: translate3d(-25%, 0, 0);
        transform: translate3d(-25%, 0, 0);
        left: 0
    }
    .four_shows_one_move .carousel-inner>.item.left,
    .four_shows_one_move .carousel-inner>.item.prev.right,
    .four_shows_one_move .carousel-inner>.item.active {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        left: 0
    }
}
#flipkart-navbar {
    background-color: #2874f0;
    color: #FFFFFF;
}
.row1{
    padding-top: 10px;
}
.row2 {
    padding-bottom: 20px;
}
.flipkart-navbar-input {
    padding: 11px 16px;
    border-radius: 2px 0 0 2px;
    border: 0 none;
    outline: 0 none;
    font-size: 15px;
}
.flipkart-navbar-button {
    background-color: #ffe11b;
    border: 1px solid #ffe11b;
    border-radius: 0 2px 2px 0;
    color: #565656;
    padding: 10px 0;
    height: 43px;
    cursor: pointer;
}
.cart-button {
    background-color: #2469d9;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .23), inset 1px 1px 0 0 hsla(0, 0%, 100%, .2);
    padding: 10px 0;
    text-align: center;
    height: 41px;
    border-radius: 2px;
    font-weight: 500;
    width: 120px;
    display: inline-block;
    color: #FFFFFF;
    text-decoration: none;
    color: inherit;
    border: none;
    outline: none;
}
.cart-button:hover{
    text-decoration: none;
    color: #fff;
    cursor: pointer;
}
.cart-svg {
    display: inline-block;
    width: 16px;
    height: 16px;
    vertical-align: middle;
    margin-right: 8px;
}
.item-number {
    border-radius: 3px;
    background-color: rgba(0, 0, 0, .1);
    height: 20px;
    padding: 3px 6px;
    font-weight: 500;
    display: inline-block;
    color: #fff;
    line-height: 12px;
    margin-left: 10px;
}
.upper-links {
    display: inline-block;
    padding: 0 11px;
    line-height: 23px;
    font-family: 'Roboto', sans-serif;
    letter-spacing: 0;
    color: inherit;
    border: none;
    outline: none;
    font-size: 12px;
}
.dropdown {
    position: relative;
    display: inline-block;
    margin-bottom: 0px;
}
.dropdown:hover {
    background-color: #fff;
}
.dropdown:hover .links {
    color: #000;
}
.dropdown:hover .dropdown-menu {
    display: block;
}
.dropdown .dropdown-menu {
    position: absolute;
    top: 100%;
    display: none;
    background-color: #fff;
    color: #333;
    left: 0px;
    border: 0;
    border-radius: 0;
    box-shadow: 0 4px 8px -3px #555454;
    margin: 0;
    padding: 0px;
}
.links {
    color: #fff;
    text-decoration: none;
}
.links:hover {
    color: #fff;
    text-decoration: none;
}
.profile-links {
    font-size: 12px;
    font-family: 'Roboto', sans-serif;
    border-bottom: 1px solid #e9e9e9;
    box-sizing: border-box;
    display: block;
    padding: 0 11px;
    line-height: 23px;
}
.profile-li{
    padding-top: 2px;
}
.largenav {
    display: none;
}
.smallnav{
    display: block;
}
.smallsearch{
    margin-left: 15px;
    margin-top: 15px;
}
.menu{
    cursor: pointer;
}
@media screen and (min-width: 768px) {
    .largenav {
        display: block;
    }
    .smallnav{
        display: none;
    }
    .smallsearch{
        margin: 0px;
    }
}
/*Sidenav*/
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #fff;
    overflow-x: hidden;
    transition: 0.5s;
    box-shadow: 0 4px 8px -3px #555454;
    padding-top: 0px;
}
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    color: #fff;        
}
@media screen and (max-height: 450px) {
  .sidenav a {font-size: 18px;}
}
.sidenav-heading{
    font-size: 36px;
    color: #fff;
}
.h2-bg{
    margin: 30px 0;
    background: repeating-linear-gradient(
        -45deg,
        #e6f4ff,
        #e6f4ff 2px,
        #fff 3px,
        #fff 8px
);
}
.h2-bg-white{
    background: #fff;
    padding: 1px 20px;
}
</style>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    // document.getElementById("flipkart-navbar").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}
</script>
</head>

<body>


<script>
function addToCart(btn){
	alert(btn);
}
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
	$http.get("api/user/ShowCategory.php")
	  .then(function(response) {
	      $scope.category = response.data;
	   //   alert(response.data);
	  });
	
	
$scope.addPrduct=function(cid){
	$http.get("api/user/ShowProducts.php?cid="+cid)
	  .then(function(response) {
	      $scope.product = response.data; 
	      $http.get("api/user/GetCategory.php?cid="+cid)
		  .then(function(response) {
			 
		      $scope.cat = response.data; 		 
		  });
	  
	  });
	};
	
	
$scope.myFunc=function(pid){
	$http.get("api/user/AddProductToCart.php?pid="+pid)
	  .then(function(response) {
	    alert(response.data);
	      
	  });
	$http.get("api/user/CartCount.php")
	  .then(function(response) {
	      $scope.count = response.data;
	     	
	  });
	
};
	$http.get("api/user/ShowProducts.php?cid=1")
  .then(function(response) {
      $scope.product = response.data; 
      $scope.cat = "Electronics"; 
        });
	$http.get("api/user/CartCount.php")
	  .then(function(response) {
	      $scope.count = response.data;
	     	
	  });
});
</script>
	
<?php 
require 'master.php';
?>
<body ng-app="myApp" ng-controller="myCtrl">
<br>
<div>

<div class="container">
	<div class="row">
		<h2 class="h2-bg text-center"><span class="h2-bg-white">{{cat}}</span></h2>
	</div>
</div>



<div class="container" >

    <div class="row">
       
        <div class="col-sm-4" ng-repeat="x in product">
        
              <div class="thumbnail">
              
                <img ng-src="{{x.image}}" alt="" class="img-responsive">
                <div class="caption">
                  <h4 class="pull-right">{{ x.pprice }}Rs</h4>
                  <h4><a href="#">{{ x.pname }}</a></h4>
                  <p>{{ x.pdescription }}</p>
                </div>
                
                <div class="space-ten"></div>
                <div class="btn-ground text-center">
                    <button ng-if="x.pavailable>0" ng-click="myFunc(x.pid)" type="button" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                <div " ng-if="x.pavailable==0"><font color=red> <strong> OUT OFF STOCK  </strong> </font> </div>
                </div>
                <div class="space-ten"></div>
              </div>
               
            </div>
            

       </div>
       
       
</div>


</body>
</html>