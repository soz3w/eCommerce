<p class="titreProduit">Customize your t-shirts</p>
<div ng-show="loading">Chargement...</div>
<div ng-hide="loading">
	<small>
	<table class="table">
		<tr>
			<th>id</th>
            <th></th>
            <th>Product SKU</th>
            <th>Product Name</th>
            <th>Product Desc</th>
            <th>Product Price</th>            
        </tr>
        <tr ng-repeat="product in products|filter:{ProductName:query}|orderBy:'id'">
            <td>{{product.id}}</td>
        	<td class="image"><img ng-src="{{products && 'assets/images/'+product.ProductImage}}" 
                alt="{{product.ProductName}}"></td>
           <td>{{product.ProductSKU}}</td>
            <td>{{product.ProductName}}</td>
            <td>{{product.ProductCartDesc}}</td>
            <td>{{product.ProductPrice}}</td>         
        </tr>
    </table>
	</small>

    <div class="pagination pull-right"> 
        <ul class="paginate pagination pagination-sm">
        	<li ng-repeat="p in range(1,pages)" ng-class="{active: p == currentPage}" id="{{p}}-li">
                <a ng-click="getPage(p)" class="paginate_click" id="{{p}}-page">{{p}}</a>
            </li>
        </ul>
    </div>	

</div>

