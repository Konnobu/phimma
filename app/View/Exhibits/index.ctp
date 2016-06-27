

<div id = "main" class="container">
  <div class="well">
    <ul class="breadcrumb">
      <li><a href="index.php">Phimma<br></a></li>
      <li><a href="home.php">ホーム</a></li>
      <li class="active">検索結果</li>
    </ul>
    <div class="row">
      <div class="col-md-4">
        <!-- 左側 -->
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">
              商品検索パネル
            </h3>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label>
                カテゴリー:
              </label>
              <select class="form-control" id="" name="category">
                <option value="">
                  選択してください
                </option>
                <option value="nurse">
                  看護
                </option>
                <option value="keiei">
                  社会福祉 / 福祉経営
                </option>
                <option value="rinsyou">
                  社会福祉 / 福祉臨床
                </option>
                <option value="software">
                  ソフトウェア情報
                </option>
                <option value="sougouseisaku">
                  総合政策
                </option>
              </select>
            </div>
            <div class="form-group">
              <label>
                価格帯:
              </label>
              <select class="form-control" name="prices_range">
                <option value="">
                  選択してください
                </option>
                <option value="range_1">
                  ￥0 -￥500
                </option>
                <option value="range_2">
                  ￥501 - ￥1,500
                </option>
                <option value="range_3">
                  ￥1,501 - ￥3,000
                </option>
                <option value="range_4">
                  ￥3,001 以上
                </option>
              </select>
            </div>
            <div class="form-group">
              <label>
                商品の状態:
              </label>
              <select class="form-control" name="product_status">
                <option value="">
                  選択してください
                </option>
                <option value="status_1">
                  新品/未開封
                </option>
                <option value="status_2">
                  美品
                </option>
                <option value="status_3">
                  使用感あり
                </option>
                <option value="status_4">
                  傷・汚れあり
                </option>
              </select>
            </div>
            <div class="form-group">
              <label>
                出品者の評価:
              </label>
              <select class="form-control" name="uset_rating">
                <option value="">
                  選択してください
                </option>
                <option value="rating_5">
                  ★★★★★
                </option>
                <option value="rating_4">
                  ★★★★☆
                </option>
                <option value="rating_3">
                  ★★★☆☆
                </option>
                <option value="rating_2">
                  ★★☆☆☆
                </option>
                <option value="rating_1">
                  ★☆☆☆☆
                </option>
              </select>
            </div>
          </div>
        </div>
        <a href="search_result.php" class="btn btn-default primary-pink btn-lg btn-block" style = "margin-bottom:15px" >
          <span class="glyphicon glyphicon-search"></span>
          検索する
        </a>
      </div>
      <!-- 右側 -->
      <div class="col-md-8">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4>検索結果 : <?php echo $exhibits_count ?>件</h4>
          </div>
          <div class="panel-body">
            <div class="row">
              <?php foreach ($exhibits as $exhibit) : ?>
                <div class="col-md-4">
                  <a href="/exhibits/show/<?php echo h($exhibit['Exhibit']['id']) ?>">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <img src="<?php echo h($exhibit['Exhibit']['image']) ?>" class="img-responsive img-thumbnail center-block" id="img_product">
                      </div>
                      <div class="panel-body">
                        <div><?php echo h($exhibit['Exhibit']['title']) ?></div>
                        <label>￥ <?php echo h($exhibit['Exhibit']['price']) ?></label>
                      </div>
                    </div>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>