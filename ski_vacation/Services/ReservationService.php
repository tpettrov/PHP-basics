<?php


namespace Services;


use Adapter\DatabaseInterface;

use Data\IndexViewData;


class ReservationService implements ReservationServiceInterface
{

    /**
     * @var DatabaseInterface
     */
    private $db;

    /**
     * BookService constructor.
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }


    public function addReservation()
    {
        // TODO: Implement addReservation() method.
    }

    /**
     * @return IndexViewData
     */
    public function getIndexViewData()
    {
        // TODO: Implement getIndexViewData() method.
    }

    /**
     * @return BookViewData[]|\Generator
     */
    public function findAll()
    {
        // TODO: Implement findAll() method.
    }
}