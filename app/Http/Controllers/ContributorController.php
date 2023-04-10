<?php

namespace App\Http\Controllers;

use App\Traits\WablasTrait;
use App\Models\Contributor;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ContributorController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    $query = Contributor::query();

    if ($request->has('search')) {
      $search = $request->input('search');
      $query->where('nama', 'like', '%' . $search . '%')
        ->orWhere('email', 'like', '%' . $search . '%')
        ->orWhere('no_telepon', 'like', '%' . $search . '%')
        ->orWhere('jumlah', 'like', '%' . $search . '%');
    }

    $contributors = $query->paginate(25);

    $total = Contributor::sum('jumlah');
    return view('contributors.index', compact('contributors', 'total'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $contributors = Contributor::all();
    return view('pages.donation', compact('contributors'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->merge(['amount' => (int) $request->input('amount')]);
    $request->merge(['amount_custom' => (int) $request->input('amount_custom')]);

    if (!empty($request->amount_custom)) {
      $request->merge(['amount' => (int) $request->amount_custom]);
    }

    $validator = Validator::make($request->all(), [
      'nama' => 'required',
      'email' => ['required', 'email', 'regex:/^.+@.+$/i'],
      'no_telepon' => ['required', 'min:10'],
      'amount' => ['required', 'numeric', 'min:10000']
    ]);

    if ($validator->fails()) {
      return redirect()->back()->withErrors($validator->errors());
    }

    Contributor::create([
      'nama' => $request->nama,
      'email' => $request->email,
      'no_telepon' => $request->no_telepon,
      'jumlah' => $request->amount,
    ]);

    $pesan = "
    Jazakumulloh khoiron untuk donasi anda. Semoga menjadi tabungan dunia akhirat.

    *Nama:* $request->nama
    *Jumlah Donasi:* $request->amount

    Kirim donasi ke nomor rekening berikut:

    Bank Syariah Indonesia
    *Ma'had Tahfidzul Qur'an Ibnu Mubarok*
    *No.Rek* 4554553333
    ";

    if (!$validator->fails()) {
      $kumpulan_data = [];
      $data['phone'] = request('no_telepon');
      $data['message'] = $pesan;
      $data['secret'] = false;
      $data['retry'] = false;
      $data['isGroup'] = false;
      array_push($kumpulan_data, $data);

      $resultJson = WablasTrait::sendText($kumpulan_data);
      $result = json_decode($resultJson);
    }

    if ($result->status == true) {
      // message sent successfully
      return redirect()->route('donation')->with('success', 'Transaksi berhasil dibuat. Pesan berhasil dikirim.');
    } else {
      // message sending failed
      return redirect()->route('donation')->with('error', 'Transaksi berhasil dibuat. Pesan gagal dikirim.');
    }

    return false;
  }


  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {

    Contributor::destroy($id);
    return redirect()->route('contributors.index')->with('success', 'Data berhasil dihapus.');
  }

  public function exportToPdf()
  {
    $contributors = Contributor::all();


    $pdf = app('dompdf.wrapper');
    $pdf->loadView('contributors', compact('contributors'));


    return $pdf->download('contributors.pdf');
  }
}
