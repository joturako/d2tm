<?php

class Match extends Eloquent {

    public function league() {
        return $this->belongsTo('League');
    }

    public function team1() {
        return $this->belongsTo('Team', 'team1_id');
    }

    public function team2() {
        return $this->belongsTo('Team', 'team2_id');
    }

    public function winner() {
        return $this->hasOne('Team', 'winner_team_id');
    }

}
