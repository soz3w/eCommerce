  <small>
    <form role="form"  class="well form-horizontal col-xs-9" ng-submit="register()">
            <p class="msgError"> </p>
            <div class="form-group">
              <label for="UserFirstName" class="col-xs-3 control-label">First Name</label>
              <div class="col-xs-7">
                <input class="form-control input-sm" type="text" id="UserFirstName" ng-model="newUser.UserFirstName">
              </div>
             </div>
             <div class="form-group">
               <label for="UserLastName" class="col-xs-3 control-label">Last Name</label>
                <div class="col-xs-7">
                  <input class="form-control input-sm" type="text" id="UserLastName" ng-model="newUser.UserLastName">
                </div>
             </div>
            <div class="form-group">
              <label for="UserPassword" class="col-xs-3 control-label">Password</label>
              <div class="col-xs-7">
                <input class="form-control input-sm" type="password" id="UserPassword" ng-model="newUser.UserPassword">
              </div>
            </div>
             <div class="form-group">
              <label for="UserPassword2" class="col-xs-3 control-label">Confirm Password</label>
              <div class="col-xs-7">
                <input class="form-control input-sm" type="password" id="UserPassword2">
              </div>
            </div>

            <div class="form-group">
              <label for="UserEmail" class="col-xs-3 control-label">Email</label>
              <div class="col-xs-7">
                <input class="form-control input-sm" type="text" id="email" ng-model="newUser.UserEmail">
              </div>
            </div>
          
            <div class="form-group">

                <div class="col-xs-offset-8 col-xs-4">
                  <button type="submit" class="btn btn-primary btn-sm btnLogin">Créer mon compte</button>        
              </div>
              
              <div class="row alert alert-block alert-danger" style="display:none">
                    <h4>Erreur !</h4>
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <span class="help-block"></span>
                </div>
              
            </div>
  
    </form>
  </small>

