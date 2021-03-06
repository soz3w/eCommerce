app.factory('UserFactory',function(){
			
			var factory ={
				//false comme cache, on met les users dans unfichier json exterieur
				users:false,
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
				register:function(user){
									 
					var req = {
								 method: 'POST',
								 url: '/user/register',
								 data: user,
								}
					$http(req).success(function(){

								})
								.error(function(){

								});

					 
				}

				

			}
		});