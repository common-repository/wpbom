<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => 'trunk',
        'version' => 'dev-trunk',
        'reference' => NULL,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => 'trunk',
            'version' => 'dev-trunk',
            'reference' => NULL,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'cmb2/cmb2' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '7bce941075f24fe4d991434014c4b860fec62f3d',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../cmb2/cmb2',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
