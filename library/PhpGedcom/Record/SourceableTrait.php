<?php

namespace PhpGedcom\Record;

/**
 * Class SourceableTrait
 * @package PhpGedcom\Record
 */
trait SourceableTrait
{
    /**
     * Stores an array of Source References for this object.
     *
     * @var array
     */
    protected $sour;

    /**
     * @param array $sour
     * @return $this
     */
    public function setSour(array $sour)
    {
        $this->sour = $sour;
        return $this;
    }

    /**
     * @param SourRef $sour
     * @return $this
     */
    public function addSour(\PhpGedcom\Record\SourRef $sour)
    {
        $this->sour[] = $sour;
        return $this;
    }

    /**
     * @return array
     */
    public function getSour()
    {
        return $this->sour;
    }
}
