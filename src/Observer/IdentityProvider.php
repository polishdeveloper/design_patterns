<?php
namespace Observer;

interface IdentityProvider {

    /**
     * @return string
     */
    public function getName();
    /**
     * @return string
     */
    public function getStatus();
}