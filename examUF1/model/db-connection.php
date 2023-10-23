

<?php

/**
 * Crea una nova connexió amb la base de dades
 *
 * @return PDO objecte PDO amb la connexió
 */
function getConnection()
{
    try {
        // Ex8
        require_once "../controller/env.php";
        return new PDO(sprintf('mysql:host=%s;dbname=%s',DB_HOST, DB_NAME), DB_USER,DB_PASS);
    } catch (PDOException $e) {
        die(sprintf("%s", Error));
    }
}
?>