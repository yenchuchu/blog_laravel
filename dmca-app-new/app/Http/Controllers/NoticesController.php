<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PrepareNoticeRequest;

use App\Http\Requests;

use App\Provider;

use App\Notice;

use App\User;

use Illuminate\Contracts\Auth\Guard;

use App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Mail;

class NoticesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        parent::__construct();
    }
 
    public function index()
    {

        $notices =  $this->user->notices;

        return view('notices.index', ['notices' => $notices]);
//        return Notice::all();
//        return \Auth::user()->notices();
    }
 
    public function create()
    {
        $providers = Provider::lists('name', 'id');

        return view('notices.create', compact('providers'));
    }

    public function confirm(PrepareNoticeRequest $request)
    {
        $template = $this->compileDmcaTemplate($data = $request->all());
        session()->flash('dmca', $data);
        return view('notices.confirm', compact('template'));
    }

    private function compileDmcaTemplate($data)
    {
        $data = $data + [
            'name' => $this->user->name,
            'email' => $this->user->email
        ];

        return view()->file(app_path('Http/Templates/dmca.blade.php'), $data);

    }

    /**
     * @param Request $request
     */
    private function CreateNotice(Request $request)
    {


        $notice = session()->get('dmca') + ['template' => $request->input('template')];

//        $notices = Notice::open($data)->useTemplate($request->input('template'));

        $notice = $this->user->notices()->create($notice);

        return $notice;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $notice = $this->CreateNotice($request);

        session()->flash('notification', 'You are now logged in');

        Mail::queue(['text' => 'emails.dmca'], compact('notice'), function($message) use ($notice){
            $message->from($notice->getOwnerEmail())
                    ->to($notice->getRecipientEmail())
                    ->subject('DMCA Notice');
        });

        // check for failures
        if (Mail::failures()) {
            echo "k gui dc mail";
            return view()->file(app_path('Http/Templates/dmca.blade.php'), $data);
        }

        flash('Your DMCA notice has been delivered!');

        return redirect('notices');

//        return \Request::input('template');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $dataRequest = $request->all();

        $isRemoved = $dataRequest['content_removed'];
        $noticeId = $dataRequest['notice_id'];

        $check = Notice::findOrFail($noticeId)
            ->update(['content_removed' => $isRemoved]);

        if($check == true) {
            echo json_encode(['status' => 0, 'message' => 'OK']);
            exit;
        }

        echo json_encode(['status' => 1, 'message' => 'Save not success']);
        exit;

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
