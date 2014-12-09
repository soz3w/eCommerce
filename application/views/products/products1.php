<p class="titreProduit">Customize your t-shirts</p>
<div ng-show="loading">Chargement...</div>
<div ng-hide="loading">
	
    <article class="col-sm-6" ng-repeat="product in products|filter:{ProductName:query}|orderBy:'id'">
       <div class="panel panel-warning">
          <div class='panel-body'>
                <p>
                    <img ng-src="{{products && 'assets/images/'+product.ProductImage}}"
                     alt="{{product.ProductName}}" >
                </p>
                <p>{{product.ProductSKU}}</p>
                <p>{{product.ProductName}}</p>
                <p>{{product.ProductPrice}}</p>
                <p class='text-right'><a id ="{{product.id}}" href="#"  
                    class="text-right">{{product.ProductCartDesc}}</a></p>
            </div>            
            <p><button ng-click="addToCart(product.id)" class="btn btn-success btn-xs">
                <span class="glyphicon glyphicon-plus"></span>Add to cart
                </button>
            </p>
       </div>
    </article>
   
    


    <div class="pagination pull-right"> 
        <ul class="paginate pagination pagination-sm">
        	<li ng-repeat="p in range(1,pages)" ng-class="{active: p == page}" id="{{p}}-li">
                <a ng-click="getPage(p)" class="paginate_click" id="{{p}}-page">{{p}}</a>
            </li>
        </ul>
    </div>	

</div>

