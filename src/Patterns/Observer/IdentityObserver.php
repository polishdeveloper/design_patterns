<?php
namespace Observer;

interface IdentityObserver {

    public function update(IdentityProvider $subject);
}

?>
