<?php

class Exhibit extends AppModel {
  public $order = array('Exhibit.id DESC');
  public $actsAs = array('Search.Searchable');
  public $filterArgs = array(
    'title' => array('type' => 'value'),
    );
}