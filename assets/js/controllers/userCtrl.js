
app.controller('UsersCtrl',function($scope,UserFactory){
			
			$scope.register=function(){
				UserFactory.register($scope.newUser);
				//$scope.newUser={};
			}


});