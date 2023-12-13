<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .info-container {
            margin: 1em auto;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            width: 50%;
            text-align: center;
        }

        .info-container h1 {
            margin-bottom: 20px;
        }

        .info-button {
            margin-top: 1em;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 20px;
            transition: background-color 0.3s;
        }

        .info-button:hover {
            background-color: #0056b3;
        }

        p {
            text-align: justify;
            margin-top: 10px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="info-container">
        <h1>Want to access our services?</h1>
        <p>Creating an account with us is the easiest way to access all these services together. It's free!.</p>
        <button class="info-button" onclick="window.location.href='index.php?page=login'">Login with my user</button>
    </div>
</body>

</html>