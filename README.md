# vite-gourmand-ecf
Application web ECF - Vite &amp; Gourmand


# Projet ECF - Vite & Gourmand

##  Description

Dans le cadre de l'Épreuve de Certification Finale du Titre Professionnel Développeur Web et Web Mobile, ce projet consiste en la conception et le développement d'une application web pour l'entreprise **Vite & Gourmand**, située à Bordeaux.

L'application permet :

- La consultation des menus proposés par l'entreprise
- La création de compte utilisateur et connexion sécurisée
- La commande de menus avec calcul automatique du prix et réduction si applicable
- Le suivi des commandes pour les utilisateurs
- La gestion des menus et plats pour les employés
- L'administration des comptes employés pour l’administrateur
- La gestion et validation des avis clients
- La génération de statistiques via une base NoSQL pour l’administrateur

---

## Stack technique

### Front-End
- HTML5
- CSS 
- JavaScript 

### Back-End
- PHP (avec PDO pour la connexion à la BDD)
- MySQL pour la base de données relationnelle
- MongoDB pour les statistiques (base NoSQL)

---

## Sécurité et RGPD

- Hashage des mots de passe pour sécuriser les comptes  
- Gestion des accès selon les rôles utilisateurs  
- Formulaires sécurisés et respect des règles RGPD  
- Protection des fichiers sensibles (config, BDD) hors dossier `public`

---

