<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $post_title = $this->faker->text(20);
        $post_slug = Str::slug($post_title);
        return [
            'category_id'=>$this->faker->randomNumber(1,10),
            'user_id'=>'1',
            'title'=>$post_title,
            'slug'=>$post_slug,
            'exerpt'=>$this->faker->text(100),
            'description'=>$this->faker->text(200),
            'image'=>$this->faker->randomNumber(1,10).'image'.'.'.'jpg',
        ];
    }
}
