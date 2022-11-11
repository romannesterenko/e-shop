<?php

namespace App\View\Components;

use App\Models\Cart as MyCart;
use Illuminate\View\Component;

class Cart extends Component
{
    public $cartItems;
    public $total;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->cartItems = MyCart::get();
        $this->total = MyCart::totalSum();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cart');
    }
}
