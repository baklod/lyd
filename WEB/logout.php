<!DOCTYPE html>
<html lang="en">
<title>CSPC parking managment</title>
<head>
   
    <title>CSPC parking managment</title>
    <style>

body{
background: url('jj.jpg') no-repeat;
background-position: center;
background-size: cover;
min-height: 100vh;
display: flex;
justify-content: center;
align-items: center;
font-family: Georgia, serif  ;
}
.container{
  background-color: transparent;
  backdrop-filter: blur(10px);
  width: 450px;
  padding: 40px 20px ;
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin: auto;
  align-items: center;
  border: 5px solid  hsla(240, 100%, 50%, 0.7);;
  margin-top: 5px;
  border-radius: 20px;
  box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);
}
.container h1{
margin: 20px 0 ;
color:black;
font-family: Georgia, serif  ;
}
.input[type="text"] {
width: 100%;
}
input[type="number"]{
width: 100%;
}
input[type="text"], input[type="number"],input[type="date"],input[type="car"],input[type="time"]{
padding: 1rem;
width: 95%;
margin: 5px;
margin-left: -10px;
border: 2px solid rgba(0,0,0,.2);
border-radius: 20px;  
font-size: 15px;
background-color: transparent;
font-weight: 600;
font-family: Georgia, serif  ;
}
 input[type="number"]::placeholder{
color: black;
}
input[type="text"]::placeholder{
color: black;
}
input[type="car"]::placeholder{
  color: black;
}

.login-btn{
    padding: 10px;
    width: 50%;
    border-radius: 20px;
    border: 2px solid rgba(0, 0, 0,.2);
    font-size: 20px;
    font-weight: 600;
    margin-top: 30px;
    background-color: transparent;
    color: black;
    margin-left: 110px;
    cursor: pointer;
    font-family: Georgia, serif  ;
}
input[type="checkbox"]{
margin-left: 140px;
margin-top: 10px;
}

#rmbr-me{
 font-size: 20px;
 margin-left: 10px;
 color: black;
 font-family: Georgia, serif  ;
}
      .login-btn:active {
        background-color: green;
        cursor: pointer;
        transform: translateY(1px); 
        box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5); 
      }
    </style>
</head>
<body>
    <div class="container">
        <h1>Time Out</h1>

         <form method="post" action="timeout.php">
         <input type="text" name="Owner" placeholder="Car Owner">
          <input type="number" name="Id_number"  placeholder="Id number">
          <input type="car" name="car"  placeholder="Vehicle Brand">
          <input type="text" name="plate"  placeholder="Plate Number">
          <input type="text" id="vehicle_type" name="vehicle_type"  placeholder="Vehicle type">
         <label for="time">Enter Time:</label>
          <input type="time" name="time" id="time" placeholder="Enter Time" required>
          <label for="date">Select a date:</label>
          <input type="date" id="date" name="date" required>
    
     <div class="input">
        <button 
        class="login-btn">log out</button>
      </div>
         <div class="help">
            <div>
                <input type="checkbox"
                id="remember-me"><label for="" id="rmbr-me">Remember Me</label>
            </div>
            
 </form>
 
    </div>
</body>
</html>