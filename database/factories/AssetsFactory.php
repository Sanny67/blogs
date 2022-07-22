<?php

namespace Database\Factories;

use App\Models\Blog;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class AssetsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $blog_id = session()->get('blog_id');
        $url = "https://picsum.photos/seed/picsum/200";
        $contents = file_get_contents($url);
        $mime = get_headers($url, 1)["Content-Type"];
        $ext = explode('/', $mime )[1];
        $name = rand(1000,9999) . time().'.'.$ext;

        Storage::put('images/'.$name, $contents);
        return [
            'blog_id' => $blog_id,
            'type' => 0,
            'file_name' => $name,
            'mime' => $mime,
        ];
    }
}
