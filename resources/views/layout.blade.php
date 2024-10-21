<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        body,
        html{
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .container1{
            display: flex;
            height: 100%;
        }

        .sidebar{
            flex: 0 0 250px;
            background: #333;
        }

        .sidebar ul{
            list-style: none;
            padding: 0;
        }

        .sidebar ul li{
            padding: 10px;
        }

        .sidebar ul li a{
            color: #fff;
            text-decoration: none;
        }

        .sidebar ul a:hover{
            background: #555;
        }

        .content{
            flex: 1;
            padding: 20px;
        }

    </style>
</head>
<body>
    <div class="container1">
        <nav class="sidebar">
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>

        <main class="content">
            @yield('content')
        </main>
    </div>
</body>
</html>