<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Controllers\Dalla;

use App\Dalla\Product;
use App\Dalla\ProductStyle;
use App\Http\Controllers\AbstractController;

class ProductController extends AbstractController
{

   protected $template = 'products';
   protected $theme = 'dalla';

   protected $model = Product::class;

   public function carrousel3d()
   {
       $products = app(ProductStyle::class)->query()->where('status', self::$PUBLISHED_STATUS)->get();

       return response()->json($products);
   }
}
