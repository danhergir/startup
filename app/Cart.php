<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart)
        {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id, $qty)
    {
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if ($this->items)
        {
            if(array_key_exists($id, $this->items))
            {
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty'] = $qty;
        $storedItem['price'] = $item->price * $qty;
        $this->items[$id] = $storedItem;

        $this->totalQty = 0;
        foreach($this->items as $element) {
            $this->totalQty += $element['qty'];
            $this->totalPrice = $this->totalQty * $item->price;
        }

    }

      public function updateItem($item, $id, $quantity) {
        $this->items[$id]['qty'] = $quantity;
        $this->items[$id]['price'] = $quantity * $item->price;

        $this->totalQty = 0;
        foreach($this->items as $element) {
            $this->totalQty += $element['qty'];
            $this->totalPrice = $this->totalQty * $item->price;
        }
    }

    public function removeItem($id)
    {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        
        unset($this->items[$id]);
    }
}
