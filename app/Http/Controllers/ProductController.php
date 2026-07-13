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
                'model' => 'AB123Z',
            ],
            (object) [
                'name' => 'ワイヤレスマウス',
                'category' => '周辺機器',
                'price' => 3980,
                'in_stock' => true,
                'model' => 'A123',
            ],
            (object) [
                'name' => 'USBハブ',
                'category' => '周辺機器',
                'price' => 2480,
                'in_stock' => false,
                'model' => 'B456',
            ],
            (object) [
                'name' => '液晶ディスプレイ',
                'category' => '周辺機器',
                'price' => 14800,
                'in_stock' => false,
                'model' => 'C789',
            ],
        ]);

        return view('products.index', [
            'pageTitle' => '商品一覧',
            'products' => $products,
            'lastUpdated' => now(),
        ]);
    }
}


