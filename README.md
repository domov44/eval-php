# eval-php
<a name="readme-top"></a>


<br />
  <h3 align="center">Conversion de fichier en Json</h3>




<details>
  <summary>Sommaires</summary>
  <ol>
    <li>
      <a href="#a-propos-du-projet">A propos du projet</a>
      <ul>
      <li><a href="#comment-le-projet-fonctionne">Comment le projet fonctionne</a></li>
          <li><a href="#usage">Usage</a></li>
        <li><a href="#construit-avec">Construit avec</a></li>
      </ul>
    </li>
    <li>
      <a href="#commencer">Commencer</a>
      <ul>
        <li><a href="#prerequis">Prérequis</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>



## A propos du projet

Ce projet consiste à proposer un outil de conversion de fichiers avec PHP.

Il existe une version 1 sur la racine du projet qui permet de convertir un fichier CSV en Json, et une version 2 plus aboutis avec la possibilité de convertir un fichier xml en plus du CSV.

Le plus optimal est donc de travailler sur la version 2, qui a une structure fixe, simple et fonctionnelle.

<p align="right">(<a href="#readme-top">revenir en haut</a>)</p>


## Comment le projet fonctionne

Concernant la version 2 : 
Ce projet est orienté objet MVC. 

Vous retrouvez deux pages : 
-index.php
-telechargement.php

 Il y'a 2 class php : 
-Choice.php 
-Convert.php

L'index propose à l'utilisateur d'uploader son fichier et de le convertir, si tout se passe bien il est redirigé vers la page telechargement.php qui elle lui propose de télécharger son fichier converti.

Concernant le fonctionnement :
Le controlleur est la class Convert.php qui récupère la class Choice.php. La classe Choice.php est utile pour paramétrer tous les types de fichiers qu'on veut convertir.

Les fonctions permettant de convertir chaque type de fichier se situent dans Convert.php et sont ensuites appelées dans telechargement.php pour encoder le json.

Pour ajouter un nouveau type de fichier à convertir, vous devez définir un nouveau Choice dans Convert.php (n'oubliez pas de lui donner les paramètres de ce nouveau type de fichier). Ensuite vous devez écrire la fonction qui permet de convertir le fichier, et le donner en condition dans téléchargement.php avec un elseif.

ATTENTION : le dossier uploads est obligatoire pour le fonctionnement du projet.

En ce qui concerne le style, il est géré par tailwindCSS.

<p align="right">(<a href="#readme-top">revenir en haut</a>)</p>



## Usage

Ce projet est opensource et doit être utilisé à des fins légales, toute utilisation malsaine ou non éthique pourra engager des poursuites.

<p align="right">(<a href="#readme-top">revenir en haut</a>)</p>




### Construit avec

Cette partie présente les technologies/librairies/framework ou encore langages informatiques utlisés pour faire fonctionner le projet.

* [![tailwind][Tailwind.css]][tailwind-url]
* [![PHP][PHP]][php-url]

<p align="right">(<a href="#readme-top">revenir en haut</a>)</p>



## Commencer

Pour commencer le projet vous devez commencer par cloner le repo github sur votre machine en local, ensuite ouvrez le depuis votre serveur web local.

### Prérequis

Vous devez au préalable avoir un serveur web local et un IDE qui supporte PHP (ex: vscode avec l'extension PHP Intelephense, xampp). 
Version php idéale : 8.1

### Installation

Pour lancer le projet c'est assez simple, vous avez besoin de suivre ces 3 étapes :

1. Clonez le repo dans votre serveur web local (par exemple dans htdocs pour Xampp)
   ```sh
   git clone https://github.com/domov44/eval-php
   ```
2. Lancez votre serveur web local
3. Ouvrez votre projet via l'interface de votre serveur, ou via l'url qui est souvent : localhost/{votre-projet}

<p align="right">(<a href="#readme-top">revenir en haut</a>)</p>



## Contribution

La contribution est la base de l'open source, c'est pour cette raison que n'importe qui peut contribuer au développment de cet outil
 **Vraiment apprécié**.

Si vous avez une suggestion pour améliorer les choses, veuillez créer le dépôt et créer une pull request. De plus si vous trouvez une faille de sécurité vous serez recompensez par cette trouvaille, évidement selon l'intensité de la faille.

1. Clonez le projet
2. Créez votre Feature Branch (`git checkout -b feature/Feature`)
3. Commit de vos changements (`git commit -m 'Add some AmazingFeature'`)
4. Push dans la Branch (`git push origin feature/AmazingFeature`)
5. Ouvrir un Pull Request

<p align="right">(<a href="#readme-top">retour en haut</a>)</p>



## Contact

Ronan Scotet - [Mon LinkedIn](https://www.linkedin.com/in/ronan-scotet-concepteur-web/) - ronanscotet467@gmail.com

Lien du projet: [https://github.com/domov44/eval-php](https://github.com/domov44/eval-php)

<p align="right">(<a href="#readme-top">revenir en haut</a>)</p>