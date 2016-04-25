
  $(document).ready(function() {
	
               $(".link2").fancybox({
		'frameWidth': 1000,
		'frameHeight': 500,
		'zoomSpeedIn':	1000,
		'zoomSpeedOut':	1000
		});





            function IsEmail(email) {
                 var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                  if(!regex.test(email)) {
         	 return false;
                 }else{
                  return true;
                 }
             }

	
		
 	     		   $( "#datepicker" ).datepicker({
  	 		   changeMonth: true,//this option for allowing user to select month
   	  		   changeYear: true //this option for allowing user to select from year range
     			   });



              		  $('#submit').click(function(e) {

  				e.preventDefault();

				var name = $('#name').val();
				var email = $('#email').val();

				if(name==''){
                  	 		 alert('first name can not be blank');
                 			   return false;
				}
				if(email==''){
                  	 		 alert('please Enter Email');
                  			  return false;
				}
			        else if(IsEmail(email)==false){
              				   alert('Please Enter Valid Email');
             				   return false;
          			  }


                                     $.ajax({
                                     type: 'POST',
                                      url: 'insert.php',
                                     data:$('form').serialize(), 
                                      success: function() {
                      		   	   $('input[type=text], textarea').val('');
 					  $('input[type=email], textarea').val('');
					  parent.jQuery.fancybox.close();
 					  $('#myform').find('.result').html(response);
                                          $.ajax({
                       	     		    url: 'data.php',
                            		    type: 'POST',
                            		    dataType: 'text',
                             		   success: function(data) {
                                  		  myFunction(data);
                                             }
                           		 });
                                     }
                                 });

                               });

       




    	  $(window).load(function() {
	
              	  $.ajax({
                  	  url: 'data.php?page=1',
                         type: 'POST',
                         success: function(data) {
			
                      		 var tex= myFunction(data);
                         $("#dataDiv").html(tex);
                 	   }
              	  });
                  	 //setInterval('autoRefresh()', 1000000000000000000000000000000);
            });






 $(window).load(function() {
              	  $.ajax({
                  	  url: 'page.php',
                         type: 'POST',
                         success: function(data) {
                      		       var dat = "";
	            for (var i = 1; i <= data; i++) {
	             
	                    dat += "<li><a href='#' class='pg' v=" + i + ">" + i + "</a></li>";
	               
	            }
	            $(".pagination").html(dat);
	        }
              	  });
                  	
            });







   	function autoRefresh() {
                $.ajax({
                    url: 'data.php',
                    type: 'POST',
                    dataType: 'text',
                    success: function(data) {
                       var tex= myFunction(data);
                         $("#dataDiv").html(tex);
                    }
                });
            }
///////////////////////////////////////
		  

 
 var pg="1";

   $(document).on("click", ".pg", function(e) {
	     
	e.preventDefault();
      pg=$(this).text();
 
var temp='data.php?page='+pg;
			 $.ajax({
                    url: temp,
                     type: 'POST',
                    dataType: 'text',
			data: '',//{'page': pg},
		  success: function(data) {
                       var tex= myFunction(data);
                         $("#dataDiv").html(tex);
		}	
               
               
           
       });
    });













var countc = 0;
   $(document).on("click", "#db", function(e) {
countc++;
var temp='data.php?page='+pg;
			 $.ajax({
                    url: temp,
                     type: 'POST',
                
			data: { 'db': +countc},
		  success: function(data) {
                       var tex= myFunction(data);
                         $("#dataDiv").html(tex);
		}	
               
               
           
       });
    });
var count = 0;
   $(document).on("click", "#u_id", function(e) {
count++;
//console.log(pg);
var temp='data.php?page='+pg;
			 $.ajax({
                    url: temp,
                     type: 'POST',
                
			data: { 'id': +count},
		  success: function(data) {
                       var tex= myFunction(data);
                         $("#dataDiv").html(tex);
		}	
               
               
           
       });
    });





			
///////////////////////////////////////////////////////	   
	   

 		function myFunction(response) {
            	    var obj = JSON.parse(response);
            	    var i;
              	    var out = "<table class=table table-condensed><tr class=success><th><a id=u_id href=# >ID</a></th><th>NAME</th><th>EMAIL</th><th>MESSAGE</th><th><a id=db href=#>DOB</a></th></tr>";
             	   for (i = 0; i < obj.length; i++) {
                   	 out += "<tr class=info><td>" + obj[i].id + "</td><td>" + obj[i].name + "</td><td>" +
                            obj[i].email +
                            "</td><td>" +
                            obj[i].message +
                            "</td><td>" +
                            obj[i].dob +
                            "</td></tr>";
                   }
               	 out += "</table>";
		return out;
            }



    $('#keyword').on('input', function() {

        
        var searchKeyword = $(this).val();
        
       if (searchKeyword.length >= 2) {
            $.getJSON('search.php', {keywords: searchKeyword}, function(data) {
          
		 var i;
			 $("#dataDiv").empty();
                	 var html = "<table class=table table-condensed><tr class=success><th><a id=u_id href=# >ID</a></th><th>NAME</th><th>EMAIL</th><th>MESSAGE</th><th><a href=#>DOB</a></th></tr>";
 			for ( i = 0; i >=data.length; i++) {
                   
                    html += '<tr  class=info ><td>' + data[i].id + '</td>'
                    
                    html += '<td>' + data[i].name + '</td>'
                    html += '<td>' + data[i].email + '</td>'
                   
                    html += '<td>' + data[i].message + '</td>'
                   
                    html += '<td>' + data[i].date + '</td></tr>'
                   
			}

                        html += "</table>";    
                
	
		
		 
                    $("#dataDiv").append(html);

//clearInterval(set);
            });
       }
    });

});    






