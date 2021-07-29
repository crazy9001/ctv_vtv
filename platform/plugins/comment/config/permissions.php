<?php

return [
    [
        'name' => 'Comments',
        'flag' => 'comments.index',
    ],
    [
        'name'        => 'Comments',
        'flag'        => 'comments.dashboard',
        'parent_flag' => 'comments.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'comments.edit',
        'parent_flag' => 'comments.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'comments.destroy',
        'parent_flag' => 'comments.index',
    ],
    [
        'name'        => 'Settings',
        'flag'        => 'comments.settings',
        'parent_flag' => 'comments.index',
    ],
];
