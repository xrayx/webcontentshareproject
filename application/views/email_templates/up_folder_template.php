<?=$this->load->view('email_templates/email_header','',true ); ?>
<? $this->lang->load('email_templates/email_templates_views', LANGUAGE); ?>
<?=$this->load->view('email_templates/email_action_template',array('action' => 'up_folder'),true ); ?>
<?=$this->load->view('email_templates/email_footer_unsubscribe','',true ); ?> 
