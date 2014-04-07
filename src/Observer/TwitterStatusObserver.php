<?php
namespace Observer;

class TwitterStatusObserver implements IdentityObserver {

    public function update(IdentityProvider $user) {
        $nickname = $user->getName();
        $status = $user->getStatus();
        echo "$nickname has changed its status to \"$status\"\n";
    }

}

?>
