
$(function(){

 		loadHome();
      

    	$(".admin").click(function(event){
    									msg="";
                      checkLogin(msg);
                      $(".navbar-nav .active").removeClass('active');
                      $(this).parent().addClass('active');
    								 }
    				);

      $(".accueil").click(function(event){
                      loadHome();
                      $(".formulaire").html("");  
                      $(".list").html(""); 
                      $("nav ul .active").removeClass('active');
                      $(this).parent().addClass('active'); 
                     }
            );

      $(".newpost").click(function(event){
                      $("#display").html();
                      $("#display").load("post/newPost",{},function(){
                      //  handleInputFile();
                        setFileLabel("#labelImage");
                        tinymce.init({selector:'textarea'});
                      });
                      $(".formulaire").html("");  
                      $(".list").html(""); 
                      $("nav ul .active").removeClass('active');
                      $(this).parent().addClass('active'); 
                     }
            );
      $(".contact").click(function(event){
                      $("#display").html();
                      $("#display").load("user/contact",{},function(){});
                      $(".formulaire").html("");  
                      $(".list").html(""); 
                      $("nav ul .active").removeClass('active');
                      $(this).parent().addClass('active'); 
                     }
            );
      




});// end document ready




function checkLogin(messageError)
{

 
  $(".list").load("user/login", {}, function(){

            if (messageError!='')
            {
              //alert(messageError);
              $("div.form-group").addClass("has-error");
              $(".help-block").html(messageError);
              $("div.alert").show("slow").delay(4000).hide("slow");
              $(".btnLogin").click(function(event){

                                              logVal=$("#idLogin").val();
                                              passVal=$("#idPassword").val();
                                              $(".formulaire").html("");
                                              $("#display").html(""); 
                                              $(".list").load("post/getPostsList",{login:logVal,password:passVal},function(){});

                                            });
           
            }
            else
            {

              $(".btnLogin").click(function(event){
                                logVal=$("#idLogin").val();
                                passVal=$("#idPassword").val();
                               // alert($("#display").html());
                                $(".formulaire").html("");
                                $("#display").html("");  
                                $(".list").load("post/getPostsList", 
                                  {login:logVal,password:passVal}, function(){} );
                            }
                          );    

            }
              

    }); 
}

function loadHome()
{

  $("#display").load("user/login", 
            {'page':0}, 
            function() {
                  $("#1-page").addClass('active');
                  setPagination();
                  $(".continueReading").click(function(event){                     
                      $("#display").html();
                      idVal=$(this).attr("id");
                      $("#display").load("user/login",{id:idVal},function(){
                             $("#btnComment").click(function(event){
                                      var cmt = $("#contentComment").val();
                                       myAjax("comment/addComment",{post_id:idVal,content:cmt},
                                        "POST","post/getPost",idVal,"#display");
                                      
                                      
                                     }
                                );

                      });
                      $(".formulaire").html("");  
                      $(".list").html(""); 
                      $("nav ul .active").removeClass('active');
                      $(this).parent().addClass('active'); 
                     }
                    );
                }
            );  
}




function myAjax(url,data,type,urlsuccess,idsuccess,htmlElement){

  $(htmlElement).html();
  $.ajax({
            url      : url,
            data     : data,
            cache    : false,
            type: type,
            error    : function(request, error) { // Info Debuggage si erreur         
                         if (request.responseText!="")
                            document.write("Erreur : responseText: "+request.responseText);
                       },
            success  : function(data) { 

              if (urlsuccess !="" && idsuccess!=0)
              {
               
                $(htmlElement).load(urlsuccess,{id:idsuccess},function(){

                    $("#btnComment").click(function(event){
                                      
                                      var cmt = $("#contentComment").val();
                                      myAjax(url,{post_id:idVal,content:cmt},
                                        "POST",urlsuccess,idVal,htmlElement);
                                      
                                      
                                     }
                                );
                });
              }

            }
       });    
}

