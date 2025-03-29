<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\TaskService;

class ProductController extends Controller
{
    public function __construct(
        protected TaskService $taskService,
    )
    {}

    public function index(ProductService $productService)
    {
        $newProduct = [
            'id' => 4,
            'name' => 'Orange',
            'category' => 'fruit',
        ];
        $productService->insert($newProduct);
        $this->taskService->add('Add to cart');
        $this->taskService->add('Checkout');

        $data = [
            'products' => $productService->listproducts(),
            'tasks' => $this->taskService->getAllTasks(),
        ];
        return view('products.index', $data);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}