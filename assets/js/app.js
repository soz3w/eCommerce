var app=angular.module('eCommerce',['ngAnimate','ngRoute']);

//ngRoutes externalisé, à aller chercher dans les extras
app.config(function($routeProvider){
	$routeProvider
		.when('/login',{templateUrl:'user/login'})
		.when('/register',{templateUrl:'user/register'})
		.when('/products',{templateUrl:'assets/js/views/products.html'})
		.when('/essai',{templateUrl:'assets/js/views/essai.html'})
		.otherwise({redirectTo: "assets/js/views/essai.html"})

});

 app.controller('MenuManage',function($scope,$location){
	
	$scope.isActive = function (viewLocation) { 
		  return viewLocation === $location.path();
    };	

});