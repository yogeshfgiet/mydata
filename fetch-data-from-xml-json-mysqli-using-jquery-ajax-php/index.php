<!DOCTYPE html>
<html>
  <head>
    <title>Fetch data from XML, JSON & MySQLi using jQuery Ajax & PHP</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
  <h2>Fetch data from XML, JSON &amp; MySQLi using jQuery Ajax &amp; PHP example.&nbsp;&nbsp;&nbsp;=&gt; <a href="http://www.phpgang.com/">Home</a> | <a href="http://demo.phpgang.com/">More Demos</a></h2>
    <div id="container">
      <div id="body">
        <div class="height20"></div>
        <div class="title" style="text-align: center;" >Fetching names of countries from different sources.</div>
        <article>
          <table class="bordered">
            <tr>
              <th width="33%">Fetch from XML file</th>
              <th width="33%">Fetch from JSON file</th>
              <th width="34%">Fetch MySql Database</th>
            </tr>
            <tr>
              <th><button type="button" onclick="fetchfromXMLfile();">Load Data</button></th>
              <th><button type="button" onclick="fetchfromJsonfile();">Load Data</button></th>
              <th><button type="button" onclick="fetchfromMysqlDatabase();">Load Data</button></th>
            </tr>
            <tr>
              <td id="res1" width="33%" style="text-align: left;vertical-align: middle;"></td>
              <td  width="33%" id="res2"  style="text-align: left;vertical-align: middle;"></td >
              <td  width="33%" id="res3"  style="text-align: left;vertical-align: middle;"></td>
            </tr>
          </table>
        </article>
        
      </div>
    </div>
    <script src="jquery-1.9.0.min.js"></script>
    <script type="text/javascript">
                function fetchfromMysqlDatabase() {
                  $.ajax({
                    type: "GET",
                    dataType: "html",
                    url: "getrecords.php",
                    cache: false,
                    beforeSend: function() {
                       $('#res3').html('loading please wait...');
                    },
                    success: function(htmldata) {
                       $('#res3').html(htmldata);
                    }
                  });
                }

                function fetchfromXMLfile() {
                  $.ajax({
                    type: "GET",
                    dataType: "xml",
                    url: "sample.xml",
                    cache: false,
                    beforeSend: function() {
                      $('#res1').html('loading please wait...');
                    },
                    success: function(xmldata) {
                      var str = '';
                      str += '<ul>';
                      $(xmldata).find('country').each(function() {
                        str += '<li>' + $(this).find('title').text() + ' - ' + $(this).find('capital').text() + '</li>';
                      });
                      str += '</ul>';
                      $('#res1').html(str);

                    }
                  });
                }

                function fetchfromJsonfile() {
                  $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "sample.json",
                    cache: false,
                    beforeSend: function() {
                      $('#res2').html('loading please wait...');
                    },
                    success: function(jsondata) {
                      
                      var str = '';
                      str += '<ul>';
                      $.each(jsondata, function(idx, obj) {
                        str += '<li>' + obj.title + ' - ' + obj.capital + '</li>';
                      });
                      str += '</ul>';
                      $('#res2').html(str);
                    }
                  });
                }

    </script>
  </body>
</html>
