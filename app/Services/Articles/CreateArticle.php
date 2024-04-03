<?php

namespace App\Services\Articles;

use App\Models\Article;
use App\Models\User;

class CreateArticle
{
    protected User $user;

    protected string $title;

    protected string $content;

    /**
     * @param User $user
     * @return CreateArticle
     */
    public function setUser(User $user): CreateArticle
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @param string $title
     * @return CreateArticle
     */
    public function setTitle(string $title): CreateArticle
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $content
     * @return CreateArticle
     */
    public function setContent(string $content): CreateArticle
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return Article
     * @throws \Exception
     */
    public function save() :Article
    {
        if (!Article::hasUniqueTitle($this->title)) {
            throw new \Exception('Article title already used');
        }

        $article = new Article();
        $article->user_id = $this->user->id;
        $article->title = $this->title;
        $article->content = $this->content;
        $article->save();
        return $article;
    }
}