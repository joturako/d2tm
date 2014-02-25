<?php

class PlayerController extends \BaseController {

    protected $layout = 'layouts.master';

    public function getIndex() {
        $data['players'] = Player::paginate();
        $this->layout->content = View::make('player.index', $data);
    }

    public function getView($id = false) {
        if ($id) {
            $data['player'] = Player::find($id);
            if ($data['player']) {
                $this->layout->content = View::make('player.view', $data);
            } else {
                App::abort(404);
            }
        } else {
            App::abort(404);
        }
    }

    public function getAuth($id) {
        Auth::loginUsingId($id);
    }

    public function getJoinTeam() {
        $rules = array(
            'team_id' => 'exists:teams,id',
            'description' => ''
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->passes() && !Auth::guest()) {
            $player = Player::find(Auth::user()->id);
            if ($player) {
                foreach ($player->teams as $team) {
                    if ($team->players->contains($player))
                        return Response::make("", 400);
                }
                $player->teams()->attach(Input::get('team_id'), array('description' => Input::get('description')));
            }
        }
    }

    public function getLeaveTeam() {
        $rules = array(
            'team_id' => 'exists:teams,id',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->passes() && !Auth::guest()) {
            $team = Team::find(Input::get('team_id'));
            $team->players()->detach(Auth::user()->id);
        }
    }

}
