<?php
require_once "BaseService.php";
require_once __DIR__ . '/../dao/UsersDao.class.php';

class UserService extends BaseService
{

    public function __construct()
    {
        parent::__construct(new UsersDao);
    }

    public function deleteByID($id)
    {
        return $this->dao->deleteByID($id);
    }

    public function insertData($entity)
    {
        return parent::insertData($entity);
    }

    public function updateData($user, $id)
    {
        return parent::updateData($user, $id);
    }
}
?>
