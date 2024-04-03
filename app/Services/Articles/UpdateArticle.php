<?php

namespace App\Services\Articles;

use App\Models\Article;
use Exception;

class UpdateArticle
{
    private int $id;

    private string $title;

    private string $content;

    /**
     * @param int $id
     * @return UpdateArticle
     */
    public function setId(int $id): UpdateArticle
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $title
     * @return UpdateArticle
     */
    public function setTitle(string $title): UpdateArticle
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $content
     * @return UpdateArticle
     */
    public function setContent(string $content): UpdateArticle
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return Article
     * @throws Exception
     */
    public function update() :Article
    {
        /** @var Article $article */
        $article = Article::find($this->id);

        if( ! $article) {
            throw new Exception('Article not found');
        }

        $article->title = Ucwords(strtolower($this->title));
        $article->content = $this->content;
        $article->save();
        return $article;
    }
}