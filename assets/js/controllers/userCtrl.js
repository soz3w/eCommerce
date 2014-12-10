
app.controller('UsersController',function($scope,UserFactory){
			
			$scope.passwordPattern = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/
			$scope.register=function(){
				UserFactory.register($scope.newUser);
				//$scope.newUser={};
			}


});