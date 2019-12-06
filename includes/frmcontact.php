
<form action="index.php?page=contact" method="post">
  <div>
  <label for="nom">Nom :</label><br />
  <input type="text" name="nom" id="nom"/><br />
  </div>
  <div>
  <label for="prenom">Prénom :</label><br />
  <input type="text" name="prenom" id="prenom"/><br />
  </div>
  <div>
  <label for="email">E-mail :</label><br />
  <input type="email" name="email" id="email"/><br />
  </div>
  <div>
  <label for="msg">Message :</label>
      <textarea name="msg" id="msg"></textarea>
  </div>
  <div>
  <input type="submit" value="Envoyer"/><br />
  </div>
  <input type="hidden" value="frmcontact"/><br />
</form>
