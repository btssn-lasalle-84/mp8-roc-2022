CREATE DATABASE roc1;
SELECT roc1;
CREATE TABLE recyclable (
        idPoubelle int(10) NOT NULL ,
        pourcentage  float , 
       nbrSac  int ,
       latitude float,
       longitude float,
       IdSite int,
       PRIMARY KEY (idPoubelle)
);




CREATE TABLE vert (
        idPoubelle int(10) NOT NULL ,
        pourcentage  float , 
       nbrSac  int ,
       latitude float,
       longitude float,
       IdSite int,
       PRIMARY KEY (idPoubelle)
);



CREATE TABLE gris (
        idPoubelle int(10) NOT NULL ,
        pourcentage  float , 
       nbrSac  int ,
       latitude float,
       longitude float,
       IdSite int,
       PRIMARY KEY (idPoubelle)
);


INSERT INTO recyclable (idPoubelle, pourcentage, nbrSac, latitude, longitude, IdSite)
VALUES (1,0,0,0,0,1);

INSERT INTO vert (idPoubelle, pourcentage, nbrSac, latitude, longitude, IdSite)
VALUES (2,0,0,0,0,1);

INSERT INTO gris (idPoubelle, pourcentage, nbrSac, latitude, longitude, IdSite)
VALUES (3,0,0,0,0,1);



/*idsite1 = place des carmes */
/*UPDATE recyclable
SET nbrSac = 20
WHERE idPoubelle=1;*/
