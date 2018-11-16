<?php
  $BASE_DIR = 'trabalhosSiem/trabalhoPHP-2';
  $BASE_URL = 'https://gnomo.fe.up.pt/~ee11287/trabalhosSiem/trabalhoPHP-2';

  $conn = new PDO('pgsql:host=db.fe.up.pt; dbname=siem1818', 'siem1818', 'CMHTnbDy');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>