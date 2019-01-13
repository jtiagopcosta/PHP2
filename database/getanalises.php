<?php
  function getanalises($idfilme) {
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM analises  
                            WHERE idfilme=?
                            ORDER BY id DESC');
    $stmt->execute(array($idfilme));
    return $stmt->fetchAll();
  }

 /* function getdados($id) {
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM usuarios 
                            WHERE id=?');
    $stmt->execute(array($id));
    return $stmt->fetch();
  }*/
?>