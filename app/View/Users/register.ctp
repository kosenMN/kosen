<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Коосэн.мн нд бүртгүүлэх'); ?></legend>
	<?php
		echo $this->Form->input('username',array('label'=>'Нэвтрэх нэр','required'=>FALSE));		
		echo $this->Form->input('password',array('label'=>'Нууц үг','required'=>FALSE));
		echo $this->Form->input('first_name',array('label'=>'Овог','required'=>FALSE));
		echo $this->Form->input('last_name',array('label'=>'Нэр','required'=>FALSE));
		echo $this->Form->input('gender',array('label'=>'Хүйс','type'=>'select','options'=>array('M'=>'Эрэгтэй','F'=>'Эмэгтэй'),'required'=>FALSE));

		
		
		echo $this->Form->input('birthday',array('label'=>'Төрсөн он сар өдөр ','dateFormat'=>'YMD','minYear'=>1970,'maxYear'=>date('Y')-16,'required'=>FALSE));
		
		echo $this->Form->input('country',array('label'=>'Одоо амьдарч байгаа улс','required'=>FALSE));
		echo $this->Form->input('city',array('label'=>'Одоо амьдарч байгаа хот','required'=>FALSE));
		echo $this->Form->input('address',array('label'=>'Одоо амьдарч байгаа хаяг'));
		echo $this->Form->input('email1',array('label'=>'Имайл хаяг 1','required'=>FALSE));
		echo $this->Form->input('email2',array('label'=>'Имайл хаяг 2','required'=>FALSE));
		
		for($i=1990;$i<=date('Y');$i++){
			$years[$i]=$i;
		}
		
		echo $this->Form->input('kosen_year',array('label'=>'Коосэнгоор ирсэн жил','type'=>'select','options'=>$years,'required'=>FALSE));
		
		echo $this->Form->input('major',array('label'=>'Мэргэжил','required'=>FALSE));
		echo $this->Form->input('kosen',array('label'=>'Төгссөн коосэн','required'=>FALSE));
		echo $this->Form->input('status',array('label'=>'Статус','required'=>FALSE));
		echo $this->Form->input('fb_acc',array('label'=>'Facebook хаяг','required'=>FALSE));
		
		
		echo $this->Form->input('high_school',array('label'=>'Төгссөн 10 жил','required'=>FALSE));
		echo $this->Form->input('university1',array('label'=>'Төгссөн их сургууль 1','required'=>FALSE));
		echo $this->Form->input('university2',array('label'=>'Төгссөн их сургууль 2','required'=>FALSE));
		echo $this->Form->input('university3',array('label'=>'Төгссөн их сургууль 3','required'=>FALSE));
		echo $this->Form->input('work1',array('label'=>'Эрхэлж байгаа ажил 1','required'=>FALSE));
		echo $this->Form->input('work2',array('label'=>'Эрхэлж байгаа ажил 2','required'=>FALSE));

		echo $this->Form->input('phone_number1',array('label'=>'Утасны дугаар 1','required'=>FALSE));
		echo $this->Form->input('phone_number2',array('label'=>'Утасны дугаар 2','required'=>FALSE));
		//echo $this->Form->input('profile_pic',array('label'=>''));
		echo $this->Form->input('last_login',array('type'=>'hidden','value'=>''));
		echo $this->Form->input('deleted',array('type'=>'hidden','value'=>FALSE));
		echo $this->Form->input('group_id',array('type'=>'hidden','value'=>1));
		echo $this->Form->input('extra1',array('type'=>'hidden'));
		echo $this->Form->input('extra2',array('type'=>'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Бүртгүүлэх')); ?>
</div>