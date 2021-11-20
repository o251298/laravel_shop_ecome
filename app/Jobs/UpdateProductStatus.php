<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class UpdateProductStatus implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $idsProducts;
    protected $idCategory;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($idsProducts, $idCategory)
    {
        $this->idCategory = $idCategory;
        $this->idsProducts = $idsProducts;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->idsProducts as $item){
            $product = Product::find($item);
            Log::channel('product_update_status')->debug($product);
            $product->show = Product::ACTIVE;
            $product->category_id = $this->idCategory;
            $product->save();
            Log::channel('product_update_status')->info($product);
        }
    }
}
