<!DOCTYPE html>
<html>
<head>
    <title></title>
    <Style>
        body{
        background: url('jj.jpg') no-repeat;
        background-position: center;
        background-size: cover;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: sans-serif;
        color:bisque;
        }
        .container{
        background-color: transparent;
        backdrop-filter: blur(10px);
        border: 4px solid hsla(240, 100%, 50%, 0.7);
        width: 300px;
        padding: 100px 20px ;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: auto;
        align-items: center;
        border-radius: 20px;
        position: absolute;
        height: 100px;
        left: 450px;
        top: 100px;
        font-family: Georgia, serif  ;
        font-size: 20px;
        color: black;
        box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5); 
        }
        .container h3{
         color: black;
        }
        
        
    </Style>
</head>
<body>

<div class="container">
        <h3>Your information!</h3>
        
    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $Owner = $_POST["Owner"];
        $Id_number= $_POST["Id_number"];
        $car = $_POST["car"];
        $Plate = $_POST["plate"];
        $vehicleType = $_POST["vehicle_type"];
        $inputTime = $_POST["time"];
        $date = $_POST["date"];
    

        
        if (!empty($Owner) && !empty($Id_number) && !empty($car) && !empty($inputTime) ) {  
        echo "Car Owner: " . $Owner . "<br>";
        echo "Id Number: " . $Id_number . "<br>";
        echo "Vehicle Unit: " . $car . "<br>";
        echo "Plate Number: " . $Plate. "<br>";
        echo "vehicle Type: " . $vehicleType . "<br>";
        echo "Time In: " . $inputTime . "<br>";
        echo "Date: " . $date . "<br>";     
        }else {
        echo "oh shit maderpakers.";
        
               
}
    }
   
    ?>
</body>
</html>