<p class="titreProduit">Payment</p>
<div ng-show="loading">Chargement...</div>
<div ng-hide="loading">
	<small>
	<table class="table">
		<tr>
			<th>Product SKU</th>
            <th>Product Name</th>
            <th>Product Price</th>            
            <th>Product Quantity</th>    
            <th>Total</th>
            <th>Edit</th>        
        </tr>
        <form action="">
        <tr ng-repeat="product in products|filter:{ProductName:query}|orderBy:'id'">
            <td>{{product.ProductSKU}}</td>
            <td>{{product.ProductName}}</td>
            <td>{{product.ProductPrice}}</td> 
            <td><span ng-show="!edit">{{product.Quantity}}</span><input ng-show="edit" type="text" ng-model="product.Quantity"></td>
            <td></td>            
            <td><button ng-click="edit=true">Edit Quantity</button></td>            
        </tr>
        </form>
    </table>
	</small>

    <div class="pagination pull-right"> 
        <ul class="paginate pagination pagination-sm">
        	<li ng-repeat="p in range(1,pages)" ng-class="{active: p == page}" id="{{p}}-li">
                <a ng-click="getPage(p)" class="paginate_click" id="{{p}}-page">{{p}}</a>
            </li>
        </ul>
    </div>	

</div>

