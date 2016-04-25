<!DOCTYPE html>
<html>
    <head>
        <title>JSON with php_mysql(Jquery ajax)</title>
        <script src="jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script> $(document).ready(function() {
                $("#date").datepicker();
            });</script>

        <script>
            $(document).ready(function() {

                $('#submit').click(function(e) {

                    e.preventDefault();

                    $.ajax({
                        type: 'post',
                        url: 'entry.php',
                        data: $('form').serialize(),
                        success: function() {
                            $('input[type=text], textarea').val('');
                            $.ajax({
                                url: 'connection1.php',
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
        </script>
    </head>
    <body>
        <h2>JSON with php_mysql(Jquery ajax)</h2>
        <div id="json"></div>
        <script>
            $(window).load(function() {
                $.ajax({
                    url: 'connection1.php',
                    type: 'POST',
                    success: function(data) {
                        myFunction(data);
                    }
                });
                setInterval('autoRefresh()', 20000);
            });
            function autoRefresh() {
                $.ajax({
                    url: 'connection1.php',
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
                var out = "<table><tr><th>NAME</th><th>EMAIL</th><th>MESSAGE</th><th>DATE</th></tr>";
                for (i = 0; i < 5; i++) {
                    out += "<tr><td>" +
                            obj[i].name +
                            "</td><td>" +
                            obj[i].email +
                            "</td><td>" +
                            obj[i].message +
                            "</td><td>" +
                            obj[i].date +
                            "</td></tr>";
                }
                out += "</table>";
                $("#json").html(out);
            }
        </script>
        <div id="main">
            <form>
                <p>Name<input type="text" id="name" name="name" /></p>
                <p>Email<input type="text" id="email" name="email" /></p>
                <p>Message<textarea id="message" name="message" rows="10" cols="30"></textarea></p>
                <p>Date <input type="text" id="date" name="date" /></p>
                <p><input type="submit" name="submit" id="submit" value="Submit" /></p>
            </form>
        </div>
    </body>
</html>
