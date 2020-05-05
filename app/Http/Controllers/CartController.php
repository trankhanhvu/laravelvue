<?php
namespace App\Http\Controllers;

use App\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getCartPage()
    {
        //Cart::clear();
        $cart = Cart::getContent();
        $subTotal = Cart::getSubtotal();
        return view('frontend.pages.cart', compact('cart', 'subTotal'));
    }

    public function addCart($id, $quantity)
    {
        $product = Product::find($id);
        if (Cart::get($id)) {
            Cart::update($id, array(
                'quantity' => $quantity, // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
            ));
        } else {
            Cart::add(array(
                'id' => $id, // inique row ID
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity,
                'attributes' => array(
                    'img' => $product->primary_image,
                ),
            ));
        }
        return redirect('product_page');
    }

    public function checkQuantityAvailable(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity;
        $product = Product::find($id);
        $type = $request->type;

        if (Cart::get($id) && $type != 'check') {
            $item = Cart::get($id);
            $available = $product->on_stock - $item['quantity'] - $quantity;
        } else {
            $available = $product->on_stock - $quantity;
        }

        return $available;
    }

    public function updateCart(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity;
        $request->type = "check";
        $available = $this->checkQuantityAvailable($request);

        if ($available >= 0) {
            Cart::update($id, array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $quantity,
                ),
            ));
        }
    }

    public function removeCart($id)
    {
        Cart::remove($id);
        return redirect('cart');
    }
}
