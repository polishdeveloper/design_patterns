<?php

class User {

    public function setFirstName($firstName) {
        $this->_firstName = $firstName;
        return $this;
    }

    public function getFirstName() {
        return $this->_firstName;
    }

    public function setLastName($lastName) {
        $this->_lastName = $lastName;
        return $this;
    }

    public function getLastName() {
        return $this->_lastName;
    }

    public function setNationality($nationality) {
        $this->_nationality = $nationality;
        return $this;
    }

    public function getNationality() {
        return $this->_nationality;
    }

    public function __toString() {
        return "User: {$this->_firstName} {$this->_lastName} is from {$this->_nationality}";
    }

}

?>
