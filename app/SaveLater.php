<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaveLater extends Model
{
    public $articles = null;

    public function __construct($oldSaveLater) {
        if($oldSaveLater) {
            $this->articles = $oldSaveLater->articles;
        }
    }

    public function add($article, $id) {
        $storedArticle = ['article' => $article];

        if($this->articles) 
        {
            if(array_key_exists($id, $this->articles))
            {
                $storedArticle = $this->articles[$id];
            }
        }
        $this->articles[$id] = $storedArticle;
    }

    public function remove($id)
    {
        unset($this->articles[$id]);
    }
}
