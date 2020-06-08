<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link rel = "icon" href = "https://cdn.pixabay.com/photo/2020/02/27/14/35/connection-4884862_1280.jpg">
	<meta name="keywords" content="News on COVID 19, and help to fundraise for the people in need. " />
	<meta name="description" content="We want to educate people on the dangers of covid 19 and we want to help the people in need by providing the hospitals with more money. We can do that only through fundraising. " />
	<meta name="author" content="COVIDFundRaisers" />
	<meta name="dcterms.rights" content="Copyright &copy; 2020 Covidfunds, All Right Reserved" />
  <title>Fundraising</title>
  <style>
  
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  background: url('img/bg.jpg') no-repeat center;
  background-size: cover;
  font-family: sans-serif;
}
.login-wrapper {
  height: 100vh;
  width: 100vw;
  display: flex;
  justify-content: center;
  align-items: center;
}
.form {
  position: relative;
  width: 100%;
  max-width: 380px;
  padding: 80px 40px 40px;
  background: rgba(0,0,0,0.7);
  border-radius: 10px;
  color: #fff;
  box-shadow: 0 15px 25px rgba(0,0,0,0.5);
}
.form::before {
  content:'';
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: rgba(255,255,255, 0.08);
  transform: skewX(-26deg);
  transform-origin: bottom left;
  border-radius: 10px;
  pointer-events: none;
}
.form img {
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
  width: 100px;
  background: rgba(255,255,255, 0.8);
  border-radius: 50%;
}
.form h2 {
  text-align: center;
  letter-spacing: 1px;
  margin-bottom: 2rem;
  color: #ff652f;
}
.form .input-group {
  position: relative;
}
.form .input-group input {
  width: 100%;
  padding: 10px 0;
  font-size: 1rem;
  letter-spacing: 1px;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background-color: transparent;
  color: inherit;
}
.form .input-group label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 1rem;
  pointer-events: none;
  transition: .3s ease-out;
}
.form .input-group input:focus + label,
.form .input-group input:valid + label {
  transform: translateY(-18px);
  color: #ff652f;
  font-size: .8rem;
}
.submit-btn {
  display: block;
  margin-left: auto;
  border: none;
  outline: none;
  background: #ff652f;
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}
.forgot-pw {
  color: inherit;
}

#forgot-pw {
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  top: 0;
  left: 0;
  right: 0;
  height: 0;
  z-index: 1;
  background: #fff;
  opacity: 0;
  transition: 0.6s;
}
#forgot-pw:target {
  height: 100%;
  opacity: 1;
}
.close {
  position: absolute;
  right: 1.5rem;
  top: 0.5rem;
  font-size: 2rem;
  font-weight: 900;
  text-decoration: none;
  color: inherit;
}
.ol{
  font-size: 15pt;
}
  .ol:hover{
  text-decoration: underline;
}
.ol:focus{
  color: darkorange;
}
 .goog-logo-link {
        display:none !important;
      } 

      .goog-te-gadget{
        color: transparent !important;
      }
      .goog-te-banner-frame.skiptranslate {
        display: none !important;
        } 
      body {
        top: 0px !important; 
      }
  
  
  </style>
</head>
<body>


  <div class="login-wrapper">
    <form action="index.php" class="form" onsubmit = "return checkforblank();">
      <img src="img/avatar.png" alt="">
      
      <center><a href = "index.php" style = "font-size: 14pt; margin-top: 0px;" class = "ol" Title = "Go back to main page">🏠</a></center>
      <h2 style = "margin: -3px;">Fundraise</h2>
      <center>
      <div id="google_translate_element" style = "margin-left: 70px;"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</center><br>
      <p id = "error"></p>
      <div class="input-group">
        <input type="text" name="loginUser" id="loginUser">
        <label for="loginUser">Name</label>
      </div>
      <div class="input-group">
        <input type="text" name="credNum" id="credNum">
        <label for="credNum">Credit Card Number</label>
      </div>
      <div class="input-group">
        <input type="number" name="mon" id="mon">
        <label for="mon">Amount of money (enter number)</label>
      </div>
      <input type="submit" value="Donate" class="submit-btn">
      <a href="#forgot-pw" class="forgot-pw">Why we fundraise?</a>
    </form>

    <div id="forgot-pw">
      <form action="" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Why we fundraise?</h2>
        <div class="input-group">
          <p>We fundraise because we want to help people in need of help who have COVID 19. We want to also help with the development of vaccines. All the money we receive will go towards the cause of COVID 19!</p>
        </div>
      </form>
    </div>
  </div>
  <script>
function checkforblank(){
  var errorM = "";
  if (document.getElementById("loginUser").value == ""){
    errorM += "Name is blank <br>";
    document.getElementById("loginUser").style.borderColor = "red";
  }else if (!(isNaN(document.getElementById("loginUser").value))){
    errorM += "Name cannot be a number <br>";
    document.getElementById("loginUser").style.borderColor = "red";
  }else{
    document.getElementById("loginUser").style.borderColor = "gray";
  }
  if (document.getElementById("credNum").value == ""){
    errorM += "Credit Number is blank <br>";
    document.getElementById("credNum").style.borderColor = "red";
  }else if (isNaN(document.getElementById("credNum").value)){
    errorM += "It has to be a number <br>";
    document.getElementById("credNum").style.borderColor = "red";
  }else if (document.getElementById("credNum").value.length != 16){
    errorM += "Credit card number must be 16 digits <br>";
    document.getElementById("credNum").style.borderColor = "red";
  }else{
    document.getElementById("credNum").style.borderColor = "gray";
  }
  if (document.getElementById("mon").value == ""){
    errorM += "Amount of money is blank";
    document.getElementById("mon").style.borderColor = "red";
  }else if(isNaN(document.getElementById("mon").value)){
    errorM += "Money has to be a number";
    document.getElementById("mon").style.borderColor = "red";
  }else{
    document.getElementById("mon").style.borderColor = "gray";
    
  }
  if (errorM != ""){
    document.getElementById("error").innerHTML = errorM;
    document.getElementById("error").style.border = "1px solid red";
    return false;
  }else{
    var o = confirm("Are you sure you want to fund us?");
    if (!o){
      return false;
    }else{
      alert("Thank you for the donation! :)");
    }
  }
}
</script>
</body>
</html>
