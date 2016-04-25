
  $(document).ready(function() {
	
               $(".link2").fancybox({
		'frameWidth': 1000,
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
              	    var out = "<table class=table table-condensed><tr class=success><th>ID</th><th>NAME</th><th>EMAIL</th><th>MESSAGE</th><th>DOB</th></tr>";
             	   for (i = 0; i < 5; i++) {
                   	 out += "<tr class=info><td>" + obj[i].id + "</td><td>" + obj[i].name + "</td><td>" +
                            obj[i].email +
                            "</td><td>" +
                            obj[i].message +
                            "</td><td>" +
                            obj[i].date +
                            "</td></tr>";
                   }
               	 out += "</table>";
		 $("#dataDiv").html(out);
            }




    $('document').ready(function() {
    $("#pagination a").trigger('click'); // When page is loaded we trigger a click
    });
     
    $('#pagination').on('click', 'a', function(e) { // When click on a 'a' element of the pagination div
    var page = this.id; // Page number is the id of the 'a' element
    var pagination = ''; // Init pagination
    $('#articleArea').html('<img src="design/loader-small.gif" alt="" />'); // Display a processing icon
    var data = {page: page, per_page: 4}; // Create JSON which will be sent via Ajax
    // We set up the per_page var at 4. You may change to any number you need.
    $.ajax({ // jQuery Ajax
    type: 'POST',
    url: 'pagination.php', // URL to the PHP file which will insert new value in the database
    data: data, // We send the data string
    dataType: 'json', // Json format
    timeout: 3000,
    success: function(data) {
    $('#articleArea').html(data.articleList); // We update the articleArea DIV with the article list
    // Pagination system
    if (page == 1) pagination += '<div class="cell_disabled"><span>First</span></div><div class="cell_disabled"><span>Previous</span></div>';
    else pagination += '<div class="cell"><a href="#" id="1">First</a></div><div class="cell"><a href="#" id="' + (page - 1) + '">Previous</span></a></div>';
     
    for (var i=parseInt(page)-3; i<=parseInt(page)+3; i++) {
    if (i >= 1 && i <= data.numPage) {
    pagination += '<div';
    if (i == page) pagination += ' class="cell_active"><span>' + i + '</span>';
    else pagination += ' class="cell"><a href="#" id="' + i + '">' + i + '</a>';
    pagination += '</div>';
    }
    }
     
    if (page == data.numPage) pagination += '<div class="cell_disabled"><span>Next</span></div><div class="cell_disabled"><span>Last</span></div>';
    else pagination += '<div class="cell"><a href="#" id="' + (parseInt(page) + 1) + '">Next</a></div><div class="cell"><a href="#" id="' + data.numPage + '">Last</span></a></div>';
    $('#pagination').html(pagination); // We update the pagination DIV
    },
    error: function() {
    }
    });
    return false;
    });






