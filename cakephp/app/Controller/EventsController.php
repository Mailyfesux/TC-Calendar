<?php

class EventsController extends AppController {
	public $helpers = array('Html', 'Form', 'Session', 'Js' => array('Jquery'));
    public $components = array('Session', 'RequestHandler');

    public function index() {
        $this->set('events', $this->Event->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid event'));
        }

        $event = $this->Event->findById($id);
        if (!$event) {
            throw new NotFoundException(__('Invalid event'));
        }
        $this->set('event', $event);
    }

    public function add() {
        if ($this->request->is('ajax')) {
            $this->autoRender = false;
            $this->Event->create();
            if ($this->Event->save($this->request->data)) {
                $event = $this->Event->findById($this->Event->id)['Event'];
                echo json_encode($event);
            }
            else 
                $this->response->statusCode(400);
        }
    }
}
?>