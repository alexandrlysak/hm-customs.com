<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Page;
use App\Language;
use Illuminate\Http\Request;
use Session;
use App;

use Mail;

class PageController extends Controller
{

    private $data = [];
   
    public function indexAction($page = NULL)
    {
        $this->data['languages'] = Language::where(['status' => 1])->get();

        $currentLanguage = session('currentLanguage') ? session('currentLanguage') : 'kz';

        $langData = Language::where(['alpha2_code' => $currentLanguage])->first();
        if (!$langData) {
            abort(404);
        }

        $this->data['locale'] = $currentLanguage;

        if (!$page) {
            $pageData = Page::where(['url' => 'home', 'language' => $langData->id])->first();
            if ($pageData) {
                $this->data['pageData'] = $pageData;
                return view('frontend.home', $this->data);
            } else {
                abort(404);
            }
        } else {
            $pageData = Page::where(['url' => $page, 'language' => $langData->id])->first();
            
            if ($pageData) {
                $this->data['pageData'] = $pageData;
                return view('frontend.'.$page, $this->data);
            } else {
                abort(404);
            }
        }
    }

    public function postAjaxAction(Request $request)
    {
        switch ($request->action) {
            case 'sendManagerMessage':
                $title = $request->title;
                $email = $request->email;
                $callbackMessage = $request->message;


                if (!$title || !$email || !$callbackMessage) {
                    return [
                        'code' => 0,
                        'message' => 'Please enter all data'
                    ];
                }

                $data = ['title'=> $title, 'email' => $email, 'callbackMessage' => $callbackMessage];
                Mail::send(
                    'mail',
                    $data,
                    function($message) {
                    $message->to('customs@hm-customs.com', '')->subject('Callback message');
                    $message->from('customs@hm-customs.com', '');
                });
                

                return [
                    'code' => 1
                ];
                break;

            default:
                break;
        }
        

    }

    public function languageAction($language) {
        
        $languageData = Language::where(['alpha2_code' => $language])->first();
        
        if ($languageData) {
            session(['currentLanguage' => $languageData->alpha2_code]);
        } else {
            session(['currentLanguage' => 'en']);
        }

        return redirect('/');
    }
    

}