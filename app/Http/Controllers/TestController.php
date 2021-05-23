<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Smartphone;
use App\RfTest;
use App\RcTest;
use App\RpTest;
use Auth;

class TestController extends Controller
{
    public function list()
    {

    }

    public function addTest($id)
    {
        $smartphoneModel = DB::table('smartphones')->where('id', $id)->value('model');
        return view('tests.addtest', ['smartphoneModel' => $smartphoneModel, 'id' => $id]);
    }

    public function storeTest(Request $request, $id)
    {
        $rftest = new RfTest();
        $rctest = new RcTest();
        $rptest = new RpTest();
        $smartphone = Smartphone::find($id);

        $rftest->screen = $request->input('screen');
        $rftest->touchscreen = $request->input('touchscreen');
        $rftest->power_button = $request->input('power_button');
        $rftest->other_buttons = $request->input('other_buttons');
        $rftest->usb = $request->input('usb');
        $rftest->battery = $request->input('battery');
        $rftest->audio_output = $request->input('audio_output');
        $rftest->audio_input = $request->input('audio_input');
        $rftest->camera = $request->input('camera');
        $rftest->rf_average = array_sum($rftest->getAttributes());
        $rftest->smartphone_id = $id;

        $rptest->rp_single = $request->input('rp_single');
        $rptest->rp_multiple = $request->input('rp_multiple');
        $rptest->rp_average = array_sum($rptest->getAttributes()) / 2;
        $rptest->smartphone_id = $id;

        $rctest->rc_node = $request->input('rc_node');
        $rctest->rc_python = $request->input('rc_python');
        $rctest->rc_c = $request->input('rc_c');
        $rctest->rc_java = $request->input('rc_java');
        $rctest->rc_mysql = $request->input('rc_mysql');
        $rctest->rc_php = $request->input('rc_php');
        $rctest->arduino = $request->input('arduino');
        $rctest->rc_average = array_sum($rctest->getAttributes()) / (7 * 5);
        $rctest->smartphone_id = $id;

        $calcRf = $rptest->rp_average * $rctest->rc_average * (1 -   $rftest->rf_average);

        if ($rftest->save() && $rptest->save() && $rctest->save()) {
            $smartphone->is_tested = 1;
            $smartphone->final_test_result = $calcRf;
            $smartphone->save();
        }

        if ($rftest->save() && $rptest->save() && $rctest->save()) {
            return redirect('/admin');
        }
    }
}
