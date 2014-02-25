<?php

class MatchController extends \BaseController {

    protected $layout = 'layouts.master';

    public function getIndex() {
        $data['matches'] = Match::paginate();
        $this->layout->content = View::make('match.index', $data);
    }

    public function getView($id = false) {
        if ($id) {
            $data['match'] = Match::find($id);
            if ($data['match']) {
                $this->layout->content = View::make('match.view', $data);
            } else {
                App::abort(404);
            }
        } else {
            App::abort(404);
        }
    }

}
