<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/style.css">
    <title>{{$title}}</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #333;
            padding: 15px 0;
            text-align: center;
        }

        .header ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .header ul li {
            display: inline;
            margin: 0 15px;
        }

        .header ul li a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            font-weight: bold;
        }

        .header ul li a:hover {
            color: #ffcc00;
        }

        div {
            text-align: center;
            margin: 20px;
        }

        p {
            text-align: center;
            color: #555;
            font-size: 16px;
            max-width: 600px;
            margin: 0 auto;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div>
        <div class="header">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Login</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>

        <div>{{$main}}</div>
        <button type="button" class="btn btn-primary">Primary</button>
    </div>

    <div class="footer">
        <p>Footer page</p>
    </div>

</body>

</html>