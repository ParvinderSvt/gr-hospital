<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\career;

class CareerController extends Controller
{
    public function career(Request $request)
    {
        $career = new career;

        // Handle the resume upload if there is one
        if ($request->hasFile('resume')) {
            $destinationPath = 'public/resume';
            $fileName = time() . '.' . $request->resume->extension();
            $request->resume->storeAs($destinationPath, $fileName);
            $career->resume = 'resume/' . $fileName;
        }

        // Assign other request data to the career instance
        $career->fill($request->except('resume'));

        // Save the career instance to the database
        $career->save();

        return redirect()->back()->with('success', 'Your career request has been successfully submitted. We will contact you soon !!');
    }
}
