CREATE TABLE tbTrajets( 
            id INT PRIMARY KEY AUTO_INCREMENT,
            pointDepart VARCHAR(75),
            pointArrive VARCHAR(75),
            distance DOUBLE,
        );

        CREATE TABLE tbChauffeurs(
            id INT PRIMARY KEY AUTO_INCREMENT,
            nomChauffeur VARCHAR(50),
            salaire DOUBLE
        );

        CREATE TABLE tbVehicules(
            id INT PRIMARY KEY AUTO_INCREMENT,
            nomVehicule VARCHAR(50),
            isDisponible boolean
        );

        CREATE TABLE tbMvtTrajet(
            dateDebut DATETIME,
            dateFin DATETIME,
            idChauffeur INT,
            idVehicule INT,
            idTrajet INT,
            montantRecette DOUBLE,
            montantCarburant DOUBLE
        );

        CREATE TABLE tbUsrers(
            id INT PRIMARY KEY AUTO_INCREMENT,
            nomUser VARCHAR(50),
            motDePasse VARCHAR(100),
            roleUser VARCHAR(20)
        );

        CREATE TABLE tbVersements(
            id INT PRIMARY KEY AUTO_INCREMENT,
            minVersement DOUBLE,
            idPourcentage INT
        );

        CREATE TABLE tbPourcentages(
            id INT PRIMARY KEY AUTO_INCREMENT,
            pourcentage DOUBLE
        );