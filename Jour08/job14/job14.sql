SELECT Nom, Prenom, naissance 
FROM etudiants 
WHERE naissance >= '1998' 
AND naissance <= '2018'

-- OU BIEN 
SELECT prenom, nom, naissance 
FROM etudiants 
WHERE naissance 
BETWEEN '1998-01-01' 
AND '2018-01-01'