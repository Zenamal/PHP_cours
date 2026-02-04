 <?php
    // Afficher les erreurs à l'écran
    ini_set('display_errors', 1);
    // Afficher les erreurs et les avertissements
    error_reporting(E_ALL);
    ob_start();
    ?>

 <h1>Exercices - Les tableaux</h1>
 <h2>Exercice 1 :</h2>
 <p>
     Créer un tableau avec les jours de la semaine.<br />
     Puis une fois créé, afficher une liste avec les jours
 </p>

 <strong>Résultat :</strong>
 <br>

 <?php
    // Votre code ici
    ?>



 <h2>Exercice 2 :</h2>
 <p>
     Le but sera à nouveau d'afficher la date, mais cette fois-ci, on pourra mettre le jour de la semaine et le mois en français<br>
     Pour cela, utiliser le tableau des jours de la semaine de l'exercice 1 puis créer le tableau des mois de l'année <br>
     Il faudra afficher dynamiquement la date du jour avec ce format : <br>
     Nous sommes le <code>lundi</code> <code>25</code> <code>Février</code> <code>2019</code>
     <br><br>
     Indices : <br>
 <ul>
     <li>Revoir la documentation de la fonction <a href="http://php.net/manual/fr/function.date.php">date</a></li>
     <li>Utiliser le paramètre "N" ou "w" avec le tableau des jours de la semaine</li>
     <li>Utiliser le paramètre "n" avec le tableau des mois de l'année</li>
     <li>Attention aux indices s'ils commencent par zéro ou non</li>
     <li>Il n'y aura pas de boucles à utiliser</li>
 </ul>
 </p>

 <strong>Résultat :</strong>

 <?php
    // Votre code ici
    ?>

 <h2>Exercice 3 </h2>
 <p> A l'aide du tableau suivant :
 <pre>
$tab= [
    "Dupont"=> ["Paul","Paris",27],
    "Schmoll"=>["Kirk","Berlin",35],
    "Smith"=>["Stan","Londres",45] 
];
</pre>
 <p> Afficher les phrases du type : "Paul Dupont a 27 ans et habite à Paris", à l'aide d'une boucle foreach</p>
 <strong>Résultat :</strong>

 <?php
    // Votre code ici

    ?>


 <?php $content = ob_get_clean(); ?>

 <?php require('../inc/template.php'); ?>