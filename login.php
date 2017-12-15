<html>
    <head>
    <title>
        LOGIN
    </title>
    </head>
    <script>
        function checkForm(Form) {
            var username = document.getElementsByName("username")[0].value;
            var password = document.getElementsByName("password")[0].value;
            if (username == "") return false;
            if (password == "") return false;
            return true;
        }
    </script>
    <body>
        <form onsubmit="return checkForm(this);" method="post" action="/result-list.php">
            <label>
                Username:
            </label>
            <input type="text" name="username" />
            <label>
                Password:
            </label>
            <input type="password" name="password" />
            <button type="submit">SUBMIT</button>
        </form>
    </body>
</html>