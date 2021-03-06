<?php

namespace App\Libraries;

class Authorization {

    public function isAdmin() {

        return session()->get("user_role") == "Administrator";
    }

    public function isSluzbenik() {
        return session()->get("user_role") == "Sluzbenik";
    }

    public function isLekar() {
        return session()->get("user_role") == "Lekar";
    }

    public function isKlijent() {
        return session()->get("user_role") == "Klijent";
    }

    public function isGost() {
        return (!$this->isSluzbenik() && !$this->isLekar() &&
                !$this->isAdmin() && !$this->isKlijent());
    }
    
    

}
