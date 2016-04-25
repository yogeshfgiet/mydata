<!DOCTYPE html>
<html>
    <head>
        <title>JSON with php_mysql(Jquery ajax)</title>
        <script src="jquery.js"></script>
        <script>
        </script>
        <style>
            table, th , td {
                border: 1px solid grey;
                border-collapse: collapse;
                padding: 5px;
            }
            table tr:nth-child(odd) {
                background-color: #f1f1f1;
            }
            table tr:nth-child(even) {
                background-color: #ffffff;
            }
            th{
                background-color: #ddd;
            }
        </style>
    </head>
    <body>
        <h2>JSON with php_mysql(Jquery ajax)</h2>
        <div id="json"></div>
        <script>
            $(window).load(function() {
                $.ajax({
                    url: 'connection.php',
                    type: 'POST',
                    success: function() {
                        $.getJSON('result.json', function(data) {
                            myFunction(data);
                        });
                    }
                });
                setInterval('autoRefresh()', 5000);
            });
            function autoRefresh() {
                $.ajax({
                    url: 'connection.php',
                    type: 'POST',
                    success: function() {
                        $.getJSON('result.json', function(data) {
                            myFunction(data);
                        });
                    }
                });
            }
            function myFunction(response) {
                var arr = response;
                var i;
                var out = "<table><tr><th>NAME</th><th>EMAIL</th><th>MESSAGE</th><th>DATE</th></tr>";
                for (i = 0; i < arr.length; i++) {
                    out += "<tr><td>" +
                            arr[i].name +
                            "</td><td>" +
                            arr[i].email +
                            "</td><td>" +
                            arr[i].message +
                            "</td><td>" +
                            arr[i].date +
                            "</td></tr>";
                }
                out += "</table>";
                $("#json").html(out);
            }
        </script>
    </body>
</html>