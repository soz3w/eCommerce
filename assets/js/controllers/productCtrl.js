
app.controller('ProductsCtrl',function($scope,$rootScope,$q,ProductFactory,Paginer){
			//console.log(document.images);
			$scope.pageClass = 'page-home';
			$scope.loading=true;
			ProductFactory.page=1;
			ProductFactory.item_per_page=5;
			$scope.getProducts=function(){

				$scope.products=ProductFactory.getProducts().then(function(products){
				$scope.products=products;
				$scope.loading=false;
				
				},function(msg){
					alert(msg);
				});

			}
			
			$scope.getProducts();

			$scope.totalRows=ProductFactory.getProductsCount().then(function(totalRows){
				$scope.totalRows=totalRows;
				$scope.item_per_page=ProductFactory.item_per_page;
				$scope.pages = Math.ceil($scope.totalRows/$scope.item_per_page); 
				//console.log($scope.pages);
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
    		$scope.getPage=function(page){
    			ProductFactory.page=page;
    			$scope.getProducts();
    		};



});