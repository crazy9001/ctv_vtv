<?php

return [
    [
        'name' => 'Admissions',
        'flag' => 'admissions.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'admissions.edit',
        'parent_flag' => 'admissions.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'admissions.destroy',
        'parent_flag' => 'admissions.index',
    ],
];
