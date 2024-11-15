<?php
    function getMC2(): string {
        $lastname = 'Einstein';
        return $lastname;
    }

    function getUserName(string $firstname, string $lastname) : string {
        return $firstname . $lastname;
    }

    function getFullName(string $lastname, string $firstname) : string {
        return $firstname . ' ' . mb_convert_case($lastname, MB_CASE_UPPER);
    }

    function askUser() {
        return 'Bonjour ' . getFullName('Doe', 'John,') . '. Connaissez vous ' . getMC2() . ' ?';
    }

    echo getMC2();
    echo PHP_EOL;
    echo getUserName('albert', 'einstein');
    echo PHP_EOL;
    echo getFullName('éinstein', 'albert');
    echo PHP_EOL;
    echo askUser();