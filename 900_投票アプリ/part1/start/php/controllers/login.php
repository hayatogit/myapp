<?php

namespace controller\login;

function get()
{
  require_once SOURCE_BASE . 'views/login.php';
}

function post()
{
  echo 'ポストを受け取りました';
}
