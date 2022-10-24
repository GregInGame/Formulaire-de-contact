<?php include 'C:\UwAmp\www\sendmail.php'; ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
	<!--alert messages start-->
	<?php echo $alert; ?>
        <!--alert messages end-->
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/greg.jpg" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Bonjour, je suis <span>Grégoire PAULE.</span>
                    Elève du Gaming Campus.
                </h1>
                <p>
                    Je suis un élève créatif et plein d'ambition.
                    Et j'irai loin dans ma vie pour sûr. 
                </p>
                <div class="btn-con">
				<a download="CV" href="asset/grégoire paule (1).pdf" class="main-btn" type="application/octet-stream">
                        <span class="btn-text">Télécharger mon CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>Mes <span>infos</span><span class="bg-text">my stats</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>Ma vie</h4>
                    <p>
                        Seul garçon d'une fraterie de 5, je fûs dès l'enfance initié au travail bien fait. <br /> <br /> 
                        Fan de jeu vidéo et de communication, mes compétence oral m'auront permis d'entrer dans des cercle 
                        très fermer d'individu. 
                    </p>
                    <div class="btn-con">
					<a download="CV" href="asset/grégoire paule (1).pdf" class="main-btn" type="application/octet-stream">
                        <span class="btn-text">Télécharger mon CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">6500+</p>
                            <p class="small-text">heures <br /> joués</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">5+</p>
                            <p class="small-text">ans de <br /> d'expérience en jeu vidéo</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">300+</p>
                            <p class="small-text">Projets <br /> profesionnels réalisés</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">400+</p>
                            <p class="small-text">Relations <br /> crées</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-stats">
                <h4 class="stat-title">Capacités</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">Langues</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Maitrise des applications Adobe</p>
                        <div class="progress-con">
                            <p class="prog-text">95%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Codage</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Reactivité</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Précision</p>
                        <div class="progress-con">
                            <p class="prog-text">87%</p>
                            <div class="progress">
                                <span class="node"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Communication</p>
                        <div class="progress-con">
                            <p class="prog-text">70%</p>
                            <div class="progress">
                                <span class="python"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="stat-title">My Timeline</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2020 - present</p>
                    <h5>Etudiant<span> - Gaming Campus</span></h5>
                    <p>
                        Etudiant de la Gaming Business School de Lyon, 50 rue de Marseille
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2017 - 2020</p>
                    <h5>Lycéen<span> - La Favorite Sainte-Thérèse</span></h5>
                    <p>
                        Reçu en section S en première, j'ai obtenu mon Bac mention assez bien, j'ai participé au MUN de Venise en tant que représentant de la Thaîlande a l'OMS
                        et j'ai obtenu mon Cambridge Advanced me donnant le niveau C1 en anglais
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2013 - 2017</p>
                    <h5>Collégien<span> - La Favorite Sainte-Thérèse</span></h5>
                    <p>
                        Je fûs reçu en classe British dès la Sixième, me donnant alors des heures supplémentaire en anglais.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Eté 2017</p>
                    <h5>Atelier 12<span> - Stage de Troisème</span></h5>
                    <p>
                        Stage d'observation en architecture
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Eté 2016</p>
                    <h5>BIA<span> - Stage facultatif de Quatrième</span></h5>
                    <p>
                        J'ai obtenu mon Brevet d'Initiation a l'Aéronautique m'offrant le droit de participer au stage d'observation a l'EuroSpace Center de Bruxelles
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">Eté 2021</p>
                    <h5>LBA Group<span> - Stage de Deuxième année</span></h5>
                    <p>
                        Je fûs accepté dans une entreprise internationale en tant que membres de la cellule marketing et communication
                    </p>
                </div>
            </div>
        </section>
        <section class="container" id="portfolio">
            <div class="main-title">
                <h2>Ce qui me <span>Définit</span><span class="bg-text">Mon travail</span></h2>
            </div>
            <p class="port-text">
                Voici ce que je peux vous apprendre au fur et à mesures
            </p>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/altruisme.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Altruisme</h3>
                        <div class="icons">
                            <a href="https://www.twitch.tv/imfatou" class="icon">
                                <i class="fab fa-twitch"></i>
                            </a>
                            <a href="https://twitter.com/ImFatou" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.youtube.com/c/FatouTheo" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/karaté.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Confiance</h3>
                        <div class="icons">
                            <a href="https://www.twitch.tv/imfatou" class="icon">
                                <i class="fab fa-twitch"></i>
                            </a>
                            <a href="https://twitter.com/ImFatou" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.youtube.com/c/FatouTheo" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/régularité.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Régularité</h3>
                        <div class="icons">
                            <a href="https://www.twitch.tv/imfatou" class="icon">
                                <i class="fab fa-twitch"></i>
                            </a>
                            <a href="https://twitter.com/ImFatou" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.youtube.com/c/FatouTheo" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/perfect.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Perfectionnisme</h3>
                        <div class="icons">
                            <a href="https://www.twitch.tv/imfatou" class="icon">
                                <i class="fab fa-twitch"></i>
                            </a>
                            <a href="https://twitter.com/ImFatou" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.youtube.com/c/FatouTheo" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/sociable.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Sociable</h3>
                        <div class="icons">
                            <a href="https://www.twitch.tv/imfatou" class="icon">
                                <i class="fab fa-twitch"></i>
                            </a>
                            <a href="https://twitter.com/ImFatou" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.youtube.com/c/FatouTheo" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/gumgum.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Diversité</h3>
                        <div class="icons">
                            <a href="https://www.twitch.tv/imfatou" class="icon">
                                <i class="fab fa-twitch"></i>
                            </a>
                            <a href="https://twitter.com/ImFatou" class="icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.youtube.com/c/FatouTheo" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
        </section>
        <section class="container" id="blogs">
            <div class="blogs-content">
                <div class="main-title">
                    <h2>Mes <span>Projets</span><span class="bg-text">Projects</span></h2>
                </div>
                <div class="blogs">
                    <div class="blog">
                        <img src="img/codage.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Créer son propre site internet 
                            </h4>
                            <p>
                                Nous avons lors de nos années appris a coder avec HTML/ CSS et Javascript
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/blog1.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Faire un plan de communication
                            </h4>
                            <p>
                                Nous avons appris a créer un plan de comm méticuleux et fonctionnel
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/entretien.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Entrainement oral
                            </h4>
                            <p>
                                Comment parler devant une audience et devant des chefs d'entreprise
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/blog3.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Cultissisme 
                            </h4>
                            <p>
                                Culture générale sur le jeu vidéo et sa création
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/port1.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Montage Vidéo
                            </h4>
                            <p>
                                Montage d'uné vidéo de a à z avec Première Pro
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/trello.webp" alt="">
                        <div class="blog-text">
                            <h4>
                                Programmation
                            </h4>
                            <p>
                                Programmation de site, vidéo et réunion en tout genre
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Me <span>Contacter</span><span class="bg-text">Contact</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Vos informations</h4>
                        <p>
                            Afin de facilité nos futurs discussions, veillez rentrer vos informations personnels ci-dessous :
                        </p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Location</span>
                                </div>
                                <p>
                                   : Berlin, Allemagne
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email</span>
                                </div>
                                <p>
                                    : universal@gmail.com
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Ecole</span>
                                </div>
                                <p>
                                    : Gaming Campus
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Téléphone</span>
                                </div>
                                <p>
                                    : 0607648850 
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Langues</span>
                                </div>
                                <p>
                                    : Français, Anglais
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="www.facebook.com" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
					<div class="right-contact">
                        <form method="POST" action="" class="contact-form">
                            <div class="input-control i-c-2">
                                <input type="text" name="name" required placeholder="Ton Nom">
                                <input type="email" name="email" required placeholder="Email">
                            </div>
                            <div class="input-control">
                                <input type="text" name="subject" required placeholder="Objet">
                            </div>
                            <div class="input-control">
                                <textarea name="message" id="" cols="15" rows="8" placeholder="Ton message..."></textarea>
                            </div>
                            <div class="submit-btn">
                                <input type="submit" name="submit" class="send-btn" value="Envoyer">
                            </div>
                        </form>
                    </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control" data-id="blogs">
            <i class="far fa-newspaper"></i>
        </div>
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="app.js"></script>
	<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>
</html>