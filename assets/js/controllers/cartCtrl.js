
app.controller('CartController',function($scope,$rootScope,$q,ProductFactory,$location){
$scope.sessionID=ProductFactory.getSessionId().then(function(sesID){
		$scope.sessionID=sesID;
		
	},function(msg){
		alert(msg);
	});
	
	
	
	$scope.$on('handleAddToCart',function(){
		$scope.cart=ProductFactory.cart;
		var scopeGroupby = new Array();
		$scope.total=0; 
		var i=0;
		
		for (c in $scope.cart) {    				
			$scope.total+= parseFloat($scope.cart[c].ProductPrice);
			$scope.total=Math.round($scope.total*100)/100;
			$scope.cart[c].quantity=0   
			
			for (d in $scope.cart)
			{
				if($scope.cart[c].id ==$scope.cart[d].id)
				$scope.cart[c].quantity+=1;	
			}
			if(scopeGroupby==null)	
				{
					scopeGroupby[i]=$scope.cart[c]
					i++;
				}
			else
				{
					if(scopeGroupby.indexOf($scope.cart[c])<0)
    				{
    					scopeGroupby[i]=$scope.cart[c]
					  i++;
    				}	
				}
				
		}
		scopeGroupby.total=$scope.total;
		$scope.cart=scopeGroupby;
		//console.log($scope.cart);
	});

    $scope.checkOut= function(){
    	   	
    	ProductFactory.prepForBroadcastCheck($scope.cart);
       window.localStorage.setItem(STORAGE_KEY, JSON.stringify($scope.cart)); 
       $scope.cart=null;
       $location.path("/cart");
    };


});