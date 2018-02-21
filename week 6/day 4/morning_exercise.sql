$pdo = new PDO(
    'mysql:dbname=student;host=localhost;charset=utf8',
    'root',
    'adrian19061989'
);

error_reporting(E_ALL);
ini_set('display_errors',1);


SELECT * FROM `country` ORDER BY `population` DESC


SELECT * FROM `country`
ORDER BY `population`/`SurfaceArea` DESC

INSERT INTO `city` (`Name`, `CountryCode`,`District`,`Population`)
VALUES('Neverland City','NNN','ING','12335467')