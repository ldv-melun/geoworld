<?php
/**
 * Présentation du projet
 *
 * PHP version 7
 *
 * @category  Projet_Presentation
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
<?php require_once 'header.php'; ?>

<div class="container">
    <h1>Le projet GeoWorld</h1>
    <div>
        <div class="box shadow p-3">
            <div class="ribbon"><span>Présentation</span></div>
            <p>L'application est destinée à des professeurs d'histoire et de géographie.</p>
            <p>Elle doit permettre aux professeurs, comme aux élèves, de consulter des données géopolitiques et
                économiques de la planète. Ces données ont été communiquées par l'institut Official Statistics of
                Finland (2006).
            </p>
            <p>Étant donné l'âge de ces données, il faudra mettre en place un (ou plusieurs) moyen(s) de les mettre
                à jour.</p>
            <p>Les acteurs et leurs intérêts :</p>
            <ul>
                <li><b>Enseignant</b> : souhaite sensibiliser ses élèves à des données géoplitiques et économiques
                    de la
                    planète
                </li>
                <li><b>Elève</b> : aimerait disposer d'un outil qui réponde à ses interrogations ainsi que prendre
                    plaisir à consulter les
                    informations présentées
                </li>
                <li><b>Administrateur</b> : disposer d'une interface d'administration de l'application (gestion des
                    utilisateurs, leurs droits)
                </li>
            </ul>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="box shadow p-3" style="margin-top: 2rem">
            <div class="ribbon red"><span>Use Case</span></div>
            <img class="img-fluid" style="max-width: 100%" src="images/useCaseWorld.png" aria-label="Diag. Use Case">
        </div>

        <div class="box shadow p-3" style="margin-left: 3rem; margin-top: 2rem">
            <div class="ribbon blue"><span> SR </span></div>
            <h5 style="text-align: center; ">Schéma relationnel de la base de données</h5>
            <img class="img-fluid" src="images/worldSR.png">
            <p></p>
            <p>Les scripts de création du schéma relationnel et des données initialies sont dans le dossier <code>doc/</code> du projet.</p>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class="box shadow p-3" style="margin-top: 2rem">
            <div class="ribbon red"><span>Objectifs </span></div>
            <p></p>
            <h5 style="text-align: center; ">Évolutions attendues</h5>
            <ul>
                <li>Proposer une interface de consultation agréable, ergonomique (vue des données par continents,
                    pays, capitales, langues parlées, et autres idées...)
                </li>
                <li>Permettre à des collaborateurs de mettre à jour des données</li>
                <li>Un proposition pour les plus avancés:
                    <p>Permettre à l'enseignant de mettre au point des requêtes d'interrogation
                        personnalisées (SQL SELECT) </p>

                    <ol>
                        <li>Les requêtes pourront être sauvegardées et nommées</li>
                        <li>Les requêtes pourront avoir une portée publique ou privée</li>
                    </ol>
                </li>
            </ul>
        </div>

        <div class="box shadow p-3" style="margin-left: 3rem; margin-top: 2rem">
            <div class="ribbon blue"><span>Travaux 1</span></div>
            <p>(durée ~4h à 8h)</p>
            <h4 style="text-align: center; ">(Avant de passer en mode projet)</h4>
            <h5 style="text-align: center; ">Travaux imposés</h5>
            <h6 style="text-align: center; ">(phase à réaliser seul)</h6>
            <ol>
              <li>Connectez-vous à Trello, et créer un tableau sur la base de
              ce <a href="https://trello.com/b/60112446ccfede1a8658fbbd/okpu/recommend">modèle Trello GEOWORLD</a>
               - Par la suite, vous l'adapterez selon votre besoin.
              </li>
              <li> Suivre les instructions d'installation : <a href="https://github.com/ldv-melun/geoworld#readme">README du projet</a> </li>
<!--                <li>Téléchager les scripts SQL de la base de données de démarrage (format mysql)</li>-->
<!--                <li>Créer une base de données, et initialiser cette dernière à l'aide de ces 2 scripts</li>-->
                <li>Le code de <code>connect-db.php</code> devra être <b>Adapté</b> en conséquence</li>
                <li>Réaliser les activités présentées dans la colonne <b>TDs préliminaires</b> du tableau de bord Trello </li>
            </ol>

            <p>À l'issue de ce travail, vous serez prêt à vous engager plus en avant dans ce projet,
                à implémenter et concevoir de vrais récits utilisateur qui guideront vos travaux.</p>

        </div>
    </div>

</div>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
