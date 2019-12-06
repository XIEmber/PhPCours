
<form action="index.php?page=contact" method="post">
  <div>
  <label for="nom">Nom :</label>
  <input type="text" name="nom" id="nom"/>
  </div>
  <div>
  <label for="prenom">Prénom :</label>
  <input type="text" name="prenom" id="prenom"/>
  </div>
  <div>
  <label for="email">E-mail :</label>
  <input type="email" name="email" id="email"/>
  </div>
  <div>
  <label for="msg">Message :</label>
  <textarea name="msg" id="msg"></textarea>
  </div>
  <input type="submit" value="Envoyer"/>
  <input type="hidden" value="frmcontact"/>
</form>
