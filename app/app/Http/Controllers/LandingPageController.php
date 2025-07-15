<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;
use App\Models\AwardProgram;
use Illuminate\Support\Facades\Mail;
use App\Mail\GrcRegister;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use App\Models\Judge;
use Illuminate\Support\Facades\Session;
use Vinkla\Hashids\Facades\Hashids;
use App\Models\Award;
use App\Models\BoardMembers;
use App\Models\CustomAwardNominee;
use Illuminate\Support\Facades\DB;
use App\Models\Gallery;
use App\Models\SummitRegistration;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{

    public function showLandingIndex()
    {

        $judges = Judge::where('award_program_id', 5)->inRandomOrder()->get();
        return view('contents.voter.index')->with(['judges'=>$judges]);
    }

    public function showAboutTheAward()
    {
        
        return view('contents.voter.about_the_award');
    }

    public function showSectorsAndCategories()
    {  

        $current_award_program = AwardProgram::where('status', 1)->latest()->first();
        $categories = Category::where('award_program_id', $current_award_program->id)->get();

        foreach($categories as $category){
            $category->hashid = Hashids::connection('category')->encode($category->id);
            $category->sectors;
            foreach($category->sectors as $sector){
                $sector->awards;
                $sector->nominees;
            }
        }
        return view('contents.voter.sectors_categories')->with(['categories'=>$categories]);
    }

        public function AddNewNominee(Request $req)
    {
        $award_id = Hashids::connection('award')->decode($req->awards_id)[0];
        $awards = Award::where('id', $award_id)->first();
        if($awards)
        {
            $awards->nominees = array_merge(json_decode($awards->nominees, true)??[], $req->nominee_name);
            // $awards->save();
            CustomAwardNominee::create([ 
                'award_id' => $awards->id, 
                'nominee' => $req->nominee_name,
                'reason' => $req->reason
            ]);
               Session::flash('msg','Request send Successfully,  We review your request and update accordingly');
               return back();
        }
    }

    public function showTheOrganizers()
    {
        return view('contents.voter.organizers');
    }

    public function showContactUs()
    {
        return view('contents.voter.contact');
    }

    public function showVote(Request $req, $categories_id = null)
    {  
        $current_award_program = AwardProgram::where('status', 1)->latest()->first();
        $categories = Category::where(['award_program_id' => $current_award_program->id])->simplePaginate(1);
       foreach($categories  as $category){
        $category->hashid = Hashids::connection('category')->encode($category->id);
        // $sector = Sector::where(['category_id' => $category->id])->get();
        foreach($category->sectors as $sectors){
            $sectors->hashid = Hashids::connection('sector')->encode($sectors->id);
        foreach($sectors->awards as $sec){
            $sec->hashid = Hashids::connection('award')->encode($sec->id);
        }
    } 
    }




        // foreach($categories as $category){
           
            // foreach($category->sectors as $sector){
            //     $sector->hashid = Hashids::connection('sector')->encode($sector->id);
            // }
        // }

        // dd($category);
        return view('contents.voter.vote')->with(['categories'=>$categories]);
    }

    public function showJudges(){
        $judges = Judge::where('award_program_id',5)->inRandomOrder()->get();
        foreach($judges as $judge){
            $judge->hashid = Hashids::connection('email')->encode($judge->id);
        }

        
        return view('contents.voter.meet_judges')->with(['judges'=>$judges]);
    }

    public function showJudgingProcess()
    {
        return view('contents.voter.judging_process');
    }

    public function showSponsors()
    {
        return view('contents.voter.sponsors');
    }

    public function showFaqs()
    {
        return view('contents.voter.faqs');
    }

    public function showPolicy()
    {
        return view('contents.voter.privacy_policy');
    }
    public function showTc()
    {
        return view('contents.voter.t_c');
    }

    public function showPress()
    {
        return view('contents.voter.press_announcements');
    }

    public function showShortlistedNominees(){
        return view('contents.voter.shortlisted_nominees');
    }

    public function showWinners(){
        return view('contents.voter.winners');
    }
    public function showWinners2022(){
        return view('contents.voter.winners2');
    }
    public function showWinners2023(){
        return view('contents.voter.winners3');
    }
    public function showWinners2024(){
        return view('contents.voter.winners4');
    }
    public function showPicturesCategories(){
        $awardPrograms = [];
        $award_programs = AwardProgram::all();
        foreach($award_programs as $award_program){
            if($award_program->id == 5) continue;
            $gallery = Gallery::where(['award_program_id'=> $award_program->id,'type'=> 'image' ])->inRandomOrder()->limit(1)->first();
            $award_program->hashid = Hashids::connection('awardProgram')->encode($award_program->id);
            if ($gallery->count() > 0){
                $award_program->random_gallery = $gallery;
                $awardProgram = $award_program;
                
                array_push($awardPrograms, $awardProgram);
            }
        }
        // return response()->json($awardPrograms);
        return view('contents.voter.pictures_categories', ['award_programs' => $awardPrograms]);
    }

    public function showPictures($award_program){
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program)[0];
        $award_program = AwardProgram::where('id', $award_program_id)->first();
        // $gallery = Gallery::where('award_program_id', $award_program->id)->get();
        $award_program->gallery;
        // return response()->json($award_program);
        return view('contents.voter.pictures')->with(['award_program' => $award_program]);
    }

    public function showSummit(){
        return view('contents.voter.summit');
    } 
    public function showSummit2022(){
        return view('contents.voter.summit_2022');
    }
    public function showSummit2023(){
        return view('contents.voter.summit_2023');
    }
    public function showSummit2024(){
        return view('contents.voter.summit_2024');
    }
 
    public function Programme(){
        return view('contents.voter.programme');
    }

    

    public function SummitRegister(){
        return view('contents.voter.form_register');
    }

    public function SubmitRegisterForm(Request $req){

    
            $valid = validator::make($req->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|unique:summit_registrations',
                'phone' => 'required',
                'company' => 'required',

            ]);
          //  dd($valid->errors());
            if($valid->fails()){
                Session::flash('msg',$valid->errors()->first());
                return back()->withErrors($valid->errors())->withInput($req->all());
            }

            try{

          DB::beginTransaction();

            $data = [
                'first_name' => $req->first_name,
                'last_name' => $req->last_name,
                'email' => $req->email,
                'phone' => $req->phone,
                'company' => $req->company,
                'role' => $req->role,
                'award' =>$req->award,
                'reason' => $req->reason,
                'about_us' => $req->about_us,
                'expectation' =>  $req->expectation,
                'speaker' =>  $req->speaker,
            ];


            SummitRegistration::create($data);
            DB::commit();
            if($data){
                //  Mail::to(['festus.uwabor@morgansconsortium.com', 'michael.ozoudeh@morgansconsortium.com'])->send(new GrcRegister($data));
                Session::flash('msg','Registration Completed Successfully');
                return back();
            }

        }catch(\Exception $e){
        DB::rollback();
        Session::flash('msg','Somethin went wrong, try again!');
        return back()->withErrors($valid->errors())->withInput($req->all());
        }
        return back()->withErrors($valid->errors())->withInput($req->all());
          
    }


    public function showAboutUKAwards()
    {
        return view('contents.voter.grc_uk');
    }

    public function CodeOfConduct()
    {
        return view('contents.voter.code_of_conduct');
    }

    public function BoardMembers()
    {
        return view('contents.voter.board_members')
        ->with('boards', BoardMembers::get());
    }

    public function VisionMission()
    {
        return view('contents.voter.vision');
    }
}
