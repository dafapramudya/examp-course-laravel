<?php

namespace App\Http\Controllers;

use App\Models\MasterCourse;
use Illuminate\Http\Request;

class MasterCourseController extends Controller
{
    public function index()
    {
        $dataCourse = MasterCourse::latest()->paginate(5);
      
        return view('course.index',compact('dataCourse'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('course.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
        ]);
      
        MasterCourse::create($request->all());
       
        return redirect()->route('course.index')
                        ->with('success', 'Course berhasil di buat');
    }
  
    // public function show(Mahasiswa $mahasiswa)
    // {
    //     return view('mahasiswa.show',compact('mahasiswa'));
    // }
  
    public function edit(MasterCourse $course)
    {
        return view('course.edit',compact('course'));
    }

    public function update(Request $request, MasterCourse $course)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
        ]);
      
        $course->update($request->all());
      
        return redirect()->route('course.index')
                        ->with('success','Course berhasil di update');
    }

    public function destroy(MasterCourse $course)
    {
        $course->delete();
       
        return redirect()->route('course.index')
                        ->with('success','Course berhasil di hapus');
    }
}
