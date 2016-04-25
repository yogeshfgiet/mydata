<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="5" />
        <title>JSON with php(ajax)</title>
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
        <h2>JSON with php(ajax)</h2>
        <div id="json"></div>
        <script>
            var xmlhttp = new XMLHttpRequest();
            var url = "connection.php";
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    myFunction(xmlhttp.responseText);
                }
            }
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
            function myFunction(response) {
                var arr = JSON.parse(response);
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
                document.getElementById("json").innerHTML = out;
            }
        </script>
    </body>
</html>