<?php
namespace Tropa\Model;

use Laminas\Db\TableGateway\TableGatewayInterface;
use Laminas\Db\Adapter\Driver\ResultInterface;
use Laminas\Db\Sql\Select;
use Laminas\Db\Sql\Sql;

class SetorTable
{
    /**
     *
     * @var TableGatewayInterface
     */
    private $tableGateway;

    /**
     *
     * @var string
     */
    private $keyName = 'codigo';

    /**
     *
     * @param TableGatewayInterface $tableGateway
     */
    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    /**
     *
     * @return ResultInterface
     */
    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    /**
     *
     * @param string $keyValue
     * @return Setor
     */
    public function getModel($keyValue)
    {
        $rowset = $this->tableGateway->select(array(
            $this->keyName => $keyValue
        ));
        if ($rowset->count()>0){
            $row = $rowset->current();
        } else {
            $row = new Setor();
        }

        return $row;
    }

    /**
     *
     * @param Setor $setor
     */
    public function saveModel(Setor $setor)
    {
        $data = array(
            'nome' => $setor->nome
        );
        $codigo = $setor->codigo;
        if (empty($this->getModel($codigo)->codigo)) {
            $data['codigo'] = $codigo;
            $this->tableGateway->insert($data);
        } else {
            $this->tableGateway->update($data, array(
                'codigo' => $codigo
            ));
        }
    }

    /**
     *
     * @param mixed $keyValue
     */
    public function deleteModel($keyValue)
    {
        $this->tableGateway->delete(array(
            $this->keyName => $keyValue
        ));
    }

    /**
     * @return Sql
     */
    public function getSql()
    {
        return $this->tableGateway->getSql();
    }

    /**
     *
     * @return \Laminas\Db\Sql\Select
     */
    public function getSelect()
    {
        $select = new Select($this->tableGateway->getTable());
        return $select;
    }
}