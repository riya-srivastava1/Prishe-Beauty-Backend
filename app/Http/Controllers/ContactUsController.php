<?php

namespace App\Http\Controllers;

use App\Traits\Values;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Exports\ContactUsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;

class ContactUsController extends Controller
{
    use Values;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactus = ContactUs::orderByDesc('created_at')->get();
        return view('pages.contact-us', compact('contactus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "name"      => 'required:max:50',
                "email"     => 'required:max:50',
                "number"    => 'required:max:50',
                "city"  => 'required:max:50',
                "country"  => 'required:max:50',
            ]
        );
        if (!$validator->passes()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $contact_us =  new ContactUs();
            $contact_us->name = $request->name;
            $contact_us->email = $request->email;
            $contact_us->number = $request->number;
            $contact_us->gender = $request->gender;
            $contact_us->dob = $request->dob;
            $contact_us->city = $request->city;
            $contact_us->country = $request->country;
            $contact_us->message = $request->message;
            $contact_us->age_group = $request->age_group;
            $contact_us->save();

            return response()->json([
                'status' => true,
                'message' => 'success'
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
                // 'message' => $th->getMessage()
            ]);
        }
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
        //
    }

    public function exportContactUs(){
        return Excel::download(new ContactUsExport(), 'Contact-Us.xlsx');
    }
}
