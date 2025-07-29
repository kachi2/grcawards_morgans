<?php

namespace App\Http\Controllers\Judges;

use App\Http\Controllers\Controller;
use App\Mail\JudgesRegister;
use App\Models\Admin;
use App\Models\AwardProgram;
use App\Models\Judge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Vinkla\Hashids\Facades\Hashids;

class UpdateAdminController extends Controller
{

    public function UpdateJudges(Request $request, $award_program)
    {
        $validated = Validator::make($request->all(),[
            'judge_fullname' => 'required',
            // 'judge_email' => 'required|unique:admins,email',
            'judge_password' => 'required|min:5',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);
        if($validated->fails()){
            $request->session()->flash('danger',$validated->errors()->first());
            return back()->withInput($request->all())->withErrors($validated);
        }
        $names = explode(' ', $request->fullname);
        // dd($request->fullname);
         $firstName = $names[0]??"Admin";
            $LastName = $names[1]??"Admin";

            
        // $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        $award_program_id = AwardProgram::where('status', 1)->first();
        if (isset($award_program_id)) {
                //  $password = substr(str_replace('','/, =, +, &, %, #, @, !', base64_encode(random_bytes(20), true)), 0,10);
                $judge = Judge::where('id', $request->judge_id)->first();
            try{
                if($judge->admin_id == null){
                    $admin = new Admin;
                    $admin->firstname = $firstName;
                    $admin->lastname = $LastName;
                    $admin->email = $request->judge_email;
                    $admin->role_id = 3;
                    $admin->password = bcrypt($request->judge_password);
                    $admin->save();
                    sleep(2);
                    $admin = Admin::latest()->first();
                    $judge->admin_id = $admin->id;   
                }
                $judge->name = $request->judge_fullname;
                $judge->award_program_id  = $award_program_id->id;
                $judge->position = $request->position; 
                $judge->profile = $request->profile; 
                $judge->email = $request->judge_email;
                $judge->password = bcrypt($request->judge_password);
                // ✅ Handle image upload
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('assets/images/judges');

                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0755, true);
                    }

                    $image->move($destinationPath, $imageName);
                    $judge->path_to_image = 'assets/images/judges/' . $imageName;
                }
                $judge->save();
                $data = [
                    'name' => $request->judge_fullname,
                    'email' => $request->judge_email,
                    'password' => $request->judge_password
                ];
                $admins = Admin::where('id', $judge->admin_id)->first();
                $admins->update(['email' => $request->judge_email, 'password' =>bcrypt($request->judge_password) ]);
                 Mail::to([$request->judge_email, 'no-reply@grcfincrimeawards.com'])->send(new JudgesRegister($data));

                $request->session()->flash('success', 'Judge Added Successfully');
                return redirect()->route('admin.get_judges', $award_program);

            }catch(\Exception $e) {
                $request->session()->flash('danger', $e->getMessage()); 
                return redirect()->route('admin.get_judges', $award_program);
            }
            return back();
        }

    }
}
