<?php
require_once "BaseService.php";
require_once __DIR__ . "/../dao/RecipesDao.class.php";

class RecipeService extends BaseService
{
    public function __construct()
    {
        parent::__construct(new RecipesDao);
    }

    public function updateData($entity, $id)
    {
        $updatedRecipe = $this->dao->updateData($entity, $id);

        if ($updatedRecipe !== false) {
            return $updatedRecipe;
        } else {
            Flight::json(["message" => "Failed to update recipe"], 500);
            return;
        }
    }

    public function getByID($id)
    {
        return $this->dao->getByID($id);
    }

    public function getByUserId($userId)
    {
        return $this->dao->getByUserId($userId);
    }
}
?>
