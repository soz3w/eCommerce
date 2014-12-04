


//app.controller('UsersCtrl',['$scope','$rootScope','UserFactory', function($scope,$rootScope,UserFactory){
app.controller('ProductsCtrl',function($scope,$rootScope,$q,ProductFactory){
			$scope.loading=true;
			$scope.products=ProductFactory.getProducts().then(function(products){
				$scope.products=products;				
				//console.log($scope.test.slice(0,10));
				$scope.loading=false;
				
			},function(msg){
				alert(msg);
			})

});