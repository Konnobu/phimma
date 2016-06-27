<!--======== Main =========-->
<div id = "main" class="container">
  <div class="well">
    <ul class="breadcrumb">
      <li><a href="index.php">Phimma<br></a></li>
      <li><a href="home.php">ホーム</a></li>
      <li><a href="search_result.php"><?php echo h($exhibit['Exhibit']['exhibit_category_id']) ?></a></li>
      <li class="active">商品情報</li>
    </ul>
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-primary ">
          <div class="panel-heading">
            <h3 class="panel-title">出品者情報</h3>
          </div>
          <div class="panel-body">
            <img src="images/user_img/aya.jpg" class="img-responsive center-block">
            <div>
              <span style="line-height: 1.4;">
                <br>
                はじめまして！岩手県立大学社会福祉学部３年のあーやです！<br>
                基本的には、社会福祉系の教科書の出品になると思います♪ 値下げ交渉にも多少は応じられます。
                ただ、出品直後のものは原則値下げしません（相談次第で可能になる事もあります）。<br>
                よろしくお願いいたします。
              </span>
            </div>
          </div>
        </div>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">商品情報</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <td>商品価格：</td>
                  <td>￥<?php echo h($exhibit['Exhibit']['price']) ?></td>
                </tr>
                <tr>
                  <td>商品状態：</td>
                  <td><?php echo h($exhibit_status) ?></td>
                </tr>
                <tr>
                  <td>カテゴリ：</td>
                  <td><?php echo h($exhibit['Exhibit']['exhibit_category_id']) ?></td>
                </tr>
                <tr>
                  <td>受渡し：</td>
                  <td>１週間以内</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <a href="trade_info.php" class="btn btn-default primary-pink btn-lg btn-block" style = "margin-bottom:15px" >
          <span class="glyphicon glyphicon-ok"></span>
          購入する
        </a>
      </div>

      <div class="col-md-8">
        <div class="panel panel-primary ">
          <div class="panel-heading">
            <h3><?php echo h($exhibit['Exhibit']['title']) ?></h3>
          </div>
          <div class="panel-body">
            <span style="line-height: 1.42857;">
              <?php echo nl2br(h($exhibit['Exhibit']['exhibit_description'])) ?>
            </span>
          </div>
        </div>
        <div class="well">
          <img src="<?php echo h($exhibit['Exhibit']['image']) ?>" class="img-responsive img-thumbnail center-block" id="img_product">
        </div>
      </div>
    </div>
  </div>
</div><!--======== end Main =========-->
