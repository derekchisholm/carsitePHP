<?php
namespace Carsite\V1\Rest\Fillups;

use Zend\Db\Sql\Select;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Paginator\Adapter\DbSelect;

class FillupsMapper
{
    protected $adapter;
    
    public function __construct(AdapterInterface $adapter) {
        $this->adapter = $adapter;
    }
    
    public function fetchAll() {
        $resultSet = new Select('fillups');
        $paginatorAdapter = new DbSelect($resultSet, $this->adapter);
        $collection = new FillupsCollection($paginatorAdapter);
        return $collection;
    }
    
    public function fetchOne($fillupId)
    {
        $sql = 'SELECT * FROM fillups WHERE id = ?';
        $resultset = $this->adapter->query($sql, array($fillupId));
        $data = $resultset->toArray();
        if (!$data) {
            return false;
        }
        
        $entity = new FillupsEntity();
        $entity->exchangeArray($data[0]);
        return $entity;
    }
}
