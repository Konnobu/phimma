<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('skippr.css');
		echo $this->Html->css('style.css');
		echo $this->Html->script('jquery-2.2.4.min.js');
		echo $this->Html->script('bootstrap.min.js');
		echo $this->Html->script('skippr.min.js');
		echo $this->Html->script('wow.min.js');
		echo $this->Html->script('main.js');
	?>
</head>
<body>
    <nav class="header navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="row">
            <div class="header-left col-md-6">
              <a class="navbar-brand" href="index.php">
              	<?php echo $this->Html->image('/img/logo_img/phimma-logo.png', array('width'=>'200','height'=>'37')); ?>
              </a>
            </div>
            <div class="header-right col-md-6">
              <div class="top-header-search header-right-box">
                <div class="top-search-content">
                  <div class="container-1">
                    <span class="icon"><i class="fa fa-search"></i></span>
                    <?php echo $this->Form->text('keyword', array('type' => 'search', 'id' => 'search', 'class' => 'span12', 'placeholder' => '書籍を検索')); ?>
                  </div>
                </div>
              </div>
              <div class="header-right-login header-right-box">
                <button class="btn btn-default login-btn primary-pink" type="submit">ログイン</button>
              </div>
              <div class="header-right-signup header-right-box">
                <button class="btn btn-default signup-btn sub-blue" type="submit">新規会員登録</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav><!-- Header -->

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>

		</div>
    <footer>
      <div class="row">
        <div class="container">
          <div class="footer-nav">
            <nav class="">
              <a href="#">よくある質問</a>
              <a href="#">使い方</a>
              <a href="#">プライバシー</a>
              <a href="#">ご利用規約</a>
              <a href="#">運営会社</a>
              <a href="#">運営へのお問合せ</a>
            </nav>
            <div>
              <?php echo $this->Html->image('/img/logo_img/phimma-logo.png', array('width'=>'200','height'=>'37', 'class'=>'footer-logo')); ?>

              <p class="footer-copywrite">© 2016 PHIMMA!</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>
