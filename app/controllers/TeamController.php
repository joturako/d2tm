<?php

class TeamController extends \BaseController {

    protected $layout = 'layouts.master';

    public function getIndex() {
        $data['teams'] = Team::paginate();
        $this->layout->content = View::make('team.index', $data);
    }

    public function getView($id = false) {
        if ($id) {
            $data['team'] = Team::find($id);
            if ($data['team']) {
                $this->layout->content = View::make('team.view', $data);
            } else {
                App::abort(404);
            }
        } else {
            App::abort(404);
        }
    }

}
