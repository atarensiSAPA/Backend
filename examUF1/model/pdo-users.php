
<?php

require_once 'db-connection.php';
// Ex8
require_once "../controller/env.php";

/**
 * Consulta l'existència d'un usuari mitjançant un email
 *
 * @param string $email email de l'usuari a consultar
 * 
 * @return boolean si existeix o no
 */
function userExistsByEmail($email)
{
    try {
        $connexio = getConnection();

        $statement = $connexio->prepare('SELECT email FROM users WHERE email = :email');

        $statement->bindValue(':email', $email);

        $statement->execute();

        $count = count($statement->fetchAll());

        return ($count > 0);
    } catch (PDOException $e) {
        // Ex8 ho he fet a totes
        die(sprintf("%s", Error));
    }
}

/**
 * Consulta l'existència d'un usuari mitjançant un nickname
 *
 * @param string $nickname nickname de l'usuari a consultar
 * 
 * @return boolean si existeix o no
 */
function userExistsByNickname($nickname)
{
    try {
        $connexio = getConnection();

        $statement = $connexio->prepare('SELECT email FROM users WHERE nickname = :nickname');

        $statement->bindValue(':nickname', $nickname);

        $statement->execute();

        $count = count($statement->fetchAll());

        return ($count > 0);
    } catch (PDOException $e) {
        die(sprintf("%s", Error));
    }
}

/**
 * Obté el hash MD5 del password d'un usuari
 *
 * @param string $email email de l'usuari a consultar
 * 
 * @return string hash MD5
 */
function getUserHash($email)
{
    try {
        $connexio = getConnection();

        $statement = $connexio->prepare('SELECT password FROM users WHERE email = :email');

        $statement->bindValue(':email', $email);

        $statement->execute();

        $result = $statement->fetch();

        return $result['password'];
    } catch (PDOException $e) {
        die(sprintf("%s", Error));
    }
}

/**
 * Obté el ID d'un usuari, donat un email
 *
 * @param string $email email de l'usuari a consultar
 * 
 * @return string ID de l'usuari
 */
function getUserId($email)
{
    try {
        $connexio = getConnection();

        $statement = $connexio->prepare('SELECT id FROM users WHERE email = :email');

        $statement->bindValue(':email', $email);

        $statement->execute();

        $result = $statement->fetch();

        return $result['id'];
    } catch (PDOException $e) {
        die(sprintf("%s", Error));
    }
}

/**
 * Obté el ID d'un usuari, donat un ID
 *
 * @param int $userId ID de l'usuari a consultar
 * 
 * @return string ID de l'usuari
 */
function getUserNicknameById($userId)
{
    try {
        $connexio = getConnection();

        $statement = $connexio->prepare('SELECT nickname FROM users WHERE id = :userId');

        $statement->bindParam('userId', $userId, PDO::PARAM_INT);

        $statement->execute();

        $result = $statement->fetch();

        return $result['nickname'];
    } catch (PDOException $e) {
        die(sprintf("%s", Error));
    }
}

/**
 * Obté el ID d'un usuari mitjançant el seu token de recuperació
 *
 * @param string $resetToken token de recuperació de contrasenya
 * 
 * @return int ID de l'usuari
 */
function getUserIdByResetToken($resetToken)
{
    try {
        $connexio = getConnection();

        $statement = $connexio->prepare('SELECT id FROM users WHERE reset_token = ?');

        $statement->execute([$resetToken]);

        $result = $statement->fetch();

        return $result['id'];
    } catch (PDOException $e) {
        die(sprintf("%s", Error));
    }
}

/**
 * Obté el ID d'un usuari mitjançant el seu token rememberme.
 * Serveix per mantindre la sessió de l'usuari encara que tanqui el navegador
 *
 * @param string $resetToken token rememberme
 * 
 * @return int ID de l'usuari
 */
function getUserIdByRememberMeToken($rememberMeToken)
{
    try {
        $connexio = getConnection();

        $statement = $connexio->prepare('SELECT id FROM users WHERE remember_me_token = ?');

        $statement->execute([$rememberMeToken]);

        $result = $statement->fetch();

        return $result['id'];
    } catch (PDOException $e) {
        die(sprintf("%s", Error));
    }
}

