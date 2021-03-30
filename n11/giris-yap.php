<!doctype html>
<html>
 
<head>
<meta charset="utf-8">
<title>Giriş Yap</title>
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
        $eposta=$_POST["email"];
        $sifre=$_POST["pswrd"];
        $sql="SELECT * FROM uyeol WHERE eposta='$eposta' and sifre='$sifre'";
        $result=mysqli_query($connect,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

        if(mysqli_num_rows($result) == 1)
        {
            echo "Giriş başarılıdır";
        }
        else
        {
            echo "Lütfen bilgilerinizi kontrol ediniz!";
        }
    }
	
	
?>
<div style="text-align:center"><p><h2>GİRİŞ YAP</h2></p> </div>
<div id="form-main">
<div id="form">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 
 
<p>
<input name="email" type="text" class= "buton" placeholder="E-Posta Adresi" id="email" 
pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" title="Lütfen E-Postayı doğru biçimde giriniz"/>
</p>
 
 
<p>
<input name="pswrd" type="password" class= "buton" id="sifre" placeholder="Şifre" 
pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
title="En az bir sayı ve bir büyük ve küçük harf ve en az 8 veya daha fazla karakter içermelidir"/>
</p>
 
 
<div>
<input type="submit" value="Gönder" id="gonder"/>
</div>
</form>
</div>



 
 
</body>
 
</html>
