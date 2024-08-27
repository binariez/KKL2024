<?php
require_once __DIR__ . '/Connection.php';
session_start();

function cekAuth($username, $password)
{
    global $db;
    $filter = ['username' => $username, 'password' => $password];
    $result = $db->estate_auth->findOne($filter);
    if ($result) return true;
}

function getEstate($username)
{
    global $db;
    $filter = ['username' => $username];
    $result = $db->estate_auth->find($filter);
    foreach ($result as $r) {
        $return = $r['estate'];
    }
    return $return;
}

function setLogin($username, $estate)
{
    $_SESSION["username"] = $username;
    $_SESSION["estate"] = $estate;
    $_SESSION["login"] = true;
}

function unsetLogin()
{
    unset($_SESSION["username"]);
    unset($_SESSION["estate"]);
    unset($_SESSION["login"]);
    session_destroy();
    return true;
}

function cekLogin()
{
    if (isset($_SESSION['login'])) {
        if ($_SESSION["login"]) {
            return true;
        }
    } else {
        return false;
    }
}
