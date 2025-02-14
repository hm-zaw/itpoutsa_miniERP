<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesInvoiceSeeder extends Seeder
{
    public function run()
    {
        DB::table('sales_invoices')->insert([
            [
                'id' => 1,
                'sale_date' => '2024-01-09',
                'invoice_no' => 'INV250209572',
                'partner_shops_id' => 1,
                'product_id' => 1,
                'cash_back_mmk' => 0,
                'quantity' => 3,
                'total_mmk' => 5390000,
                'delivered' => 0,
                'payment' => 'Paid',
                'remarks' => 'Space Black 1, Silver 2',
                'created_at' => '2024-12-30 08:15:00',
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'sale_date' => '2024-02-09',
                'invoice_no' => 'INV250209573',
                'partner_shops_id' => 1,
                'product_id' => 2,
                'cash_back_mmk' => 0,
                'quantity' => 2,
                'total_mmk' => 5390000,
                'delivered' => 0,
                'payment' => 'Paid',
                'remarks' => 'Space Black 1, Silver 2',
                'created_at' => '2024-12-30 08:45:00',
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'sale_date' => '2024-02-09',
                'invoice_no' => 'INV250209574',
                'partner_shops_id' => 2,
                'product_id' => 3,
                'cash_back_mmk' => 0,
                'quantity' => 3,
                'total_mmk' => 2550000,
                'delivered' => 0,
                'payment' => 'Paid',
                'remarks' => null,
                'created_at' => '2024-12-30 09:00:00',
                'updated_at' => null,
            ],
            [
                'id' => 4,
                'sale_date' => '2024-02-09',
                'invoice_no' => 'INV250209575',
                'partner_shops_id' => 3,
                'product_id' => 4,
                'cash_back_mmk' => 0,
                'quantity' => 5,
                'total_mmk' => 4000000,
                'delivered' => 1,
                'payment' => 'Paid',
                'remarks' => null,
                'created_at' => '2024-12-30 09:30:00',
                'updated_at' => null,
            ],
            [
                'id' => 5,
                'sale_date' => '2024-03-10',
                'invoice_no' => 'INV250210576',
                'partner_shops_id' => 4,
                'product_id' => 5,
                'cash_back_mmk' => 0,
                'quantity' => 3,
                'total_mmk' => 3600000,
                'delivered' => 0,
                'payment' => 'Paid',
                'remarks' => null,
                'created_at' => '2024-12-30 10:00:00',
                'updated_at' => null,
            ],
            [
                'id' => 6,
                'sale_date' => '2024-04-10',
                'invoice_no' => 'INV250210577',
                'partner_shops_id' => 5,
                'product_id' => 6,
                'cash_back_mmk' => 0,
                'quantity' => 20,
                'total_mmk' => 1600000,
                'delivered' => 0,
                'payment' => 'Paid',
                'remarks' => null,
                'created_at' => '2024-12-30 10:30:00',
                'updated_at' => null,
            ],
            [
                'id' => 7,
                'sale_date' => '2024-05-10',
                'invoice_no' => 'INV250210578',
                'partner_shops_id' => 1,
                'product_id' => 4,
                'cash_back_mmk' => 50000,
                'quantity' => 100,
                'total_mmk' => 25000000,
                'delivered' => 1,
                'payment' => 'Paid',
                'remarks' => 'First January sale',
                'created_at' => '2024-01-15 10:30:00',
                'updated_at' => '2024-01-15 10:30:00',
            ],
            [
                'id' => 8,
                'sale_date' => '2024-05-11',
                'invoice_no' => 'INV250211579',
                'partner_shops_id' => 2,
                'product_id' => 8,
                'cash_back_mmk' => 70000,
                'quantity' => 80,
                'total_mmk' => 26000000,
                'delivered' => 1,
                'payment' => 'Paid',
                'remarks' => 'February sale',
                'created_at' => '2024-02-20 11:00:00',
                'updated_at' => '2024-02-20 11:00:00',
            ],
            [
                'id' => 9,
                'sale_date' => '2024-06-11',
                'invoice_no' => 'INV250211580',
                'partner_shops_id' => 3,
                'product_id' => 9,
                'cash_back_mmk' => 60000,
                'quantity' => 120,
                'total_mmk' => 27000000,
                'delivered' => 0,
                'payment' => 'Paid',
                'remarks' => 'March sale',
                'created_at' => '2024-03-18 12:00:00',
                'updated_at' => '2024-03-18 12:00:00',
            ],
            [
                'id' => 10,
                'sale_date' => '2024-06-11',
                'invoice_no' => 'INV250211581',
                'partner_shops_id' => 1,
                'product_id' => 10,
                'cash_back_mmk' => 55000,
                'quantity' => 90,
                'total_mmk' => 25500000,
                'delivered' => 1,
                'payment' => 'Paid',
                'remarks' => 'April sale',
                'created_at' => '2024-04-10 13:00:00',
                'updated_at' => '2024-04-10 13:00:00',
            ],
            [
                'id' => 11,
                'sale_date' => '2024-07-11',
                'invoice_no' => 'INV250211582',
                'partner_shops_id' => 4,
                'product_id' => 2,
                'cash_back_mmk' => 40000,
                'quantity' => 85,
                'total_mmk' => 23000000,
                'delivered' => 1,
                'payment' => 'Paid',
                'remarks' => 'May sale',
                'created_at' => '2024-05-05 14:00:00',
                'updated_at' => '2024-05-05 14:00:00',
            ],
            [
                'id' => 12,
                'sale_date' => '2024-07-11',
                'invoice_no' => 'INV250211583',
                'partner_shops_id' => 2,
                'product_id' => 2,
                'cash_back_mmk' => 30000,
                'quantity' => 110,
                'total_mmk' => 24000000,
                'delivered' => 1,
                'payment' => 'Paid',
                'remarks' => 'June sale',
                'created_at' => '2024-06-22 15:00:00',
                'updated_at' => '2024-06-22 15:00:00',
            ],
            [
                'id' => 13,
                'sale_date' => '2024-08-11',
                'invoice_no' => 'INV250211584',
                'partner_shops_id' => 3,
                'product_id' => 2,
                'cash_back_mmk' => 35000,
                'quantity' => 75,
                'total_mmk' => 25000000,
                'delivered' => 0,
                'payment' => 'Paid',
                'remarks' => 'July sale',
                'created_at' => '2024-07-30 16:00:00',
                'updated_at' => '2024-07-30 16:00:00',
            ],
            [
                'id' => 14,
                'sale_date' => '2024-09-11',
                'invoice_no' => 'INV250211585',
                'partner_shops_id' => 1,
                'product_id' => 1,
                'cash_back_mmk' => 80000,
                'quantity' => 130,
                'total_mmk' => 28000000,
                'delivered' => 1,
                'payment' => 'Paid',
                'remarks' => 'August sale',
                'created_at' => '2024-08-12 17:00:00',
                'updated_at' => '2024-08-12 17:00:00',
            ],
            [
                'id' => 15,
                'sale_date' => '2024-09-11',
                'invoice_no' => 'INV250211586',
                'partner_shops_id' => 4,
                'product_id' => 3,
                'cash_back_mmk' => 75000,
                'quantity' => 95,
                'total_mmk' => 29000000,
                'delivered' => 1,
                'payment' => 'Paid',
                'remarks' => 'September sale',
                'created_at' => '2024-09-03 18:00:00',
                'updated_at' => '2024-09-03 18:00:00',
            ]
        ]);
    }
}
