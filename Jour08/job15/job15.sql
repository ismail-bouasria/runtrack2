SELECT salles.nom AS sallenom,etage.nom AS etagenom
FROM salles 
INNER JOIN etage ON salles.`id-etage` = etage.id