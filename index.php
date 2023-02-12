<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
    <meta name="description" content="Yakınlarımı Bul - Depremzede - Akrabanı Bul - Arkadaşını Bul">
    <meta name="author" content="Kaan Öztüzün">
    <meta name="generator" content="Deprem 0.2.0">
    <title>Yakınlarımı Bul Bilgi Havuzu</title>
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
	  .container {
    display: flex;
  }
  .isHidden { display: none; }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom" style="
    justify-content: center;
">
      <a href="index.php">
<p style="
    padding-top: 25px;
    font-size: 55px;
">YAKINLARIMI BUL</p></a>
    </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">YAKININI - ARKADAŞINI - EŞİNİ - AKRABANI BUL</h1>
      <p class="fs-5 text-muted">Kendi durumunuzu, ailenizin, veya tanıdığınızın durumunu buraya not edebilirsiniz. Birisini İsim ve Soyisim kullanarak; direk ona ait bilgileri sorgulayabilirsiniz. <br /> Telefon numaraları veya Email adreslerini kullanarak da bu kişiye ait ilgili olan tüm kayıtlara ulaşabilirsiniz. <br /> Bu kişiye ait bir mesaj bırakabilir veya bu kişiye ait bırakılan bir mesajı okuyabilirsiniz. <br /> Kişinin bulunduğu lokasyonu görebilirsiniz. <br /> <b>İsim benzerliğinden dolayı karmaşa olmaması için mesaj alanını kullanarak detay paylaşabilir ve karışıklılığı minimuma indirgemiş olursunuz. <br />* Doldurulması gereken alanlar.</b></p>
    </div>
  </header>

  <main>
  
<div class="container" id="panel"> 
<script>
  function toggleVisibility() {
    var div = document.getElementById("panel");
    if (div.style.display === "none") {
      div.style.display = "block";
    } else {
      div.style.display = "none";
    }
  }
</script>

  <div class="d-flex panel">

    <div class="row row-cols-1 row-cols-md-1 mb-1" style="
    width: 100%;
">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="margin-right:15px;">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Kayıt Olmak İstiyorum</h4>
          </div>
          <div class="card-body">
            <form method="post" accept-charset="utf-8">
  <table style="width: 100%">
    <tr>
      <td><label for="Name">İsim:<b>*</b></label></td>
      <td><input type="text" class="form-control" id="Name" name="Name"></td>
    </tr>
    <tr>
      <td><label for="Surname">Soyisim:<b>*</b></label></td>
      <td><input type="text" class="form-control" id="Surname" name="Surname"></td>
    </tr>
    <tr>
      <td><label for="CurrentLocation">Bulunduğunuz Konum:<b>*</b></label></td>
      <td><input type="text" class="form-control" id="CurrentLocation" name="CurrentLocation"></td>
    </tr>
    <tr>
      <td><label for="Phone">Telefon / İletişim:</label></td>
      <td><input type="text" class="form-control" id="Phone" name="Phone"></td>
    </tr>
    <tr>
      <td><label for="Email">Mail Adresi:</label></td>
      <td><input type="text" class="form-control" id="Email" name="Email"></td>
    </tr>
    <tr>
      <td><label for="RelatedPerson">Aradığınız Kişi:</label></td>
      <td><input type="text" class="form-control" id="RelatedPerson" name="RelatedPerson"></td>
    </tr>
    <tr>
      <td><label for="Message">Mesajınız:</label></td>
      <td><input type="message" class="form-control" id="Message" name="Message"></td>
    </tr>
		  <tr><td><br />
	  <div class="container">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="kvkkCheckbox">
    <label class="form-check-label" for="kvkkCheckbox">Kişisel verilerimin işlenmesini kabul ediyorum - 
    <a href="https://www.mevzuat.gov.tr/mevzuat?MevzuatNo=6698&MevzuatTur=1&MevzuatTertip=5" target="_blank">KVKK</a>.</label>
  </div>
</div></td></tr>

<td colspan="2" style="
    padding-top: 10%;
">
<input type="submit" class="w-100 btn btn-lg btn-outline-primary" name="submit" value="GÖNDER" style=""></td>
  </table>
</form></div></div></div></div>

<div class="row row-cols-1 row-cols-md-1 mb-1" style="
    width: 100%;
">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="margin-left:15px;">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Yakınımı Aramak İstiyorum</h4>
          </div>
          <div class="card-body">
            
<form method="post" accept-charset="utf-8">
<table style="width: 100%">
  <tr>
    <td><label for="Name">İsim:</label></td>
    <td><input type="text" class="form-control" id="SearchName" name="SearchName"></td>
  </tr>
  <tr>
    <td><label for="Surname">Soyisim:</label></td>
    <td><input type="text" class="form-control" id="SearchSurname" name="SearchSurname"></td>
  </tr>
  <td>
<td style="padding: ;padding: 4%;text-align: center;" 8%"="" text-align:center;"="">
    veya
	</td>
  </td>
  <tr>
    <td><label for="Phone">Telefon:</label></td>
    <td><input type="text" class="form-control" id="SearchPhone" name="SearchPhone"></td>
  </tr><td>
  <td style="padding: ;padding: 4%;text-align: center;" 8%"="" text-align:center;"="">
    veya
	</td>
  </td>
  <tr>
  
    <td><label for="SearchEmail">Email:</label></td>
    <td><input type="text" class="form-control" id="SearchEmail" name="SearchEmail"></td>
  </tr>

