app.factory('UserFactory',function($http,$location,$q){
			
			var factory ={
				//false comme cache, on met les users dans unfichier json exterieur
				users:false,
				showError:false,
				session:null,
				getUsers:function(){
					//appel ajax, faudra aussi gerer les delais avec $q, les promesses, execute une function dans le futur
					var deffered = $q.defer();
					 $http.get('/user/find')
								.success(function(data,status){
									factory.users=data;
									$timeout(function(){
											deferred.resolve(factory.users);
											},2000)
									
								})
								.error(function(data,status){
									deffered.reject('Impossible de charger les utilisateurs');
								})
							return deffered.promise;
						},
				getUser:function(login){
					//faire pareil avec les promesses
				},
				getSession:function(){
					var deffered = $q.defer();
					$http.get('user/getSession')
								.success(function(data,status){
									factory.session=data;
									deffered.resolve(factory.session);
								})
								.error(function(data,status){
									deffered.reject('Impossible de récupérer la session ID');
								})
					return deffered.promise;
				},
				register:function(user){
					
					var postData = 'myData='+JSON.stringify(user);
					//console.log(user);
					var req = {
								 method: 'POST',
								 url: 'user/register',
								 data: postData,
								 headers : {'Content-Type': 'application/x-www-form-urlencoded'}
								}
					$http(req).success(function(response){
									 if (response.msgError)
										{
											$(".msgError").html(response.msgError);
											return false;
										}
									else
										return true;
										
								})
								.error(function(data,status){
									deffered.reject('inscription impossible');
									return false;
								});

					 
				},
				logUser:function(user){
					
					var postData = 'myData='+JSON.stringify(user);
					//console.log(user);
					var req = {
								 method: 'POST',
								 url: 'user/login',
								 data: postData,
								 headers : {'Content-Type': 'application/x-www-form-urlencoded'}
								}
					$http(req).success(function(response){
									 if (response.msgError)
										{
											factory.showError=true;
											$(".msgError").html(response.msgError);
											return false;
										}
									else
										return true;
										
								})
								.error(function(data,status){
									deffered.reject('connection impossible');
									return false;
								});

					 
				}
			}

			return factory;
});