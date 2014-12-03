var app=angular.module('eCommerce',['ngAnimate','ngRoute']);

//ngRoutes externalisé, à aller chercher dans les extras
app.config(function($routeProvider){
	$routeProvider
		.when('/login',{templateUrl:'user/login'})
		.when('/register',{templateUrl:'user/register'})
		.when('/products',{templateUrl:'assets/js/views/products.html'})
		.otherwise({redirectTo: "product/index"})

});