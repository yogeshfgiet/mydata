  $(document).ready(function() {
	
               $(".link2").fancybox({
		'frameWidth': 400,
		'frameHeight': 500,
		'zoomSpeedIn':	1000,
		'zoomSpeedOut':	1000
		});

   });



function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
         	 return false;
       	 }else{
           return true;
          }
        }

	$(document).ready(function() {
		
 	     		   $( "#datepicker" ).datepicker({
  	 		   changeMonth: true,//this option for allowing user to select month
   	  		   changeYear: true //this option for allowing user to select from year range
     			   });



              		  $('.submit').click(function(e) {

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

            });

    	  $(window).load(function() {
              	  $.ajax({
                  	  url: 'data.php',
                         type: 'POST',
                         success: function(data) {
                      		  myFunction(data);
                 	   }
              	  });
                  	 setInterval('autoRefresh()', 1000);
            });

   
   	function autoRefresh() {
                $.ajax({
                    url: 'data.php',
                    type: 'POST',
                    dataType: 'text',
                    success: function(data) {
                        myFunction(data);
                    }
                });
            }

 		function myFunction(response) {
            	    var obj = JSON.parse(response);
            	    var i;
              	    var out = "<table><tr><th>NAME</th><th>EMAIL</th><th>MESSAGE</th><th>DOB</th></tr>";
             	   for (i = 0; i < 5; i++) {
                   	 out += "<tr><td>" + obj[i].name + "</td><td>" +
                            obj[i].email +
                            "</td><td>" +
                            obj[i].message +
                            "</td><td>" +
                            obj[i].date +
                            "</td></tr>";
                   }
               	 out += "</table>";
		 $(".dataDiv").html(out);
            }

