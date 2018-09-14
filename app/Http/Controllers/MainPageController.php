<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Message;
use App\Publication;
use Mail;
use DB;
use Purifier;

class MainPageController extends Controller
{
    public function getMining(){
        return view('pages.mining');
    }

    public function getDev(){
        return view('pages.dev');
    }

    public function getProspection(){
        return view('pages.prospection');
    }

    public function getOperations(){
        return view('pages.operations');
    }

    public function getProcessing(){
        return view('pages.processing');
    }

    public function getTesting(){
        return view('pages.testing');
    }

    public function getTagging(){
        return view('pages.tagging');
    }

    public function getProcessingTech(){
        return view('pages.processingTech');
    }

    public function getPacking(){
        return view('pages.packing');
    }

    public function getShipping(){
        return view('pages.shipping');
    }

    public function getTrading(){
        return view('pages.trading');
    }

    public function getProduct_port(){
        return view('pages.product_port');
    }

    public function getServices(){
        return view('pages.services');
    }

    public function getSustainability(){
        return view('pages.sustainability');
    }

    public function getQuality(){
        return view('pages.quality');
    }

    public function getSafety(){
        return view('pages.safety');
    }

    public function getEnv_sust(){
        return view('pages.env_sust');
    }

    public function getITRI(){
        return view('pages.ITRI');
    }

    public function getVisionMission(){
        return view('pages.vision_mission');
    }

    public function getCorporate_gov(){
        return view('pages.corporate_gov');
    }

    public function getLocation(){
        return view('pages.location');
    }

    public function getTeam(){
        return view('pages.team');
    }
    public function getManagement(){
        return view('pages.management');
    }

    public function getCareers(){
        return view('pages.careers');
    }

    public function getJobs(){
        return view('pages.jobs');
    }

    public function getApplication(){
        return view('pages.application');
    }

    public function getGTC(){
        return view('pages.GTC');
    }

    public function getLegal_notice(){
        return view('pages.legal_notice');
    }

    public function getPublication()
    {
        $pubs = Publication::orderBy('created_at', 'desc')->limit(5)->get();
        return view('pages.publication')->withPosts($pubs);
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function postContact(Request $request) {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'phone' => 'required|digits_between:10,20',
            'message' => 'min:10'
        ]);

        $msg = New Message;
        
        $msg->name = $request->name;
        $msg->email = $request->email;
        $msg->phone = $request->phone;
        $msg->readed = '0';
        $msg->message = Purifier::clean($request->message);

        $msg->save();

       /*Mail::send('auth.emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('hello@jayjay.com');
            $message->subject($data['subject']);
        });*/

        $request->session()->flash('success', 'Your message is successfully received. Thank you.');

        return redirect()->route('contact');
    }
}
