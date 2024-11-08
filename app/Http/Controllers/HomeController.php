<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $students = Students::all();
        return view('home', compact('students'));
    }
    public function create() {
        return view('create');
    }
    
    public function store(Request $request) {
        $student = Students::create($request->all());
        if ($student) {
            return redirect()->route('home')->with('status', 'Berhasil menyimpan data')->with('type', 'Success');
        } else {
            return redirect()->back()->with('status', 'Gagal menyimpan data')->with('type', 'Danger');
        }
    }

    public function show($id) {  
        $student = Students::find($id);
        return view('detail', compact('student'));
    }

    public function edit($id) {
        $student = Students::find($id);
        return view('edit', compact('student'));
    }

    public function destroy($id) {
        $student = Students::find($id)->delete();
        session()->flash('status', 'Berhasil menghapus data');
        return redirect()->back();
    }

    public function update(Request $request, $id) {
        $student = Students::find($id)->update($request->all());
        if ($student) {
            return redirect()->route('home')->with('status', 'Berhasil mengubah data')->with('type', 'Success');
        } else {
            return redirect()->back()->with('status', 'Gagal mengubah data')->with('type', 'Danger');
        }
    }
}
