<?php

namespace App\Jobs;

use App\Models\Category;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class SaveCategory implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $path;
    protected $xml;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($path, $xml)
    {
        $this->path = $path;
        $this->xml = $xml;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $xml = simplexml_load_file($this->path) or die('error parse category');
        foreach ($xml->shop->categories->category as $category_price) {
            $hash = json_encode($category_price);
            $hash = hash('md5', $hash);
            $category = Category::create([
                'name' => $category_price,
                'code' => 12312,
                'description' => $category_price . ' категория магазина',
                'image' => null,
                'offer_id' => $category_price['id'],
                'hash' => $hash,
                'source' => $this->xml,
            ]);
            Log::channel('parser_category')->info($category);
        }
    }
}
