<div class="users form large-9 medium-8 columns content">
	<?= $this->Form->create() ?>
	<fieldset>
		<legend><?= __('User Login') ?></legend>
		<?php
			echo $this->Form->input('username');
			echo $this->Form->input('password');
		?>
	</fieldset>
	<?= $this->Form->button(__('Submit')) ?>
	<?= $this->Form->end() ?>
</div>
