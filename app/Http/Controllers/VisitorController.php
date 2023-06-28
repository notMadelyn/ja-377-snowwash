<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use App\Models\Meet;
use App\Models\Utility;
use Illuminate\Http\Request;    
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Facade\FlareClient\View;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tdata = Visitor::orderBy('created_at', 'DESC')->get();
        $meet = Meet::get();
        $utility = Utility::get();
        $start = \Carbon\Carbon::today(); // Mendapatkan tanggal hari ini
        $end = $start->copy()->addDay(); // Menambahkan 1 hari ke tanggal hari ini

        $total = Visitor::whereBetween('date', [
            $start,
            $end,
        ])->count();

        // dd($t);
        return view('visitor.index', compact('tdata', 'meet', 'utility', 'total'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $tdata = Visitor::create([
            'name' => $request->name,
            'plat_nomor' => $request->plat_nomor,
            // 'instance' => $request->instance,
            'phone_number' => $request->phone_number,
            // 'meet_id' => $request->meet_id,
            // 'utility_id' => $request->utility_id,
            'merk_motor' => $request->merk_motor,
            'keterangan' => $request->desc,

            'date' => Carbon::now(),
        ]);

        // dd($tdata);
        return redirect()
            ->back()
            ->with('status', 'Success')
            ->with('data', $tdata);
    }

    public function destroy(Visitor $visitor, $id)
    {
        $visitor = Visitor::find($id);
        $visitor->delete();
        // dd($visitor);
        return redirect()->back();
    }

    public function pdf(Request $request)
    {
        $date = $request->input('date');

        if (!$date) {
            $date = now()->toDateString();
        }
        $visitors = Visitor::whereBetween('date',[$request->tanggal_awal,$request->tanggal_akhir])->get();
        // dd($visitors);
        $pdf = new Dompdf();
        $pdf->loadHtml(view('recap', compact('visitors')));

        $pdf->setPaper('A4', 'landscape');

        $pdf->render();

        return $pdf->stream('Laporan-Kunjungan.pdf');
    }
}
