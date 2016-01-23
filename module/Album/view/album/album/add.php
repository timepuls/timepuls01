<?php
 // module/Album/view/album/album/add.phtml:

 $title = 'Add new album';
 $this->headTitle($title);
 ?>
 <h1><?php echo $this->escapeHtml($title); ?></h1>
 <?php
 $form->setAttribute('action', $this->url('album', array('action' => 'add')));
 $form->prepare();

 echo $this->form()->openTag($form);
 echo $this->formHidden($form->get('id'));
 echo $this->formRow($form->get('title'));
 echo $this->formRow($form->get('artist'));
 echo $this->formSubmit($form->get('submit'));
 echo $this->form()->closeTag();