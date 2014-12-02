<?php 
    
    if (isset($_SESSION["errorMessage"]))
    {
        $msg = $_SESSION["errorMessage"];
         unset($_SESSION["errorMessage"]);
    }
        

    
   

?>

<h4> <?php if (isset($msg)) echo $msg;  ?></h4>

<form role="form" method="post" class="well form-horizontal col-xs-7" action ="login.php">
 <p class="warning" id="MessageError"></p>
    <div class="form-group has-error has-feedback" >
      <label for="idLogin" class="col-xs-3 control-label">login</label>
      <div class="col-xs-3">
        <input class="form-control input-sm" type="text" name="username" id="idLogin" value="">
      </div>
      <div class="col-xs-offset-6"></div>
    </div>
    
    <div class="form-group">
      <label for="idPassword" class="col-xs-3 control-label">Password</label>
      <div class="col-xs-3">
        <input class="form-control input-sm" type="password" name="password" id="idPassword" value="">
      </div>
      <div class="col-xs-offset-6"></div>
    </div>
  
    <div class="form-group">        
        <div class="col-xs-9 col-xs-offset-3">
          <button  class="btn btn-primary btn-sm btnLogin">Login</button>        
        </div>
    </div>
    <div class="row alert alert-block alert-danger" style="display:none">
        <h4>Erreur !</h4>
        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        <span class="help-block"></span>
    </div>
      
    
  <p><a href="#/register">Créer un compte</a></p>
</form>

