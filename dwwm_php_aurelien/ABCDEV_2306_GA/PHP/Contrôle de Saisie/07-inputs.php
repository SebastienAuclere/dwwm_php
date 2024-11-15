<?php
    function stringLength(string $word) : bool {
        if(mb_strlen($word) >= 9) {
            return true;
        }
        return false;
    }

    var_dump(stringLength('MotDePasseLong'));
    echo PHP_EOL;
    var_dump(stringLength('azer'));
    echo PHP_EOL;

    function passwordCheck(string $password) : bool {
        if(stringLength($password) && preg_match('/[a-z]/', $password) && preg_match('/[A-Z]/', $password) && preg_match('/[0-9]/', $password) && preg_match('/[^a-zA-Z0-9]/', $password)) {
            return true;
        }
        return false;
    }

    var_dump(passwordCheck('dssdaaaAaa@1'));

    $users = [
        'joe' => 'Azer1234!',
        'jack' => 'Azer-4321',
        'admin' => '1234_Azer',
    ];

    function userLogin(string $name, string $password, array $search) : bool {
        foreach ($search as $key => $value) {
            if($name === $key && $password === $value && stringLength($password) && passwordCheck($password)) {
                return true;
        }
        return false;
    } 
}

var_dump(userLogin('joe', 'Azer1234!', $users));