  <small>
    <form name= "form"  class="well form-horizontal col-xs-9" ng-submit="register()">
      <p class="msgError"> </p>
      <div class="form-group" ng-class="{'has-error': form.UserFirstName.$dirty && form.UserFirstName.$invalid}">
        <label for="UserFirstName" class="col-xs-3 control-label">First Name</label>
        <div class="col-xs-7">
          <input class="form-control input-sm" type="text" name="UserFirstName" 
          ng-model="newUser.UserFirstName" maxlength="16" required>
          <span class="help-block " ng-show="form.UserFirstName.$dirty && form.UserFirstName.$error.required">
            Please provide your first name
          </span>
          <span class="help-block" ng-show="form.UserFirstName.$dirty && form.UserFirstName.$error.maxlength">
            Your first name should be no longer than 16 characters
          </span>
        </div>
       </div>
       <div class="form-group" ng-class="{'has-error': form.UserLastName.$dirty && form.UserLastName.$invalid}">
         <label for="UserLastName" class="col-xs-3 control-label">Last Name</label>
          <div class="col-xs-7">
            <input class="form-control input-sm" type="text" name="UserLastName" ng-model="newUser.UserLastName" required>
            <span class="help-block" ng-show="form.UserLastName.$dirty && form.UserLastName.$error.required">
              Please provide your last name
           </span>
          </div>
       </div>
      <div class="form-group" ng-class="{'has-error has-feedback': form.UserPassword.$dirty && form.UserPassword.$invalid}">
        <label for="UserPassword" class="col-xs-3 control-label">Password</label>
        <div class="col-xs-7">
          <input class="form-control input-sm" type="password" name="UserPassword" 
              ng-model="newUser.UserPassword" ng-pattern="passwordPattern" required>
          <span ng-show="form.UserPassword.$dirty && form.UserPassword.$invalid" class="glyphicon glyphicon-remove  form-control-feedback"></span>
          <span class="help-block" ng-show="form.UserPassword.$dirty && form.UserPassword.$error.required">
              Please enter the password you would like to have
           </span>
           <span class="help-block" ng-show="form.UserPassword.$dirty && form.UserPassword.$error.pattern">
              Your password should be at least 8 characters long, and contain an uppercase
               letter and a number
          </span>
        </div>
      </div>
       <div class="form-group" ng-class="{'has-error': form.UserPassword2.$dirty && form.UserPassword2.$invalid}">
        <label for="UserPassword2" class="col-xs-3 control-label">Confirm Password</label>
        <div class="col-xs-7">
          <input class="form-control input-sm" type="password" name="UserPassword2" 
          ng-model="newUser.UserPassword2" ng-equals="newUser.UserPassword" required>
          <span class="help-block" ng-show="form.UserPassword2.$dirty && form.UserPassword2.$error.required">
              Please confirm your password
           </span>
           <span class="help-block" ng-show="form.UserPassword2.$dirty && form.UserPassword2.$error.equals">
              Passwords do not match
            </span>
        </div>
      </div>

      <div class="form-group" ng-class="{'has-error': form.mail.$dirty && form.mail.$invalid}">
        <label for="UserEmail" class="col-xs-3 control-label">Email</label>
        <div class="col-xs-7">
          <input class="form-control input-sm" type="email" name="mail" ng-model="newUser.UserEmail" required>
            <span class="help-block" ng-show="form.mail.$dirty && form.mail.$error.required">
              Please provide your e-mail adress, eg. me@example.org
            </span>
            <span class="help-block" ng-show="form.mail.$dirty && form.mail.$error.email">
              The mail address you provided is not a valid mail address
            </span>
        </div>
      </div>
    
      <div class="form-group">

          <div class="col-xs-offset-8 col-xs-4">
            <button type="submit" ng-disabled="error || incomplete" class="btn btn-primary btn-sm btnLogin">Créer mon compte</button>        
        </div>
        
        <div class="row alert alert-block alert-danger" style="display:none">
              <h4>Erreur !</h4>
              <span class="glyphicon glyphicon-remove form-control-feedback"></span>
              <span class="help-block"></span>
          </div>
        
      </div>
  
    </form>
  </small>