/**
 * Registra un nou usuari
 *
 * @param string $email email del nou usuari
 * @param string $nickname nickname del nou usuari
 * @param string $pass hash MD5 del password del nou usuari
 * 
 */
// Ex11 Canvi de variable
function insertNewUser($email, $nickname, $pass)
{
    try {
        $connexio = getConnection();
        $statement = $connexio->prepare('INSERT INTO users (email, nickname, password) VALUES (:email, :nickname, :pass)');
        $statement->execute([
            'email' => $email,
            'nickname' => $nickname,
            'pass' => $pass
        ]);
    } catch (PDOException $e) {
        die(sprintf("%s", Error));
    }
}

/**
 * Registra un nou usuari utilitzant social authentication
 *
 * @param string $email email del nou usuari
 * @param string $nickname nickname del nou usuari
 * @param string $socialProvider nom del social provider ("GitHub", "Twitter", "Google")
 * 
 * @return string l'id de l'usuari inserit
 */
function insertNewSocialUser($email, $nickname, $socialProvider)
{
    try {
        $connexio = getConnection();
        $statement = $connexio->prepare('
        INSERT INTO users (email, nickname, social_provider)
        VALUES (:email, :nickname, :socialProvider)');
        $statement->execute([
            'email' => $email,
            'nickname' => $nickname,
            'socialProvider' => $socialProvider
        ]);
        return $connexio->lastInsertId();
    } catch (PDOException $e) {
        die(sprintf("%s", Error));
    }
}

/**
 * Estableix un hash pel password d'un usuari
 *
 * @param int $userId ID de l'usuari
 * @param mixed $md5Hash hash del password
 * 
 */
function setUserHash($userId, $md5Hash)
{
    try {
        $connexio = getConnection();

        $statement = $connexio->prepare('UPDATE users SET password = :md5Hash WHERE id = :userId');

        $statement->bindParam('md5Hash', $md5Hash);
        $statement->bindParam('userId', $userId, PDO::PARAM_INT);

        $statement->execute();
    } catch (PDOException $e) {
        die(sprintf("%s", Error));
    }
}

/**
 * Estableix un token de recuperació a un usuari
 *
 * @param int $userId ID de l'usuari
 * @param string $resetToken reset token
 * 
 */
function setResetToken($userId, $resetToken)
{
    try {
        $connexio = getConnection();

        $statement = $connexio->prepare('UPDATE users SET reset_token = :resetToken WHERE id = :userId');

        $statement->bindParam('resetToken', $resetToken);
        $statement->bindParam('userId', $userId, PDO::PARAM_INT);

        $statement->execute();
    } catch (PDOException $e) {
        die(sprintf("%s", Error));
    }
}

/**
 * Estableix un token de remember me
 * Serveix per mantindre la sessió de l'usuari encara que tanqui el navegador
 *
 * @param int $userId ID de l'usuari
 * @param string $resetToken remember me token
 * 
 */
function setRememberMeToken($userId, $rememberMeToken)
{
    try {
        $connexio = getConnection();

        $statement = $connexio->prepare('UPDATE users SET remember_me_token = :rememberMeToken WHERE id = :userId');

        $statement->bindParam('rememberMeToken', $rememberMeToken);
        $statement->bindParam('userId', $userId, PDO::PARAM_INT);

        $statement->execute();
    } catch (PDOException $e) {
        die(sprintf("%s", Error));
    }
}

/**
 * Neteja el token de recuperació de contrasenya d'un usuari
 *
 * @param int $userId user ID de l'usuari
 * 
 */
function clearResetToken($userId)
{
    setResetToken($userId, "");
}

// Ex6
function donarBaixa(){
    $nickname = "";
    if(!userExistsByNickname($nickname)){
        "L'usuari no existeix";
    }else
    $connexio = getConnection();
    
    $statement = $connexio->prepare('DELETE FROM users WHERE nickname = ?');
    $statement->execute(array(
        $nickname,
    ));
}