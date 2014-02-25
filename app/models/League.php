<?php

class League extends Eloquent {

   public function teams()
   {
       return $this->belongsToMany('Team');
   }
}
