<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Company_info;
use libphonenumber\PhoneNumberUtil;
use libphonenumber\NumberParseException;

$phoneNumberUtil = PhoneNumberUtil::getInstance();

class Company_infoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('backend_page.company_information.create_info');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|max:255',
            'number' => 'required|max:15',
            'address' => 'required|max:300',
            'company_logo1' => 'required|max:255',

            // 'phone' => [
            //     'required',
            //     function ($attribute, $value, $fail) use ($phoneNumberUtil) {
            //         try {
            //             $phoneNumber = $phoneNumberUtil->parse($value);
            //             if (!$phoneNumberUtil->isValidNumber($phoneNumber)) {
            //                 $fail('The phone number is not valid.');
            //             }
            //         } catch (NumberParseException $e) {
            //             $fail('The phone number is not valid.');
            //         }
            //     },
            // ],
        ]);

        $info = new Company_info;
        $info->email = $request->email;
        $info->number = $request->number;
        $info->address = $request->address;
        if($request->hasfile('company_logo1'))
        {
            $file = $request->file('company_logo1');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/logo/'),$image_name);
            $info->company_logo1 = $image_name;
        }
        if($request->hasfile('company_logo2'))
        {
            $file = $request->file('company_logo2');
            $extention = $file->getClientOriginalExtension();
            $image_name = time().'.'.$extention;
            $destinationPath = $file->move(public_path('frontend/img/logo/'),$image_name);
            $info->company_logo2 = $image_name;
        }
        $save = $info->save();
        if($save){
          return redirect()->back()->with('message','create data successfully!');
        }
        else{
          return redirect()->back()->with('message','Something is Wrong!');
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
}
