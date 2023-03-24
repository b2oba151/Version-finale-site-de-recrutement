
 ---affichage de la liste des candidats avec leurs competances et l'id_offre auquel ils on postuler :

                        SELECT c.id,c.nom, c.prenom, GROUP_CONCAT(co.titre SEPARATOR ', ') AS competences, p.id AS id_offre, o.categorie_travail 
                        FROM candidats c 
                        INNER JOIN postulations p ON c.id = p.id_candidat 
                        INNER JOIN offres_emploi o ON p.id_offre = o.id 
                        INNER JOIN offres_emploi_competences oc ON o.id = oc.id_offre 
                        INNER JOIN competences co ON oc.id_competence = co.id 
                        GROUP BY c.id;



--  Requette du score des candidats(cas: recuperer les candiats avec comme competances 'Programmation Python', 'Gestion de Projet' et 'Gestion de projet' comme titre du poste)

                        SELECT c.id, c.nom, c.prenom, cv.titre_profession, cv.description, cv.fichier_cv, cv.ville, cv.sexe, cv.type_travail, cv.experience, GROUP_CONCAT(co.titre SEPARATOR ', ') AS competences, COUNT(DISTINCT co.id) AS nb_competences, p.id AS id_offre, o.categorie_travail
                        FROM candidats c
                        INNER JOIN postulations p ON c.id = p.id_candidat
                        INNER JOIN offres_emploi o ON p.id_offre = o.id
                        INNER JOIN offres_emploi_competences oc ON o.id = oc.id_offre
                        INNER JOIN competences co ON oc.id_competence = co.id
                        INNER JOIN cv ON c.id = cv.id_candidat
                        WHERE co.titre IN ('Programmation Python', 'Gestion de Projet')
                        AND o.categorie_travail = 'Gestion de projet'
                        GROUP BY c.id
                        ORDER BY nb_competences asc;


   --recupere la liste de tous les candidat(nom,prenom) avec les id_offre_emploi  champ => candidats et postulations
                    SELECT postulations.id_offre,candidats.nom, candidats.prenom 
                    FROM candidats
                    INNER JOIN postulations ON candidats.id = postulations.id_candidat ;





























---------------------------------liaison de tous les tables entre eux
SELECT *
FROM profils
JOIN utilisateurs ON profils.id = utilisateurs.profil_id
LEFT JOIN candidats ON utilisateurs.id_candidat_ou_recruteur = candidats.id
LEFT JOIN recruteurs ON utilisateurs.id_candidat_ou_recruteur = recruteurs.id
LEFT JOIN offres_emploi ON offres_emploi.id_recruteur = recruteurs.id
LEFT JOIN postulations ON postulations.id_offre = offres_emploi.id
LEFT JOIN cv ON cv.id_candidat = candidats.id
LEFT JOIN candidats_competences ON candidats_competences.id_candidat = candidats.id
LEFT JOIN competences ON competences.id = candidats_competences.id_competence
LEFT JOIN offres_emploi_competences ON offres_emploi_competences.id_offre = offres_emploi.id
LEFT JOIN formations ON formations.id_cv = cv.id
LEFT JOIN experiances ON experiances.id_cv = cv.id;






-------------------------------recuperation des infos  utilisateurs
SELECT utilisateurs.email, utilisateurs.mot_de_passe, utilisateurs.type, candidats.nom, candidats.prenom, recruteurs.nom_entreprise, recruteurs.adresse
FROM utilisateurs
LEFT JOIN candidats ON utilisateurs.id_candidat_ou_recruteur = candidats.id AND utilisateurs.type = 'candidat'
LEFT JOIN recruteurs ON utilisateurs.id_candidat_ou_recruteur = recruteurs.id AND utilisateurs.type = 'recruteur';











--------------------------------------------------------------------------------------------
--                                                                              OFFRES EMPLOI                                                                                -
--------------------------------------------------------------------------------------------
----récupérer la liste des candidats( id_offre,id_candidat,nom et prenom) [champs=>table postulations, et candidat]qui ont postuler pour ll offre d emploi avec avec id =5 [plus clair ]
SELECT postulations.id_offre,candidats.nom, candidats.prenom 
FROM candidats
INNER JOIN postulations ON candidats.id = postulations.id_candidat 
WHERE postulations.id_offre = 5;

                    --recupere la liste de tous les candidat(nom,prenom) avec les id_offre_emploi  champ => candidats et postulations
                    SELECT postulations.id_offre,candidats.nom, candidats.prenom 
                    FROM candidats
                    INNER JOIN postulations ON candidats.id = postulations.id_candidat ;





