<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $port = Portfolio::latest()->paginate(10);
        return view('admin.portfolio.index',compact('port'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $port = Portfolio::all();
        return view('admin.portfolio.create',\compact('port'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $this->validate(
            $request,
            [
                'nama'          => 'required',
                'link'          => 'required',
                'gambar'        => 'required|mimes:jpg,png,jpeg|max:2048',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong!',
                'link.required' => 'Url tidak boleh kosong!',
                'gambar.required' => 'Gambar tidak boleh kosong!',

            ]
        );

        $gambar = $request->gambar;

        $port_gambar = time() . $gambar->getClientOriginalName();

        $port = Portfolio::create([
            'nama'      => $request->nama,
            'link'      => $request->link,
            'gambar'    => 'public/uploads/portfolio/' . $port_gambar,
        ]);

        $gambar->move('public/uploads/portfolio/', $port_gambar);

        return redirect()->route('portfolio.index')->with('toast_success', 'Portfolio Berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $port = Portfolio::find($id);

        return view('admin.portfolio.edit', compact('port'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
                'nama'          => 'required',
                'link'          => 'required',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong!',
                'link.required' => 'Nama tidak boleh kosong!',

            ]);

        $port = Portfolio::findorfail($id);

        if ($request->has('gambar')) {
            $gambar = $request->gambar;
            $gambar_port = time() . $gambar->getClientOriginalName();
            $gambar->move('public/uploads/skill/', $gambar_port);

            $port_data = [
                'nama' => $request->nama,
                'link' => $request->link,
                'gambar' => 'public/uploads/skill/' . $gambar_port
            ];
        } else {
            $port_data = [
                'nama' => $request->nama,
                'link' => $request->link,
            ];
        }

        $port->update($port_data);

        return redirect()->route('portfolio.index')->with('toast_success', 'Portfolio Berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $port = Portfolio::findorfail($id);

        $port->delete();

        return redirect()->route('porfolio.index');
    }
}
