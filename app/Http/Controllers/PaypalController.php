<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\PayPalService as PayPalSvc;
use Cart;
use Session;

class PaypalController extends Controller
{
    private $paypalSvc;

    public function __construct(PayPalSvc $paypalSvc)
    {

        $this->paypalSvc = $paypalSvc;
    }

    public function getCheckoutPage()
    {
        return view('frontend.pages.checkout');
    }

    public function payWithPaypal()
    {
        $cart = Cart::getContent();

        $data = [];
        foreach ($cart as $item) {
            $data[] = [
                'name' => $item['name'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'sku' => $item['id'],
            ];
        }

        $transactionDescription = "Test bán hàng";

        $paypalCheckoutUrl = $this->paypalSvc
        // ->setCurrency('eur')
            ->setReturnUrl(url('paypalStatus'))
        // ->setCancelUrl(url('paypal/status'))
            ->setItem($data)
        // ->setItem($data[0])
        // ->setItem($data[1])
            ->createPayment($transactionDescription);

        if ($paypalCheckoutUrl) {
            return redirect($paypalCheckoutUrl);
        } else {
            dd(['Error']);
        }
    }

    public function getPaymentStatus()
    {
        $paymentStatus = $this->paypalSvc->getPaymentStatus()->getState();
        if ($paymentStatus == "approved") {
            \Session::put('success', 'Oder sucessfully');
            Cart::clear();
            return redirect()->route('checkoutpage');
        }
        dd($paymentStatus);
    }
}
