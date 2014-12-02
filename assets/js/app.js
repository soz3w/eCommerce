var app=angular.module('eCommerce',['ngAnimate','ngRoute']);

//ngRoutes externalisé, à aller chercher dans les extras
app.config(function($routeProvider){
	$routeProvider
		.when('/login',{templateUrl:'user/login'})
		.when('/register',{templateUrl:'user/register'})
		.otherwise({redirectTo: "user/index"})

});