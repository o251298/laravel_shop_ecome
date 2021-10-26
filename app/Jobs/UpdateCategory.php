<?php

namespace App\Jobs;

use App\Models\Category;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class UpdateCategory implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $path;
    protected $arrayCategory;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($path, $arrayCategory)
    {
        $this->path = $path;
        $this->arrayCategory = $arrayCategory;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $xml = simplexml_load_file($this->path) or die('error parser');
        foreach ($xml->shop->categories->category as $category_price) {
            $offer_id_category = (string)$category_price['id'];
            $offer_name_category = $category_price;
            $hash = json_encode($category_price);
            $hash = hash('md5', $hash);
            if ($this->arrayCategory[$offer_id_category] !== $hash) {
                $category = Category::query()->where('offer_id', $offer_id_category)->first();
                $category->name = $category_price;
                $category->offer_id = $offer_id_category;
                $category->hash = $hash;
                $category->save();
                Log::channel('parser_category')->info($category);
            }
        }

//        Category::updateCategoryParse($newDataCategory);
    }
}
