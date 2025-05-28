<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pensons Social</title>
    <link rel="stylesheet" href="../CSS/styles.css">
</head>
<body>
    <header>
        <h1 class="title">Pensons Social</h1>
        <nav>
            <ul>
                <li><a <?php if($page=='index'){echo'class="style-active-link"';}?> href="../index.php">Accueil</a></li>
                <li><a <?php if($page=='apropos'){echo'class="style-active-link"';}?> href="../apropos.php">À propos</a></li>
                <!--<li><a <?php if($page=='actualites'){echo'class="style-active-link"';}?> href="../actualites.php">Actualités</a></li>-->
                <!--<li><a <?php if($page=='ressources'){echo'class="style-active-link"';}?> href="../ressources.php">Ressources</a></li>-->
                <!--<li><a <?php if($page=='forum'){echo'class="style-active-link"';}?> href="../forum.php">Forum</a></li>-->
                <li><a <?php if($page=='faq'){echo'class="style-active-link"';}?> href="../faq.php">FAQ</a></li>
                <li><a <?php if($page=='contact'){echo'class="style-active-link"';}?> href="../contact.php">Contact</a></li>
                <!--<li><a <?php if($page=='connexion'){echo'class="style-active-link"';}?> href="../dbconnect/formulaire/connexion.php">Connexion</a></li>-->
            </ul>
        </nav>
    </header>


    <div class="parcoursuph">
        <div class="h">
            <h1>
            📌 Qu’est-ce que Parcoursup ?
            </h1>

            <p id="p2entete">
            Parcoursup est la plateforme nationale de préinscription aux formations post-bac en France. 
            Elle permet aux lycéens, étudiants en réorientation et candidats internationaux de postuler à 
            diverses formations : universités, écoles d’ingénieurs, BTS, BUT, classes préparatoires, etc.
            </p>
        </div>

        <div class="h">
            <h2>
            🛠️ Les étapes du processus
            </h2>

            <p>
            1️⃣ Inscription sur Parcoursup : création d’un compte et découverte des formations.<br><br>
            2️⃣ Saisie des vœux : jusqu’à 10 vœux (avec ou sans sous-vœux) sans classement.<br><br>
            3️⃣ Finalisation du dossier : rédaction du projet de formation motivé et ajout des pièces demandées.<br><br>
            4️⃣ Réception des réponses : acceptation, refus ou liste d’attente des établissements.<br><br>
            5️⃣ Validation du choix final : confirmation d’une formation pour l’année suivante.<br><br>
            </p>
        </div>

        <div class="h">
            <h2>
            🎯 Stratégies pour bien choisir ses formations
            </h2>

            <p>
            ✔️ Diversifier ses choix : ne pas se limiter aux formations les plus sélectives.<br><br>
            ✔️ Se renseigner sur les prérequis : vérifier les attendus pour chaque formation.<br><br>
            ✔️ Anticiper les alternatives : avoir un plan B en cas de refus.<br><br>
            ✔️ Prendre en compte les débouchés professionnels : s’assurer que la formation correspond à son projet.<br><br>
            </p>
        </div>

        <div class="h">
            <h2>
            📝 Rédiger un projet de formation motivé efficace
            </h2>

            <p>
            Votre lettre de motivation doit être claire et convaincante :<br><br>
            ✅ Expliquer pourquoi vous avez choisi cette formation.<br><br>
            ✅ Mettre en avant vos compétences et expériences en lien avec la formation.<br><br>
            ✅ Montrer votre intérêt pour le domaine et vos ambitions professionnelles.<br><br>
            ✅ Personnaliser chaque projet de formation en fonction de l’établissement.<br><br>
            </p>
        </div>
            
    </div>

    <section id="forum">
        <h1>Ressources et Conseils</h1>
        <p class="p">Découvrez des informations pratiques et des conseils essentiels pour vous accompagner dans vos démarches.</p>
        <div class="forum-categories">
            
            <div class="category" id="campusfrance" style="border-left: 5px solid #2c3e50;">
                <h3><a href="campusfrance.php">Campus France</a></h3>
                <p>Discutez des démarches et procédures.</p>
            </div>
            </a>

            
                <div class="category" id="parcoursup" style="border-left: 5px solid #f39c12 ;">
                    <h3><a href="parcoursup.php">Parcoursup</a></h3>
                    <p>Échangez sur les choix de formation et les candidatures.</p>
            </div>
            

            
                <div class="category" id="viestudent" style="border-left: 5px solid #e74c3c;">
                <h3><a href="viestudent.php">Vie Étudiante </a></h3>
                <p>Logement, budget, adaptation en France.</p>
            </div>
           
        </div>
    </section>
    
        <h4 id="parcoursuph4">
            💬 Vous avez une question sur Parcoursup ? 
            Partagez vos expériences et obtenez des conseils en rejoignant 
            notre communauté d’étudiants ! 🚀<a href="../contact.php">Lien</a>
        </h4>

    <?php 
        include '../include/linkincludefooter.php';
    ?>