
//app.controller('UsersCtrl',['$scope','$rootScope','UserFactory', function($scope,$rootScope,UserFactory){
app.controller('UsersCtrl',function($scope,UserFactory){
			
			$scope.newUser={};

			/*$scope.loading=true;
			$scope.users=UserFactory.getUsers().then(function(users){
				$scope.loading=false;
				$scope.users=users;
			},function(msg){
				alert(msg);
			})*/
			$scope.tt="10";
			$scope.bb=UserFactory;
			$scope.register=function(){

				//console.log($scope.newUser);
				UserFactory.register($scope.newUser);
			}




});