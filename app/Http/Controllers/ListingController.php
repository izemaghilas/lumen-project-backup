<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Transformers\MoviesToDto;
use DateTime;

class ListingController extends Controller {
    private $movieRepository;

    public function __construct(Movies $movieRepository) {
        $this->movieRepository = $movieRepository;
    }

    /**
     * Return main view with movies
     */
    public function index() {
        $movies = $this->movieRepository->all()->map([MoviesToDto::class, 'provideTransformer']);
        return json_decode($movies);
    }

    /**
     * Return timestamp object
     */
    public function timestamp() {
        $date = new DateTime();
        $timestamp = $date->getTimestamp();
        $dateFormatted = ['type' => $timestamp];
        return $dateFormatted;
    }
}
