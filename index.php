

<html>

<head>
</head>

<body>
    <p>Hello the time is <span id=time></span></p>
    <script src="index.js"></script>
</body>

</html>


<?php

$now = date("Y-m-d h:i:sa");
echo "Hello, the time is: $now";
echo phpinfo();
?>