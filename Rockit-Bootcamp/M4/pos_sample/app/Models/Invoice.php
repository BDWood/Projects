<?php
namespace App\Models;

use DB;


class Invoice extends Model {
    protected static $table = 'invoice';

    public static function getItems() {
        //query the database to get all items for this invoice
        $invoice_items = 'select customer_id, invoice_id, item_id, quantity, name, description, price
                            from invoice, invoice_item, item
                            where invoice_id = invoice.id and item_id = item.id;';
        $rows = DB::select($invoice_items);
        //return array of Item objects
        $items = [];
        foreach($rows as $row) {
            $item = new Item();
            $item->id = $row['item_id'];
            $item->price = $row['price'];
            $item->name = $row['name'];
            $item->description = $row['description'];
            $item->invoice_id = $row['invoice_id'];
            $item->customer_id = $row['customer_id'];
            $items = [$item];
        }

        return $items;
    }

}