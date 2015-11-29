<div class="all-ctg nplr margin-bottom-20">
	<p class="all-category">Góp ý đã được trả lời </p>
</div>
<?php foreach($list_reported as  $data):?>
<div class="">		
<span class="author">Câu hỏi: </span>
<?php echo $data->content;?>
<br/>
<br/>
<span class="author">Trả lời: </span>
<?php echo $data->messeage;?>
<hr>
</div>
<?php endforeach;?>
<div class="all-ctg nplr margin-bottom-20">
	<p class="all-category">Góp ý chưa được trả lời </p>
</div>
<?php foreach($list_report as  $data):?>
<div class="">		
<span class="author">Câu hỏi: </span>
<?php echo $data->content;?>
<br/>
<br/>
<span class="author">Trả lời: </span>
<?php echo $data->messeage;?>
<hr>
</div>
<?php endforeach;?>