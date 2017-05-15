<?php
/**
 * @package admin
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_activity.php drbyte Modified in v1.5.4 $
 */

define('HEADING_TITLE', 'Gestion du Journal d\'Activité Admin');
define('HEADING_SUB1', 'Visualiser ou exporter le journal');
define('HEADING_SUB2', 'Purger l\'historique du journal');
define('TEXT_ACTIVITY_EXPORT_FORMAT', 'Format du fichier d\'export:');
define('TEXT_ACTIVITY_EXPORT_FILENAME', 'Nom du fichier d\'export:');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE','Enregistrer dans un fichier sur le serveur ? (sinon il sera téléchargé directement depuis cette fenêtre)');
define('TEXT_ACTIVITY_EXPORT_DEST','Destination: ');
define('TEXT_PROCESSED', ' Traité.');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', 'Exportation terminée. ');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', 'ALERTE: Échec de l\'exportation. Impossible d\'écrire le fichier.');

define('TEXT_INSTRUCTIONS','<u>INSTRUCTIONS</u><br />Vous pouvez utiliser cette page pour exporter l\'activité de vos accès utilisateurs à l\'Administration de Zen Cart&reg; vers un fichier d\'archivage CSV.<br />Vous devez sauvegarder ces données pour les utiliser en recherche de fraude au cas où votre site serait compromis. C\'est une obligation pour la conformité à PCI.<br />
<ol><li>Choisissez de visualiser ou d\'exporter vers un fichier.<li>Entrez un nom de fichier.<li>Cliquez sur Go pour procéder.<li>Choisissez d\'enregistrer ou d\'ouvrir le fichier, selon ce que votre navigateur permet.</ol>');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>Vider la table journal d\'activité Admin de la base de données<br />AVERTISSEMENT: ASSUREZ-VOUS D\'AVOIR SAUVEGARDÉ VOTRE BASE DE DONNÉES avant de lancer cette mise &agrave; jour !</strong><br />Le journal d\'activité Admin est une méthode de surveillance qui enregistre l\'activité dans l\'Administration.<br />En raison de sa nature, il peut devenir très gros, très rapidement et doit être nettoyé de temps en temps.<br />Des avertissements sont donnés à 50.000 enregistrements ou à 60 jours, selon ce qui survient en premier.<br /><span class="alert">NOTE: Pour être conforme avec le PCI, vous avez l\'obligation de conserver l\'historique du journal d\'activité Admin pendant 12 mois.<br />Il vaut mieux archiver vos journaux en choisissant EXPORTER VERS CSV et en cliquant sur Go, ci-dessus, *AVANT* de purger les données du journal.</span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<strong><span class="alert">AVERTISSEMENT !: Vous êtes sur le point de SUPPRIMER de votre base de données des enregistrements *importants* de vérifications à rebours.</span></strong><br />Vous devez D\'ABORD confirmer que vous avez une SAUVEGARDE sérieuse de votre base de données avant de procéder.<br />En agissant ainsi, vous acceptez la suppression de ces informations et endossez vos responsabilités légales concernant ces données.<br /><br />Je comprends mes responsabilités, et souhaite procéder à la suppression en cliquant Réinitialisation:<br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>Effacement terminé</strong> du journal d\'activité Admin');
define('TEXT_NO_RECORDS_FOUND', 'Aucun document trouvé en utilisant le filtre que vous avez sélectionné.');

define('TEXT_EXPORTFORMAT0', 'Exporter au format HTML (idéal pour le visionnage sur écran)');
define('TEXT_EXPORTFORMAT1', 'Exporter au format CSV (idéal pour importer des feuilles de calcul)');
define('TEXT_EXPORTFORMAT2', 'Exporter au format TXT');
define('TEXT_EXPORTFORMAT3', 'Exporter au format XML');

define('TEXT_ACTIVITY_EXPORT_FILTER', 'Quel registre de données voulez-vous voir ?');
define('TEXT_EXPORTFILTER0', 'Toutes les données enregistrées, indépendamment du niveau de gravité.');
define('TEXT_EXPORTFILTER1', 'INFO - Registre d\'information général');
define('TEXT_EXPORTFILTER2', 'AVIS - Informations notables, devant être révisées périodiquement');
define('TEXT_EXPORTFILTER3', 'AVERTISSEMENT - Activité qui devrait être examiné journellement');
define('TEXT_EXPORTFILTER4', 'AVIS et AVERTISSEMENT (combinaison commune pour examen).');

define('TEXT_INTERPRETING_LOG_DATA', '<p><strong>Interprétation des données du registre</strong><ul>
<li><strong>Severity</strong> - Les normes de registre décrivent généralement des sévérités comme suit :<ul>
<li><strong>INFO</strong> se réfère à l'activité générale. Cela peut ou ne pas contenir de détails remarquables.</li>
<li><strong>NOTICE</strong> se réfère à une activité qui indique qu\'un privilège d\'administration plus élevé a été utilisé, et peut inclure des problèmes tels que la création de nouveaux utilisateurs d\'administration ou l\'ajout de nouveaux modules de paiement. Elle souligne également les données soumises sur la page Web qui comprennent un contenu potentiellement à risque tels que des balises de script ou iframes enchâssés, où le contenu malveillant est ajouté à vos produits / catégories / pages par des employés mécontents ou un intrus sur votre site. Celles-ci devraient être revues régulièrement pour toutes anomalies telles qu\'activité non autorisée.</li>
<li><strong>WARNING</strong> est attribué à des problèmes CRITIQUES tels que la suppression de modules de paiement ou d\'utilisateurs de l\'administration. Ce sont des activités qui pourraient suggérer des problèmes en attente si pas remarqués rapidement. Celles-ci devraient être examinées très fréquemment; quotidienne recommandée.</li>
</ul>
<li><strong>admin_user</strong> - Cela montrera le numéro d\'identification d\'utilisateur de l\'administration suivie de leur nom d\'utilisateur de l\'administration. Si n\'êtes pas connecté, il affichera 0.</li>
<li><strong>page_accessed</strong> - Cela indiquera le nom de la page visitée, donnant ainsi des indices pour le genre d'activité qui a lieu.</li>
<li><strong>parameters</strong> - Ce est le reste de l'URI de la page visitée, et donne de plus amples indications sur la nature de l\'activité tenté par le visiteur.</li>
<li><strong>flagged</strong> - Si réglé sur 1, cela indique que vous devez inspecter le contenu enregistré dans le champ "postdata" pour l'entrée non autorisée de script ou iframe ou autres contenus potentiellement dangereux. Une explication de contenu suspect sera répertorié dans le champ "attention".</li>
<li><strong>attention</strong> - Ceci contiendra des suggestions relatives à la nature des activités suspectes qui devrait être examiné dans le champ "postdata" si signalé. </li>
<li><strong>logmessage</strong> - Ceci contient tous les messages enregistrés par le système sur l'activité en cours, tels que l'installation d'un certain le module.</li>
<li><strong>postdata</strong> - Ceci contient les données brutes POST (avec certaines informations sensibles enlevées) pour examen facile au cas où une activité malveillante est soupçonné.</li>
</ul></p>');