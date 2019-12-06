<?php
  error_reporting(0);

  if(isset($_POST['submit'])) {
    $check = $_POST['check'];
  }

//Is het alleen letters?
  $alfa = alfabetisch();
  function alfabetisch() {
    if(ctype_alnum($_POST['check'])) {
      echo "Er zitten alleen letters in<br><br>";
    }
    else {
      echo "Er zitten ook cijfers en/of tekens in<br><br>";
    }
  }

//Is het een getal?
  $nummer = nummer();
  function nummer() {
    if(is_numeric($_POST['check'])) {
      echo "Er zitten alleen cijfers in<br><br>";
    } else {
      echo "Er zitten ook letters en/of tekens in<br><br>";
    }
  }

//Is het een postcode?
  $postcode = postcode();
  function postcode() {
    if(preg_match("/[1-9][0-9]{3}[\s]?[A-Za-z]{2}/", $check)) {
      echo "Het is een postcode<br><br>";
    } else {
      echo " Het is geen postcode<br><br>";
    }
  }

//Man of Vrouw?
  $mv = manvrouw();
  function manvrouw() {
    switch($check) {
      case "vrouw":
      case "Vrouw":
        echo "Het is een vrouw<br><br>";
        break;
      case "man":
      case "Man":
        echo "Het is een man<br><br>";
        break;
      default:
        echo "U bent geen man of vrouw<br><br>";
    }
  }

//Is het een email?
  $email = emailadres();
  function emailadres() {
     if (preg_match("[/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/]", $check)) {
       echo "Het is een E-mailadres<br><br>";
     } else {
       echo "Het is geen E-mailadres<br><br>";
     }
   }

//Is het een telefoonnummer?
  $telefoon = telefoonnummer();
  function telefoonnummer() {
    if(preg_match("/^(((0)[1-9]{2}[0-9][-]?[1-9][0-9]{5})|((\\+31|0|0031)[1-9][0-9][-]?[1-9][0-9]{6}))$/", $check)) {
      echo "Het is een telefoonnummer<br><br>";
    } else {
      echo "Het is geen telefoonnummer<br><br>";
    }
  }

//Is het een adres?
  $adres = adres();
  function adres() {
    if (preg_match("/([1-9][e][\s])*([a-zA-Z]+(([\.][\s])|([\s]))?)+[1-9][0-9]*(([-][1-9][0-9]*)|([\s]?[a-zA-Z]+))?$/", $check)) {
      echo "Het is een adres<br><br>";
    } else {
      echo "Het is geen adres<br><br>";
    }
  }

?>
