<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Jérôme Sauzet développeu web junion, front et back">
    <title>Portfolio Jérôme Sauzet</title>
    <link rel="stylesheet" href="css/stylemin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&display=swap" rel="stylesheet">  
</head>
<body>
 <main>
    <div id="top"></div>
    <header>
        <div class="open"></div>
        <nav class="menu1">
            <ul>
                <li><a href="#top">accueil</a></li>
                <li><a href="#competence">compétence</a></li>
                <li><a href="#galerie">galerie</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>
        <nav class="menu2">
            <ul>
                <li><a href="#top">accueil</a></li>
                <li><a href="#competence">compétence</a></li>
                <li><a href="#galerie">galerie</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="accueil">
        <div class="banner"></div>
        <h1>Jérôme SAUZET</h1>
        <h2>développeur web junior</h2>
            <a href="#competence">
                <div class="mouse"></div>
            </a>
    </div>
    <div id="headband"></div>
    <div id="competence">
        <h3>Compétences</h3>
        <div class="category">
            <div class="langage">
                <h4>front</h4>
                    <p>HTML, CSS, Bootstrap, SASS, JS, React, Jquery </p>
                <h4>back</h4>
                    <p>PHP procédural, PHP objet, symfony</p>
                <h4>Annexe</h4>
                    <p>GIT, Figma, Photoshop, Illustrator, InDesign, After Effects</p>
            </div>
            
        </div>
        <div class="right">
        <a href="#galerie">
            <div class="mouse"></div>
        </a>
        </div>
    </div>
    <div id="galerie">
        <h3>Galerie</h3>
        <div id="content">
        <a href="#">
            <div class="block">
                <img src="images/tp-zoo.png" alt="site de jeux">
            </div>
        </a>
        <a href="#">
            <div class="block">
                <img src="images/combat.png" alt="site de jeux">
            </div>
        </a>
        <a href="#">
            <div class="block">
                <img src="images/luxury.jpg" alt="site de jeux">
            </div>
        </a>
        <a href="#">
            <div class="block">
                <img src="images/audioplayer.jpg" alt="site de jeux">
            </div>
        </a>
        <a href="https://nadine-lahoz-quilez.fr/">
            <div class="block">
                <img src="images/nadine.jpg" alt="site de jeux">
            </div>
        </a>
        <a href="https://515m.fr/">
            <div class="block">
                <img src="images/515m.jpg" alt="site de jeux">
            </div>
        </a>
        <a href="https://www.lesarchis.net/">
            <div class="block">
                <img src="images/lesarchis.jpg" alt="site de jeux">
            </div>
        </a>
        <a href="https://francois-mourotte.com/">
            <div class="block">
                <img src="images/mourotte.jpg" alt="site de jeux">
            </div>
        </a>
        <a href="#contact">
            <div class="mouse2"></div>
        </a>
        </div>
    </div>
    <div id="contact">
    <div class="right"></div>
    <h3>Contact</h3>
    <div id="form_content">
        <form method="post" action="formulaire.php">
			<input type="hidden" name="sujet" value="contact de votre site" />
			<label for="nom">Nom :</label><input type="text" id="nom" name="nom" size="50" value="" placeholder="Nom obligatoire" />
			<br /><br />
			<label for="prenom">Prénom :</label><input type="text" id="prenom" name="prenom" size="50" value="" placeholder="Prenom obligatoire" />
			<br /><br />
			<label for="email">E.mail :</label><input type="text" id="email" name="email" size="50" value="" placeholder="E.mail obligatoire" />
			<br /><br />
			<span>Vos commentaires :</span>
			<br /><br />
                <input class="remarque" name="remarque" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="nom@domaine.com">
			<textarea name="commentaires" rows="8" cols="50"></textarea>
			<br /><br />
			<input type="submit" value="Envoyer" />
			<input type="reset" value="Effacer" />	
		  </form>
    </div>
</main>
    <script src="js/parallaxmin.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/scroll.js"></script>
<script>
     const banner = document.querySelector('.banner');
        
        for(let i = 0; i < 400; i++){
            let blocks = document.createElement('div');
            blocks.classList.add('blocks');
            banner.appendChild(blocks);
            const duration = Math.random() * 5;
            blocks.style.animationDuration = 2 + duration + 's';
            blocks.style.animationDelay = duration +'s';
        }
</script>

</body>
</html>