<div class="screen" id="screen1">
	<center><img src="res/img/white-flat-logo.png" style="height:100px;" /></center>
	<h1>Bienvenue</h1>
	<p>Bienvenue dans la version beta de Doosearch, votre future page d'accueil. Pour commencer à configurer votre page d'accueil, cliquez sur les boutons en bas.</p>
</div>

<!--<div class="screen" id="screen2">
	<h1>Voici votre page d'accueil</h1>
	<p>Cette image est une capture d'écran de la page d'accueil, au centre vous avez un formulaire pour la recherche, et en bas à gauche plusieurs boutons. <span class="link">Cliquez sur l'image pour l'agrandir.</span></p>
	
	<img src="res/img/screens/1.png" onclick="viewScreen('res/img/screens/1.png');" class="screenImg" />
	<img src="res/img/screens/1m.png" class="screenImgMobile" />
	
	<input type="button" onclick="goBack();" class="ignore" value="Retour"/>
	<input type="button" onclick="goNext();" value="Continuer"/>
</div>

<div class="screen" id="screen3">
	<h1>Changer de moteur de recherche</h1>
	<p>Pour changer de moteur de recherche, cliquez sur le logo au centre ou sur le bouton menu en bas à gauche et la liste des moteurs disponible apparaitra. <span class="link">Cliquez sur l'image pour l'agrandir.</span></p>
	
	<img src="res/img/screens/2.png" onclick="viewScreen('res/img/screens/2.png');" class="screenImg" />
	<img src="res/img/screens/2m.png" class="screenImgMobile" />
	
	<input type="button" onclick="goBack();" class="ignore" value="Retour"/>
	<input type="button" onclick="goNext();" value="Continuer"/>
</div>

<div class="screen" id="screen4">
	<h1>Changer de vue</h1>
	<p>Pour changer de vue, faites un clic droit sur la liste et faites votre choix, vous pouver afficher en liste ou en icônes, sur le côté ou sur toute l'écran. <span class="link">Cliquez sur l'image pour l'agrandir.</span></p>
	
	<img src="res/img/screens/3.png" onclick="viewScreen('res/img/screens/3.png');" class="screenImg" />
	<img src="res/img/screens/3m.png" class="screenImgMobile" />
	
	<input type="button" onclick="goBack();" class="ignore" value="Retour"/>
	<input type="button" onclick="goNext();" value="Continuer"/>
</div>

<div class="screen" id="screen4">
	<h1>Personnaliser votre page d'accueil</h1>
	<p>Pour personnaliser Doosearch, cliquez sur le lien "Configuration" en haut' et vous serez redirigé vers une page de configuration. <span class="link">Cliquez sur l'image pour l'agrandir.</span></p>
	
	<img src="res/img/screens/4.png" onclick="viewScreen('res/img/screens/4.png');" class="screenImg" />
	<img src="res/img/screens/4m.png" class="screenImgMobile" />
	
	<input type="button" onclick="goBack();" class="ignore" value="Retour"/>
	<input type="button" onclick="goNext();" value="Continuer"/>
</div>-->

<div class="screen" id="screen2">
	<h1>Choisissez un moteur de recherche</h1>
	<p>Sélectionnez un moteur de recherche pour le définir par défaut, ainsi à chaque utilisation de Doosearch, vous retrouverez le moteur sélectionné</p>
	
	<ul class="rects">
		<li id="imgMotor">
			<p>Moteur de recherche</p>
			<div onclick="showMotors();" style="background: url(res/img/choose.png) no-repeat center center / cover;"><span>Aucun</span></div>
		</li>
		<li id="bgColor">
			<p>Couleur de l'arrière plan</p>
			<div onclick="showColorSelector('background');" id="backgroundColor"></div>
		</li>
		<li id="bgColor2">
			<p>Couleur secondaire</p>
			<div onclick="showColorSelector('accent');" id="accentColor"></div>
		</li>
	</ul>
</div>