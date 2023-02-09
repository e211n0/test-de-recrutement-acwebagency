<?php

declare(strict_types=1);


namespace App;


class Rental
{

    private Movie $movie;
    private int $daysRented;
    
    public function __construct(Movie $movie, int $daysRented)
    {
        $this->movie = $movie;
        $this->daysRented = $daysRented;
    }
    
    /**
     * getDaysRented
     *
     * @return int
     */
    public function getDaysRented(): int
    {
        return $this->daysRented;
    }

    /**
     * setDaysRented
     *
     * @return void
     */
    public function setDaysRented($daysRented)
    {
        return $this->daysRented = $daysRented;
    }
    
    /**
     * getMovie
     *
     * @return Movie
     */
    public function getMovie(): Movie
    {
        return $this->movie;
    }

    /**
     * setMovie
     *
     * @return void
     */
    public function setMovie($movie)
    {
        return $this->movie = $movie;
    }

}