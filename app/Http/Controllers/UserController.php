<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DataTables;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = ' <a href="'.route("user.edit", $row->id).'"  class="edit btn btn-success btn-sm" >Edit</a>';
                    return $actionBtn;
                })
                ->addColumn('delete', function($row){
                    $actionBtn = '

                        <input type="submit" name="submit" value="Delete"  class="delete btn btn-danger btn-sm">';
                            return $actionBtn;
                        })
                
                ->rawColumns(['action','delete'])
                ->make(true);
    }

        return view ('user.index');
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
       $user = User::create($data);

       return redirect()->route('user.index');
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
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->only('name', 'email','password');
        $user = User::where('id', $id)->update($data);
        // dd($user);
        $user = User::find($id);

         return redirect()->route('user.index')->withSuccess('User Update SuccessFully...');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        $user->delete();
        return redirect()->route('user.index')->withSuccess('User Deleted SuccessFully...');
    

    }
}