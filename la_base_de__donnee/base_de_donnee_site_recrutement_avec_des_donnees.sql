-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 18 mars 2023 à 07:01
-- Version du serveur : 10.10.3-MariaDB
-- Version de PHP : 8.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `base_de_donnee_site_recrutement`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidats`
--

CREATE TABLE `candidats` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `code_postal` varchar(10) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `candidats`
--

INSERT INTO `candidats` (`id`, `nom`, `prenom`, `email`, `telephone`, `mot_de_passe`, `adresse`, `code_postal`, `ville`, `pays`) VALUES
(1, 'Durand', 'Jean', 'jean.durand@mail.com', '01 23 45 67 89', 'mdp123', '1 Rue des Lilas', '75001', 'Paris', 'France'),
(2, 'Dubois', 'Sophie', 'sophie.dubois@mail.com', '01 45 67 89 01', 'mdp456', '2 Rue des Roses', '69002', 'Lyon', 'France'),
(3, 'Lefebvre', 'Pierre', 'pierre.lefebvre@mail.com', '03 45 67 89 01', 'mdp789', '3 Rue des Tulipes', '59000', 'Lille', 'France'),
(4, 'Martin', 'Marie', 'marie.martin@mail.com', '02 23 67 89 01', 'mdp012', '4 Rue des Jonquilles', '44000', 'Nantes', 'France'),
(5, 'Dupont', 'Luc', 'luc.dupont@mail.com', '01 23 67 89 01', 'mdp345', '5 Rue des Marguerites', '33000', 'Bordeaux', 'France'),
(6, 'Leroy', 'Isabelle', 'isabelle.leroy@mail.com', '01 23 45 89 01', 'mdp678', '6 Rue des Chrysanthèmes', '13001', 'Marseille', 'France'),
(7, 'Moreau', 'Julien', 'julien.moreau@mail.com', '01 23 67 01 89', 'mdp901', '7 Rue des Hortensias', '69001', 'Lyon', 'France'),
(8, 'Roux', 'Camille', 'camille.roux@mail.com', '02 23 45 67 89', 'mdp234', '8 Rue des Pivoines', '75002', 'Paris', 'France'),
(9, 'Girard', 'Mathilde', 'mathilde.girard@mail.com', '01 23 89 67 01', 'mdp567', '9 Rue des Orchidées', '59000', 'Lille', 'France'),
(10, 'Garnier', 'Alexandre', 'alexandre.garnier@mail.com', '01 23 45 67 89', 'mdp890', '10 Rue des Iris', '69003', 'Lyon', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `candidats_competences`
--

CREATE TABLE `candidats_competences` (
  `id_candidat` int(10) UNSIGNED NOT NULL,
  `id_competence` int(10) UNSIGNED NOT NULL,
  `niveau` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `candidats_competences`
--

INSERT INTO `candidats_competences` (`id_candidat`, `id_competence`, `niveau`) VALUES
(1, 2, 3),
(1, 5, 2),
(2, 1, 4),
(2, 3, 1),
(3, 4, 5),
(3, 6, 3),
(4, 2, 4),
(4, 4, 2),
(5, 1, 3),
(5, 6, 4);

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id`, `titre`, `description`) VALUES
(1, 'Programmation Python', 'Connaissance avancée en programmation Python'),
(2, 'Marketing Digital', 'Maîtrise des outils et stratégies de marketing digital'),
(3, 'Gestion de Projet', 'Expérience en gestion de projet et en utilisation d\'outils de gestion de projet'),
(4, 'Design Graphique', 'Connaissance avancée des logiciels de design graphique tels que Photoshop et Illustrator'),
(5, 'Analyse de données', 'Compétences en analyse de données et en utilisation d\'outils d\'analyse de données tels que Excel'),
(6, 'Communication', 'Excellentes compétences en communication orale et écrite'),
(7, 'Leadership', 'Expérience en leadership et en gestion d\'équipe'),
(8, 'Anglais', 'Maîtrise de l\'anglais à l\'écrit et à l\'oral'),
(9, 'Développement web', 'Connaissance avancée des langages de programmation web tels que HTML, CSS et JavaScript'),
(10, 'Rédaction', 'Excellentes compétences en rédaction et en édition de texte');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_candidat` int(10) UNSIGNED NOT NULL,
  `titre_profession` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `fichier_cv` varchar(255) NOT NULL,
  `date_creation` date NOT NULL,
  `age` varchar(45) DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  `sexe` varchar(45) DEFAULT NULL,
  `type_travail` varchar(45) DEFAULT NULL,
  `experience` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `cv`
--

INSERT INTO `cv` (`id`, `id_candidat`, `titre_profession`, `description`, `fichier_cv`, `date_creation`, `age`, `ville`, `sexe`, `type_travail`, `experience`, `image`) VALUES
(1, 1, 'Développeur web', 'Je suis un développeur web passionné par les nouvelles technologies et la création de sites web innovants.', 'mon_cv.pdf', '2022-01-01', '28 ans', 'Paris', 'Homme', 'Temps plein', '3 ans', 'photo_profil.jpg'),
(2, 1, 'Designer graphique', 'Je suis un designer graphique créatif et talentueux, spécialisé dans la création de logos et d\'identités visuelles.', 'mon_cv.pdf', '2022-01-02', '28 ans', 'Paris', 'Homme', 'Temps plein', '2 ans', 'photo_profil.jpg'),
(3, 2, 'Développeur Java', 'Je suis un développeur Java expérimenté, capable de travailler sur des projets complexes et de résoudre des problèmes techniques difficiles.', 'mon_cv.pdf', '2022-01-03', '35 ans', 'Lyon', 'Homme', 'Temps plein', '5 ans', 'photo_profil.jpg'),
(4, 2, 'Architecte logiciel', 'Je suis un architecte logiciel expérimenté, spécialisé dans la conception et la mise en place d\'architectures de systèmes informatiques complexes.', 'mon_cv.pdf', '2022-01-04', '35 ans', 'Lyon', 'Homme', 'Temps plein', '8 ans', 'photo_profil.jpg'),
(5, 3, 'Analyste financier', 'Je suis un analyste financier expérimenté, capable de réaliser des analyses financières complexes et de fournir des recommandations stratégiques.', 'mon_cv.pdf', '2022-01-05', '42 ans', 'Marseille', 'Femme', 'Temps plein', '10 ans', 'photo_profil.jpg'),
(6, 3, 'Responsable des ressources humaines', 'Je suis un responsable des ressources humaines expérimenté, spécialisé dans la gestion des talents et la création de plans de développement des compétences.', 'mon_cv.pdf', '2022-01-06', '42 ans', 'Marseille', 'Femme', 'Temps plein', '12 ans', 'photo_profil.jpg'),
(7, 4, 'Développeur iOS', 'Je suis un développeur iOS expérimenté, spécialisé dans la création d\'applications mobiles de haute qualité pour iPhone et iPad.', 'mon_cv.pdf', '2022-01-07', '30 ans', 'Toulouse', 'Homme', 'Temps plein', '4 ans', 'photo_profil.jpg'),
(8, 4, 'Développeur Android', 'Je suis un développeur Android expérimenté, spécialisé dans la création d\'applications mobiles pour smartphones et tablettes Android.', 'mon_cv.pdf', '2022-01-08', '30 ans', 'Toulouse', 'Homme', 'Temps plein', '3 ans', 'photo_profil.jpg'),
(9, 5, 'Designer UX/UI', 'Je suis un designer UX/UI créatif et passionné, spécialisé dans la conception d\'interfaces utilisateur pour des applications web et mobiles innovantes.', 'mon_cv.pdf', '2022-01-09', '25 ans', 'Marseille', 'Femme', 'Temps plein', '10 ans', 'photo_profil.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `experiances`
--

CREATE TABLE `experiances` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cv` int(10) UNSIGNED NOT NULL,
  `nom_societe` varchar(255) DEFAULT NULL,
  `poste` varchar(255) DEFAULT NULL,
  `nom_employeur` varchar(255) DEFAULT NULL,
  `description_bref` varchar(255) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `experiances`
