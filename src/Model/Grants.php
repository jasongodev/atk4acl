<?php
namespace sirjasongo\atk4acl\Model;

class Grants extends \atk4\data\Model
{
    use \sirjasongo\atk4m2m\ManyToMany;
    
    public $table = 'grants';

    public function init()
    {
        parent::init();
        $this->addBridgeBetween(Permission::class, Role::class);
    }
}

?>