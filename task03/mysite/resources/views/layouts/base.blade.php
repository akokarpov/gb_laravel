
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script async src="{% static 'myshop_app/js/cart_script.js' %}"></script>
    <link rel="shortcut icon" type="image/png" href="{% static 'myshop_app/favicon.ico' %}"/>
    <link rel="stylesheet" href="{% static 'myshop_app/css/stylesheet.css' %}">
    <title>PHP site</title>
</head>
<body>
<h1>Base template layout</h1>

@yield('content')

</body>
</html>