<?php 
class Player extends Eloquent {

    public function teams()
    {
        return $this->belongsToMany('Team')->withPivot('description');
    }
}