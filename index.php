<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulaire</title>
    </head>
    <body>

        <form  action="/thanks.php"  method="post">
            <div>
                <label  for="nom">Nom :</label>
                <input  type="text"  id="nom"  name="user_name">
            </div>
            <div>
                <label  for="prenom">Prenom :</label>
                <input  type="text"  id="prenom"  name="user_first_name">
            </div>
            <div>
              <label  for="courriel">Courriel :</label>
                <input  type="email"  id="courriel"  name="user_email">
            </div>
            <div>
                <label  for="tel">Téléphone :</label>
                <input  type="tel"  id="tel"  name="user_phone">
            </div>
            <div>
                <label for="subject">Sujet :</label>
                <select name="user_subject">
                    <option value="J'aime les patates" selected="selected">J'aime les patates</option>
                    <option value="Vive les oignons">Vive les oignons</option>
                    <option value="A mort les bananes">A mort les bananes</option>
                    <option value="Avocavirus">Avocavirus</option>
                </select>
            </div>
            <div>
              <label  for="message">Message :</label>
              <textarea  id="message"  name="user_message"></textarea>
            </div>
            <div  class="button">
              <button  type="submit">Envoyer votre message</button>
            </div>
         </form>
    </body>
</html>