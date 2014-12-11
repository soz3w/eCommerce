<h5>Check out your cart</h5>
<div ng-show="loading">Chargement...</div>
<div ng-hide="loading">
	<small>
	<table class="table">
		<tr>
			<th>SKU</th>
            <th>Product Name</th>
            <th>Price</th>            
            <th>Quantity</th>    
            <th>Total</th>
            <th>Edit</th>        
        </tr>
        <form action="">
        <tr ng-repeat="product in products|filter:{ProductName:query}">
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
        	<li ng-repeat="p in range(1,pages)" ng-class="{active: p == page}">
                <a ng-click="getPage(p)" class="paginate_click">{{p}}</a>
            </li>
        </ul>
    </div>	

</div>

