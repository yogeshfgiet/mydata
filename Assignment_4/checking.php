<html>
    <head>
        <title>Checking</title>
        <script src="jquery/jquery-1.11.3.min.js"></script>
        <script src="jquery/aaa.js"></script>
    </head>
    <body>
        <ul class="tree" id="tree">

    <li><input type="checkbox" name="account_settings" value="yes">Account Settings <!-- AND SHOULD CHECK HERE -->
        <ul>
            <li><input type="checkbox" name="one" value="one">AS One</li>
            <li><input type="checkbox" name="two" value="two">AS Two</li>
            <li><input type="checkbox" name="user_roles" value="user_roles">Users &amp; Roles <!-- SHOULD CHECK HERE -->
                <ul>
                    <li><input type="checkbox" name="user_role" value="add">Add</li>
                    <li><input type="checkbox" name="user_role" value="delete">Delete</li> <!-- CHECK HERE -->
                </ul>
            </li>
        </ul>
    </li>

    <li><input type="checkbox" name="rl_module" value="yes">RL Module</li>

    <li><input type="checkbox" name="rl_module" value="yes">Accounting
        <ul>
            <li><input type="checkbox" name="vat" value="yes">VAT</li>
            <li><input type="checkbox" name="bank_account" value="yes">Banking
                <ul>
                    <li><input type="checkbox" name="view" value="yes">View</li>
                    <li><input type="checkbox" name="crud" value="yes">CRUD</li>
                </ul>
            </li>
        </ul>
    </li>

</ul>
        
<!--        <script>
            $('input[type=checkbox]').click(function(){

    // if is checked
    if($(this).is(':checked')){

        // check all children
        $(this).parent().find('li input[type=checkbox]').prop('checked', true);

        // check all parents
        $(this).parent().prev().prop('checked', true);

    } else {

        // uncheck all children
        $(this).parent().find('li input[type=checkbox]').prop('checked', false);

    }

});
        </script>-->
    </body>
</html>