<?php
class Order
{
    public function getItems(){/*...*/}
    public function getItemCount(){/*...*/}
    public function addItem($item){/*...*/}
    public function deleteItem($item){/*...*/}
}

class OrderPrinter
{
    public function printOrder(){/*...*/}
    public function showOrder(){/*...*/}
}

class OrderPersistence
{
    public function load(){/*...*/}
    public function save(){/*...*/}
    public function update(){/*...*/}
    public function delete(){/*...*/}
}

class OrderCalculator
{
    public function calculateTotalSum(){/*...*/}
}
?>