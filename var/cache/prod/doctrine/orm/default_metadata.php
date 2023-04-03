<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App__Entity__Film__CLASSMETADATA__' => 0,
'App__Entity__Admin__CLASSMETADATA__' => 1,
'App__Entity__Comment__CLASSMETADATA__' => 2,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Film',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Film',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\FilmRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'title' => [
                            'fieldName' => 'title',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'title',
                        ],
                        'year' => [
                            'fieldName' => 'year',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'year',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'title' => 'title',
                        'year' => 'year',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'title' => 'title',
                        'year' => 'year',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'film',
                    ],
                ],
                'associationMappings' => [
                    [
                        'comments' => [
                            'fieldName' => 'comments',
                            'mappedBy' => 'film',
                            'targetEntity' => 'App\\Entity\\Comment',
                            'cascade' => [
                                'persist',
                            ],
                            'orphanRemoval' => true,
                            'fetch' => 2,
                            'type' => 4,
                            'inversedBy' => null,
                            'isOwningSide' => false,
                            'sourceEntity' => 'App\\Entity\\Film',
                            'isCascadeRemove' => true,
                            'isCascadePersist' => true,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
1 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Admin',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Admin',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\AdminRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'username' => [
                            'fieldName' => 'username',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 180,
                            'unique' => true,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'username',
                        ],
                        'roles' => [
                            'fieldName' => 'roles',
                            'type' => 'json',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'roles',
                        ],
                        'password' => [
                            'fieldName' => 'password',
                            'type' => 'string',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'password',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'username' => 'username',
                        'roles' => 'roles',
                        'password' => 'password',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'username' => 'username',
                        'roles' => 'roles',
                        'password' => 'password',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'admin',
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
2 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Comment',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Comment',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\CommentRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'comment' => [
                            'fieldName' => 'comment',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'comment',
                        ],
                        'createdAt' => [
                            'fieldName' => 'createdAt',
                            'type' => 'date_immutable',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'created_at',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'comment' => 'comment',
                        'created_at' => 'createdAt',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'comment' => 'comment',
                        'createdAt' => 'created_at',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'comment',
                    ],
                ],
                'associationMappings' => [
                    [
                        'film' => [
                            'fieldName' => 'film',
                            'joinColumns' => [
                                [
                                    'name' => 'film_id',
                                    'unique' => false,
                                    'nullable' => false,
                                    'onDelete' => null,
                                    'columnDefinition' => null,
                                    'referencedColumnName' => 'id',
                                ],
                            ],
                            'cascade' => [],
                            'inversedBy' => 'comments',
                            'targetEntity' => 'App\\Entity\\Film',
                            'fetch' => 2,
                            'type' => 2,
                            'mappedBy' => null,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\Comment',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'sourceToTargetKeyColumns' => [
                                'film_id' => 'id',
                            ],
                            'joinColumnFieldNames' => [
                                'film_id' => 'film_id',
                            ],
                            'targetToSourceKeyColumns' => [
                                'id' => 'film_id',
                            ],
                            'orphanRemoval' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
