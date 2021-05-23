<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Smartphone;

class DocumentationController extends Controller
{
    public function index()
    {
        return view('docs.index');
    }

    public function tests()
    {
        $smartphone = new Smartphone();

        $testedSmartphones = $smartphone->with('RfTest', 'RpTest', 'RcTest')->where('is_tested', 1)->paginate(6);

        return view('docs.tests', ['smartphones' => $testedSmartphones]);
    }

    public function testsresults($id)
    {
        $smartphone = new Smartphone();

        $testedSmartphone = $smartphone->where('id', $id)->with('RfTest', 'RpTest', 'RcTest')->get()->first();

        $quality = $this->calculateQualityTest($testedSmartphone->final_test_result);

        return view('docs.testsresults', ['smartphone' => $testedSmartphone, 'quality' => $quality]);
    }

    public function calculateQualityTest($finalTestResult)
    {
        $resultQuality = 0;

        $qualisties = array(
            0 => 'Qualidade 0',
            20 => 'Qualidade 1 Relação pontuação base (1:16)',
            40 => 'Qualidade 2 Relação pontuação base (1:8)',
            80 => 'Qualidade 3 Relação pontuação base (1:4)',
            160 => 'Qualidade 4 Relação pontuação base (1:2)',
            320 => 'Qualidade 5 Relação pontuação base (1:1)',
        );

        foreach ($qualisties as $key => $quality) {
            if ($finalTestResult >= $key) {
                $resultQuality = $quality;
            }
        }

        return $resultQuality;
    }
}
