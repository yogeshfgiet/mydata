
<?php
 $adjacents = 5;
			
			$sql="SELECT COUNT(*) as num FROM `user` order by id  desc;";
			$query=mysql_query($sql);
				$total_pages = mysql_fetch_array($query);
				$total_pages = $total_pages['num'];
				$limit = 4;                                //how many items to show per page
				$page = $_GET['page'];
				if($page) 
					$start = ($page - 1) * $limit;          //first item to display on this page
				else
				$start = 0;    
			 $result = mysql_query("select * from `user` order by id  desc LIMIT 0, 4");

  			  /* Setup page vars for display. */
 			   if ($page == 0) $page = 1;                  //if no page var is given, default to 1.
 			   $prev = $page - 1;                          //previous page is page - 1
   			   $next = $page + 1;                          //next page is page + 1
  			  $lastpage = ceil($total_pages/$limit);      //lastpage is = total pages / items per page, rounded up.
 			   $lpm1 = $lastpage - 1; 							//last page minus 1
	
			/////define range by yogesh
  			  $adjacents = 2;
			 $pagination = "";
   			 if($lastpage > 1)
   			 {   
    			    $pagination .= "<div class=\"pagination\">";
    			    //previous button
    			    if ($page > 1) 
       			     $pagination.= " <a class=\"btn btn-info\" href='{$_SERVER['PHP_SELF']}?page=$prev'>« Previous</a> ";
      		       	   else
       			    $pagination.= "<span class=\"btn btn-default\" class=\"disabled\">« previous</span>"; 

				//////////////////////////////////////////////////////////
		
		
		
		
				$pmin = ($page > $adjacents) ? ($page - $adjacents) : 1;
		
				  $pmax = ($page < ($lastpage - $adjacents)) ? ($page + $adjacents) : $lastpage;
		
				for ($x = 	$pmin /*($page - $limit)*/; $x <=   $pmax /*(($page + $limit) + 1)*/; $x++)
				{
					// if it's a valid page number...
					if (($x > 0) && ($x < $lastpage)) 
					{
			
			
					// if we're on current page...
					if ($x != $page) 
					{
						 $pagination.= " <a class=\"btn btn-info\" href='{$_SERVER['PHP_SELF']}?page=$x'>$x</a> ";
				
					} else
					{
							// make it a link
						$pagination.= "<span class=\"btn btn-default\" class=\"disabled\">$x</span>"; 
									
							// end else
					}
				
				} // end if 
			} // end for
			
			/////////////////////////////////////////////
      			  //next button
       
			if ($page < $lastpage) 
          		  $pagination.= " <a class=\"btn btn-info\" href='{$_SERVER['PHP_SELF']}?page=$next'>Next»</a> ";
	
      			  else
        		    $pagination.= "<span class=\"btn btn-default\" class=\"disabled\">Next »</span>";
				$pagination.= "</div>\n";    	
			

 		   }
	
			$q = mysql_query("select * from `user` order by id desc limit $start,$limit");
			while($row=mysql_fetch_assoc($q)){


					// LOOP Code
			//echo $pagination;
				

			} 
			echo $result;
	}
		
				
		
		
		?>
