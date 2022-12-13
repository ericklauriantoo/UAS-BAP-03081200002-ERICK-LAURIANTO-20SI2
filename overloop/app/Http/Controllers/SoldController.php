<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ViewSoldProduct;
use PDF;


class SoldController extends Controller
{
    //
    public function index()
    {  
        $sold = ViewSoldProduct::all();
        return view('admin.sold.index', ['title' => 'Sold Product'],compact('sold'));
    }

    public function print_pdf()
    {
    	$sold = ViewSoldProduct::all();
 
    	$pdf = PDF::loadView('admin.sold.print_pdf',compact('sold'));
        $pdf->setPaper('A4','potrait');
    	return $pdf->download('sold-pdf.pdf');
    }
}
