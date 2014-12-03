
//app.controller('UsersCtrl',['$scope','$rootScope','UserFactory', function($scope,$rootScope,UserFactory){
app.controller('ProductsCtrl',function($scope,$rootScope,$q,ProductFactory){

			$rootScope.loading=true;
			$scope.products=ProductFactory.getProducts().then(function(products){
				$rootScope.loading=false;
				$scope.products=products;
			},function(msg){
				alert(msg);
			})
			
			




});