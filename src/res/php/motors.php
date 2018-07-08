<div class="quitListMotors" onclick="showMotors();"></div>
    <div class="listMotors">
    <div class="titleBar">
        <div class="left">
            <img class="back" src="res/img/back.png" onclick="showMotors();" />
            <h4>Moteurs de recherche</h4>
        </div>
        <div class="right">
        </div>
    </div>
        
    <ul></ul>
</div>

<?php
    include('db.inc'); // On se connecte à la BDD
    $sql = "SELECT * FROM `searchengine` ORDER BY `title` ASC";
    $requete = $bdd->prepare($sql);
    $requete->execute();
    while ($donnees = $requete->fetch())
    { 
        ?>
            <script>
                (function() {
                    let item = new SearchEngine('<?= $donnees['title']; ?>', 'res/img/motors/<?= $donnees['icon']; ?>', '<?= $donnees['prefix']; ?>', '<?= $donnees['suffix']; ?>');
                    listSearchEngines.push(item);
                })();
            </script>
        <?php
    }
?>