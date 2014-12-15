
app.controller('UsersController',function($scope,UserFactory,$location){
			$scope.showError=true;
			$scope.passwordPattern = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/
			
			$scope.register=function(){
				if(UserFactory.register($scope.newUser))
					$location.path("/login");
				//$scope.newUser={};
			}
			$scope.logUser=function(){
				$scope.showError=true;
				UserFactory.logUser($scope.user);
				$scope.session=UserFactory.getSession()
					 .then(function(ses){
							$scope.session=ses;	
							//console.log($scope.session.UserEmail);						
							},
							function(msg){
								alert(msg);
							});

				
			}


});