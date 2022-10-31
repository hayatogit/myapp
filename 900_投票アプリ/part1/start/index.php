<?php
require_once 'config.php';

//Model
require_once SOURCE_BASE . 'models/user.model.php';

//DB
require_once SOURCE_BASE . 'db/datasource.php';
require_once SOURCE_BASE . 'db/user.query.php';

use db\UserQuery;

$result = UserQuery::fetchById('test');

require_once SOURCE_BASE . 'partials/header.php';
// require_once SOURCE_BASE . 'partials/footer.php';

$rpath = str_replace(BASE_CONTEXT_PATH, '', 'CURRENT_URI');
$method = strtolower($_SERVER['REQUEST_METHOD']);

route($rpath, $method);

function route($rpath, $method)
{
  if ($rpath === '') {
    $rpath = 'home';
  }

  $targetFile = SOURCE_BASE . "controllers/{$rpath}.php";

  if (!file_exists($targetFile)) {
    require_once SOURCE_BASE . "views/404.php";
    return;
  }

  require_once $targetFile;


  $fn = "\\controller\\{$rpath}\\{$method}";

  $fn();
}

require_once SOURCE_BASE . 'partials/footer.php';
