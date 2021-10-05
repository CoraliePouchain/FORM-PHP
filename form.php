<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require './thanks.php';
?>
    <p>* required field</p>
    <form action="thanks.php" method="post">
        <div>
            <label for="name">Nom :</label>
            <input type="text" name="user_name" id='name'>
            
        </div>
        <div>
            <label for="lname">Prénom :</label>
            <input type="text" name="last_name" id='lname'>
        </div>
        <div>
            <label for="mail">e-mail :</label>
            <input type="email" name="user_mail" id='mail'>
        </div>
        <div>
            <label for="tel">Téléphone :</label>
            <input type="tel" name="phone_number" id='tel'>
        </div>
        <div>
        <label for="object">Objet du message:</label>
        <select name="object" required id="object">
            <option value="Seigneur des Anneaux">Seigneur des Anneaux</option>
            <option value="Hobbit">Hobbit</option>
            <option value="Silmarilion">Silmarilion</option>
        </select>
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
    </form>
    
</body>
</html>