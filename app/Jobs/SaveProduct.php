<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class SaveProduct implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $path;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $xml = simplexml_load_file($this->path) or die('error parse product');
        // Добавить проверку на валидность

        foreach ($xml->shop->offers->offer as $offer) {
            $hash_file = json_encode($offer);
            $name = strip_tags((string)$offer->name);
            $offer_id = (integer)$offer['id'];
            $category_price_id = (integer)$offer->categoryId;
            $description = strip_tags((string)$offer->description);
            $price = (float) $offer->price;
            $image = (string)$offer->picture[0];
            $availability = (integer)$offer->stock_quantity;
            $hash = hash('md5', $hash_file);
            // очередь или тут или при создании этого задания
            $product = Product::create([
                'category_id' => 0,
                'name' => $name,
                'code' => 123,
                'description' => $description,
                'image' => $image,
                'price' => $price,
                'new' => 0,
                'recommend' => 0,
                'hit' => 0,
                'count' => $availability,
                'show' => 0,
                'offer_id' => $offer_id,
                'source' => 0,
                'category_id_price' => $category_price_id,
                'hash' => $hash,
            ]);
            Log::channel('parser_product')->info($product);
        }
    }
}
