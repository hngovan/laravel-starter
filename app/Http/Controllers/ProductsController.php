<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {

        $title = 'List Products';
        $x = 1;
        $y = 2;
        // $name = 'petter';
        // return view('products.index')->with('name', $name);
        // return view('products.index', compact('title', 'x', 'y'));

        $my_phone = [
            'name' => 'iphone 14',
            'year' => '2022'
        ];

        // return view('products.index', compact('my_phone'));
        return view('pages.products.index', [
            'my_phone' => $my_phone
        ]);
    }
    public function about() {
        return 'this is About page';
    }
    public function detail($productName, $id) {
        $phones = [
            'iphone'  => 'iphone 15',
            'samsung' => 'samsung',
        ];
        return view('pages.products.product-detail',[
            'product' => $phones[$productName] ?? 'not found',
            'id'      => $id,
        ]);
    }
}
