<!DOCTYPE html>
<html>
    <head>
        <title>JSON</title>
    </head>
    <body>
        <!-- json object's-->
        <p id="para1">This is paragraph 1.</p>
        <script type="text/javascript">
            var text = '{"name":"yuvraj","course":"bca"}';
            var obj = JSON.parse(text);
            document.getElementById("para1").innerHTML = "Hi " + obj.name + ", Your Choosen course is " + obj.course;</script>

        <p id="para2"></p>
        <!-- JavaScrpit array-->
        <script>
            var self = [
                {
                    "firstname": "Yuvraj",
                    "lastname": "Singh"
                },
                {
                    "firstname": "yuv",
                    "lastname": "singh"
                }
            ];
            //var obj = JSON.parse(self);
            document.getElementById("para2").innerHTML = self[0].firstname + " " + self[0].lastname;</script>


        <p id="para3"></p>
        <script>
            var text = '{"self":[' +
                    '{"firstname":"yuvraj","lastname":"Singh"},' +
                    '{"firstname":"yuv","lastname":"Singh"}]}';
            var obj = JSON.parse(text);
            document.getElementById("para3").innerHTML = obj.self[0].firstname;
        </script>

        <!-- json httprequest -->
        <p id="para3"></p>
        <script>
            var xmlhttp = new XMLHttpRequest();
            var url = "myself.txt";
            
            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    var myArr = JSON.parse(xmlhttp.responseText);
                    myFunction(myArr);
                }
            }
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
            function myFunction(arr){
                var out = "";
                var i;
                for(i=0;i< arr.length; i++){
                    out += "hi " + arr[i].firstname + " " + arr[i].lastname + "<br>";
                }
                document.getElementById("para3").innerHTML = out;
            }
        </script>
    </body>
</html>