





<html>
<head><title></title>
<script>

$(document).ready(function() {
    $("#single_1").fancybox({
          helpers: {
              title : {
                  type : 'float'
              }
          }
      });

    $("#single_2").fancybox({
    	openEffect	: 'elastic',
    	closeEffect	: 'elastic',

    	helpers : {
    		title : {
    			type : 'inside'
    		}
    	}
    });

    $("#single_3").fancybox({
    	openEffect : 'none',
    	closeEffect	: 'none',
    	helpers : {
    		title : {
    			type : 'outside'
    		}
    	}
    });

    $("#single_4").fancybox({
    	helpers : {
    		title : {
    			type : 'over'
    		}
    	}
    });
});
</script>
</head>
<body>

<a id="single_1" href="http://farm2.staticflickr.com/1661/24170619595_ca34ef74d9_b.jpg" title="Bos 3 (p.vanhaastrecht)">
	<img src="http://farm2.staticflickr.com/1661/24170619595_ca34ef74d9_m.jpg" alt="" />
</a>
<a id="single_2" href="http://farm2.staticflickr.com/1514/23919332220_60b7867d60_b.jpg" title="the forest at dawn (Luca-Anconetani)">
	<img src="http://farm2.staticflickr.com/1514/23919332220_60b7867d60_m.jpg" alt="" />
</a>
<a id="single_3" href="http://farm2.staticflickr.com/1669/23976340262_a5ca3859f6_b.jpg" title="Twilight Memories (doraartem)">
	<img src="http://farm2.staticflickr.com/1669/23976340262_a5ca3859f6_m.jpg" alt="" />
</a>
<a id="single_4" href="http://farm2.staticflickr.com/1459/23610702803_83655c7c56_b.jpg" title="Electrical Power Lines and Pylons disappear over t.. (pautliubomir)">
	<img src="http://farm2.staticflickr.com/1459/23610702803_83655c7c56_m.jpg" alt="" />
</a>
</body>
</html>
