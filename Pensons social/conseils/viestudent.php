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
        <h1>Pensons Social</h1>
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


    <div class="viestudenth">
        
    <div class="h">
            <h1>
            📌 Vie Étudiante
            </h1>

            <p class="intro">
                S’installer en France pour ses études est une expérience enrichissante, mais elle peut aussi être un défi.
                Trouver un logement, gérer son budget et s’intégrer dans un nouvel environnement demandent une 
                bonne préparation. Cette section vous guide à travers les étapes essentielles pour une transition en douceur.
            </p>
        </div>

        <div class="h">

            <h2>
            🏠 Trouver un logement étudiant
            </h2>

            <p>
            Le logement est souvent la première préoccupation des étudiants étrangers. Voici les principales options :<br><br>

            🔹 Les résidences universitaires du CROUS : Loyer abordable, priorité aux boursiers. 📌 Conseil : 
                Postulez tôt via le Dossier Social Étudiant (DSE).<br><br>

            🔹 Les résidences privées : Plus de confort mais loyers plus élevés (Studéa, Les Estudines, etc.).<br><br>

            🔹 La colocation : Un bon moyen de réduire les coûts et de partager son quotidien avec 
                d’autres étudiants. 📌 Conseil : Consultez des sites comme La Carte des Colocs,<br><br>Studapart ou Leboncoin.<br><br>

            🔹 Les aides au logement : La CAF (Caisse d’Allocations Familiales) peut réduire le 
                montant du loyer grâce à l’APL (Aide Personnalisée au Logement).<br><br>
            </p>
        </div>

        <div class="h">

            <h2>
            💰 Gérer son budget en France
            </h2>

            <p class="viestudentp">
                Vivre en France implique des dépenses importantes : logement, alimentation, transport… Voici quelques astuces pour optimiser votre budget :

                         <h3>💡 Les aides financières disponibles :</h3> 

                    ✔️ Les bourses : Certaines sont accessibles aux étudiants étrangers via Campus France ou le gouvernement français.<br><br>
                    ✔️ Les jobs étudiants : Vous pouvez travailler jusqu'à 964 heures par an avec un visa étudiant. 
                    Sites utiles : Indeed, StudentJob, Jobaviz.<br><br>

                            <h3>📌 Astuces pour économiser :</h3> 

                🔹 Transports : Abonnez-vous aux forfaits étudiants (Pass Navigo en Île-de-France, Carte Jeune SNCF).<br><br>
                🔹 Courses : Privilégiez les épiceries solidaires étudiantes et les marchés locaux.<br><br>
                🔹 Sorties : Profitez des réductions étudiantes au cinéma, musées et restaurants.<br><br>
            </p>
        </div>

        <div class="h">

            <h2>
            S’intégrer dans un nouveau pays demande du temps. Voici quelques conseils :<br><br>
            </h2>
            
            <p>
            ✅ Apprendre le français : Si ce n’est pas votre langue maternelle, 
                inscrivez-vous à des cours de FLE (Français Langue Étrangère).<br><br>
            ✅ Se faire des amis : Participez aux événements des associations étudiantes (sport, culture, entraide).<br><br>
            ✅ Découvrir la culture : Explorez les villes, la gastronomie et les 
                traditions françaises pour mieux vous sentir chez vous.<br><br>
            </p>
        </div>

        <div class="h">
            <h2>
                📄 Démarches administratives essentielles
            </h2>

            <p>
                📌 Sécurité sociale : Inscription gratuite sur etudiant-etranger.ameli.fr.<br><br>
                📌 Titre de séjour : Renouvellement annuel obligatoire si vous êtes non-Européen.<br><br>

                💬 Témoignage – Jackson :
                <span style="font-weight: italic;"> "Les démarches étaient compliquées au début, mais avec l’aide d’une association, 
                j’ai pu tout régler rapidement. Ne tardez pas à faire vos demandes !"</span>
            </p>
        </div>

        <div class="h">

            <h2>
                🎓 Conclusion
            </h2>

            <p>
                S’installer en France pour ses études peut sembler complexe, mais avec une bonne organisation
                et les bonnes ressources, vous vivrez une expérience inoubliable. 
                Pensez à vous entourer, à demander de l’aide en cas de besoin et à profiter de cette belle aventure !
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
    
        <h4 id="viestudenth4">
            🚀 Besoin d’aide ? Consultez notre section FAQ ou contactez-nous !
        </h4>

    <?php 
        include '../include/linkincludefooter.php';
    ?>