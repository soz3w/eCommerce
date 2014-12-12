
app.controller('OrderController',function($scope,$rootScope,$q,ProductFactory,$location){

	//console.log(ProductFactory.cart);
	//$(".subtotal").each(function(){this}) jquery interessant
	
		$scope.cart=ProductFactory.cart;
		$scope.total=0; 		
		for (c in $scope.cart) {    				
			$scope.cart[c].total= parseFloat($scope.cart[c].ProductPrice)*parseFloat($scope.cart[c].quantity);
			$scope.total+=Math.round($scope.cart[c].total*100)/100;
		}
	
    $scope.update=function(){
    	$scope.cart.total=0;
		for (var c = 0; c < $scope.cart.length; c++) {			
    		$scope.cart[c].total=$scope.cart[c].ProductPrice*$scope.cart[c].quantity;
    		$scope.cart.total+=$scope.cart[c].total;
		}
    	$scope.cart.total=Math.round($scope.cart.total*100)/100;
    	$scope.edit=false;    	
    };

    $scope.delete=function(id){
		for (c in $scope.cart)
			{
				if($scope.cart[c].id ==id)
				{
					$scope.cart.total-=$scope.cart[c].total;
					$scope.cart.total=Math.round($scope.cart.total*100)/100;
					$scope.cart.splice(c,1);
				}
					
			}
    };

    $scope.session=ProductFactory.getSession().then(function(ses){
		$scope.session=ses;		
		
	},function(msg){
		alert(msg);
	});
	

    $scope.order= function(){
    	ProductFactory.prepForBroadcastCheck($scope.cart);
       	window.localStorage.setItem(STORAGE_KEY, JSON.stringify($scope.cart)); 
        if ($scope.session.email!='')
       		 $location.path("/payment");
       	else
       		 $location.path("/login");	
    
    };


});