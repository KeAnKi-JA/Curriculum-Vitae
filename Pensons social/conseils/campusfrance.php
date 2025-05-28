

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
                <!--<li><a <?php if($page=='connexion'){echo'class="style-active-link"';}?> href=".../dbconnect/formulaire/connexion.php">Connexion</a></li>-->
            </ul>
        </nav>
    </header>

        
    <div class="campusfranceh">
        <section class="steps">
            <h1>📌 Les étapes essentielles pour étudier en France avec Campus France</h1>

                <ol>
                    <li><a href="#lien1">Créer un compte sur la plateforme Études en France</a></li>
                    <li><a href="#lien2">Remplir et soumettre son dossier avec les pièces justificatives</a></li>
                    <li><a href="#lien3">Passer l’entretien Campus France (si nécessaire)</a></li>
                    <li><a href="#lien4">Attendre la réponse des établissements</a></li>
                    <li><a href="#lien5">Obtenir son visa étudiant après admission</a></li>
                </ol>
            
            <div class="h">
                <h2 id="lien1">📝 1. Créer un compte sur la plateforme Études en France</h2>
                <p>La première étape consiste à s’inscrire sur la plateforme Études en France, qui centralise toutes les 
                démarches de candidature pour les étudiants internationaux. Il suffit de remplir 
                un formulaire en ligne avec vos informations personnelles et académiques.</p>
            </div>

            <div class="h">
                <h2 id="lien2">📂 2. Remplir et soumettre son dossier avec les pièces justificatives</h2>
                <p>Une fois votre compte créé, vous devez constituer un dossier comprenant :</p>
                <p>
                    1- Votre parcours académique (diplômes, relevés de notes)<br><br>
                    2- Une lettre de motivation expliquant votre projet d’études<br><br>
                    3- Un CV détaillant vos expériences et compétences<br><br>
                    4- D’autres documents spécifiques selon les formations visées<br><br>
                    5- Prenez le temps de vérifier chaque pièce avant de soumettre votre dossier.<br><br>
</p>
            </div>

            <div class="h">
                <h2 id="lien3">🎤 3. Passer l’entretien Campus France (si nécessaire)</h2>
                <p>Dans certains pays, un entretien est obligatoire après la soumission du dossier. Il s’agit d’un échange avec un conseiller de Campus France pour évaluer la cohérence de votre projet.</p>
                <p>📢 Conseils pour réussir votre entretien :</p>
                <p>
                    ✅ Soyez clair et structuré : Présentez votre parcours, vos objectifs et pourquoi vous avez choisi la France.<br><br>
                    ✅ Démontrez votre motivation : Montrez que vous avez bien recherché les spécificités du système éducatif français et des formations choisies.<br><br>
                    ✅ Restez naturel et confiant : Parlez distinctement et évitez de réciter un texte par cœur.<br><br>
                </p>
            </div>

            <div class="h">
                <h2 id="lien4">⏳ 4. Attendre la réponse des établissements</h2>
                <p>Après l’entretien, votre dossier est transmis aux établissements que vous avez sélectionnés. 
                Chaque école ou université examine votre candidature et vous notifie de leur décision.</p>
            </div>

            <div class="h">
                <h2 id="lien5">🛂 5. Obtenir son visa étudiant après admission</h2>
                <p>Une fois accepté(e) dans un établissement, vous pourrez entamer la demande de visa étudiant. Il faudra fournir :</p>
                <p>
                    1- Votre lettre d’admission<br><br>
                    2- Une preuve de logement en France<br><br>
                    3- Une attestation de ressources financières<br><br>
                    4- Une assurance santé<br><br>
                    5- Une fois votre visa obtenu, vous serez prêt(e) pour votre aventure académique en France ! 🇫🇷🎓<br><br>
                </p>
            </div>

            
            <p></p>
        </section>
  
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
    
            <h4 id="campush4">💡 Besoin d’un accompagnement ? Rejoignez notre communauté d’étudiants pour poser vos 
                questions et partager votre expérience. 😊<a href="../contact.php">Lien</a>
            </h4>
    <?php 
        include '../include/linkincludefooter.php';
    ?>