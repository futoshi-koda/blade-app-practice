<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        // 商品一覧で表示させるデータを作成
        $products = collect([
            (object) [
                'name' => 'ノートパソコン',
                'category' => '電子機器',
                'price' => 89800,
                'in_stock' => true,
            ],
            (object) [
                'name' => 'ワイヤレスマウス',
                'category' => '周辺機器',
                'price' => 3980,
                'in_stock' => true,
            ],
            (object) [
                'name' => 'USBハブ',
                'category' => '周辺機器',
                'price' => 2480,
                'in_stock' => false,
            ],
        ]);

        return view('products.index', [
            'pageTitle' => '商品一覧',
            'products' => $products,
            'lastUpdated' => now(),
        ]);
    }
}


