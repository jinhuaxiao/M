<?php
/**
 * User: Guowei
 * Date: 13-7-13
 * Time: 下午10:39
 */

namespace M\Mvc\Model;


class Model extends AbstractModel
{

    protected $db;
    protected $table;
    protected $key;

    protected $where;
    protected $order;

    public function where($where)
    {
        $this->where = $where;
        return $this;
    }

    public function order($order)
    {
        $this->order =$order;
        return $this;
    }

    public function find()
    {

    }

    public function delete()
    {

    }

    public function add()
    {

    }

    public function save()
    {

    }

    public function update()
    {

    }

}