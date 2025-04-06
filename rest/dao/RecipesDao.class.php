<?php
require_once "BaseDao.class.php";

class RecipesDao extends BaseDao
{
    public function __construct()
    {
        parent::__construct("recipes");
    }

    public function getByCategory($categoryId)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM " . $this->table_name . " WHERE category_id = :category_id");
        $stmt->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>