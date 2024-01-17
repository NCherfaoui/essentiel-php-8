<?php
// function de verification de nom et mdp
function verifLogin($username, $password)
{
    if (ctype_alpha($username) && strlen($password) >= 6) {
        return true;
    } else {
        return false;
    }
}
