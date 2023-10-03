<style>
    form {
  /* On centre le formulaire */
  margin: 0 auto;
  width: 400px;
  /* Le contour du formulaire */
  padding: 1em;
  border: 1px solid #ccc;
  border-radius: 1em;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

form li + li {
  margin-top: 1em;
}

label {
  /* Taille et alignement uniformes */
  display: inline-block;
  width: 90px;
  text-align: right;
}

input,
textarea {
  /* On s'assure que les champs texte ont la même police
     Par défaut, les zones de texte ont une police à chasse
     fixe. */
  font: 1em sans-serif;

  /* Taille uniforme pour des champs */
  width: 300px;
  box-sizing: border-box;

  /* On utilise la même bordure que pour le formulaire */
  border: 1px solid #999;
}

input:focus,
textarea:focus {
  /* On rajoute une mise en avant pour les éléments avec
     le focus. */
  border-color: #000;
}

textarea {
  /* On aligne les textes sur plusieurs lignes avec leur
     libellé. */
  vertical-align: top;

  /* On fournit un peut d'espace pour saisir du texte. */
  height: 5em;

  /* On permet de redimensionner verticalement. */
  resize: vertical;
}

.button {
  /* On aligne les boutons avec les champs texte. */
  padding-left: 90px; /* La même taille que les libellés */
}

button {
  /* Une marge supplémentaire représentant approximativement
     le même espace qu'entre les libellés et les champs. */
  margin-left: 0.5em;
}
</style>
 <form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="last_name" required="true">
    </div>
    <div>
      <label  for="prénom">Prénom :</label>
      <input  type="text"  id="prenom"  name="first_name" required="true">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required="true">
    </div>
    <div>
      <label  for="tel">Téléphone :</label>
      <input  type="tel"  id="tel"  name="tel" required="true">
    </div>
    <select name="sujet">
      <option value="">Veuillez choisir un sujet :</option>
      <option value="Retour Client">Retour client</option>
      <option value="Requête"> Requête</option>
      <option value="Demande fournisseur"> Demande fournisseur</option>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message" required="true"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
  