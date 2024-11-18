<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style type="text/css">

        *
        {
            font-family: lato;
        }
        table{

            border: 1px;
            align: center;
            border-style: groove;
            border-radius: 15px;
            border-collapse: none;
            box-shadow: 1px 10px 10px 10px rgba(86, 85, 85, 0.299);
            height
            width: 500px;
            background: rgba(255, 255, 255, 0.24);

            align:center;
            align-items:center;

            padding: 30px;
            top: 50%;
            position: absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%, -50%);
        }

        table th{
            font-family: lato black;
            font-size: 25px;
        }

        table td{
            align: center;
            font-size: 17px;
        }

        body{
            background-image: url("joeps.jpg");
            background-position: center;
            background-size: cover ;
            background-attachment: fixed;
        }


    </style>
    <title>Confirm Ride Details</title>
</head>



<?php 

    require_once("con.php");
    $query = " select * from cdtls where bid='101' ";
    $result = mysqli_query($con,$query);

?>

<body class="bg">
    <table cellpadding="15px" cellspacing="10px">
        <tr>
        <th> BUS ID </th>
        <th> BUS Name </th>
        <th> Arrival </th>
        <th> Departure  </th>
        <th> FARE </th>
        </tr>

        <?php 
            while($row=mysqli_fetch_assoc($result))
                 {
                    $BusID = $row['bid'];
                    $BusName = $row['bname'];
                    $Arrival = $row['barr'];
                    $Departure = $row['bdep'];
                    $Fare = $row['bprice']
        ?>
            <tr>
                <td><?php echo $BusID ?></td>
                <td><?php echo $BusName ?></td>
                <td><?php echo $Arrival ?></td>
                <td><?php echo $Departure ?></td>
                <td><?php echo $Fare ?></td>
            </tr>
        <?php
                 }
        ?>

    </table>
</body>