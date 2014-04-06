<?php

class DVD extends Product {

    private $_duration;

    public function getDuration() {
        return $this->_duration;
    }

    public function setDuration($duration) {
        $this->_duration = $duration;
    }

}

$table = new HTMLTable();
/**
 * <tr>
 *   <td class="idField"></td>
 *   <td class="nameField"></td>
 * </tr>
 */
$prototypeRow = new HTMLReportRow();

foreach ($reportArray as $data) {
    $row = clone $prototypeRow;
    $row->setId($data['id']);
    $row->setName($data['name']);
    $table->inject($row);
}


?>

