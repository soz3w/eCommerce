<!DOCTYPE html>
<html>
  <head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">   
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/css/bootstrap-theme.min.css">
    <title>La Boutique en ligne</title>
    <style type="text/css">
       body {
              padding-top: 50px;
              /*background-image: url('assets/images/website-background.jpg');*/
            }
     
              footer {
                border: 0;
              }
              article.col-sm-6, nav.col-sm-2 {
                
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
                  width:100%;
                  margin-bottom: 2px;
                }
                .panel-footer{
                  font-size: 1em;
                } 
                .form-group{
                   padding-bottom: 10px;
                }
                .pagination ul{
                 list-style-type: none;
                }
                .pagination ul li{
                  display: inline-block;
                  padding: 1%;
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
                .image{
                  width:70px;
                }
                img{width:100%;}

                .sort-true {
                      padding-right: 14px;
                      background: no-repeat right center url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAAICAYAAAAvOAWIAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwgAADsIBFShKgAAAABp0RVh0U29mdHdhcmUAUGFpbnQuTkVUIHYzLjUuMTAw9HKhAAAAX0lEQVQoU32NQQrAMAgEBa+CvfX5PYa+pn/oR2w2xLIQibAgOqMSEYe73wh6oVp2Ztb6PhAWEszd5OTJAQknRJ73Hpz4bMZ1RFXfAgQ3ahEIxsUf3AklWAlbkIWrev0BT3ZAxrSn1UcAAAAASUVORK5CYII=')
                      /*../Icons/Icon-down-white.png*/
                  ;

                      /* For IE 6 and 7 */
                  }
                  .sort-false {
                      padding-right: 14px;
                      background: no-repeat right center url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAAICAYAAAAvOAWIAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwgAADsIBFShKgAAAABp0RVh0U29mdHdhcmUAUGFpbnQuTkVUIHYzLjUuMTAw9HKhAAAAXklEQVQoU2NgwAT8QKH5QAyi8QKQgvNA/B9K49SArBCkGKcGbAqxasBQyMzM/AhqMoYGmBvBEvz8/Cv///8vDqIxNPDw8CyHCUIVCoCCAKhBAFkDWB1MEFkhLLzQ5QBl6UDG/jPuNgAAAABJRU5ErkJggg==')
                      /*../Icons/Icon-up-white.png*/
                  ;

                      /* For IE 6 and 7 */
                  }
                  .NoData td.NoData {
                      text-align: center;
                  }
                  .even {
                      background-color: #aaa
                  }
                  .odd {
                      background-color: #fff;
                  }
                  .icon {
                      max-height: 20px;
                      max-width: 20px;
                  }
                  .SelectedRow {
                      background-color: #888;
                  }
    </style>
  </head>
  <body ng-app="eCommerce">
    <div class="container">
      <header class="row">
        <div class="col-sm-12 col-lg-12">
          <h2 class="titreSite">Bienvenue sur la boutique en ligne</h2>
        </div>
      </header>
     
      
           <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
              <ul class="nav navbar-nav" ng-controller="MenuManage">
                <li ng-class="{ active: isActive('/products')}"> <a class ="accueil" href="#/products">Home</a> </li>
                <li ng-class="{ active: isActive('/login')}"> <a class ="login" href="#/login">Log in</a> </li>
                <li ng-class="{ active: isActive('/register')}"> <a class ="register" href="#/register" >Register</a> </li>
                <li> <a class ="contact" href="#/essai">Contact</a> </li>
                <li class="dropdown"> <a data-toggle="dropdown" class ="others" href="#" onclick="return false;">
                                        Others...<b class="caret"></b>
                                      </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Functionality 1</a></li>
                      <li><a href="#">Functionality 2</a></li>
                      <li><a href="#">Functionality 3</a></li>
                      <li class="divider"></li>
                      <li><a href="#">...</a></li>
                    </ul></a> 
                </li>
              </ul>
              <form class="navbar-form navbar-right inline-form">
                <div class="form-group">
                  <input type="search" class="input-xs form-control" placeholder="Recherche" ng-model="query">
                  <button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                </div>
              </form>
            </div>
          </nav>
      
        
           <div class="row">
                <section class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-9 view-animate-container">
                      
                      <div class="row" id="display" ng-view class="view-animate">
                        
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="row">
                        <aside class="col-sm-12" id="myCollapse">
                              <div class="panel panel-success">
                                                                    
                                  <div class="panel-heading">
                                    <a href="#item2"  data-parent="#myCollapse" class="panel-title" data-toggle="collapse"><span class="glyphicon glyphicon-folder-open"></span> Categories</a>
                                  </div>
                                  <div id="item2" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                      <ul class="list-group">
                                          <li class="list-group-item"><a href="">categorie1</a></li>
                                          <li class="list-group-item"><a href="">categorie2</a></li>
                                          <li class="list-group-item"><a href="">categorie3</a></li>
                                          <li class="list-group-item"><a href="">Categorie4</a></li>
                                          <li class="list-group-item"><a href="">Categorie5</a></li>
                                      </ul>
                                     </div>
                                  </div>
                              
                               
                                  <div class="panel-heading">
                                    <a href="#item3" data-parent="#myCollapse" class="panel-title" data-toggle="collapse"><span class="glyphicon glyphicon-bookmark"></span> Tags</a>
                                  </div>
                                  <div id="item3" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                      <ul class="list-group">
                                          <li class="list-group-item"><a href="">Tag1</a></li>
                                          <li class="list-group-item"><a href="">Tag2</a></li>
                                          <li class="list-group-item"><a href="">Tag3</a></li>
                                          <li class="list-group-item"><a href="">Tag4</a></li>
                                          <li class="list-group-item"><a href="">Tag5</a></li>
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
     <script src="/vendor/js/jquery-2.1.1.min.js"></script> 
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular-animate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular-route.min.js"></script>  
    <script src="/vendor/js/bootstrap.min.js"></script>
    <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>    
    <script src="assets/js/app.js"></script>      
    <script src="assets/js/models/servicePagination.js"></script>      
    <script src="assets/js/models/serviceUser.js"></script>      
    <script src="assets/js/models/serviceProduct.js"></script>      
    <script src="assets/js/controllers/userCtrl.js"></script>      
    <script src="assets/js/controllers/productCtrl.js"></script>      
    <script src="assets/js/controllers/essai.js"></script>      
    
    
  </body>
</html>