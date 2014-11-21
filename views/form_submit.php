<h1>Partagez votre fichier</h1>
<?php /* envoi du mail sur la meme page pour avoir la validation en php ci-dessous */ ?>
<section class="form_send"><p>Votre fichier a été uploadé avec succès, veuillez renseigner le formulaire ci-dessous :</p>
<form action=""  method="">
    <label>Votre email</label><input type="text" name="my_email" />
    <?php /* Si authentifié donne droit à envoyer à plusieurs emails */ ?>
    <label>Email de vos contacts</label><input type="text" name="email_all_contact" />
    <?php /* Sinon */ ?>
    <label>Email de votre contact</label><input type="text" name="email_contact" />
    <?php /* si authentifié : Déterminer la pérennité d’un élément envoyé */ ?>
    <label>Indiquer la pérennité du fichier</label><input type="datetime" name="perennite_files" value="">
    <label>Message</label>
    <textarea cols="10" rows="4" name="message"></textarea>
    <input type="submit" value="Envoyer" />
</form>
</section>

<section class="after_send">
    <?php /* si erreur dans l'envoi */ ?>
    <div id="error">Le formulaire n'a pas été envoyé car il y a une erreur.</div>
    <?php /* si pas erreur dans l'envoi */ ?>
    <div id="valid">Le formulaire a bien été envoyé.</div>
</section>