<?php

trait Share
{
    public function share(): string
    {
        return  "shared";
    }
}

trait Like
{
    public function like(): string
    {
        return "liked";
    }
}


class Post
{
    use Share, Like;
}

$post = new Post();
echo $post->like();
