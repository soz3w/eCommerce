<p class="titreProduit">Customize your t-shirts</p>
<div ng-controller="ProductsCtrl">
<div ng-show="loading">Chargement...</div>
<div ng-hide="loading">
	<small>
	<table class="table">
		<tr>
			<th></th>
            <th>Product SKU</th>
            <th>Product Name</th>
            <th>Product Desc</th>
            <th>Product Price</th>            
        </tr>
        <tr ng-repeat="product in products|filter:{ProductName:query}|orderBy:'id'">
        	<td class="image"><img ng-src="assets/images/{{product.ProductImage}}" alt=""></td>
           <td>{{product.ProductSKU}}</td>
            <td>{{product.ProductName}}</td>
            <td>{{product.ProductCartDesc}}</td>
            <td>{{product.ProductPrice}}</td>         
        </tr>
    </table>
	</small>
</div>
<div class="pagination pull-right"> 
    <ul class="paginate pagination pagination-sm">
    	<li ng-repeat="p in range(1,pages)" ng-class="{active: p == currentPage}" id="{{p}}-li">
            <a href="#" class="paginate_click" id="{{p}}-page">{{p}}</a>
        </li>
    </ul>
</div>	
</div>
