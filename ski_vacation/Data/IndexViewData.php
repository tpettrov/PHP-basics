<?php


namespace Data;


class IndexViewData
{
    /**
     * @var \Generator|Accommodation_Type[]
     */
    private $accommodation_types;

    private $errors = null;

    private $formData = [];

    /**
     * @return Accommodation_Type[]|\Generator
     */
    public function getTypes()
    {
        return $this->accommodation_types;
    }

    /**
     * @return null
     */
    public function getError()
    {
        return $this->errors;
    }

    /**
     * @return array
     */
    public function getFormData()
    {
        return $this->formData;
    }

    /**
     * @param callable $genres
     */
    public function setTypes(callable $types)
    {
        $this->accommodation_types = $types();
    }

    /**
     * @param null $errors
     */
    public function setError($errors)
    {
        $this->errors = $errors;
    }

    /**
     * @param array $formData
     */
    public function setFormData(array $formData)
    {
        $this->formData = $formData;
    }



}