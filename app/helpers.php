<?php

function gravatar($email)
{
    return 'http://www.gravatar.com/avatar/' . md5($email) . '?s=30';
}

function link_to_task(Task $task)
{
    return link_to_route('user.tasks.show', $task->title, [$task->user->username, $task->id]);
}