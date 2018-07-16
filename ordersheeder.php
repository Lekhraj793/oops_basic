<?php
use Illuminate\Database\Seeder;
use App\Models\OrderList;
class OrderListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<5; $i++)
        {
            $payment= ["paid","pending","partial_pending","refund"];
            $pay= array_rand($payment);
            $fulfillment=["fulfilled","null","partial","restocked"];
            $fulfill= array_rand($fulfillment);
            $int= rand(1262055681,1262055681);
            for($j=0; $j<5; $j++)
            {
                OrderList::insert(['order_id' => rand(1, 1550),
                    'customer_name' => str_random(10),
                    'order_created_at' => date("Y-m-d H:i:s",$int),
                    'payment_status' => $payment[$pay],
                    'fulfillment_status'=> $fulfillment[$fulfill],
                    'total' => rand(500, 1300),
                    'note' => str_random(25),
                    'delivery_date' => date("Y-m-d H:i:s",$int)]);
            }
        }
    }
}