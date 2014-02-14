<?php

function gravatar($email) {
    return 'http://www.gravatar.com/avatar/' . md5($email) . '?s=30';
}