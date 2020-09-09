<?php

use Illuminate\Database\Seeder;
use App\Post;
use Illuminate\Support\Facades\Hash;

use App\Category;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $category1 = Category::create([

          'name' => 'News'

      ]);


      $author1 = App\User::create([

          'name' => 'John Doe',

          'email' => 'john@doe.com',

          'password' => Hash::make('password')

      ]);


      $author2 = App\User::create([

          'name' => 'Jane Doe',

          'email' => 'jane@doe.com',

          'password' => Hash::make('password')

      ]);


      $category2 = Category::create([

          'name' => 'Marketing'

      ]);


      $category3 = Category::create([

          'name' => 'Partnership'

      ]);

      $post1 = Post::create([

          'title' => 'We relocated our office to a new designed garage',

          'description' => 'We relocated our office to a new designed garage We relocated our office to a new designed garage',

          'content' => 'We relocated our office to a new designed garageWe relocated our office to a new designed garage',

          'category_id' => $category1->id ,

          'image' => 'img/1.jpg',

          'user_id' => $author1->id
      ]);

      $post2 = $author2->posts()->create([

          'title' => 'Top 5 brilliant content marketing strategies',

          'description' => 'We relocated our office to a new designed garage We relocated our office to a new designed garage',

          'content' => 'We relocated our office to a new designed garageWe relocated our office to a new designed garage',

          'category_id' => $category2->id ,

          'image' => 'img/2.jpg'

      ]);


      $post3 =  $author1->posts()->create([

          'title' => 'Best practices for minimalist design with example',

          'description' => 'We relocated our office to a new designed garage We relocated our office to a new designed garage',

          'content' => 'We relocated our office to a new designed garageWe relocated our office to a new designed garage',

          'category_id' => $category3->id ,

          'image' => 'img/3.jpg'

      ]);


      $post4 =  $author2->posts()->create([

          'title' => 'Congratulate and thank to Maryam for joining our team',

          'description' => 'We relocated our office to a new designed garage We relocated our office to a new designed garage',

          'content' => 'We relocated our office to a new designed garageWe relocated our office to a new designed garage',

          'category_id' => $category2->id,

          'image' => 'img/4.jpg'

      ]);

    }
}
