<!DOCTYPE html>
<html ng-app="eCommerce">
  <head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/css/bootstrap-theme.min.css">
    
    <title>La Boutique en ligne</title>
    <style type="text/css">
       body {
              padding-top: 50px;
              background-image: url('assets/images/website-background.jpg');
            }
     
              footer {
                border: 0;
              }
              article.col-sm-6, nav.col-sm-2 {
                
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
                    font-size: 50px;
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
    </style>
  </head>
  <body>
    <div class="container">
      <header class="row">
        <div class="col-sm-12 col-lg-12">
          <h2 class="titreSite">Bienvenue sur la boutique en ligne</h2>
        </div>
      </header>
     
      
           <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
              <ul class="nav navbar-nav">
                <li class="active"> <a class ="accueil" href="#" onclick="return false;">Home</a> </li>
                <li> <a class ="login" href="#/login">Log in</a> </li>
                <li> <a class ="register" href="#/register" >Register</a> </li>
                <li> <a class ="contact" href="#" onclick="return false;">Contact</a> </li>
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
                  <input type="search" class="input-xs form-control" placeholder="Recherche">
                  <button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                </div>
              </form>
            </div>
          </nav>
      
        
           <div class="row">
                <section class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-9">
                      <div class="row" id="display" ng-view>
                        
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
    <script src="assets/js/models/service.js"></script>      
    <script src="assets/js/controllers/userCtrl.js"></script>      
    
    
  </body>
</html>