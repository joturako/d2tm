<?php

class SiteController extends \BaseController {

    protected $layout = 'layouts.master';

    public function getIndex() {
        $data['teams'] = Team::all();
        $this->layout->content = View::make('site.index', $data);
    }

}
