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
    protected $colunm = 'ordering';
    protected $direction = 'ASC';


   protected $model = Product::class;

   public function carrousel3dProduct($id)
   {
//       dd($id);
       $data = [];
       $productGallery = Product::find($id);
//       dd($productGallery);
       if ($productGallery) {

           $data = $productGallery->append('gallery');
           return response()->json($data->gallery);
       }
       return response()->json($data);
   }

    public function carrousel3d()
    {
        $products = app(ProductStyle::class)->query()->where('status', self::$PUBLISHED_STATUS)->get();

        return response()->json($products);
    }
}