----récupérer la liste des id_candidats( id_offre,nom_offre,id_candidat) [champs=>table postulations, et offres_emploi]qui ont postuler pour ll offre d emploi avec avec id =5
SELECT offres_emploi.id as id_offre, offres_emploi.titre as nom_offre,postulations.id_candidat as id_candidat
FROM offres_emploi 
INNER JOIN postulations ON offres_emploi.id=postulations.id_offre
WHERE postulations.id_offre=5;


                    --recupere la liste de tous les candidat(id_offre,nom_offre,id_candidat) champ=>tables offres_emploi et postulations
                    SELECT offres_emploi.id as id_offre, offres_emploi.titre as nom_offre,postulations.id_candidat as id_candidat
                    FROM offres_emploi 
                    INNER JOIN postulations ON offres_emploi.id=postulations.id_offre;




--------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------















--------------------------------------------------------------------------------------------
--                                                                                   COMPETANCE                                                                                -
--------------------------------------------------------------------------------------------
--récupérer la liste des compétences des candidats par candidat
SELECT candidats.nom, competences.titre AS nom_competence
FROM candidats
JOIN candidats_competences ON candidats.id = candidats_competences.id_candidat
JOIN competences ON candidats_competences.id_competence = competences.id
ORDER BY candidats.nom;

--récupérer la liste des compétences d un candidat precis
SELECT candidats.id as id_candidat,candidats.nom as nom,candidats.prenom as prenom , competences.id as competance_id, competences.titre AS nom_competence
FROM candidats
JOIN candidats_competences ON candidats.id = candidats_competences.id_candidat
JOIN competences ON candidats_competences.id_competence = competences.id
where candidats.nom='lefebvre'
ORDER BY candidats.nom;



-- récupérer la liste  des candidats qui on pour competances:  'Anglais', 'Programmation Python', 'Communication'

SELECT c.nom, c.prenom, c.email
FROM candidats c
INNER JOIN candidats_competences cc ON c.id = cc.id_candidat
INNER JOIN competences comp ON cc.id_competence = comp.id
WHERE comp.titre IN ('Anglais', 'Programmation Python', 'Communication')
GROUP BY c.id
HAVING COUNT(DISTINCT comp.titre) >= 1;


----------------------------
--SCORES DU CANDIDAT
----------------------------
            -- récupérer la liste  des candidats qui on pour competances:  'Anglais', 'Programmation Python', 'Communication' avec le score(nombre_competences)
            SELECT c.nom,c.prenom, COUNT(cc.id_competence) AS nombre_competences
            FROM candidats c
            JOIN candidats_competences cc ON c.id = cc.id_candidat
            JOIN competences comp ON cc.id_competence = comp.id
            WHERE comp.titre IN ('Anglais', 'Programmation Python', 'Communication')
            GROUP BY c.id;

            -- récupérer la liste  des candidats AVEC email et mot de passe qui on pour competances:  'Anglais', 'Programmation Python', 'Communication' avec le score(nombre_competences)
            SELECT c.id, c.nom, c.prenom, c.email, c.mot_de_passe, COUNT(cc.id_competence) AS nb_competences
            FROM candidats c
            JOIN candidats_competences cc ON c.id = cc.id_candidat
            JOIN competences comp ON cc.id_competence = comp.id
            WHERE comp.titre IN  ('Anglais', 'Programmation Python', 'Communication')
            GROUP BY c.id
            HAVING COUNT(cc.id_competence) > 0
            ORDER BY c.nom, c.prenom;

--recuperer la liste des candidats qui on pour experices 3 ans
SELECT candidats.id, candidats.nom, candidats.prenom
FROM candidats
INNER JOIN cv ON candidats.id = cv.id_candidat
WHERE cv.experience = 3;



-----------CALCUL DU SCRORE------------------------

SELECT 
    candidats.nom, 
    candidats.prenom, 
    candidats.email, 
    recruteurs.id as id_recruteur, 
    recruteurs.nom_entreprise, 
    cv.id as id_cv, 
    SUM(CASE WHEN candidats_competences.id_competence IN (SELECT id_competence FROM offres_emploi_competences WHERE id_offre = 2) THEN 1 ELSE 0 END) / COUNT(offres_emploi_competences.id_competence) AS score 
FROM 
    candidats 
    JOIN cv ON candidats.id = cv.id_candidat 
    JOIN candidats_competences ON candidats.id = candidats_competences.id_candidat 
    JOIN postulations ON candidats.id = postulations.id_candidat 
    JOIN offres_emploi ON postulations.id_offre = offres_emploi.id 
    JOIN recruteurs ON offres_emploi.id_recruteur = recruteurs.id 
    JOIN offres_emploi_competences ON offres_emploi.id = offres_emploi_competences.id_offre 
