<?php

namespace App\Services;

use App\Repository\ProductRepository;
use Illuminate\Http\Request;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function createProduct(Request $request)
    {
        return $this->productRepository->insert($request->all());
    }

    public function updateProduct(Request $request, $id)
    {
        return $this->productRepository->update($request->all(), $id);
    }

    public function deleteProduct($id)
    {
        return $this->productRepository->delete($id);
    }

    public function getProduct($limit = 3)
    {
        return $this->productRepository->getProduct($limit);
    }

    public function getByID($id)
    {
        return $this->productRepository->findByID($id);
    }
}
