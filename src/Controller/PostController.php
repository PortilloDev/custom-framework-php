<?php

namespace App\Controller;

use IvanPortillo\framework\Http\Response;

class PostController
{
    public function show(int $id):Response
    {
        $content = "<h1>This is Post {$id}</h1>";
        return new Response($content);
    }
}