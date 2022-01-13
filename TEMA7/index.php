<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    //$conex = new mysqli("localhost", "root", "pass", "database");
    $conex = new mysqli("localhost", "root", "", "world");
    $conex->autocommit(false);

    try{$conex->begin_transaction();
        $conex->query("INSERT INTO country(Code, Name) VALUES ('MED', 'MEDAC')");
        $conex->query("INSERT INTO city(CountryCode, Name) VALUES ('MED', 'ARENA')");
        $conex->query("INSERT INTO city(CountryCode, Name) VALUES ('MED', 'MÁLAGA')");
        $conex->query("INSERT INTO countrylanguage(CountryCode, Language) VALUES ('MED', 'PHP')");
        $conex->query("INSERT INTO countrylanguage(CountryCode, Language) VALUES ('MED', 'JAVA')");
        $conex->query("UPDATE country SET Code = 'IES' WHERE Code = 'MED' ");
        $conex->commit();
    } catch (Exception $e) {
        $conex->rollback();
        echo 'Something fails: ', $e->getMessage(), "\n";
    }
//---------------------------------------------------------------------------------------------------------
    $conex = new mysqli("localhost", "root", "", "world");
    $conex->autocommit(false);

    try{$conex->begin_transaction();
        $conex->query("INSERT INTO country(code) VALUES ('MED')");
        // DELETE FROM city WHERE Name = 'MÁLAGA'
        // INSERT INTO city(CountryCode, Name) VALUES ('MED', 'MALAGA')
        // INSERT INTO countrylanguage(CountryCode, Language) VALUES ('MED', 'PHP')
        // INSERT INTO countrylanguage(CountryCode, Language) VALUES ('MED', 'JAVA')
        $conex->query("UPDATE country SET Code = 'IES' WHERE Code = 'MED' ");
        $conex->commit();
    } catch (Exception $e) {
        $conex->rollback();
        echo 'Something fails: ', $e->getMessage(), "\n";
    }
//---------------------------------------------------------------------------------------------------------
    $conex = new mysqli("localhost", "root", "", "world");
    $conex->autocommit(false);

    try{$conex->begin_transaction();
        $conex->query("INSERT INTO country(code) VALUES ('MED')");
        // INSERT INTO country(code, Name) VALUES ('MED', 'MEDAC')
        // INSERT INTO city(CountryCode, Name) VALUES ('MED', 'ARENA')
        // INSERT INTO city(CountryCode, Name) VALUES ('MED', 'MALAGA')
        // INSERT INTO countrylanguage(CountryCode, Language) VALUES ('MED', 'PHP')
        // INSERT INTO countrylanguage(CountryCode, Language) VALUES ('MED', 'JAVA')
        $conex->query("UPDATE country SET Code = 'IES' WHERE Code = 'MED' ");
        $conex->commit();
    } catch (Exception $e) {
        $conex->rollback();
        echo 'Something fails: ', $e->getMessage(), "\n";
    }
    ?>
</body>
</html>