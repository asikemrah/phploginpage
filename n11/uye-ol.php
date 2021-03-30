<html> 
<head>
<meta charset="utf-8">
<title>Üye Ol</title>
<style>
 
html{ background-color:rgba(209,206,206,0.4);
}
 

#form-main{
width:100%;
float:left;
padding-top:0px;
}
	
 
#form {
background-color:white;
padding-left:35px;
padding-right:35px;
padding-top:35px;
padding-bottom:50px;
width: 450px;
float: left;
left: 50%;
position: absolute;
margin-top:30px;
margin-left: -260px;
border-radius: 7px;
border-radius: 7px;
}
	
 .container {
display: block; 
position: relative;
padding-left: 35px;
margin-bottom: 12px;
cursor: pointer;
font-size: 22px;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
 user-select: none;
}


.container input {
position: relative;
opacity: 0;
cursor: pointer;
}


.checkmark {
position: absolute;
top: 0;
left: 0;
height: 25px;
width: 25px;
background-color: #eee;
border-radius: 50%;
}


.container:hover input ~ .checkmark {
 background-color: #ccc;
}


.container input:checked ~ .checkmark {
 background-color: black;
}


.checkmark:after {
content: "";
position: absolute;
display: none;
}


.container input:checked ~ .checkmark:after {
 display: block;
}


.container .checkmark:after {
top: 9px;
left: 9px;
width: 8px;
height: 8px;
border-radius: 50%;
background: white;
}

.buton {
font-weight:500;
font-size: 18px;
border-radius: 0;
line-height: 0px;
background-color: white;
padding: 13px 13px 13px 54px;
margin-bottom: 10px;
width:100%;
box-sizing: border-box;
box-sizing: border-box;
box-sizing: border-box;
box-sizing: border-box;
border: 1px solid black;
}
	
 
.buton:{
background: white;
border: 1px solid black;
color: black;
padding: 13px 13px 13px 54px;
}
 
#name{
background-image: url(images/name.png);
background-size: 30px 30px;
background-position: 11px 8px;
background-repeat: no-repeat;
}
	
#surname{
background-image: url(images/surname.png);
background-size: 30px 30px;
background-position: 11px 8px;
background-repeat: no-repeat;
}
	

#dogrulama{
background-image: url(images/tick.png);
background-size: 30px 30px;
background-position: 11px 8px;
background-repeat: no-repeat;
}
	
#telefon{
background-image: url(images/phone.png);
background-size: 30px 30px;
background-position: 11px 8px;
background-repeat: no-repeat;
}
	
#email{
background-image: url(images/mail.png);
background-size: 30px 30px;
background-position: 11px 8px;
background-repeat: no-repeat;
}
	
 
#sifre{
background-image: url(images/lock.png);
background-size: 30px 30px;
background-position: 11px 8px;
background-repeat: no-repeat;
}
 

	
textarea {
width: 500%;
height: 150px;
line-height: 150%;
resize:vertical;
}
 
	
input:hover, textarea:hover,
input:focus, textarea:focus {
background-color:white;
}
 
	
#gonder{
float:left;
width: 100%;
cursor:pointer;
background-color: green;
color:white;
font-size:24px;
padding-top:22px;
padding-bottom:22px;
transition: all 0.1s;
margin-top:-4px;
font-weight:700;
}
 
	
#gonder:hover{
background-color: limegreen;
color: white;
}
 
  
@media only screen and (max-width: 580px) {
#form{
left: 3%;
margin-right: 3%;
width: 88%;
margin-left: 0;
padding-left: 3%;
padding-right: 3%;
}
}



</style>
</head>


 
<body>
<?php
	$servername="localhost";
    $username="root";
    $password="";
    $dbname="n11";
    $connect= new mysqli($servername,$username,$password,$dbname);
    if($connect->connect_error){
        die("Bağlantı hatası oluştu!");
    }
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST["name"];
        $surname=$_POST["surname"];
        $posta=$_POST["email"];
        $pswrd=$_POST["pswrd"];
        $cinsiyet="";
        $phone=$_POST["telefon"];
        if($_POST['cinsiyet']=="Erkek"){
            $cinsiyet="Erkek";
        }
        else if($_POST['cinsiyet']=="Kadın")
        {
            $cinsiyet="Kadin";
        }
        $dt=$_POST["dateofbirth"];
        $kayit="insert into uyeol(ad,soyad,eposta,sifre,telefon,cinsiyet,dtarihi) values('$name','$surname','$posta','$pswrd','$phone','$cinsiyet','$dt')";
        if($connect->query($kayit)){
        }
        else
        {
            echo "Kayıt Eklenemedi";
        } 
    }
	

?>
<div id="form-main">
<div id="form">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 
 
<p class="name">
<input name="name" type="text" class="buton" placeholder="Adı" id="name" />
</p>


<p class="#surname">
<input name="surname" type="text" class="buton" placeholder="Soyad" id="surname" />
</p>


<p class="email">
<input name="email" type="email" class= "buton" placeholder="E-Posta Adresi" id="email" 
pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" title="Lütfen E-Postayı doğru biçimde giriniz"/>
</p>


<p class="sifre">
<input name="pswrd" type="password" class= "buton" id="sifre" placeholder="Şifre" 
pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
title="En az bir sayı ve bir büyük ve küçük harf ve en az 8 veya daha fazla karakter içermelidir"/>
</p>


<p class="telefon">
<input name="telefon" type="tel" class="buton" pattern="^\d{10}$" placeholder="5554448558" id="telefon" />
</p>




<div style="float: left">
 <label class="container">Erkek
  <input type="radio" name="cinsiyet" value="Erkek">
  <span class="checkmark"></span>
</label></div>


<div style="float: left">
 <label class="container">Kadın
  <input type="radio" name="cinsiyet" value="Kadın">
  <span class="checkmark"></span>
</label></div>

 
 <p>&nbsp;</p>
 <div style= "width: 400x; height: 100px; margin: 0 auto; position:relative">
<label for="dateofbirth"><br>
  <br>
  <br>
  Doğum Tarihi</label>
<input type="date" name="dateofbirth" id="dateofbirth">
</div>

 
<div class="submit">
  <p>
    <input type="submit" value="Üye Ol" id="gonder"/>
  </p>
  <p><a href ="giris-yap.php"/>                  Giriş Yap </p>
</div>
</form>
</div>



 
 
</body>
 
</html>
