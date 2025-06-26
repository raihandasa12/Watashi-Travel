<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showDetail2(Request $request)
    {
        $adults = $request->input('adults');
        $children = $request->input('children');
        $departure = $request->input('departure_date');
        $return = $request->input('return_date');

        return view('order-detail2', compact('adults', 'children', 'departure', 'return'));
    }

    public function storeCustomerInfo(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'whatsapp' => 'required|string|max:20',
            'email' => 'required|email',
            'city' => 'required|string|max:255',
        ]);

        // Simpan data customer ke session
        session(['customer_info' => $validated]);

        // Lanjut ke step 3 (order-detail3)
        return redirect()->route('order.detail3');
    }
}
