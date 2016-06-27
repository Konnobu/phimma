<?php

class ExhibitsController extends AppController {

    public function index() {
        $this->set('exhibits', $this->Exhibit->find('all'));
    }

}