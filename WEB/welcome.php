<html>
<head>
    <title>Welcome Button</title>
    <style>
   
    body{
background: url('jj.jpg') no-repeat;
background-position: center;
background-size: cover;
min-height: 100vh;
display: flex;
justify-content: center;
align-items: center;
font-family: Georgia, serif ;
}
@media screen and (min-width:1024px) {  
    .container{
  background-color: transparent;
  border: none; 
  width: 400px;
  padding: 100px 50px ;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  border-radius: 20px;
  position: absolute;
  height: 100px;
  left: 370px;
  top: 200px;
}
} 
.container h1{
margin: 20px 0 ;
color:black;
font-size: 100px;
color: hsla(240, 100%, 50%, 0.7);
text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}
.container p {
    margin: 20px 0 ;
    color:black;
    font-size: 20px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}
    input[type="submit"] {
            background-color: hsla(240, 100%, 50%, 0.7);
            color: white; 
            border: 2px solid rgba(0, 0, 0,.2);
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 2px;
            cursor: pointer;
            border-radius: 5px; 
            width: 300px;
            font-size: 20px;
            border-radius: 20px;
            transition: transform 0.2s, box-shadow 0.2s;
            font-family: Georgia, serif ;
           
        }

    
        input[type="submit"]:hover {
            transform: translateY(-2px); 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); 

        }
        input[type="submit"]:active {
        background-color: none;
        cursor: pointer;
        transform: translateY(1px); 
        box-shadow: none; 
      }
      
        </style>
</head>
<body>
    <div class="container">
<h1>Welcome!</h1>
    <p>Click the button below to get started:</p>

<form method="post" action="self.php">
    <input type="submit" name="Welcome" value="Time in">
</form>
<form method="post" action="logout.php">
    <input type="submit" name="Welcome" value="Time out">
</form>
    </div>

</body>
</html>