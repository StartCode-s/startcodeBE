<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MainController extends Controller
{
    public function addFeedback(Request $request)
    {


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $thumbname = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/thumbReviews' . '/', $thumbname);



            DB::table('feedback')->insert([
                'name' => $request->name,
                'review' => $request->review,
                'thumb' => $thumbname,

            ]);
        }
        else {
            DB::table('feedback')->insert([
                'name' => $request->name,
                'review' => $request->review,

            ]);
        }



        return redirect()->back()->with(['message'=> 'Feedback added successfully','status'=>'info']);
    }
}
