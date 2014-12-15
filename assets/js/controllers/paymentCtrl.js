
app.controller('PaymentController',function($scope,$rootScope,$q,ProductFactory,$location){

	//console.log(ProductFactory.cart);
	//$(".subtotal").each(function(){this}) jquery interessant
	
	$scope.cart=window.localStorage.getItem(STORAGE_KEY);

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
       	console.log($scope.session.email) ;
        if ($scope.session.UserEmail!='')
       		 $location.path("/payment");
       	else
       		 $location.path("/login");	
    
    };


});