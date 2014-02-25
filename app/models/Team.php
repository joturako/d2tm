<?php

class Team extends Eloquent {

    public function players() {
        return $this->belongsToMany('Player')->withPivot('description');
    }

    public function leagues() {
        return $this->belongsToMany('League');
    }

}
