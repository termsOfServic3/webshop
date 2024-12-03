<?php

namespace App\Actions\Webshop;

use App\Factories\CartFactory;
use App\Models\Cart;

class AddProductVariantToCart
{
public function add($variantId, $quantity = 1, $cart = null)
    {

        $item = ($cart ?: CartFactory::make())->items()->firstOrCreate(
            [
                'product_variant' => $variantId,
            ],
            [
                'quantity' => 0,
            ]
        );

        $item->increment('quantity', $quantity);
        $item->touch();
    }
}
