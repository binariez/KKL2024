<?php
/*
It seems that Vercel doesn't support $_SESSION.
In which I have to implement a JSON Web Token
to store sessions instead.
*/

use Firebase\JWT\JWT;

require_once __DIR__ . "/Connection.php";

class Session
{
    public function __construct(public string $username, public string $estate, public bool $isLogin) {}
}

class NSessionHandler
{

    public static function cekAuth($username, $password)
    {
        global $db;
        $filter = ['username' => $username, 'password' => $password];
        $result = $db->estate_auth->findOne($filter);

        if ($result)
            return true;
        else
            return false;
    }

    public static function getEstate($username)
    {
        global $db;
        $filter = ['username' => $username];
        $result = $db->estate_auth->find($filter);
        foreach ($result as $r) {
            $return = $r['estate'];
        }
        return $return;
    }

    public static function setLogin($username, $estate)
    {
        $payload = [
            "username" => $username,
            "estate" => $estate,
            "isLogin" => true
        ];

        $jwt = JWT::encode($payload, $_ENV['JWT_SECRET_KEY'], "HS256");
        setcookie("UserEstate", $jwt);

        return true;
    }

    public static function cekLogin(): Session
    {
        if ($_COOKIE['UserEstate']) {
            $jwt = $_COOKIE['UserEstate'];
            try {
                $payload = JWT::decode($jwt, $_ENV['JWT_SECRET_KEY'], ['HS256']);
                return new Session(username: $payload->username, estate: $payload->estate, isLogin: $payload->isLogin);
            } catch (Exception $e) {
                throw new Exception("Belum loginsz");
            }
        } else {
            throw new Exception("Belum login");
        }
    }

    public static function logout()
    {
        setcookie("UserEstate", "@Azhar, 2024", false);
        header("Locaion: ../login.php");
    }
}
