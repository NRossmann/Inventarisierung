<?php


class invItem
{
    //Properties
    public $id;
    public $strichcode;
    public $menge;
    public $name;
    public $hersteller;
    public $lagerplatz;

    //setters
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @param mixed $strichcode
     */
    public function setStrichcode($strichcode)
    {
        $this->strichcode = $strichcode;
    }

    /**
     * @param mixed $menge
     */
    public function setMenge($menge)
    {
        $this->menge = $menge;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $hersteller
     */
    public function setHersteller($hersteller)
    {
        $this->hersteller = $hersteller;
    }

    /**
     * @param mixed $lagerplatz
     */
    public function setLagerplatz($lagerplatz)
    {
        $this->lagerplatz = $lagerplatz;
    }

    public function getTableRow(){
        $output = "";
        $output = $output . "<tr>";
        $output = $output . "<td> " . $this->strichcode . "</td>";
        $output = $output . "<td> " . $this->strichcode . "</td>";
        $output = $output . "<td> " . $this->name . "</td>";
        $output = $output . "<td> " . $this->hersteller . "</td>";
        $output = $output . "<td> " . $this->lagerplatz . "</td>";
        $output = $output . "</tr>";

        return $output;
    }


}