--

INSERT INTO `experiances` (`id`, `id_cv`, `nom_societe`, `poste`, `nom_employeur`, `description_bref`, `date_debut`, `date_fin`) VALUES
(11, 1, 'ACME Corp', 'Développeur web', 'John Doe', 'Travaillé sur le développement de sites web pour des clients', '2018-01-01', '2019-12-31'),
(12, 1, 'XYZ Inc', 'Développeur logiciel', 'Jane Doe', 'Développé des applications logicielles pour les clients internes', '2020-01-01', '2022-02-28'),
(13, 2, 'Big Data Co', 'Ingénieur Big Data', 'Bob Smith', 'Responsable du développement de solutions Big Data pour les clients', '2017-05-01', '2019-08-31'),
(14, 2, 'Cloud Solutions', 'Architecte Cloud', 'Alice Brown', 'Responsable de la conception de l\'architecture de cloud computing pour les clients', '2019-09-01', '2021-11-30'),
(15, 3, 'Startup ABC', 'Chef de projet', 'Tom Jones', 'Géré des projets de développement de logiciels pour les clients de la startup', '2020-01-15', '2022-03-15'),
(16, 3, 'Consulting Group', 'Consultant en stratégie', 'Emily Davis', 'Conseillé les clients sur leur stratégie de développement commercial', '2018-06-01', '2020-01-14'),
(17, 4, 'E-commerce Inc', 'Chef de produit', 'Alex Johnson', 'Responsable du développement de nouveaux produits pour la plateforme e-commerce', '2019-03-01', '2021-05-31'),
(18, 4, 'Marketing Solutions', 'Spécialiste en marketing digital', 'Sarah Wilson', 'Conçu et mis en œuvre des campagnes de marketing numérique pour les clients', '2021-06-01', '2022-12-31'),
(19, 5, 'Banking Co', 'Analyste de données', 'David Lee', 'Effectué des analyses de données pour identifier les tendances du marché financier', '2020-03-01', '2021-12-31'),
(20, 5, 'Insurance Corp', 'Actuaire', 'Amy Chen', 'Effectué des analyses actuarielles pour évaluer les risques pour les clients de la compagnie d\'assurance', '2018-01-01', '2020-02-29');

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cv` int(10) UNSIGNED NOT NULL,
  `nom_etablissement` varchar(45) DEFAULT NULL,
  `description_bref` varchar(45) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `diplome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id`, `id_cv`, `nom_etablissement`, `description_bref`, `date_debut`, `date_fin`, `diplome`) VALUES
(21, 1, 'Université de Paris', 'Licence en Informatique', '2014-09-01', '2017-06-30', 'Licence'),
(22, 1, 'Université de Strasbourg', 'Master en Intelligence Artificielle', '2017-09-01', '2019-06-30', 'Master'),
(23, 2, 'Ecole Polytechnique', 'Formation en Génie Civil', '2016-09-01', '2017-06-30', 'Certificat'),
(24, 2, 'Ecole Nationale des Ponts et Chaussées', 'Diplôme d\'Ingénieur en Génie Civil', '2017-09-01', '2020-06-30', 'Diplôme d\'Ingénieur'),
(25, 3, 'Université Paris-Dauphine', 'Licence en Economie et Gestion', '2015-09-01', '2018-06-30', 'Licence'),
(26, 3, 'ESSEC Business School', 'MBA en Finance', '2018-09-01', '2019-06-30', 'MBA'),
(27, 4, 'Ecole Nati Supé des Arts et Mét', 'Formation en Mécanique', '2017-09-01', '2018-06-30', 'Certificat'),
(28, 4, 'Université de Technologie de Compiègne', 'Diplôme d\'Ingénieur en Génie Mécanique', '2018-09-01', '2021-06-30', 'Diplôme d\'Ingénieur'),
(29, 5, 'Université Paris-Saclay', 'Licence en Mathématiques', '2016-09-01', '2019-06-30', 'Licence'),
(30, 5, 'Ecole Normale Supérieure de Lyon', 'Master en Mathématiques Appliquées', '2019-09-01', '2021-06-30', 'Master');

-- --------------------------------------------------------

--
-- Structure de la table `offres_emploi`
--

CREATE TABLE `offres_emploi` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_recruteur` int(10) UNSIGNED NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_publication` date NOT NULL,
  `date_limite` date NOT NULL,
  `ville_offre` varchar(255) NOT NULL,
  `salaire` decimal(10,2) DEFAULT NULL,
  `email_recruteur` varchar(45) DEFAULT NULL,
  `type_travail` varchar(45) DEFAULT NULL,
  `experience` varchar(45) DEFAULT NULL,
  `niveau_etude` varchar(45) DEFAULT NULL,
  `nom_industrie` varchar(45) DEFAULT NULL,
  `categorie_travail` varchar(45) DEFAULT NULL,
  `images` varchar(45) DEFAULT NULL,
  `nom_societe` varchar(45) DEFAULT NULL,
  `site_internet` varchar(45) DEFAULT NULL,
  `numero_telephone` varchar(45) DEFAULT NULL,
  `email_entreprise` varchar(45) DEFAULT NULL,
  `adresse_entreprise` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `offres_emploi`
--

INSERT INTO `offres_emploi` (`id`, `id_recruteur`, `titre`, `description`, `date_publication`, `date_limite`, `ville_offre`, `salaire`, `email_recruteur`, `type_travail`, `experience`, `niveau_etude`, `nom_industrie`, `categorie_travail`, `images`, `nom_societe`, `site_internet`, `numero_telephone`, `email_entreprise`, `adresse_entreprise`) VALUES
(2, 1, 'Développeur Full-Stack', 'Nous recherchons un développeur Full-Stack pour rejoindre notre équipe.', '2022-03-18', '2022-04-18', 'Paris', 50000.00, 'recruteur1@gmail.com', 'CDI', '2-3 ans', 'Bac+5', 'Informatique', 'Développement', NULL, 'Ma société', 'www.masociete.com', '01 23 45 67 89', 'contact@masociete.com', '10 rue des exemples'),
(3, 1, 'Chef de projet marketing', 'Nous recherchons un chef de projet marketing pour notre entreprise.', '2022-03-18', '2022-04-18', 'Lyon', 45000.00, 'recruteur1@gmail.com', 'CDI', '3-5 ans', 'Bac+5', 'Marketing', 'Gestion de projet', NULL, 'Ma société', 'www.masociete.com', '01 23 45 67 89', 'contact@masociete.com', '10 rue des exemples'),
(4, 2, 'Développeur Back-End', 'Nous recherchons un développeur Back-End pour notre start-up.', '2022-03-18', '2022-04-18', 'Marseille', 55000.00, 'recruteur2@gmail.com', 'CDI', '2-3 ans', 'Bac+5', 'Informatique', 'Développement', NULL, 'Ma start-up', 'www.mastartup.com', '01 23 45 67 89', 'contact@mastartup.com', '5 rue des exemples'),
(5, 2, 'Designer graphique', 'Nous recherchons un designer graphique pour notre start-up.', '2022-03-18', '2022-04-18', 'Bordeaux', 40000.00, 'recruteur2@gmail.com', 'CDI', '1-2 ans', 'Bac+3', 'Design', 'Graphisme', NULL, 'Ma start-up', 'www.mastartup.com', '01 23 45 67 89', 'contact@mastartup.com', '5 rue des exemples'),
(6, 3, 'Développeur iOS', 'Nous recherchons un développeur iOS pour notre entreprise.', '2022-03-18', '2022-04-18', 'Toulouse', 60000.00, 'recruteur3@gmail.com', 'CDI', '3-5 ans', 'Bac+5', 'Informatique', 'Développement', NULL, 'Ma société', 'www.masociete.com', '01 23 45 67 89', 'contact@masociete.com', '10 rue des exemples'),
(7, 7, 'Développeur Full Stack', 'Nous cherchons un développeur Full Stack pour rejoindre notre équipe.', '2022-01-01', '2022-06-30', 'Paris', 50000.00, 'recrutement@entreprise.com', 'CDI', '3 ans', 'Bac+5', 'Informatique', 'Informatique', 'image1.png', 'Entreprise1', 'www.entreprise1.com', '0102030405', 'contact@entreprise1.com', '10 Rue de l\'Entreprise 75001 Paris'),
(8, 5, 'Chef de projet marketing', 'Nous cherchons un chef de projet marketing pour gérer notre stratégie de communication.', '2022-02-01', '2022-07-31', 'Lyon', 60000.00, 'recrutement@entreprise.com', 'CDI', '5 ans', 'Bac+5', 'Marketing', 'Marketing', 'image2.png', 'Entreprise2', 'www.entreprise2.com', '0607080910', 'contact@entreprise2.com', '20 Rue de l\'Entreprise 69001 Lyon'),
(9, 3, 'Ingénieur mécanique', 'Nous cherchons un ingénieur mécanique pour concevoir nos produits.', '2022-03-01', '2022-08-31', 'Toulouse', 70000.00, 'recrutement@entreprise.com', 'CDI', '7 ans', 'Bac+5', 'Mécanique', 'Ingénierie', 'image3.png', 'Entreprise3', 'www.entreprise3.com', '0506070809', 'contact@entreprise3.com', '30 Rue de l\'Entreprise 31000 Toulouse'),
(10, 4, 'Technicien de maintenance', 'Nous cherchons un technicien de maintenance pour assurer le bon fonctionnement de nos équipements.', '2022-04-01', '2022-09-30', 'Marseille', 40000.00, 'recrutement@entreprise.com', 'CDI', '2 ans', 'Bac+2', 'Maintenance', 'Technique', 'image4.png', 'Entreprise4', 'www.entreprise4.com', '0405060708', 'contact@entreprise4.com', '40 Rue de l\'Entreprise 13001 Marseille'),
(11, 5, 'Commercial B2B', 'Nous cherchons un commercial B2B pour développer notre portefeuille clients.', '2022-05-01', '2022-10-31', 'Nantes', 55000.00, 'recrutement@entreprise.com', 'CDI', '4 ans', 'Bac+3', 'Commerce', 'Vente', 'image5.png', 'Entreprise5', 'www.entreprise5.com', '0304050607', 'contact@entreprise5.com', '30 Rue de l\'Entreprise 31000 Toulouse');

-- --------------------------------------------------------

--
-- Structure de la table `offres_emploi_competences`
--

CREATE TABLE `offres_emploi_competences` (
  `id_offre` int(10) UNSIGNED NOT NULL,
  `id_competence` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `offres_emploi_competences`
--

INSERT INTO `offres_emploi_competences` (`id_offre`, `id_competence`) VALUES
(2, 3),
(2, 4),
(3, 1),
(3, 3),
(4, 2),
(4, 4),
(5, 1),
(5, 4),
(6, 2),
(8, 1);

-- --------------------------------------------------------

--
-- Structure de la table `postulations`
--

CREATE TABLE `postulations` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_offre` int(10) UNSIGNED NOT NULL,
  `id_candidat` int(10) UNSIGNED NOT NULL,
  `date_postulation` date NOT NULL,
  `lettre_motivation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `postulations`
--

INSERT INTO `postulations` (`id`, `id_offre`, `id_candidat`, `date_postulation`, `lettre_motivation`) VALUES
(11, 6, 1, '2022-01-01', 'Je suis très intéressé(e) par le poste proposé et je pense avoir les compétences requises pour le remplir.'),
(12, 7, 2, '2022-01-02', 'Je suis un candidat sérieux et motivé, je pense pouvoir apporter de la valeur à l\'entreprise.'),
(13, 2, 3, '2022-01-03', 'Je suis un expert dans le domaine de la finance, je serais ravi de pouvoir apporter mon expérience à votre entreprise.'),
(14, 2, 4, '2022-01-04', 'Je suis très intéressé(e) par ce poste et je pense pouvoir apporter une grande contribution à votre entreprise.'),
(15, 3, 5, '2022-01-05', 'Je suis passionné(e) par le domaine de la vente et j\'ai une grande expérience dans ce domaine.'),
(16, 3, 6, '2022-01-06', 'Je suis persuadé(e) que mon expérience dans le domaine de la vente serait un atout pour votre entreprise.'),
(17, 4, 7, '2022-01-07', 'Je suis très intéressé(e) par le poste proposé et je pense avoir les compétences requises pour le remplir.'),
(18, 4, 8, '2022-01-08', 'Je suis un candidat sérieux et motivé, je pense pouvoir apporter de la valeur à l\'entreprise.'),
(19, 5, 9, '2022-01-09', 'Je suis un expert dans le domaine de la finance, je serais ravi de pouvoir apporter mon expérience à votre entreprise.'),
(20, 5, 10, '2022-01-10', 'Je suis très intéressé(e) par ce poste et je pense pouvoir apporter une grande contribution à votre entreprise.');

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

CREATE TABLE `profils` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `profils`
--

INSERT INTO `profils` (`id`, `nom`, `description`) VALUES
(1, 'Ingénieur', 'Personne ayant des compétences techniques pour concevoir des solutions innovantes'),
(2, 'Commercial', 'Personne ayant des compétences pour vendre des produits ou des services'),
(3, 'Développeur', 'Personne ayant des compétences pour développer des applications informatiques'),
(4, 'Designer', 'Personne ayant des compétences pour concevoir des interfaces graphiques'),
(5, 'Marketing', 'Personne ayant des compétences pour élaborer des stratégies de communication'),
(6, 'Comptable', 'Personne ayant des compétences pour tenir la comptabilité d\'une entreprise'),
(7, 'RH', 'Personne ayant des compétences pour gérer les ressources humaines d\'une entreprise'),
(8, 'Juriste', 'Personne ayant des compétences en droit pour conseiller une entreprise'),
(9, 'Consultant', 'Personne ayant des compétences pour conseiller une entreprise'),
(10, 'Formateur', 'Personne ayant des compétences pour former des personnes dans différents domaines');

-- --------------------------------------------------------

--
-- Structure de la table `recruteurs`
--

CREATE TABLE `recruteurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_entreprise` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `code_postal` varchar(10) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `recruteurs`
--

INSERT INTO `recruteurs` (`id`, `nom_entreprise`, `email`, `mot_de_passe`, `adresse`, `code_postal`, `ville`, `pays`) VALUES
(1, 'Entreprise 1', 'entreprise1@gmail.com', 'mdp1', '123 rue des entreprises', '75001', 'Paris', 'France'),
(2, 'Entreprise 2', 'entreprise2@gmail.com', 'mdp2', '456 avenue des affaires', '69002', 'Lyon', 'France'),
(3, 'Entreprise 3', 'entreprise3@gmail.com', 'mdp3', '789 boulevard du commerce', '13008', 'Marseille', 'France'),
(4, 'Entreprise 4', 'entreprise4@gmail.com', 'mdp4', '10 rue de la finance', '33000', 'Bordeaux', 'France'),
(5, 'Entreprise 5', 'entreprise5@gmail.com', 'mdp5', '11 avenue des startups', '75008', 'Paris', 'France'),
(6, 'Entreprise 6', 'entreprise6@gmail.com', 'mdp6', '12 rue de l\'industrie', '31000', 'Toulouse', 'France'),
(7, 'Entreprise 7', 'entreprise7@gmail.com', 'mdp7', '13 avenue des investisseurs', '44000', 'Nantes', 'France'),
(8, 'Entreprise 8', 'entreprise8@gmail.com', 'mdp8', '14 boulevard de la gestion', '69001', 'Lyon', 'France'),
(9, 'Entreprise 9', 'entreprise9@gmail.com', 'mdp9', '15 rue de la comptabilité', '13001', 'Marseille', 'France'),
(10, 'Entreprise 10', 'entreprise10@gmail.com', 'mdp10', '16 avenue de la direction', '75016', 'Paris', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `profil_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(45) NOT NULL,
  `id_candidat_ou_recruteur` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `mot_de_passe`, `profil_id`, `type`, `id_candidat_ou_recruteur`) VALUES
