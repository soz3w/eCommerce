app.controller('ProductsCtrl',function($scope,$rootScope,$q,ProductFactory,Paginer){
			$scope.loading=true;
			ProductFactory.page=1;
			ProductFactory.item_per_page=5;
			
			$scope.products=ProductFactory.getProducts().then(function(products){
				$scope.products=products;	
				//console.log($scope.products);			
				//console.log($scope.test.slice(0,10));
				$scope.loading=false;
				
			},function(msg){
				alert(msg);
			});

			$scope.totalRows=ProductFactory.getProductsCount().then(function(totalRows){
				$scope.totalRows=totalRows;
				$scope.item_per_page=ProductFactory.item_per_page;
				$scope.pages = Math.ceil($scope.totalRows/$scope.item_per_page); 
				console.log($scope.pages);
			},function(msg){
				alert(msg);
			});

			$scope.range = function (start, end) {
		        var ret = [];        
		        for (var i = start; i < end; i++) {
		            ret.push(i);
		        }        
		        return ret;
    		};



});