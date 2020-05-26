<?php
    date_default_timezone_set('Europe/Zagreb');
 
    if (isset($_POST['subButton'])){ 

        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $mobitel = $_POST['mobitel'];
        $email = $_POST['email'];
        $nazivRestorana = $_POST['nazivRestorana'];
        $opisRestorana = $_POST['opisRestorana'];
        $rating = $_POST['rating'];
        $recommended = $_POST['recommended'];
        $date = date('y-m-d-h-i');

        if( (!isset($ime) || trim($ime) =='') || (!isset($prezime) || trim($prezime) =='') || (!isset($email) || trim($email) =='') || (!isset($nazivRestorana) || trim($nazivRestorana) =='') ){
            echo "<script type='text/javascript'>
                alert('Molimo ispunite nužne podatke');
                </script>";
            header("Refresh:0");
        }else{
            
            $xml = new DOMDocument("1.0", "UTF-8");
            $xml->load('xml/info.xml');
            $rootTag = $xml->getElementsByTagName("root")->item(0);
            $infoTag = $xml->createElement("Info");
            $imeTag = $xml->createElement("Ime", $ime);
            $prezimeTag = $xml->createElement("Prezime", $prezime);
            $mobitelTag = $xml->createElement("Mobitel", $mobitel);
            $emailTag = $xml->createElement("Email", $email);
            $restoranTag = $xml->createElement("Restoran");
                $nazivTag = $xml->createElement("Naziv", $nazivRestorana);
                $opisTag = $xml->createElement("OpisRestorana", $opisRestorana);
                $ratingTag = $xml->createElement("Rating", $rating);
                $recommendedTag = $xml->createElement("Recommended", $recommended);
                $restoranTag->appendChild($nazivTag);
                $restoranTag->appendChild($opisTag);
                $restoranTag->appendChild($ratingTag);
                $restoranTag->appendChild($recommendedTag);
            $dateTag = $xml -> createElement("Date", $date);
            
            $infoTag->appendChild($imeTag);
            $infoTag->appendChild($prezimeTag);
            $infoTag->appendChild($mobitelTag);
            $infoTag->appendChild($emailTag);
            $infoTag->appendChild($restoranTag);
            $infoTag->appendChild($dateTag);
            $rootTag->appendChild($infoTag);

            $xml->save('xml/info.xml');
            die("Hvala Vam na ispunjavanju!");
            //header("Location: http://www.yoururl.domain/"); 
        }
    }
?>
 
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
    <title>XML Projekt</title>
</head>
 
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <h3 class="mb-5 text-center">Molimo unesite podatke:</h3>
                
                <form action="aplikacija.php" method="POST">
                    
                    <div class="form-group">
                        <label for="ime">Ime:</label>
                        <input title="Vaše ime" type="text" name="ime" class="form-control" id="ime">
                    </div>
                    
                    <div class="form-group">
                        <label for="prezime">Prezime:</label>
                        <input title="Vaše prezime" type="text" name="prezime" class="form-control" id="prezime">
                    </div>
                    
                    <div class="form-group">
                        <label for="mobitel">Mobitel:</label>
                        <input title="Broj mobitela" type="tel" name="mobitel" class="form-control" id="mobitel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}">
                    </div> 
					
					<div class="form-group">
                        <label for="email">E-mail:</label>
                        <input title="Vaš e-mail" type="email" name="email" class="form-control" id="email">
                    </div>
					
					<div class="form-group">
                        <label for="nazivRestorana">Naziv restorana:</label>
                        <input title="Naziv restorana" type="text" name="nazivRestorana" class="form-control" id="nazivRestorana">
                    </div>
					
					<div class="form-group">
                        <label for="opisRestorana">Opis restorana:</label>
                        <textarea title="Opis restorana" class="form-control" name="opisRestorana" id="opisRestorana" rows="3"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="rating">Vaša ocjena restorana</label>
                        <input type="range" name="rating" class="custom-range" min="1" max="5" step="1" id="rating">
                    </div>
 
                    <label for="rating">Predlažete li restoran?</label>
                    <select class="custom-select" name="recommended" id="recommended">
                        <option value="yes">Da</option>
                        <option value="no">Ne</option>
                    </select>
 
                    <button name="subButton" type="submit" class="btn btn-primary btn-dark float-right mt-3">Pošalji</button>
                </form>
 
            </div>
        </div>
        <div class="mb-5"></div>
    </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
 
</html>