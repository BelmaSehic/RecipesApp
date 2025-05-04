<?php
require_once "BaseService.php";
require_once __DIR__ . "/../dao/CategoriesDao.class.php";

class CategoryService extends BaseService
{
    public function __construct()
    {
        parent::__construct(new CategoriesDao);
    }

    public function createCategory($data)
    {
        // Validation rules examples
        if (empty($data['name'])) {
            throw new Exception("Category name is required.");
        }

        if (strlen($data['name']) < 3) {
            throw new Exception("Category name must be at least 3 characters.");
        }

        if (strlen($data['name']) > 100) {
            throw new Exception("Category name must be less than 100 characters.");
        }

        return $this->insertData($data);
    }

    public function updateCategory($id, $data)
    {
        if (isset($data['name'])) {
            if (empty($data['name'])) {
                throw new Exception("Category name cannot be empty.");
            }

            if (strlen($data['name']) < 3) {
                throw new Exception("Category name must be at least 3 characters.");
            }
        }

        return $this->updateData($data, $id);
    }
}
