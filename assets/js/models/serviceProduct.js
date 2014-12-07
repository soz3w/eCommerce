app.factory('ProductFactory',function($http,$q){
			
			var factory ={
				//false comme cache, on met les produits dans unfichier json exterieur
				urldata:'product/getProducts',
				page:1,
				products:false,
				totalRows:0,
				item_per_page:5,
				page_number:0,
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
				getProduct:function(id){
					//faire pareil avec les promesses
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
				}
				
			}

			return factory;
});