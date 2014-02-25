<?php

class LeagueController extends \BaseController {

    protected $layout = 'layouts.master';

    public function getIndex() {
        $data['leagues'] = League::paginate();
        $this->layout->content = View::make('league.index', $data);
    }

    public function getView($id = false) {
        if ($id) {
            $data['league'] = League::find($id);
            if ($data['league']) {
                $this->layout->content = View::make('league.view', $data);
            } else {
                App::abort(404);
            }
        } else {
            App::abort(404);
        }
    }

}
