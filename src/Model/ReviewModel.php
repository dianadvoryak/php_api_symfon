<?php

namespace App\Model;

class ReviewModel
{
    private int $id;

    private string $content;

    private string $author;

    private int $rating;

    private int $createAt;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getCreateAt(): int
    {
        return $this->createAt;
    }

    public function setCreateAt(int $createAt): self
    {
        $this->createAt = $createAt;

        return $this;
    }
}
