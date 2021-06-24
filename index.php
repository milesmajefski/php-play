<html>

<head>
    <?php

    $now = date("Y-m-d h:i:sa");
    echo "Hello, the php time is: $now";

    $servername = "klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306";
    $username = "jomlra4mx6o34szs";
    $password = "c3rbhwu3evlxstlr";
    $dbname = "km6p8bs78qpiul1k";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "DB connected.";
    } catch (PDOException $e) {
        echo "DB connection failed: " . $e->getMessage();
    }

    $sql = " select id, firstname, lastname, email from Users";

    // echo phpinfo();
    ?>

</head>

<body>
    <table>
        <tr>
            <th>id</th>
            <th>first name</th>
            <th>last name</th>
            <th>email</th>
        </tr>
        <?php foreach ($conn->query($sql) as $row) { ?>
            <tr>
                <td><?php $row["id"] ?></td>
                <td><?php $row["firstname"] ?></td>
                <td><?php $row["username"] ?></td>
                <td><?php $row["email"] ?></td>
            </tr>
        <?php } ?>
    </table>
    <p>Hello the js time is <span id=time></span></p>
    <script src="index.js"></script>
</body>

</html>