<?php

class CalendarController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
        $this->set('title_for_layout', 'Tzu Ching Calendar');
    }
}

?>