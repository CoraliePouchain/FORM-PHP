<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/thanks.php" method="post">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="lname">Prénom :</label>
            <input type="text" id="lname" name="last_name">
        </div>
        <div>
            <label for="mail">e-mail :</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="tel">Téléphone :</label>
            <input type="tel" id="tel" name="phone_number">
        </div>
        <div>
        <label for="objet">Objet:</label>
        <select name="objet" id="objet">
            <option value="reclam">Réclamation</option>
            <option value="retour">Retour</option>
            <option value="refund">Remboursement</option>
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