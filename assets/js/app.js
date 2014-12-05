var app=angular.module('eCommerce',['ngAnimate','ngRoute']);

//ngRoutes externalisé, à aller chercher dans les extras
app.config(function($routeProvider){
	$routeProvider
		//.when('/',{templateUrl:'assets/js/views/products.html'})
		.when('/',{templateUrl:'product/index'})
		.when('/products',{templateUrl:'product/index'})
		.when('/register',{templateUrl:'user/register'})
		.when('/login',{templateUrl:'user/login'})		
		.when('/essai',{templateUrl:'assets/js/views/essai.html'})
		.otherwise({redirectTo: "/"})

});

 app.controller('MenuManage',function($scope,$location){
	
	$scope.isActive = function (viewLocation) { 
		  return viewLocation === $location.path();
    };	

});

 app.directive("customSort2", function() {
	return {
	    restrict: 'A',
	    transclude: true,    
	    scope: {
	      order: '=',
	      sort: '='
	    },
	    template : 
	      ' <a ng-click="sort_by(order)" style="color: #555555;">'+
	      '    <span ng-transclude></span>'+
	      '    <i ng-class="selectedCls(order)"></i>'+
	      '</a>',
	    link: function(scope) {
	                
	    // change sorting order
	    scope.sort_by = function(newSortingOrder) {       
	        var sort = scope.sort;
	        
	        if (sort.sortingOrder == newSortingOrder){
	            sort.reverse = !sort.reverse;
	        }                    

	        sort.sortingOrder = newSortingOrder;        
	    };
	    
	   
	    scope.selectedCls = function(column) {
	        if(column == scope.sort.sortingOrder){
	            return ('icon-chevron-' + ((scope.sort.reverse) ? 'down' : 'up'));
	        }
	        else{            
	            return'icon-sort' 
	        } 
	    };      
	  }// end link
}

//app.$inject = ['$scope', '$filter'];

});