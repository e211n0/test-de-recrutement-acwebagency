<?php

declare(strict_types=1);


namespace App;


class Movie
{
    public const CHILDREN = 2;
    public const REGULAR = 0;
    public const NEW_RELEASE = 1;

    private string $title;
    private int $priceCode;

    public function __construct(string $title, int $priceCode)
    {
        $this->title = $title;
        $this->priceCode = $priceCode;
    }
    
    /**
     * getPriceCode
     *
     * @return int
     */
    public function getPriceCode(): int
    {
        return $this->priceCode;
    }
    
    /**
     * setPriceCode
     *
     * @param  mixed $code
     * @return void
     */
    public function setPriceCode(int $code)
    {
        return $this->priceCode = $code;
    }
    
    /**
     * getTitle
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * setTitle
     *
     * @return string
     */
    public function setTitle(string $title)
    {
        return $this->title = $title;;
    }
}