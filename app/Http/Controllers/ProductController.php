<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use function GuzzleHttp\json_decode;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProductPage(Request $request)
    {
        $productList = new Product;
        if ($request->category) {
            $productList = $productList->where('category_id', $request->category);
        }
        if ($request->minPrice && $request->maxPrice) {
            $productList = $productList->whereBetween('price', [$request->minPrice, $request->maxPrice]);
        }

        $productList = $productList->paginate(6);
        $categoryList = $this->getCategory();
        return view('frontend.pages.product', compact('productList', 'categoryList'));
    }

    public function getProductDetailPage(Request $request)
    {
        $productItem = Product::where('id', $request->id)->first();
        $listImage = json_decode($productItem->image_list);
        return view('frontend.pages.product_detail', compact('productItem', 'listImage'));
    }

    public function getMinMaxPrice()
    {
        $minPrice = Product::min('price');
        $maxPrice = Product::max('price');
        $price = [
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
        ];

        return response()->json($price);
    }

    public function getCategory()
    {
        $categoryList = Category::all();
        return $categoryList;
    }
}
