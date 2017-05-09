<?php


namespace Services;


use Adapter\DatabaseInterface;

use Data\Accommodation_Type;
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
        $query = "SELECT id, name FROM accomodation_type";
        $stmt = $this->db->prepare($query);
        $stmt->execute([]);


        $viewData = new IndexViewData();
        $viewData->setTypes(
            function() use($stmt) {
                while ($genre = $stmt->fetchObject(Accommodation_Type::class)) {
                    yield $genre;
                }
            }
        );

        return $viewData;
    }

    /**
     * @return BookViewData[]|\Generator
     */
    public function findAll()
    {
        // TODO: Implement findAll() method.
    }
}