<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
	</ul>
</nav>
<div class="users index large-9 medium-8 columns content">
	<h3>ユーザー情報</h3>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<td><pre><?php echo $ent;?></pre></td>
		</tr>
	</table>
</div>
