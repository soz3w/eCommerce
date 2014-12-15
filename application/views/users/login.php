

<form name="form" class="form-horizontal css-form col-xs-7" novalidate>  
 <h4 class="msgError" ng-show="showError"></h4>
    <div class="form-group" >
      <label for="idLogin" class="col-xs-3 control-label">Email</label>
      <div class="col-xs-6">
        <input ng-click="showError=false;" class="form-control input-sm" 
            type="email" name="email" ng-model="user.email">
      </div>
      <div class="col-xs-offset-3"></div>
    </div>
    
    <div class="form-group">
      <label for="idPassword" class="col-xs-3 control-label">Password</label>
      <div class="col-xs-6">
        <input ng-click="showError=false;" class="form-control input-sm" 
            type="password" name="password" ng-model="user.password">
      </div>
      <div class="col-xs-offset-3"></div>
    </div>
  
    <div class="form-group">        
        <div class="col-xs-9 col-xs-offset-3">
          <button  class="btn btn-primary btn-sm btnLogin" ng-click="logUser()">login</button>        
        </div>
    </div>
    <div class="row alert alert-block alert-danger" style="display:none">
        <h4>Erreur !</h4>
        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        <span class="help-block"></span>
    </div>
      
    
  <p><a href="#/register">Register</a></p>
</form>

