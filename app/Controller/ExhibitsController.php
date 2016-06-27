<?php

class ExhibitsController extends AppController {

  public function index() {
    $this->set('exhibits', $this->Exhibit->find('all'));
    $this->set('exhibits_count', $this->Exhibit->find('count'));
  }

  public function show($id) {
    $exhibit = $this->Exhibit->findById($id);
    $this->set('exhibit', $exhibit);

    $exhibit_status_enum = array(
      0 => '新品未開封',
      1 => '美品',
      2 => '使用感あり',
      3 => 'キズ汚れあり'
    );

    $exhibit_status = $exhibit_status_enum[$exhibit['Exhibit']['exhibit_status']];
    $this->set('exhibit_status', $exhibit_status);
    // $user = $this->User->findById($exhibit->user_id);
    // $this->set('user', $user);
  }

}