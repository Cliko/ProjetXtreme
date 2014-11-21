<h1>Partagez votre fichier</h1>
<?php /* envoi du mail sur la meme page pour avoir la validation en php ci-dessous */ ?>
<section class="form_send"><p>Votre fichier a été uploadé avec succès, veuillez renseigner le formulaire ci-dessous :</p>
<form action=""  method="">
    <label>Votre email</label><input type="text" name="my_email" />
    <label>Email de votre contact</label><input type="text" name="email_contact" />
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