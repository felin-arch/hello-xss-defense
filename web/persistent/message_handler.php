<?php

$db = new PDO(getenv('MYSQL_DSN'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));

if ($_GET['clear'] === 'true') {
  $db->query('delete from messages');
  header('Location: /persistent/');
  exit(0);
}

$message = $_POST['p'];
if (isset($message)) {
  $q = $db->prepare('insert into messages (message) values (:message)');
  $q->execute(array(':message' => $message));
}

if ($_GET['create_some'] == 'true') {
  $messages = array(
    "Using advanced <b>HTML</b> tags!",
    "<u>Legacy</u> for <i>the win</i>!",
    "<e-icon icon=\"e-brokenimage\"></e-icon> Icons!!",
  );
  $q = $db->prepare('insert into messages (message) values (:message)');
  foreach ($messages as $message) {
    $q->execute(array(':message' => $message));
  }
  header('Location: /persistent/');
  exit(0);
}

$messages = function() use ($db) {
  return $db->query('select * from messages');
};
