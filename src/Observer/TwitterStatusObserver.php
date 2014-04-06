<?php

class TwitterStatusObserver implements UserObserver {

    public function update(User $user) {
        $nickname = $user->getNickname();
        $status = $user->getStatus();
        echo "$nickname has changed its status to \"$status\"\n";
    }

}

?>
