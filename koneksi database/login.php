<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sungut</title>
    <link rel="icon" type="image/x-icon" href="image/ai2.jpg">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald:wght@200;400&family=Prompt&display=swap');
        body {
            font-family: 'Open Sans', sans-serif;
            font-family: 'Oswald', sans-serif;
            font-family: 'Prompt', sans-serif;
            background-color: #f2f2f2;
            font-weight: bolder;
        }

        

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: 95%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
            
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        
        @media (max-width: 768px) {
            .container {
                max-width: 100%;
                margin-top: 100px;
            }
        }

        
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome back mok!!</h2>
        <form action="sungutWebLogin.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Insert your username" required>
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" id="password" name="password" placeholder="Insert your password" required>
            </div>
            <div class="form-group">
                <a href="register.php"><p style="font-size: 14px;">don't have an account?</p></a>
            </div>

            

            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
