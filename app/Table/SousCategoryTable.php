<?php
namespace App\Table;

use Core\Table\Table;

class SousCategoryTable extends Table{

    protected $table = "sous_categories";

    public function allByCategory($category_id){
        return $this->query("
            SELECT sous_categories.titre, sous_categories.id
            FROM sous_categories
            LEFT JOIN categories ON categories_id = categories.id
            WHERE sous_categories.categories_id = ?
            ORDER BY sous_categories.id", [$category_id]);
    }

    public function findWithProduit($id){
        return $this->query("
            SELECT sous_categories.id, sous_categories.titre
            FROM sous_categories
            WHERE sous_categories.id = ?", [$id], true);
    }

}