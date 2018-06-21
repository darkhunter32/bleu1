<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class RfpController extends Controller

{
    
    function page ($slug)
        {
            $pages = TCG\Voyager\Models\Page::where('slug', '=', $slug)->firstOrFail()->translate(config('global.lang_trans')); 
            return $pages;  
        }
        public function filter(Request $request)
        {
            
           $First_Name = $request->input('First_Name');
            $Last_Name = $request->input('Last_Name');
            $Job_Title = $request->input('Job_Title');
            $Company_Name = $request->input('Company_Name');
            $Company_Adress = $request->input('Company_Adress');
            $City = $request->input('City');
            $Country_code = $request->input('Country_code');
            $Zip_Code = $request->input('Zip_Code');
            $Phone_Number = $request->input('Phone_Number');
            $Email = $request->input('Email');
            $PCity = $request->input('PCity');
            $Exhibition = $request->input('Exhibition');
            $Budget = $request->input('Budget');
            $Currency = $request->input('Currency');
            $details = $request->input('details');
            $file = $request->file('attachement');
            $captcha = $request->input('captcha');
            
            $data = array(
                'First_Name'=> $First_Name,
                'Last_Name'=> $Last_Name,
                'Job_Title'=> $Job_Title,
                'Company_Name'=> $Company_Name,
                'Company_Adress'=> $Company_Adress,
                'City'=> $City,
                'Country_code'=> $Country_code,
                'Zip_Code'=> $Zip_Code,
                'Phone_Number'=> $Phone_Number,
                'Email'=> $Email,
                'PCity'=> $PCity,
                'Exhibition'=> $Exhibition,
                'Budget'=> $Budget,
                'Currency'=> $Currency,
                'details'=> $details,
            );
            $error='';         

            //verify captcha
            $rules = ['captcha' => 'required|captcha'];
            $validator = \Validator::make(Input::all(), $rules);
            if ($validator->fails())
            {
                $error.='<div class="alert alert-danger" >
                The Captcha is Incorrect please <strong>Try again!!</strong>.
              </div>';
            }
            
            else
            {
                if($file){
                    $type=$file->getMimeType();
                    if(($type !='image/png')&&($type !='application/msword')&&($type !='application/pdf')&&($type !='image/jpeg')){
                    $error.='<div class="alert alert-danger" >
                    Please make sur that your file is an image or a pdf or a doc.</div>';goto error;}
                }
                if(\Mail::send('emails.send', compact('data'), function ($message) use($data, $file){    
                    $message->from($data['Email']);
                    $message->to('sihamessalek@gmail.com')->subject($data['First_Name']);
                    $message->to('sales@maghrebexpo.ma')->subject($data['First_Name']);
          if ($file)$message->attach($file->path(), ['as' => $file->getClientOriginalName(),'mime' => $file->getMimeType()]);
    
                })) $error.='<div class="alert alert-danger" >
                Your message wasnt sent please <strong>try again!</strong>.
              </div>';
                else {
                    $error.='<div class="alert alert-success" >
                <strong> Thank you</strong>, we received your message one of our commercials will contact you soon.
              </div>';
              //store file
              if ($file) $file->move('/home/maghrebesy/www/public/uploads/emails/', $file->getClientOriginalName());
              //insertion in database
              if ($file) $att='emails/'.$file->getClientOriginalName(); else $att="";
              DB::table('r_proposals')->insert(
                [
                'First_Name'=> $data['First_Name'],
                'Last_Name'=> $data['Last_Name'],
                'Job_Title'=> $data['Job_Title'],
                'Company_Name'=> $data['Company_Name'],
                'Company_Adress'=> $data['Company_Adress'],
                'City'=> $data['City'],
                'Country_code'=> $data['Country_code'],
                'Zip_Code'=> $data['Zip_Code'],
                'Phone_Number'=> $data['Phone_Number'],
                'Email'=> $data['Email'],
                'PCity'=> $data['PCity'],
                'Exhibition'=> $data['Exhibition'],
                'Budget'=> $data['Budget'],
                'Currency'=> $data['Currency'],
                'details'=> $data['details'],
                'attachement'=> $att,
                ]
            );
            }
            }
            //end verification captcha
           
 error:;

           $page=page('request_for_proposal'); 
          return view('request_for_proposal', ['error' => $error],compact('page'));
        
    }
}