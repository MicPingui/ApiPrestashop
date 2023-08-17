<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\API\Address;
use App\Models\API\Customer;
use App\Models\API\CustomerMessage;
use App\Models\API\OrderCarrier;
use App\Models\API\OrderDetail;
use App\Models\API\Orders;
use App\Models\API\OrderState;
use App\Models\API\OrderStateLang;
use App\Models\API\WebpayRestTransactions;
use Illuminate\Http\Request;

class PedidosController extends Controller{

    public function getAllOrdersSyS(Request $request){
        $pedido = $request->input('id_order');

        if($pedido != null && $pedido != ""){
            $lista = Orders::Select('id_order','reference','id_customer','current_state','id_cart','module','payment','total_paid','total_paid_real','total_paid_tax_incl','date_add')->
                            with(
                                'customer:id_customer,RUT,firstname,lastname,email',
                                'webpay',
                                'order_details:id_order_detail,id_order,product_id,product_quantity,total_price_tax_incl,unit_price_tax_incl,product_reference',
                                'state:id_order_state,name,template',
                                'addresses:id_address,id_customer,alias,company,firstname,lastname,city,address1,address2,phone,phone_mobile'
                            )->where('id_order','=',$pedido)->get();
            return $lista;
        }else{
            $lista = Orders::Select('id_order','reference','id_customer','current_state','id_cart','module','payment','total_paid','total_paid_real','total_paid_tax_incl','date_add')->
                            with(
                                    'customer:id_customer,RUT,firstname,lastname,email',
                                    'webpay',
                                    'order_details:id_order_detail,id_order,product_id,product_quantity,total_price_tax_incl,unit_price_tax_incl,product_reference',
                                    'state:id_order_state,name,template',
                                    'addresses:id_address,id_customer,alias,company,firstname,lastname,city,address1,address2,phone,phone_mobile'
                            )->get();
            return $lista;
        }
    }

    public function getAllOrders(Request $request){
        $pedido = $request->input('id_order');

        if($pedido != null && $pedido != ""){
            $lista = Orders::with(
                                'customer',
                                'webpay',
                                'order_details',
                                'state',
                                'addresses'
                            )->where('id_order','=',$pedido)->get();
            return $lista;
        }else{
            $lista = Orders::with(
                                    'customer',
                                    'webpay',
                                    'order_details',
                                    'state',
                                    'addresses'
                            )->get();
            return $lista;
        }
    }



    public function getAllWebPay(Request $request){
        $pedido = $request->input('order_id');
        if($pedido != null && $pedido != ""){
            $lista = WebpayRestTransactions::where('order_id','=',$pedido)->get();
            return $lista;
        }else{
            $lista = WebpayRestTransactions::all();
            return $lista;
        }
    }

    public function getPrueba(){
        $lista = Address::all();
        return $lista;
    }


}
