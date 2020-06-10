<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /sitio_web_anuncios');
?>