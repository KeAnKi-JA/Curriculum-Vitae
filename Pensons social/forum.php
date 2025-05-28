<?php
$page = "forum";
include 'include/includeheader.php';
?>

<section id="forum-page">
    <h2>Forum de Discussions</h2>
    <p>Rejoignez la communauté et échangez vos expériences sur l'orientation et les études en France.</p>

    <div class="forum-categories">
        <!-- Catégorie Études -->
        <div class="forum-category etudes">
            <h3>Études en France</h3>
            <p>Discussions autour des programmes, des universités, et de la vie académique en France.</p>
            <a href="discussion.php?id=1" class="btn">Participer</a>
            <div class="interactions">
                <span class="likes">12 Likes</span>
                <span class="comments">5 Commentaires</span>
            </div>
        </div>

        <!-- Catégorie Campus -->
        <div class="forum-category campus">
            <h3>Campus France</h3>
            <p>Conseils pratiques pour naviguer sur la plateforme Campus France, de la création de votre dossier à l’obtention de votre visa.</p>
            <a href="discussion.php?id=2" class="btn">Participer</a>
            <div class="interactions">
                <span class="likes">25 Likes</span>
                <span class="comments">8 Commentaires</span>
            </div>
        </div>
       

        <!-- Catégorie Bourses -->
        <div class="forum-category bourses">
            <h3>Bourses et Financements</h3>
            <p>Partage d'informations sur les bourses d’études disponibles pour les étudiants étrangers.</p>
            <a href="discussion.php?id=3" class="btn">Participer</a>
            <div class="interactions">
                <span class="likes">40 Likes</span>
                <span class="comments">10 Commentaires</span>
            </div>
        </div>
    </div>
</section>

<?php 
include 'include/includefooter.php';
?>
