<?php
  $BASE_DIR = dirname(__DIR__);
  $BASE_URL = 'https://gnomo.fe.up.pt/~up201803231/trabalhosSiem/NEW PAGE/PHP2';

  $conn = new PDO('pgsql:host=db.fe.up.pt; dbname=siem1818', 'siem1818', 'CMHTnbDy');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

  include_once($BASE_DIR . '/lib/smarty/Smarty.class.php');
  $smarty = new Smarty;
  $smarty->assign('BASE_URL', $BASE_URL);
  $smarty->template_dir = $BASE_DIR . '/templates/';
  $smarty->compile_dir = $BASE_DIR . '/templates_c/';
?>