<td colspan="2" style="
    padding-top: 10%;
"><input type="submit" class="w-100 btn btn-lg btn-outline-primary" name="search" value="ARA" style="
"></td>
</table>
</form></div></div></div></div></div></div></div>
            <script>
  document.querySelector("form").addEventListener("submit", function(event) {
    if (!document.querySelector("#kvkkCheckbox").checked) {
      alert("KVKK Kişisel Verilerin İşlenmesi kanununu kabul etmek zorundasınız.");
      event.preventDefault();
    }
  });
</script>
<?php
$servername = "localhost";
$username = "username_db";
$password = "password_db";
$dbname = "dbname_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8mb4");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST["submit"])) {
    $Name = strtolower($_POST["Name"]);
    $Surname = strtolower($_POST["Surname"]);
    $CurrentLocation = strtolower($_POST["CurrentLocation"]);
    $Phone = strtolower($_POST["Phone"]);
    $Email = strtolower($_POST["Email"]);
    $RelatedPerson = strtolower($_POST["RelatedPerson"]);
    $Message = strtolower($_POST["Message"]);
    $IPAddress = '';
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $IPAddress = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $IPAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $IPAddress = $_SERVER['REMOTE_ADDR'];
}

    if (empty($Name) || empty($Surname) || empty($CurrentLocation)) {
        echo "<div name='mesaj' style='text-align:center'>İsim, Soyisim, ve Konum alanları boş olamaz!</div>";
    } else {
        $sql =
            "INSERT INTO deprem (Name, Surname, CurrentLocation, Phone, Email, RelatedPerson, Message, IPAddress)
    VALUES ('" .
            $Name .
            "','" .
            $Surname .
            "','" .
            $CurrentLocation .
            "','" .
            $Phone .
            "','" .
            $Email .
            "','" .
            $RelatedPerson .
            "','" .
            $Message .
            "','" .
            $IPAddress .
            "')";

        if ($conn->query($sql) === true) {
            echo "<div name='mesaj' style='text-align:center'>Girmiş olduğunuz bilgi havuza kaydedilmiştir.</div>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

if (isset($_POST["search"])) {
    // Get the form data
    $SearchName = mysqli_real_escape_string($conn, $_POST["SearchName"]);
    $SearchSurname = mysqli_real_escape_string($conn, $_POST["SearchSurname"]);
    $SearchPhone = mysqli_real_escape_string($conn, $_POST["SearchPhone"]);
    $SearchEmail = mysqli_real_escape_string($conn, $_POST["SearchEmail"]);
    // Check if Name or Surname is not empty, or if Phone or Email is not empty
    if (
        (!empty($SearchName) && !empty($SearchSurname)) ||
        (!empty($SearchPhone) || !empty($SearchEmail))
    ) {
        if (!empty($SearchName) && !empty($SearchSurname)) {
            $sql = "SELECT * FROM deprem WHERE Name LIKE '%$SearchName%' AND Surname LIKE '%$SearchSurname%'";
        } else {
            $sql = "SELECT * FROM deprem WHERE Phone LIKE '%$SearchPhone%' OR Email LIKE '%$SearchEmail%'";
        }
        $result = $conn->query($sql);
        echo '<script type="text/javascript">',
            "toggleVisibility();",
            "</script>";
        if ($result->num_rows > 0) {
            echo "<div class='d-flex justify-content-center' style='padding-left:5%; padding-right:5%;'>";
            echo "<table class='table table-bordered'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Adı</th>";
            echo "<th>Soyadı</th>";
            echo "<th>Bulunduğu Yer</th>";
            echo "<th>Telefon</th>";
            echo "<th>Mail</th>";
            echo "<th>Aradığı Kişi</th>";
            echo "<th>Mesaj</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Name"] . "</td>";
                echo "<td>" . $row["Surname"] . "</td>";
                echo "<td>" . $row["CurrentLocation"] . "</td>";
                echo "<td>" . $row["Phone"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "<td>" . $row["RelatedPerson"] . "</td>";
                echo "<td>" . $row["Message"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        } else {
            echo "<div name='mesaj' style='text-align:center'><tr><td colspan='5' class='text-center'>0 sonuç bulundu... Lütfen sonra tekrar deneyiniz. Havuza bilgi her an eklenebilir...</td></tr></div>";
        }
    } else {
        echo "<div name='mesaj' style='text-align:center'><tr><td colspan='5' class='text-center' style='text-align: center'>Lütfen İsim-Soyisim, Telefon veya Mail adresi giriniz.</td></tr></div>";
    }
}
?>

	  	    </main>

 




  <footer class="pt-4 my-md-5 pt-md-5 border-top"><center>
    Bu web sitesi tamamiyle oluşan deprem kaynaklı iletişimsizlik sıkıntısını minimuma indirgeme amacıyla yapılmıştır.<br />Umarız bu bilgi havuzu sevdiklerinize kavuşmanıza sebep olur. <br />
	Bilgilerin hepsi gönüllü kişiler tarafından eklenilmektedir. <br />
	<p>İletişim için bana <!-- AVOID SPAM BOTS --> iletisim@<!-- AVOID SPAM BOTS -->yakinlarimi<!-- AVOID SPAM BOTS -->bul.com adresinden mail atabilirsiniz.</p></center>
  </footer>
</div>


    
  </body>
</html>
