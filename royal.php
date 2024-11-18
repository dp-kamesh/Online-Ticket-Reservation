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
        
        h1{
            text-align: center;
            font-family: lato black;
            padding: 30px;
            color: #27343d;
            margin-top: 100px;
        }

        table th{
            font-family: lato black;
            color: #27343d;
            font-size: 25px;
        }

        table td{
            color: #27343d;
            align: center;
            font-size: 17px;
        }

        body{
            background-image: url("joeps.jpg");
            background-position: center;
            background-size: cover ;
            background-attachment: fixed;
        }

        #confirm{
            font-family: lato black;
            width: 25%;
            height: 50px;
            border: 1px solid;
            background: #d228b06f;
            border-radius: 25px;
            font-size: 18px;
            color: #27343d;
            font-weight: 700;
            cursor: pointer;
            outline: none;
            position: relative;
            top: 330px;
            left:775px;
        }

        #confirm:hover{
            border-color: #d228b06f;
            color: whitesmoke;
            transition: .5s;
        }

        #no{
            font-family: lato black;
            width: 25%;
            height: 50px;
            border: 1px solid;
            background: #d228b06f;
            border-radius: 25px;
            font-size: 18px;
            color: #27343d;
            font-weight: 700;
            cursor: pointer;
            outline: none;
            position: relative;
            top: 330px;
        }

        #no:hover{
            border-color: #d228b06f;
            color: whitesmoke;
            transition: .5s;
        }


    </style>
    <title>Confirm Ride Details</title>
</head>



<?php 

    require_once("conn.php");
    $query = " select * from cdtls where bid='103' ";
    $result = mysqli_query($con,$query);

?>

<body class="bg">
    <h1>CONFIRM YOUR RIDE DETAILS</h1>
    <table cellpadding="15px" cellspacing="10px">
        <tr>
        <th> BUS ID </th>
        <th> BUS NAME </th>
        <th> ARRIVAL </th>
        <th> DEPARTURE  </th>
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
    
    <input type="submit" value="CONFIRM" id="confirm" onClick=window.location.href="seat.html">
    <input type="submit" value="GO BACK" id="no" onClick=window.location.href="sourcecode.html">

</body>