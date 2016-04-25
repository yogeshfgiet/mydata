<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <title>Selectors/Traversing</title>
        <script src="jquery/jquery-1.11.3.min.js"></script>
        <script src="jquery/jq.js"></script>

        <style>
            li{
                list-style-type: none;
            }
        </style>
    </head>
    <body>

        <form id="method="post" action="index.php">
               <fieldset style="width: 300px; border-radius: 8px; background-color: aquamarine; alignment-baseline: central;">
                    <center><h4 style="margin-top: 5px; color: tomato">Manage Permission</h4></center>
                    <div style="height: 2px; margin-top: -15px;"><hr></div>
                    <ul>
                        <li style="background-color: pink;">
                            <input type="checkbox" name="p1" id="p1Id">Property
                        
                            <ul id="a" style="background-color: pink;">
                            <li><input type="checkbox" name="c1" id="c1Id">Edit Property</li>
                            <li><input type="checkbox" name="c2" id="c2Id">Add Property</li>
                            <li><input type="checkbox" name="c3" id="c3Id">Remove Property</li>
                        </ul>
                            </li>

                        <li style="background-color: lightgreen;">
                            <input type="checkbox" name="p2" id="p2Id">Testimonial
                        
                        <ul style="background-color: lightgreen;">
                            <li><input type="checkbox" name="cc1" id="cc1Id">Add</li>
                            <li><input type="checkbox" name="cc2" id="cc2Id">Remove</li>
                            <li><input type="checkbox" name="cc3" id="cc3Id">View</li>
                            <li><input type="checkbox" name="cc4" id="cc4Id">Edit</li>
                        </ul>
                            </li>

                        <li style="background-color: lightgray;">
                            <input type="checkbox" name="p3" id="p3Id">Users
                        
                        <ul style="background-color: lightgray;">
                            <li><input type="checkbox" name="ccc1" id="ccc1Id">Edit User</li>
                            <li><input type="checkbox" name="ccc2" id="ccc2Id">View User List</li>
                            <li><input type="checkbox" name="ccc3" id="ccc3Id">Add User</li>
                        </ul>
                            </li>

                        <li style="background-color: tomato">
                            <input type="checkbox" name="p4" id="p4Id">Membership
                        
                        <ul style="background-color: tomato">
                            <li><input type="checkbox" name="cccc1" id="cccc1Id">Edit Membership</li>
                            <li><input type="checkbox" name="cccc2" id="cccc2Id">Remove Membership</li>
                            <li><input type="checkbox" name="cccc3" id="cccc3Id">Add Membership</li>
                        </ul>
                            </li>

                    </ul>


                </fieldset>
        </form>
        
        <script>
        
        </script>
        <?php
        // put your code here
        ?>
    </body>
</html>
