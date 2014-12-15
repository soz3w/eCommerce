const STORAGE_KEY="CartContent"
var app=angular.module('eCommerce',['ngAnimate','ngRoute']);

//ngRoutes externalisé, à aller chercher dans les extras
app.config(function($routeProvider){
	$routeProvider
		//.when('/',{templateUrl:'assets/js/views/products.html'})
		.when('/',{templateUrl:'product/index',controller: 'ProductsController'})
		.when('/products',{templateUrl:'product/index',controller: 'ProductsController'})
		.when('/cart',{templateUrl:'cart/getCart',controller: 'OrderController'})
		.when('/payment',{templateUrl:'user/payment',controller: 'PaymentController'})
		.when('/register',{templateUrl:'user/register',controller: 'UsersController'})
		.when('/login',{templateUrl:'user/login',controller: 'UsersController'})		
		.when('/essai',{templateUrl:'assets/js/views/essai.html',controller: 'ContactController'})
		.when('/formvalid',{templateUrl:'assets/js/views/formvalid.html',controller: 'ContactController'})
		.otherwise({redirectTo: "/"});

		// use the HTML5 History API
		//$locationProvider.html5Mode(true);

});

 app.controller('MenuManageController',function($scope,$location){
	
	$scope.isActive = function (viewLocation) { 
		  return viewLocation === $location.path();
    };	

});

 app.directive("ngEquals", function() {
 	return {
		    restrict: 'A',
		    require : 'ngModel',
		    scope: {
		      		original: '=ngEquals'
		    	},
		    link: function(scope, elm, attrs, ngModel) {

	    			ngModel.$parsers.unshift(function(value) {
			    		ngModel.$setValidity('equals', scope.original === value);
			    		return value;
				    });
				}

 		}
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
}//end return directive

//app.$inject = ['$scope', '$filter'];

}); //end directive


app.controller('AboutController',function($scope){
	$scope.pageClass = 'page-about';
});
app.controller('ContactController',function($scope){
	$scope.pageClass = 'page-contact';

	$scope.fName = '';
$scope.lName = '';
$scope.passw1 = '';
$scope.passw2 = '';
$scope.users = [
{id:1, fName:'Hege',  lName:"Pege" },
{id:2, fName:'Kim',   lName:"Pim" },
{id:3, fName:'Sal',   lName:"Smith" },
{id:4, fName:'Jack',  lName:"Jones" },
{id:5, fName:'John',  lName:"Doe" },
{id:6, fName:'Peter', lName:"Pan" }
];
$scope.edit = true;
$scope.error = false;
$scope.incomplete = false; 

$scope.editUser = function(id) {
  if (id == 'new') {
    $scope.edit = true;
    $scope.incomplete = true;
    $scope.fName = '';
    $scope.lName = '';
    } else {
    $scope.edit = false;
    $scope.fName = $scope.users[id-1].fName;
    $scope.lName = $scope.users[id-1].lName; 
  }
};

$scope.$watch('passw1',function() {$scope.test();});
$scope.$watch('passw2',function() {$scope.test();});
$scope.$watch('fName', function() {$scope.test();});
$scope.$watch('lName', function() {$scope.test();});

$scope.test = function() {
  if ($scope.passw1 !== $scope.passw2) {
    $scope.error = true;
    } else {
    $scope.error = false;
  }
  $scope.incomplete = false;
  if ($scope.edit && (!$scope.fName.length ||
  !$scope.lName.length ||
  !$scope.passw1.length || !$scope.passw2.length)) {
       $scope.incomplete = true;
  }
};

});

