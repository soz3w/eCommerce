app.factory('ProductFactory',function($http,$q){
			
			var factory ={
				//false comme cache, on met les produits dans unfichier json exterieur
				products:false,
				getProducts:function(){
					//appel ajax, faudra aussi gerer les delais avec $q, les promesses, execute une function dans le futur
					var deffered = $q.defer();
					console.log(deffered);
					 $http.get('product/getProducts')
								.success(function(data,status){
									factory.products=data;																
									deffered.resolve(factory.products);										
								})
								.error(function(data,status){
									deffered.reject('Impossible de charger les produits');
								})
							return deffered.promise;
						},
				getProduct:function(id){
					//faire pareil avec les promesses
				},
				getProductsCount:function(){
					$http.get('/product/getProductsCount')
								.success(function(data,status){
									factory.productsCount=data;
								})
								.error(function(data,status){
									
								})

				}
				
			}

			return factory;
});