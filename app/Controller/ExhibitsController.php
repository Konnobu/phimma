<?php

class ExhibitsController extends AppController {

  function beforeFilter() {
    parent::beforeFilter();
    $category_arr = array(
      1 => "文学・評論",
      2 => "人文・思想",
      3 => "社会・政治",
      4 => "ノンフィクション",
      5 => "歴史・地理",
      6 => "ビジネス・経済",
      7 => "投資・金融・会社経営",
      8 => "科学・テクノロジー",
      9 => "医学・薬学",
      10 => "コンピュータ・IT",
      11 => "アート・建築・デザイン",
      12 => "趣味・実用",
      13 => "スポーツ・アウトドア",
      14 => "資格・検定・就職",
      15 => "暮らし・健康・子育て",
      16 => "語学・辞事典・年鑑",
      17 => "教育・学参・受験",
      18 => "楽譜・スコア・音楽書",
      19 => "その他"
      );
    $this->set('category_arr', $category_arr);
  }

  public function index() {
    // 出品物全てを取得
    $this->set('exhibits', $this->Exhibit->find('all'));
    // 出品数を取得
    $this->set('exhibits_count', $this->Exhibit->find('count'));
  }

  public function show($id) {
    // $id 番の出品物を取得
    $exhibit = $this->Exhibit->findById($id);
    $this->set('exhibit', $exhibit);


    $book_status_enum = array(
      0 => '新品未開封',
      1 => '美品',
      2 => '使用感あり',
      3 => 'キズ汚れあり'
      );

    $book_status = $exhibit_status_enum[$exhibit['Exhibit']['book_status']];
    $this->set('book_status', $book_status);
    // $user = $this->User->findById($exhibit->user_id);
    // $this->set('user', $user);
  }

  public function add() {
    if ($this->request->is('post')) {
      $this->Exhibit->save($this->request->data);
    }
  }

}