(11, 'utilisateur1@gmail.com', '123456', 1, 'candidat', 1),
(12, 'utilisateur2@gmail.com', 'abcdef', 1, 'recruteur', 2),
(13, 'utilisateur3@gmail.com', '789101', 2, 'candidat', 3),
(14, 'utilisateur4@gmail.com', 'azerty', 2, 'recruteur', 4),
(15, 'utilisateur5@gmail.com', 'qwerty', 1, 'candidat', 5),
(16, 'utilisateur6@gmail.com', '111111', 2, 'recruteur', 6),
(17, 'utilisateur7@gmail.com', '222222', 1, 'candidat', 7),
(18, 'utilisateur8@gmail.com', '333333', 2, 'recruteur', 8),
(19, 'utilisateur9@gmail.com', '444444', 1, 'candidat', 9),
(20, 'utilisateur10@gmail.com', '555555', 2, 'recruteur', 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `candidats`
--
ALTER TABLE `candidats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `index2` (`email`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `index3` (`nom`,`prenom`);

--
-- Index pour la table `candidats_competences`
--
ALTER TABLE `candidats_competences`
  ADD PRIMARY KEY (`id_candidat`,`id_competence`),
  ADD KEY `id_competence` (`id_competence`);

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_cv_candidats` (`id_candidat`);

--
-- Index pour la table `experiances`
--
ALTER TABLE `experiances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_experiances_1_idx` (`id_cv`),
  ADD KEY `index3` (`nom_societe`,`poste`,`date_fin`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_formations_1_idx` (`id_cv`),
  ADD KEY `index3` (`nom_etablissement`,`date_debut`,`date_fin`,`diplome`);

--
-- Index pour la table `offres_emploi`
--
ALTER TABLE `offres_emploi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_offres-emploi_recruteurs` (`id_recruteur`),
  ADD KEY `index3` (`date_publication`,`date_limite`,`ville_offre`,`salaire`,`titre`);

--
-- Index pour la table `offres_emploi_competences`
--
ALTER TABLE `offres_emploi_competences`
  ADD PRIMARY KEY (`id_offre`,`id_competence`),
  ADD KEY `fk_off-emp-comp_comp` (`id_competence`);

--
-- Index pour la table `postulations`
--
ALTER TABLE `postulations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_postulations_offres_emploi` (`id_offre`),
  ADD KEY `fk_postulations_candidats` (`id_candidat`);

--
-- Index pour la table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Index pour la table `recruteurs`
--
ALTER TABLE `recruteurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `index2` (`email`),
  ADD KEY `index3` (`nom_entreprise`,`adresse`,`mot_de_passe`,`ville`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `a` (`profil_id`),
  ADD KEY `fk_utilisateurs_1_idx` (`id_candidat_ou_recruteur`),
  ADD KEY `index4` (`email`,`mot_de_passe`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `candidats`
--
ALTER TABLE `candidats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `experiances`
--
ALTER TABLE `experiances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `offres_emploi`
--
ALTER TABLE `offres_emploi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `postulations`
--
ALTER TABLE `postulations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `recruteurs`
--
ALTER TABLE `recruteurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `candidats_competences`
--
ALTER TABLE `candidats_competences`
  ADD CONSTRAINT `fk_candidat-competance_candidats` FOREIGN KEY (`id_candidat`) REFERENCES `candidats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_candidat-competance_competances` FOREIGN KEY (`id_competence`) REFERENCES `competences` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `fk_cv_candidats` FOREIGN KEY (`id_candidat`) REFERENCES `candidats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `experiances`
--
ALTER TABLE `experiances`
  ADD CONSTRAINT `fk_experiances_cv` FOREIGN KEY (`id_cv`) REFERENCES `cv` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `formations`
--
ALTER TABLE `formations`
  ADD CONSTRAINT `fk_formations_cv` FOREIGN KEY (`id_cv`) REFERENCES `cv` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `offres_emploi`
--
ALTER TABLE `offres_emploi`
  ADD CONSTRAINT `fk_offres-emploi_recruteurs` FOREIGN KEY (`id_recruteur`) REFERENCES `recruteurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `offres_emploi_competences`
--
ALTER TABLE `offres_emploi_competences`
  ADD CONSTRAINT `fk_off-emp-comp_comp` FOREIGN KEY (`id_competence`) REFERENCES `competences` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_off-emp-comp_offr-emp` FOREIGN KEY (`id_offre`) REFERENCES `offres_emploi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `postulations`
--
ALTER TABLE `postulations`
  ADD CONSTRAINT `fk_postulations_candidats` FOREIGN KEY (`id_candidat`) REFERENCES `candidats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_postulations_offres_emploi` FOREIGN KEY (`id_offre`) REFERENCES `offres_emploi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `fk_utilisateurs_avec_cand` FOREIGN KEY (`id_candidat_ou_recruteur`) REFERENCES `candidats` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_utilisateurs_avec_profils` FOREIGN KEY (`profil_id`) REFERENCES `profils` (`id`),
  ADD CONSTRAINT `fk_utilisateurs_avec_recr` FOREIGN KEY (`id_candidat_ou_recruteur`) REFERENCES `recruteurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
