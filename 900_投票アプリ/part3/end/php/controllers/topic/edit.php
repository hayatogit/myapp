<?php

namespace controller\topic\edit;

use lib\Auth;
use model\TopicModel;
use db\TopicQuery;
use model\UserModel;

function get()
{
  Auth::requireLogin();

  $topic = new TopicModel;
  $topic->id = get_param('topic_id', null, false);

  $user = UserModel::getSession();
  Auth::requirePermission($topic->id, $user);
}
