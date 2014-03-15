<?php namespace Pyro\FieldType;

use Pyro\Module\Streams\FieldType\FieldTypeAbstract;

class Social extends FieldTypeAbstract
{
    /**
     * Field type slug
     *
     * @var string
     */
    public $field_type_slug = 'social';

    /**
     * BD col type
     *
     * @var string
     */
    public $db_col_type = 'string';

    /**
     * Version
     *
     * @var string
     */
    public $version = '1.1';

    /**
     * Field type author information
     *
     * @var array
     */
    public $author = array(
        'name' => 'Ryan Thompson',
        'url'  => 'http://www.aiwebsystems.com/'
    );
}