function setPagination() {

      $(".paginate_click").on("click", function (e) {
       
       // $("#display").prepend('<div class="loading-indication"><img src="images/ajax-loader.gif" /> Loading...</div>');
        
        var clicked_id = $(this).attr("id").split("-"); 
        var page_num = parseInt(clicked_id[0]); 
        
        $('.paginate_click').parent().removeClass('active'); //remove any active class
        
        

        $("#display").load("post/getPosts", {'page': (page_num-1)}, function(){
          setPagination();
          $('#li-'+page_num).addClass('active');
            $(".continueReading").click(function(event){                     
                      $("#display").html();
                      idVal=$(this).attr("id");
                      $("#display").load("post/getPost",{id:idVal},function(){
                             $("#btnComment").click(function(event){
                                      var cmt = $("#contentComment").val();
                                       myAjax("comment/addComment",{post_id:idVal,content:cmt},
                                        "POST","post/getPost",idVal,"#display");
                                      
                                      
                                     }
                                );

                      });
                      $(".formulaire").html("");  
                      $(".list").html(""); 
                      $("nav ul .active").removeClass('active');
                      $(this).parent().addClass('active'); 
                     }
                    );
        
        });

        
        
        return false; //prevent going to herf link
      }); 

}
function handleInputFile()
{
  $(document).on('change', '.btn-file :file', function() {
    console.log($(this));
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
    });
}
function setFileLabel(inputLabel)
{
  $(document).on('change', '.btn-file :file', function() {
    console.log($(this));
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
    });

  $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        var input = $(this);
       // console.log(numFiles);
       // console.log(label);
        $(inputLabel).val(label);
    });
}



/*
	var bouton = $("#ajout");
    bouton.click(function(event){
						    	event.preventDefault();
						    	addTown();    	
    							});

   $("#showAdd").click(function(event){

    	  $(".addForm").css("visibility", "visible");
    	  $(".addForm").fadeIn( "slow","");
    	  $(".addForm").css("height", "50px");
    	  $(".searchForm").css("height", "0px");
    	  $(".searchForm").css("visibility", "hidden");
    	
    });
});

	function getPosts(event)
    {
      var th = "<thead>	<tr class='info' id='trHead'><th>Nom ville</th><th>Population</th><th>surface</th></tr></thead>";
      var text = $("#nom");	    	

	    $.ajax({
	          
	          url      : "JSONgetPosts.php",
	          // Passage des données au fichier externe 
	          data     : {pattern: text.val()},
	          cache    : false,
	          dataType : "json",
	          type: "GET",
	          error    : function(request, error) { // Info Debuggage si erreur         
	                       alert("Erreur : responseText: "+request.responseText);
	                     },
	          success  : function(data) {  
	          			   var sectionDisplay= $("#display");   
	                          // console.log(data)  ;                 
	                       for (var key in data){
   									sectionDisplay.append("<article><h4 class='title'>"+data[key].title+
   										"</h2><p class='content'>"+data[key].content+"</p><p class='created'>"+data[key].created+"</p></article>");
									
							}

	                     }       
	     });     

    	
    }

    


    function addTown()
    {
         
      var nom = $("#nomAdd");	
      var population = $("#population");
      var surface = $("#surface");	    	

	    $.ajax({
	          
	          url      : "add.php",
	          // Passage des données au fichier externe 
	          data     : {nom: nom.val(),population:population.val(),surface:surface.val()},
	          cache    : false,
	          dataType : "json",
	          type: "GET"
	     });     

    	$(".addForm").css("visibility", "hidden");
    	$(".addForm").css("height", "0px");
    	$(".searchForm").css("height", "50px");
    	$(".searchForm").css("visibility", "visible");

    	$("#nom").val(nom.val());
    	searchTown();

    	$("#nomAdd").val('');	
        $("#population").val('');
        $("#surface").val('');	    	

    	//alert("la ville "+ nom.val()+" a été ajoutée à la base")
    }
*/