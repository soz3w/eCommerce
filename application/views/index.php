<!DOCTYPE html>
<html>
  <head>

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="content-script-type" content="text/javascript">   
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/vendor/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/vendor/css/bootstrap-theme.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/viewAnim.css" type="text/css">

    <title>La Boutique en ligne</title>
    <style type="text/css">
       body {
              padding-top: 50px;
              
            }
     
              footer {
                border: 0;
              }
              
              .msgError{
                color : red;
              }
              .input-xs {
                height: 22px;
                padding: 5px 5px;
                font-size: 12px;
                line-height: 1.5;
                border-radius: 3px;
                }
                .titreSite{
                    text-shadow: 0px 0px 30px rgba(0, 0, 0, 0.95);
                    color: #000;
                    font-size: 20px;
                  }
                  .titreProduit{
                    text-shadow: 0px 10px 30px rgba(200, 100, 200, 0.95);
                    color: #DDD;
                    font-size: 20px;
                  }
                
                .panel-body{
                  text-align: justify;
                  text-justify: inter-word;
                } 
                .panel-body img{
                   width: 92px;
                  height: 92px;    
                  background-image: url(http://www.placehold.it/92x92);                  
                }
                .panel-footer{
                  font-size: 1em;
                } 
                .form-group{
                   padding-bottom: 10px;
                }
                
                h3
                {
                  text-align: center;
                }
               .btn-file {
                    position: relative;
                    overflow: hidden;
                }
                .btn-file input[type=file] {
                    position: absolute;
                    top: 0;
                    right: 0;
                    min-width: 100%;
                    min-height: 100%;
                    font-size: 100px;
                    text-align: right;
                    filter: alpha(opacity=0);
                    opacity: 0;
                    outline: none;
                    background: white;
                    cursor: inherit;
                    display: block;
                }
                .panel-heading:nth-child(n+2){
                  margin-top: 5px;
                }
                table{
                  background-color: white;
                }
                td,th{
                  text-align: center;
                }
                td .input-sm{
                    width :50%;
                    background-color: #3e8f3e;
                    color:white;
                }  
                
                
                #cartList .list-group-item{
                  padding: 2px;
                  border:0px;
                }

                .slide-animate-container {
                  position:relative;              
                  overflow:hidden;
                }

                .slide-animate {
                  padding:10px;
                }

                .slide-animate.ng-enter, .slide-animate.ng-leave {
                  -webkit-transition:all cubic-bezier(0.250, 0.460, 0.450, 0.940) 0.3s;
                  transition:all cubic-bezier(0.250, 0.460, 0.450, 0.940) 0.3s;

                  position:absolute;
                  top:0;
                  left:0;
                  right:0;
                  bottom:0;
                  display:block;
                  padding:10px;
                }

                .slide-animate.ng-enter {
                  top:-50px;
                }
                .slide-animate.ng-enter.ng-enter-active {
                  top:0;
                }

                .slide-animate.ng-leave {
                  top:0;
                }
                .slide-animate.ng-leave.ng-leave-active {
                  top:50px;
                }
                
                ul{
                  list-style-type: none;
                }
                .pagination{
                  display:block;
                }

                .pagination ul li{
                  display: inline-block;
                }
                .list-group-item ul{
                  padding-left: 0px;
                }
                .list-group-item ul li{
                  display:inline-block; 
                  padding:5px;                
                }
                .label-default:first-child{
                  margin-right :15%;
                  width:30%;
                }
                .label-default:nth-child(1000n+2){
                  margin-right :5%;
                  margin-left :5%;
                  width:40%;
                }
                .css-form input.ng-invalid.ng-touched {
                  background-color: #FA787E;
                }

                .css-form input.ng-valid.ng-touched {
                  background-color: #78FA89;
                }
                
               
               

                  
    </style>
  </head>
  <body ng-app="eCommerce">
    <div class="container">
      <header class="row">
        <div class="col-sm-12 col-lg-12">
          <h2 class="titreSite">Welcome to the online shop</h2>
        </div>
      </header>
     
      
           <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
              <ul class="nav navbar-nav" ng-controller="MenuManageController">
                <li ng-class="{ active: isActive('/products')}"> <a class ="accueil" href="#/products">Home</a> </li>
                <li ng-class="{ active: isActive('/login')}"> <a class ="login" href="#/login">Log in</a> </li>
                <li ng-class="{ active: isActive('/register')}"> <a class ="register" href="#/register" >Register</a> </li>
                <li> <a class ="contact" href="#/essai">Contact</a> </li>
                <li class="dropdown"> <a data-toggle="dropdown" class ="others" href="#" onclick="return false;">
                                        Others...<b class="caret"></b>
                                      </a>
                    <ul class="dropdown-menu">
                      <li><a href="#/formvalid">Functionality 1</a></li>
                      <li><a href="#">Functionality 2</a></li>
                      <li><a href="#">Functionality 3</a></li>
                      <li class="divider"></li>
                      <li><a href="#">...</a></li>
                    </ul></a> 
                </li>
              </ul>
              <form class="navbar-form navbar-right inline-form">
                <div class="form-group">
                  <input type="search" class="input-xs form-control" ng-model="query">
                  <button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-eye-open"></span> search</button>
                </div>
              </form>
            </div>
          </nav>
      
        
           <div class="row">
                <section class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-9 slide-animate-container">
                      
                      <!--div class="row page {{ pageClass }}" id="display" ng-view-->
                      <div class="row slide-animate" id="display" ng-view>
                        
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="row">                        
                        <aside class="col-sm-12" id="myCollapse" ng-controller="CartController">
                              <div class="panel panel-success" ng-show="cart">
                                                                    
                                  <div class="panel-heading" ng-show="cart">
                                    <a href="#cartList"  data-parent="#myCollapse" class="panel-title" 
                                    data-toggle="collapse"><span class="glyphicon glyphicon-shopping-cart"></span>
                                      Shopping cart</a>
                                  </div>
                                  <div id="cartList" class="panel-collapse collapse in" ng-show="cart">
                                    <div class="panel-body" >
                                      <ul class="list-group">
                                        <small>
                                          <li>
                                            <span class="label label-default">Product</span>
                                            <span class="label label-default">Price</span>
                                            <span class="label label-default">Quantity</span>
                                          </li>
                                          <li ng-repeat="lnCart in cart track by $index" class="list-group-item">
                                             <ul>
                                               <li><a> {{lnCart.ProductName}}</a></li>
                                               <li>{{lnCart.ProductPrice}} €</li>
                                               <li>{{lnCart.quantity}}</li>
                                             </ul>
                                          </li>
                                          <li class="pull-right">Total : {{total}} €</li>                                          
                                         </small>
                                          
                                      </ul>
                                      <p><a class="btn btn-success btn-xs" ng-click="checkOut()">Check Out</a></p>
                                     </div>
                                  </div>
                              
                               
                                  <div class="panel-heading" ng-show="categories">
                                    <a  data-parent="#myCollapse" class="panel-title" data-toggle="collapse">
                                      <span class="glyphicon glyphicon-tasks"></span> Products categories</a>
                                  </div>
                                  <div id="catList" class="panel-collapse collapse in" ng-show="categories">
                                    <div class="panel-body">
                                      <ul class="list-group">
                                          <li class="list-group-item"><a >Cat1</a></li>
                                          <li class="list-group-item"><a >Cat2</a></li>
                                      </ul>
                                    </div>
                                  </div>
                              </div>
                              

                        </aside>
                       </div>
                    </div>
                  </div>
                </section>
             </div>   
         
        
               
        
            </div>
           <footer>
              <div class="container">
                  <hr />
                  <p class="text-center">Copyright © SOZ 2014. All rights reserved.</p>
              </div>
          </footer>
    </div>
    <script type="text/javascript" src="/vendor/js/jquery-2.1.1.min.js"></script> 
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular-animate.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular-route.min.js"></script>  
    <script type="text/javascript" src="/vendor/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>    
    <script type="text/javascript" src="assets/js/app.js"></script>      
    <script type="text/javascript" src="assets/js/models/servicePagination.js"></script>      
    <script type="text/javascript" src="assets/js/models/serviceUser.js"></script>      
    <script type="text/javascript" src="assets/js/models/serviceProduct.js"></script>      
    <script type="text/javascript" src="assets/js/controllers/userCtrl.js"></script>      
    <script type="text/javascript" src="assets/js/controllers/productCtrl.js"></script>      
    <script type="text/javascript" src="assets/js/controllers/cartCtrl.js"></script>      
    <script type="text/javascript" src="assets/js/controllers/orderCtrl.js"></script>      
    <script type="text/javascript" src="assets/js/controllers/essai.js"></script>      
    
    
  </body>
</html>