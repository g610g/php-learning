<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'brick/math' => array(
            'pretty_version' => '0.11.0',
            'version' => '0.11.0.0',
            'reference' => '0ad82ce168c82ba30d1c01ec86116ab52f589478',
            'type' => 'library',
            'install_path' => __DIR__ . '/../brick/math',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'ramsey/collection' => array(
            'pretty_version' => '1.3.0',
            'version' => '1.3.0.0',
            'reference' => 'ad7475d1c9e70b190ecffc58f2d989416af339b4',
            'type' => 'library',
            'install_path' => __DIR__ . '/../ramsey/collection',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'ramsey/uuid' => array(
            'pretty_version' => '4.7.4',
            'version' => '4.7.4.0',
            'reference' => '60a4c63ab724854332900504274f6150ff26d286',
            'type' => 'library',
            'install_path' => __DIR__ . '/../ramsey/uuid',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '4.7.4',
            ),
        ),
        'symfony/polyfill-php81' => array(
            'pretty_version' => 'v1.28.0',
            'version' => '1.28.0.0',
            'reference' => '7581cd600fa9fd681b797d00b02f068e2f13263b',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php81',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
