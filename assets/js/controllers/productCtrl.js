
app.controller('ProductsController',function($scope,$rootScope,$q,ProductFactory){
			//console.log(document.images);
			
	$scope.pageClass = 'page-home';
	$scope.loading=true;
	ProductFactory.page=1;
	$scope.page=ProductFactory.page;
	ProductFactory.item_per_page=12;
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
		$scope.page=ProductFactory.page;
		$scope.getProducts();
	};
	
	$scope.cart=[];
	
	$scope.addToCart= function(id){
		
		for (var p in $scope.products) {
					if ($scope.products[p].id==id)
					{
						$scope.cart.push($scope.products[p]);
						//console.log($scope.cart);
					}

			}
		//window.localStorage.setItem(key, value);
		

		ProductFactory.prepForBroadcast($scope.cart);
		
		$scope.$on('handleAddToCart',function(){
					$scope.cart=ProductFactory.cart;
			});
		
	};



});