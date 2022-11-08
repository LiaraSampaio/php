<?php
// ENCERRANDO A SESSAO
session_start();
session_unset();
session_destroy();
header('location: index.php');