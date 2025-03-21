<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookVault - Login</title>
    <link rel="stylesheet" href="./CSS/loginStyle.css">
</head>
<body>
    <div class="login-container">
        <header class="header">
        <h2>BookVault Login</h2>
        </header>

        <form action="#" method="POST" class="login-form">
            <table>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td><input type="text" id="username" name="username" placeholder="Enter your username" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" id="password" name="password" placeholder="Enter your password" required></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <button type="submit" class="login-button">Login</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>