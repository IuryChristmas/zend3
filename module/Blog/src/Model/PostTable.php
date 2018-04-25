<?php
/**
 * Created by PhpStorm.
 * User: christmas
 * Date: 24/04/18
 * Time: 22:16
 */

namespace Blog\Model;

use Zend\Db\TableGateway\TableGatewayInterface;

class PostTable
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
    }
}