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
    $conex = new mysqli("localhost", "root", "", "world");
    mysqli_report(MYSQLI_REPORT_ALL);
    $conex->autocommit(false);

    $opcion = $_POST["option"];

    switch($opcion){

        case 1;

            try{$conex->begin_transaction();
                $conex->autocommit(false);

                $conex->query("INSERT INTO country(Code, Name) VALUES ('MED', 'MEDAC')");
                $conex->query("INSERT INTO city(CountryCode, Name) VALUES ('MED', 'ARENA')");
                $conex->query("INSERT INTO city(CountryCode, Name) VALUES ('MED', 'MÁLAGA')");
                $conex->query("INSERT INTO countrylanguage(CountryCode, Language) VALUES ('MED', 'PHP')");
                $conex->query("INSERT INTO countrylanguage(CountryCode, Language) VALUES ('MED', 'JAVA')");
                $conex->commit();
            } catch (Exception $e) {
                $conex->rollback();
                echo 'Something fails: ', $e->getMessage(), "\n";
            }
        
        
        break;

        case 2;


            try{$conex->begin_transaction();
                $conex->autocommit(false);

                $conex->query("DELETE FROM city WHERE Name = 'MÁLAGA'");
                $conex->query("INSERT INTO city(CountryCode, Name) VALUES ('MED', 'CÓRDOBA')");
                $conex->query("INSERT INTO city(CountryCode, Name) VALUES ('MED', 'SEVILLA')");
                $conex->query("UPDATE country SET Code = 'IES' WHERE Code = 'MED' ");
                $conex->commit();
            } catch (Exception $e) {
                $conex->rollback();
                echo 'Something fails: ', $e->getMessage(), "\n";
            }
        
        
        break;

        case 3;


            try{$conex->begin_transaction();
                $conex->autocommit(false);
                
                $conex->query("DELETE FROM country WHERE Code = 'IES'");
                $conex->query("INSERT INTO countrylanguage(CountryCode, Language) VALUES ('MED', 'PHYTON')");
                $conex->query("INSERT INTO countrylanguage(CountryCode, Language) VALUES ('MED', 'JAVASCRIPT')");
                $conex->query("INSERT INTO countrylanguage(CountryCode, Language) VALUES ('MED', 'MySQL')");
                $conex->query("INSERT INTO countrylanguage(CountryCode, Language) VALUES ('MED', 'HTML')");
                $conex->query("INSERT INTO countrylanguage(CountryCode, Language) VALUES ('MED', 'CSS')");
                $conex->commit();
            } catch (Exception $e) {
                $conex->rollback();
                echo 'Something fails: ', $e->getMessage(), "\n";
            }
        
        
        break;
    }   
    ?>
</body>
</html>