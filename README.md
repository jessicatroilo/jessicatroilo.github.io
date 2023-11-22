# MON CV

Le document va être décomposer en plusieurs parties.

Le but étant de mettre en oeuvre les notions apprises en HTML, CSS et PHP (Mise à jour au cours de la formation avec les nouveaux langages).

## 22/11/2023 : Initialisation du CV

Création des fichiers utiles pour la construction de mon CV :

- les feuilles de styles CSS :
  - reset.css (afin de partir de 0 pour la création de la mise en forme)
  - style.css
- le dossier images : qyui contiendra toutes les sources en images nécessaires
- le dossier php :
  - /datas/data.php : contient l'ensemble des données qui vont être utliser pour remplir le CV (utilisation de foreach pour récupération dans le HTML)
  - /templates/exp.tpl.php : va contenir l'ensemble des expériences professionnelles
  - /templates/footer.tpl.php : va contenir le footer du site présent sur l'ensemble des pages du site (si plusieurs pages)
  - /tempales/header.tpl.php : va contenir le début du code HTML + le header présent sur l'ensemble des pages du site (si plusieurs pages)
  - index.php : la page qui va s'afficher automatiquement, va contenir grâce à des include et require, l'ensemble des fichiers contenus dans les dossiers datas et templates.
  