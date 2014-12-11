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
        <tr ng-repeat="c in cart|filter:{cartName:query}">
            <td>{{c.ProductSKU}}</td>
            <td>{{c.ProductName}}</td>
            <td>{{c.ProductPrice}}</td> 
            <td><span ng-show="!edit">{{c.quantity}}</span><input ng-show="edit" type="text" ng-model="c.quantity"></td>
            <td>{{c.total}}</td>            
            <td>
                <button class="btn btn-xs btn-warning" ng-show="!edit" ng-click="edit=true">Edit quantity</button>
                <button class="btn btn-xs btn-success" ng-show="edit" 
                     ng-click="update();edit=false">update</button>
                <a ng-click="delete()">
                    <i class="glyphicon glyphicon-trash"></i>
                </a>
            </td>            
        </tr>
        </form>
        <tr>
            <td></td>
            <td></td>
            <td></td>            
            <td>Total:</td>
            <td>{{cart.total}}</td>
            <td></td>
        </tr>
        
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

