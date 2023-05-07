<?php
// Problem 1
$defstr = "Salary of Employee ";
$salary = array(25000, 30500, 40250, 20125, 35358);
$total_salary = 0;
$num = 0;

for ($i = 0; $i <= sizeof($salary) - 1; $i++) {
    $total_salary += $salary[$i];
}

$name = "";
$your_name = "<br>";

// Problem 2
if (isset($_POST["name"])) {
    $name = $_POST['name'];
    if ($_POST["name"] != "") {
        $your_name = "Your name is: " . $_POST['name'];
    } else {
        $your_name = "<br>";
    }
}

// Problem 3

$smpl_str = 'Aaron Bruce Agaloos BSCS 2A';
$smpl_otpt = preg_replace('/(\b[a-z0-9])/i', '<span style="color:red;">\1</span>', $smpl_str);

?>
<!DOCTYPE html>
<html lang="en" action="%23">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity #6</title>
    <style>
        body {
            background-color: #2e293d;
        }

        h1 {
            margin-left: 35%;
            color: #dddddd;
        }

        #enter {
            border: none;
            border-bottom: 1px solid #dddddd;
            width: 20%;
            text-align: center;
            background: transparent;
            color: #dddddd;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 30%;
            margin-left: auto;
            margin-right: auto;
            color: #dddddd;
        }

        .center {
            margin-left: 35%;
            color: #dddddd;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 3px;
        }
    </style>
</head>

<body>
    <h1>Problem 1</h1>
    <table>
        <tr>
            <td><?php echo $defstr . $num + 1; ?> </td>
            <td><?php echo number_format($salary[$num]);
                $num++ ?>&nbsp;php</td>
        </tr>
        <tr>
            <td><?php echo $defstr . $num + 1; ?> </td>
            <td><?php echo number_format($salary[$num]);
                $num++ ?>&nbsp;php</td>
        </tr>
        <tr>
            <td><?php echo $defstr . $num + 1; ?> </td>
            <td><?php echo number_format($salary[$num]);
                $num++ ?>&nbsp;php</td>
        </tr>
        <tr>
            <td><?php echo $defstr . $num + 1; ?> </td>
            <td><?php echo number_format($salary[$num]);
                $num++ ?>&nbsp;php</td>
        </tr>
        <tr>
            <td><?php echo $defstr . $num + 1; ?> </td>
            <td><?php echo number_format($salary[$num]);
                $num++ ?>&nbsp;php</td>
        </tr>
        <tr>
            <td>TOTAL</td>
            <td><?php echo number_format($total_salary); ?>&nbsp;php</td>
        </tr>
    </table>
    <h1>Problem 2</h1>
    <div class="center">
        <form method="post" action="Agaloos-Act %236.php">
            <span>Enter your name:</span><input id="enter" type="text" name="name" value="<?php echo $name ?>"><br><br>
            <span><?php echo $your_name ?></span>
        </form>
    </div>
    <h1>Problem 3</h1>
    <div class="center">
        <span><i>Sample string:</i><?php echo $smpl_str ?></span><br><br>
        <span>Output: <?php echo $smpl_otpt ?></span>
    </div>

</body>

</html>

<!-- 
    Agaloos, Aaron Bruce L.
    BSCS 2A 
-->