

<?php

    $page="contact";
    include 'include/includeheader.php';

?>

<section id="contact">
    <h2>Contactez-nous</h2>
    <p>Si vous avez des questions ou souhaitez en savoir plus, n'hésitez pas à nous contacter !</p>

    <div class="contact-form">
        <form action="post_contact.php" method="POST">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="message">Votre message</label>
                <textarea id="message" name="message" rows="7" required></textarea>
            </div>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</section>




<?php 
include 'include/includefooter.php';
?>