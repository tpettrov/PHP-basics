<?php


namespace Services;

use Data\IndexViewData;

interface ReservationServiceInterface
{
    public function addReservation();

    /**
     * @return IndexViewData
     */
    public function getIndexViewData();


    /**
     * @return BookViewData[]|\Generator
     */
    public function findAll();
}