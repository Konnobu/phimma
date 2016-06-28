<h1>Add Exhibit</h1>

<?php
echo $this->Form->create('Exhibit');
echo $this->Form->input('title');
echo $this->Form->input('exhibit_description', array('rows' => '3'));
echo $this->Form->input('exhibit_category_id', array('type'=>'select', 'div'=>false, 'label'=>false, 'options'=>$category_arr, 'empty'=>'選択してください'));
echo $this->Form->end('Save Post');
?>

    <div id = "main" class="container">
         <div class="well">
           <div class="row">
             <div class="col-md-4">
               <div class="panel panel-primary">
                 <div class="panel-heading">
                   <h3 class="panel-title">
                     商品の画像を登録
                   </h3>
                 </div>
                 <div class="panel-body">
                   <div class="form-group">
                     <label>
                       商品の画像:
                     </label>
                     <input type="file" class="form-control">
                   </div>
                   <div class="well">
                     <img src="images/noimage.jpg" class="img-responsive img-thumbnail center-block" id="img_product">
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-md-8">
               <div class="panel panel-primary">
                 <div class="panel-heading">
                   <h3 class="panel-title">
                     商品の情報を入力
                   </h3>
                 </div>
                 <div class="panel-body">
                   <div class="form-group">
                     <label>
                       商品名：
                     </label>
                     <input type="text" class="form-control">
                   </div>
                   <div class="form-group">
                     <label>
                       説明：
                     </label>
                     <textarea class="form-control"></textarea>
                   </div>
                   <div class="form-group">
                     <label>
                       カテゴリー：
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
                 </div>
               </div><a href="trade_info.php" class="btn btn-default primary-pink btn-lg btn-block" style = "margin-bottom:15px" >
                 <span class="glyphicon glyphicon-upload"></span>
                 出品する
               </a>
             </div>

           </div>

         </div>
       </div>