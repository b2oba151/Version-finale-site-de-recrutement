CREATE SCHEMA `base_de_donnee_site_recrutement`;

CREATE TABLE `base_de_donnee_site_recrutement`.`profils` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(50) NOT NULL,
  `description` VARCHAR(255) DEFAULT NULL
);

CREATE TABLE `base_de_donnee_site_recrutement`.`candidats` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(255) NOT NULL,
  `prenom` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `telephone` VARCHAR(20) NOT NULL,
  `mot_de_passe` VARCHAR(255) NOT NULL,
  `adresse` VARCHAR(255) NOT NULL,
  `code_postal` VARCHAR(10) NOT NULL,
  `ville` VARCHAR(255) NOT NULL,
  `pays` VARCHAR(255) NOT NULL
);

CREATE TABLE `base_de_donnee_site_recrutement`.`recruteurs` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nom_entreprise` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `mot_de_passe` VARCHAR(255) NOT NULL,
  `adresse` VARCHAR(255) NOT NULL,
  `code_postal` VARCHAR(10) NOT NULL,
  `ville` VARCHAR(255) NOT NULL,
  `pays` VARCHAR(255) NOT NULL
);

CREATE TABLE `base_de_donnee_site_recrutement`.`utilisateurs` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NOT NULL,
  `mot_de_passe` VARCHAR(255) NOT NULL,
  `profil_id` INT NOT NULL,
  `type` VARCHAR(45) NOT NULL,
  `id_candidat_ou_recruteur` INT DEFAULT NULL
);

CREATE TABLE `base_de_donnee_site_recrutement`.`offres_emploi` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `id_recruteur` INT NOT NULL,
  `titre` VARCHAR(255) NOT NULL,
  `description` TEXT NOT NULL,
  `date_publication` DATE NOT NULL,
  `date_limite` DATE NOT NULL,
  `ville_offre` VARCHAR(255) NOT NULL,
  `salaire` DECIMAL(10,2) DEFAULT NULL,
  `email_recruteur` VARCHAR(45) DEFAULT NULL,
  `type_travail` VARCHAR(45) DEFAULT NULL,
  `experience` VARCHAR(45) DEFAULT NULL,
  `niveau_etude` VARCHAR(45) DEFAULT NULL,
  `nom_industrie` VARCHAR(45) DEFAULT NULL,
  `categorie_travail` VARCHAR(45) DEFAULT NULL,
  `images` VARCHAR(45) DEFAULT NULL,
  `nom_societe` VARCHAR(45) DEFAULT NULL,
  `site_internet` VARCHAR(45) DEFAULT NULL,
  `numero_telephone` VARCHAR(45) DEFAULT NULL,
  `email_entreprise` VARCHAR(45) DEFAULT NULL,
  `adresse_entreprise` VARCHAR(45) DEFAULT NULL
);

CREATE TABLE `base_de_donnee_site_recrutement`.`postulations` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `id_offre` INT NOT NULL,
  `id_candidat` INT NOT NULL,
  `date_postulation` DATE NOT NULL,
  `lettre_motivation` TEXT DEFAULT NULL
);

CREATE TABLE `base_de_donnee_site_recrutement`.`cv` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `id_candidat` INT NOT NULL,
  `titre_profession` VARCHAR(255) NOT NULL,
  `description` TEXT NOT NULL,
  `fichier_cv` VARCHAR(255) NOT NULL,
  `date_creation` DATE NOT NULL,
  `age` VARCHAR(45) DEFAULT NULL,
  `ville` VARCHAR(45) DEFAULT NULL,
  `sexe` VARCHAR(45) DEFAULT NULL,
  `type_travail` VARCHAR(45) DEFAULT NULL,
  `experience` VARCHAR(45) DEFAULT NULL,
  `image` VARCHAR(45) DEFAULT NULL
);

CREATE TABLE `base_de_donnee_site_recrutement`.`competences` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(255) NOT NULL,
  `description` TEXT DEFAULT NULL
);

CREATE TABLE `base_de_donnee_site_recrutement`.`candidats_competences` (
  `id_candidat` INT NOT NULL,
  `id_competence` INT NOT NULL,
  `niveau` INT NOT NULL,
  PRIMARY KEY (`id_candidat`, `id_competence`)
);

CREATE TABLE `base_de_donnee_site_recrutement`.`offres_emploi_competences` (
  `id_offre` INT NOT NULL,
  `id_competence` INT NOT NULL,
  PRIMARY KEY (`id_offre`, `id_competence`)
);

CREATE TABLE `base_de_donnee_site_recrutement`.`formations` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `id_cv` INT NOT NULL,
  `nom_etablissement` VARCHAR(45) DEFAULT NULL,
  `description_bref` VARCHAR(45) DEFAULT NULL,
  `date_debut` DATE DEFAULT NULL,
  `date_fin` DATE DEFAULT NULL,
  `diplome` VARCHAR(45) DEFAULT NULL
);

CREATE TABLE `base_de_donnee_site_recrutement`.`experiances` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `id_cv` INT NOT NULL,
  `nom_societe` VARCHAR(45) DEFAULT NULL,
  `poste` VARCHAR(45) DEFAULT NULL,
  `nom_employeur` VARCHAR(45) DEFAULT NULL,
  `description_bref` VARCHAR(45) DEFAULT NULL,
  `date_debut` DATE DEFAULT NULL,
  `date_fin` DATE DEFAULT NULL
);

CREATE UNIQUE INDEX `id_UNIQUE` ON `base_de_donnee_site_recrutement`.`profils` (`id`);

CREATE UNIQUE INDEX `index2` ON `base_de_donnee_site_recrutement`.`candidats` (`email`);

CREATE INDEX `index3` ON `base_de_donnee_site_recrutement`.`candidats` (`nom`, `prenom`);

CREATE UNIQUE INDEX `id_UNIQUE` ON `base_de_donnee_site_recrutement`.`candidats` (`id`);

CREATE UNIQUE INDEX `index2` ON `base_de_donnee_site_recrutement`.`recruteurs` (`email`);

CREATE INDEX `index3` ON `base_de_donnee_site_recrutement`.`recruteurs` (`nom_entreprise`, `adresse`, `mot_de_passe`, `ville`);

CREATE INDEX `a` ON `base_de_donnee_site_recrutement`.`utilisateurs` (`profil_id`);

CREATE INDEX `fk_utilisateurs_1_idx` ON `base_de_donnee_site_recrutement`.`utilisateurs` (`id_candidat_ou_recruteur`);

CREATE INDEX `index4` ON `base_de_donnee_site_recrutement`.`utilisateurs` (`email`, `mot_de_passe`);

CREATE UNIQUE INDEX `id_UNIQUE` ON `base_de_donnee_site_recrutement`.`utilisateurs` (`id`);

CREATE INDEX `fk_offres-emploi_recruteurs` ON `base_de_donnee_site_recrutement`.`offres_emploi` (`id_recruteur`);

CREATE INDEX `index3` ON `base_de_donnee_site_recrutement`.`offres_emploi` (`date_publication`, `date_limite`, `ville_offre`, `salaire`, `titre`);

CREATE UNIQUE INDEX `id_UNIQUE` ON `base_de_donnee_site_recrutement`.`offres_emploi` (`id`);

CREATE INDEX `fk_postulations_offres_emploi` ON `base_de_donnee_site_recrutement`.`postulations` (`id_offre`);

CREATE INDEX `fk_postulations_candidats` ON `base_de_donnee_site_recrutement`.`postulations` (`id_candidat`);

CREATE UNIQUE INDEX `id_UNIQUE` ON `base_de_donnee_site_recrutement`.`postulations` (`id`);

CREATE INDEX `fk_cv_candidats` ON `base_de_donnee_site_recrutement`.`cv` (`id_candidat`);

CREATE UNIQUE INDEX `id_UNIQUE` ON `base_de_donnee_site_recrutement`.`cv` (`id`);

CREATE INDEX ``base_de_donnee_site_recrutement`.candidats_competences_index_18` ON `base_de_donnee_site_recrutement`.`candidats_competences` (`id_competence`);

CREATE INDEX `fk_off-emp-comp_comp` ON `base_de_donnee_site_recrutement`.`offres_emploi_competences` (`id_competence`);

CREATE INDEX `fk_formations_1_idx` ON `base_de_donnee_site_recrutement`.`formations` (`id_cv`);

CREATE INDEX `index3` ON `base_de_donnee_site_recrutement`.`formations` (`nom_etablissement`, `date_debut`, `date_fin`, `diplome`);

CREATE UNIQUE INDEX `id_UNIQUE` ON `base_de_donnee_site_recrutement`.`formations` (`id`);

CREATE INDEX `fk_experiances_1_idx` ON `base_de_donnee_site_recrutement`.`experiances` (`id_cv`);

CREATE INDEX `index3` ON `base_de_donnee_site_recrutement`.`experiances` (`nom_societe`, `poste`, `date_fin`);

CREATE UNIQUE INDEX `id_UNIQUE` ON `base_de_donnee_site_recrutement`.`experiances` (`id`);

ALTER TABLE `base_de_donnee_site_recrutement`.`utilisateurs` ADD CONSTRAINT `fk_utilisateurs_avec_profils` FOREIGN KEY (`profil_id`) REFERENCES `base_de_donnee_site_recrutement`.`profils` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `base_de_donnee_site_recrutement`.`utilisateurs` ADD CONSTRAINT `fk_utilisateurs_avec_cand` FOREIGN KEY (`id_candidat_ou_recruteur`) REFERENCES `base_de_donnee_site_recrutement`.`candidats` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `base_de_donnee_site_recrutement`.`utilisateurs` ADD CONSTRAINT `fk_utilisateurs_avec_recr` FOREIGN KEY (`id_candidat_ou_recruteur`) REFERENCES `base_de_donnee_site_recrutement`.`recruteurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `base_de_donnee_site_recrutement`.`offres_emploi` ADD CONSTRAINT `fk_offres-emploi_recruteurs` FOREIGN KEY (`id_recruteur`) REFERENCES `base_de_donnee_site_recrutement`.`recruteurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `base_de_donnee_site_recrutement`.`postulations` ADD CONSTRAINT `fk_postulations_offres_emploi` FOREIGN KEY (`id_offre`) REFERENCES `base_de_donnee_site_recrutement`.`offres_emploi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `base_de_donnee_site_recrutement`.`postulations` ADD CONSTRAINT `fk_postulations_candidats` FOREIGN KEY (`id_candidat`) REFERENCES `base_de_donnee_site_recrutement`.`candidats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `base_de_donnee_site_recrutement`.`cv` ADD CONSTRAINT `fk_cv_candidats` FOREIGN KEY (`id_candidat`) REFERENCES `base_de_donnee_site_recrutement`.`candidats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `base_de_donnee_site_recrutement`.`candidats_competences` ADD CONSTRAINT `fk_candidat-competance_candidats` FOREIGN KEY (`id_candidat`) REFERENCES `base_de_donnee_site_recrutement`.`candidats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `base_de_donnee_site_recrutement`.`candidats_competences` ADD CONSTRAINT `fk_candidat-competance_competances` FOREIGN KEY (`id_competence`) REFERENCES `base_de_donnee_site_recrutement`.`competences` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `base_de_donnee_site_recrutement`.`offres_emploi_competences` ADD CONSTRAINT `fk_off-emp-comp_offr-emp` FOREIGN KEY (`id_offre`) REFERENCES `base_de_donnee_site_recrutement`.`offres_emploi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `base_de_donnee_site_recrutement`.`offres_emploi_competences` ADD CONSTRAINT `fk_off-emp-comp_comp` FOREIGN KEY (`id_competence`) REFERENCES `base_de_donnee_site_recrutement`.`competences` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `base_de_donnee_site_recrutement`.`formations` ADD CONSTRAINT `fk_formations_cv` FOREIGN KEY (`id_cv`) REFERENCES `base_de_donnee_site_recrutement`.`cv` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `base_de_donnee_site_recrutement`.`experiances` ADD CONSTRAINT `fk_experiances_cv` FOREIGN KEY (`id_cv`) REFERENCES `base_de_donnee_site_recrutement`.`cv` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `base_de_donnee_site_recrutement`.`offres_emploi_competences` ADD FOREIGN KEY (`id_competence`) REFERENCES `base_de_donnee_site_recrutement`.`offres_emploi_competences` (`id_offre`);
