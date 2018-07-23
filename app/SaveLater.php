<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaveLater extends Model
{
    public $articles = null;

    public function __construct($oldSaveLater) {
        if($oldSaveLater) {
            $this->articles = $oldSaveLater->articles;
            $this->totalQty = $oldSaveLater->totalQty;
        }
    }

    public function add($article, $id, $qty) {
        $storedArticle = ['qty' => 0, 'price' => $article->price, 'item' => $article];

        if($this->articles) 
        {
            if(array_key_exists($id, $this->articles))
            {
                $storedArticle = $this->articles[$id];
            }
        }
        $storedArticle['qty'] += $qty;
        $storedArticle['price'] = $article->price * $storedArticle['qty'];
        $this->articles[$id] = $storedArticle;
    }

    public function remove($id)
    {
        $this->totalQty -= $this->items[$id]['qty'];
        unset($this->articles[$id]);
    }
}
