<?php
$regex = array();
$regex['string'] = '^[a-z\-]+$';
$regex['id']     = '^[\d]+$';

return array(
    'config.routes' => array(
        
        
        array(
            'pattern' => '%baseUrl%/api/user/{id}',
            'controller' => 'Api\Controller\User::resolveAction',
            'method' => array(
                'get', 'put', 'delete'
            ),
            'assert' => array(
                'id' => $regex['id']
            ),
            'value' => array(
                'namespace' => 'core',
                'entity'    => 'users'
            )
        ),
        
        array(
            'pattern' => '%baseUrl%/api/users',
            'controller' => 'Api\Controller\User::resolveAction',
            'method' => array(
                'get', 'post'
            ),
            'assert' => array(
                'id' => $regex['id']
            ),
            'value' => array(
                'namespace' => 'core',
                'entity'    => 'users'
            )
        ),
        
    )
);