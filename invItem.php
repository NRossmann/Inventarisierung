<?php


class invItem
{
    //Properties
    public $strichcode;
    public $menge;
    public $name;
    public $hersteller;
    public $lagerplatz;

    //setters
    /*
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
        $output = $output . "<tr class='inventar-table-tr'>";
        $output = $output . "<td class='inventar-table-td'> " . $this->strichcode . "</td>";
        $output = $output . "<td class='inventar-table-td'> " . $this->menge . "</td>";
        $output = $output . "<td class='inventar-table-td'> " . $this->name . "</td>";
        $output = $output . "<td class='inventar-table-td'> " . $this->hersteller . "</td>";
        $output = $output . "<td class='inventar-table-td'> " . $this->lagerplatz . "</td>";
        $output = $output . "</tr>";

        return $output;
    }


}