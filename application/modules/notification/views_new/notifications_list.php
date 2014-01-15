<? $this->lang->load('notification/notification', LANGUAGE); ?>
<?php $num_notifications = 0; foreach ($grouped_notifications as $notifications) $num_notifications += count($notifications)?>
<div id="all_notifications_container">
	<div class="notifications">
	    <h1 class="primary_title"><?=$this->lang->line('notification_notifications_title');?></h1>
	</div>
	<?= $this->load->view( 'notifications_groups', array( 'grouped_notifications' => array(array($this->notification_model->sample())) ) ); ?>
	<ul class="notifications_list fd-autoscroll" data-url="/show_all" data-template="#tmpl-notification-groups">
		<?php $this->load->view('notifications_groups', array( 'grouped_notifications' => $grouped_notifications, "short_notification"=>false , "per_page"=>$per_page ) )?>
		<?  if ( $num_notifications >= $per_page ) { ?>
			<li id="more_notifications_btn" class="feed_bottom">
				<a href="/get_more_notifications"><?=$this->lang->line('notification_more_notifications_lexicon');?></a>
			</li>
		<?  } ?>
	</ul>
</div>
<?=Html_helper::requireJS(array("notification/notification"))?> 