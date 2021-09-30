<?php

namespace App\Http\Controllers;
use App\Models\carrs;
use Illuminate\Http\Request;

class Carscontrol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars=carrs::all();
        return view('cars.index',[
            'cars'=>$cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //getMimetype
        //guessExtension
        // $test=$request->file('image')->guessExtension();
        // dd($test);
        $request->validate([
            'image'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = time().'-'.$request->name.'.'.$request->file('image')->guessExtension();
        //dd($newImageName);
        $request->image->move(public_path('images'),$newImageName);

        $car=carrs::create([
            'name'=>$request->input('name'),
            'year'=>$request->input('year'),
            'description'=>$request->input('description'),
            'image_path'=>$newImageName
        ]);
        return redirect('/cars');
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
        //

        $car=carrs::find($id)->first();
        return view('cars.edit')->with('car',$car);
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
        //
        $car=carrs::where('id',$id)
        ->update([
            'name'=>$request->input('name'),
            'year'=>$request->input('year'),
            'description'=>$request->input('description')
        ]);
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $car=carrs::find($id)->first();
        $car->delete();
        return redirect('cars');
    }
}
