app.factory('ProductFactory',function($http,$q,$rootScope){
			
			var factory ={
				//false comme cache, on met les produits dans unfichier json exterieur
				urldata:'product/getProducts',
				page:1,
				products:false,
				totalRows:0,
				item_per_page:12,
				page_number:0,
				SessionID:null,
				cart:null,
				getProducts:function(){
					
					var postData = 'myData={"page":'+factory.page+',"item_per_page":'+factory.item_per_page+'}';
					//console.log(user);
					var req = {
								 method: 'POST',
								 url: factory.urldata,
								 data: postData,
								 headers : {'Content-Type': 'application/x-www-form-urlencoded',
											'Accept':'image/jpg'}
								}

					//appel ajax, faudra aussi gerer les delais avec $q, les promesses, execute une function dans le futur
					var deffered = $q.defer();
					 $http(req).success(function(data,status){
									factory.products=data;																
									deffered.resolve(factory.products);										
								})
								.error(function(data,status){
									deffered.reject('Impossible de charger les produits');
								})
							return deffered.promise;
						},
				getSessionId:function(){
					var deffered = $q.defer();
					$http.get('product/getSessionId')
								.success(function(data,status){
									factory.SessionID=data.sessionId;
									deffered.resolve(factory.SessionID);
								})
								.error(function(data,status){
									deffered.reject('Impossible de récupérer la session ID');
								})
					return deffered.promise;
				},
				getProductsCount:function(){
					var deffered = $q.defer();
					$http.get('product/getProductsCount')
								.success(function(data,status){
									factory.totalRows=data[0].totalRows;
									deffered.resolve(factory.totalRows);
								})
								.error(function(data,status){
									deffered.reject('Impossible de compter les produits');
								})
					return deffered.promise;
				},
				prepForBroadcast:function(cart){
						this.cart=cart;
						this.broadcastCart();
				},
				broadcastCart:function(){
						$rootScope.$broadcast('handleAddToCart');						
				},
				prepForBroadcastCheck:function(cart){
						this.cart=cart;
						this.broadcastCartCheck();
				},
				broadcastCartCheck:function(){						
						$rootScope.$broadcast('handleCheckOutCart');
				}
				
			}

			return factory;
});