WHERE 
    offres_emploi.id = 2 
    AND cv.experience >= offres_emploi.experience 
GROUP BY 
    candidats.id 
HAVING 
score > 0;







--------CHECHER CANDIDATS --------------------------------

SELECT candidats.nom, candidats.prenom, cv.titre_profession, cv.type_travail, cv.ville
FROM candidats
JOIN cv ON candidats.id = cv.id_candidat
WHERE cv.titre_profession = 'Développeur web'
AND cv.ville = 'Paris'
AND cv.experience >= 3
AND cv.type_travail = 'Temps plein'
AND cv.sexe = 'Homme';





----------------candidat detail :candidats.nom, candidats.prénom, cv.type_travail,cv.description,cv.fichier_cv
        SELECT candidats.nom, candidats.prenom, cv.type_travail, cv.description, cv.fichier_cv
        FROM candidats
        INNER JOIN cv ON candidats.id = cv.id_candidat
        WHERE candidats.id = 4;



----------------les competanced de candidat
        SELECT competences.id, competences.titre, competences.description
        FROM competences
        INNER JOIN candidats_competences
        ON competences.id = candidats_competences.id_competence
        WHERE candidats_competences.id_candidat = 1;
                    ----------------ou--------
                    SELECT candidats.id as id_candidat,candidats.nom as nom,candidats.prenom as prenom , competences.id as competance_id, competences.titre AS nom_competence
                                    FROM candidats
                                    JOIN candidats_competences ON candidats.id = candidats_competences.id_candidat
                                    JOIN competences ON candidats_competences.id_competence = competences.id
                                    where candidats.id='1'
                                    ORDER BY candidats.nom;




----------------les experiences du candidat avec id=1
SELECT nom_societe, poste, nom_employeur, description_bref, date_debut, date_fin 
FROM experiances 
INNER JOIN cv ON experiances.id_cv = cv.id 
INNER JOIN candidats ON cv.id_candidat = candidats.id 
WHERE candidats.id = 1 
ORDER BY date_fin DESC;


----------------les formations du candidat avec id=1
SELECT formations.nom_etablissement, formations.description_bref, formations.diplome, formations.date_debut, formations.date_fin
FROM candidats
JOIN cv ON candidats.id = cv.id_candidat
JOIN formations ON cv.id = formations.id_cv
WHERE candidats.id = 1
ORDER BY formations.date_fin desc;






-----------------------------------------------
---------------------------------------------------
---------------rechercher recruteur
                SELECT recruteurs.id as id_recruteur, recruteurs.nom_entreprise, offres_emploi.categorie_travail, offres_emploi.ville_offre, offres_emploi.experience, offres_emploi.type_travail, COUNT(*) AS nombre_offres
                FROM recruteurs
                INNER JOIN offres_emploi ON recruteurs.id = offres_emploi.id_recruteur
                GROUP BY recruteurs.id;


                SELECT recruteurs.id as id_recruteur, recruteurs.nom_entreprise, offres_emploi.categorie_travail, offres_emploi.ville_offre, offres_emploi.experience, offres_emploi.type_travail, COUNT(DISTINCT offres_emploi.id) AS nb_offres, COUNT(DISTINCT postulations.id_candidat) AS nb_candidats
                FROM recruteurs
                LEFT JOIN offres_emploi ON recruteurs.id = offres_emploi.id_recruteur
                LEFT JOIN postulations ON offres_emploi.id = postulations.id_offre
                GROUP BY recruteurs.id;


---------------------emploi poster par un recruteur
   SELECT recruteurs.id, COUNT(offres_emploi.id) AS nombre_offres, offres_emploi.*, COUNT(DISTINCT postulations.id_candidat) AS nombre_postulations 
FROM recruteurs 
LEFT JOIN offres_emploi ON recruteurs.id = offres_emploi.id_recruteur 
LEFT JOIN postulations ON offres_emploi.id = postulations.id_offre 
WHERE recruteurs.id = 1 
GROUP BY recruteurs.id, offres_emploi.id;


------offre details

SELECT recruteurs.id as id_recriteur, offres_emploi.*, COUNT(postulations.id_candidat) as nombre_candidats 
FROM recruteurs 
JOIN offres_emploi ON recruteurs.id = offres_emploi.id_recruteur 
LEFT JOIN postulations ON offres_emploi.id = postulations.id_offre 
WHERE recruteurs.id = 1 
GROUP BY offres_emploi.id;