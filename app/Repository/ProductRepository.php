<?php

namespace App\Repository;

use App\Product;

class ProductRepository
{
    public function getProduct($limit)
    {
        return Product::paginate($limit);
    }

    public function findByID($id)
    {
        return Product::find($id);
    }

    public function insert(array $value)
    {
        $product = new Product;
        $product->name = $value['name'];
        $product->category_id = $value['category_id'];
        $product->price = $value['price'];
        $product->description = $value['description'];
        $product->on_stock = $value['on_stock'];
        $product->primary_image = "";
        $product->image_list = "";
        $product->save();
        return $product;
    }

    public function update(array $value, $id)
    {
        $product = $this->findByID($id);
        return $product->update($value);
    }

    public function delete($id)
    {
        $product = $this->findByID($id);
        return $product->delete();
    }
}
