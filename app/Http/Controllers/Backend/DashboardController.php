<?php

namespace App\Http\Controllers\Backend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Admin Dashboard'
        ];

        return view('backend.pages.Dashboard.index',$data);
    }

    public function adminLogout(){
        
        Session::flush();
        
        Auth::logout();

        return redirect('admin');
    }

    public function invoice($id, $type = 'stream'){

        $orders = Order::where('order_id',$id)->get();
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('backend.pages.invoice.invoice',compact('orders'));
        return $type == 'stream' ? $pdf->stream() : $pdf->download($id.'.pdf');
    }

    public function offlineInvoice($id, $type = 'stream'){

        $offline_orders = Invoice::where('order_id',$id)->get();
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('backend.pages.invoice.offline-invoice',compact('offline_orders'));
        return $type == 'stream' ? $pdf->stream() : $pdf->download('offline_'.$id.'.pdf');
    }
}
