<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create Admin User
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password')
        ]);

        // 5 Random Users
        User::factory(5)->create();

        // 3 Categories
        $tech = Category::create(['name' => 'Technology', 'slug' => 'technology']);
        $edu = Category::create(['name' => 'Education', 'slug' => 'education']);
        $life = Category::create(['name' => 'Lifestyle', 'slug' => 'lifestyle']);

        // Create Real Posts
        Post::create([
            'title' => 'The Future of AI in Web Development',
            'slug' => 'future-of-ai-web-dev',
            'category_id' => $tech->id,
            'user_id' => 1,
            'excerpt' => 'Artificial Intelligence is revolutionizing how we build websites. From automated coding assistants to dynamic content generation, explore the next frontier.',
            'body' => 'Artificial Intelligence is rapidly transforming the landscape of web development. Tools like GitHub Copilot and ChatGPT are assisting developers in writing cleaner code faster. Beyond coding, AI is being used for user experience personalization, automated testing, and even generating layouts. As we move forward, integrating AI APIs will becomes a standard skill for full-stack developers. The key is not to fear replacement, but to master these tools to enhance productivity.'
        ]);

        Post::create([
            'title' => 'Why Learning Laravel is a Great Choice in 2025',
            'slug' => 'why-learn-laravel-2025',
            'category_id' => $edu->id,
            'user_id' => 1,
            'excerpt' => 'Laravel continues to be the dominant PHP framework. Its elegant syntax, robust ecosystem, and vibrant community make it a top skill for developers.',
            'body' => 'Laravel has maintained its position as the go-to PHP framework for good reason. With features like Eloquent ORM, Blade templating, and a powerful dependency injection container, it simplifies complex tasks. The ecosystem, including tools like Forge, Vapor, and Nova, provides a professional suite for application lifecycle management. For beginners and experts alike, Laravel offers a development experience that prioritizes developer happiness without sacrificing performance.'
        ]);

        Post::create([
            'title' => '5 Tips for a Balanced Digital Life',
            'slug' => 'balanced-digital-life',
            'category_id' => $life->id,
            'user_id' => 1,
            'excerpt' => 'In an always-online world, finding balance is crucial for mental health. Here are five practical tips to manage your screen time effectively.',
            'body' => 'Disconnecting to reconnect is more important than ever. 1. Set strict "no-screen" zones in your house. 2. Use the "Do Not Disturb" mode during deep work sessions. 3. Curate your social media feed to inspire rather than depress. 4. Take regular digital detox weekends. 5. Prioritize face-to-face interactions over digital ones. Small changes in your digital habits can lead to significant improvements in your overall well-being and productivity.'
        ]);

        Post::create([
            'title' => 'Understanding MVC Architecture',
            'slug' => 'understanding-mvc',
            'category_id' => $edu->id,
            'user_id' => 1,
            'excerpt' => 'Model-View-Controller is the backbone of modern web frameworks. Let\'s break down what each component does and how they interact.',
            'body' => 'MVC stands for Model, View, Controller. The Model represents your data structure and database logic. The View is what the user sees—the UI. The Controller acts as the traffic cop, taking user input, consulting the Model, and returning the appropriate View. separation of concerns allows for cleaner, more maintainable code and enables front-end and back-end developers to work simultaneously without stepping on each other\'s toes.'
        ]);

        Post::create([
            'title' => 'Top VS Code Extensions for PHP Developers',
            'slug' => 'top-vscode-extensions-php',
            'category_id' => $tech->id,
            'user_id' => 1,
            'excerpt' => 'Supercharge your development environment with these essential Visual Studio Code extensions designed for PHP and Laravel workflow.',
            'body' => 'VS Code is powerful out of the box, but extensions make it unstoppable. 1. PHP Intelephense: Essential for code completion. 2. Laravel Blade Snippets: Speeds up writing views. 3. PHP CS Fixer: Keeps your code style consistent. 4. GitLens: Visualize code authorship at a glance. 5. Docker: Manage your containers directly from the editor. customized environment is the first step to becoming a more efficient developer.'
        ]);
    }
}
