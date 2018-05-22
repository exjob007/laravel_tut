<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ ('js/jquery-3.3.1.js') }}"></script>

        <title>Login</title>
    </head>
    <body>
        <div id="Login">
            <form action="Login" method="POST">
            {{csrf_field()}}
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username"></td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><input type="submit" id="btn" value="Sign In"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
