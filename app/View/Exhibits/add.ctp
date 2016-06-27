<h1>Add Exhibit</h1>

<?php
echo $this->Form->create('Exhibit');
echo $this->Form->input('title');
echo $this->Form->input('exhibit_description', array('rows' => '3'));
echo $this->Form->input('exhibit_category_id', array('type'=>'select', 'div'=>false, 'label'=>false, 'options'=>$category_arr, 'empty'=>'選択してください'));
echo $this->Form->end('Save Post');
?>