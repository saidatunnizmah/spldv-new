<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class KuisController extends Controller
{
    protected $dataKuis = [
        1 => [
            'kuis' => "Bentuk Umum SPLDV",
            'jumlahSoal' => 6,
            'waktu' => 30,
            'keyAnswer' => [
                '1' => [
                    'soal1_1' => '1,2,5,6,7',
    
                    'soal2_1' => '',
                    'soal2_2' => '',
                    'soal2_3' => '4',
                    'soal2_4' => '',
                    'soal2_5' => ['15.000', '15000'],
                    'soal2_6' => '7',
                    'soal2_7' => '2',
                    'soal2_8' => ['17500', '17.500'],
    
                    'soal3_1' => '',
                    'soal3_2' => '',
                    'soal3_3' => '2',
                    'soal3_4' => '2',
                    'soal3_5' => ['26.000', '26000'],
                    'soal3_6' => '3',
                    'soal3_7' => '',
                    'soal3_8' => ['23000', '23.000'],
    
                    'soal4_1' => '',
                    'soal4_2' => '',
                    'soal4_3' => '',
                    'soal4_4' => '3',
                    'soal4_5' => ['102.000', '102000'],
                    'soal4_6' => '2',
                    'soal4_7' => '',
                    'soal4_8' => ['79000', '79.000'],
    
                    'soal5_1' => '',
                    'soal5_2' => '',
                    'soal5_3' => '3',
                    'soal5_4' => '2',
                    'soal5_5' => ['130.000', '130000'],
                    'soal5_6' => '2',
                    'soal5_7' => '',
                    'soal5_8' => ['80000', '80.000'],
    
                    'soal6_1' => '',
                    'soal6_2' => '',
                    'soal6_3' => '3',
                    'soal6_4' => '',
                    'soal6_5' => ['700.000', '700000'],
                    'soal6_6' => '2',
                    'soal6_7' => '2',
                    'soal6_8' => ['600000', '600.000'],
                ],
                '2' => [
                    'soal1_1' => '2,5,6,7',
    
                    'soal2_1' => '',
                    'soal2_2' => '',
                    'soal2_3' => '5',
                    'soal2_4' => '',
                    'soal2_5' => ['25.000', '25000'],
                    'soal2_6' => '4',
                    'soal2_7' => '2',
                    'soal2_8' => ['38000', '38.000'],
    
                    'soal3_1' => '',
                    'soal3_2' => '',
                    'soal3_3' => '4',
                    'soal3_4' => '',
                    'soal3_5' => ['65.000', '65000'],
                    'soal3_6' => '2',
                    'soal3_7' => '2',
                    'soal3_8' => ['70000', '70.000'],
    
                    'soal4_1' => '',
                    'soal4_2' => '',
                    'soal4_3' => '3',
                    'soal4_4' => '3',
                    'soal4_5' => ['420.000', '420000'],
                    'soal4_6' => '',
                    'soal4_7' => '',
                    'soal4_8' => ['140000', '140.000'],
    
                    'soal5_1' => '',
                    'soal5_2' => '',
                    'soal5_3' => '2',
                    'soal5_4' => '6',
                    'soal5_5' => ['320.000', '320000'],
                    'soal5_6' => '5',
                    'soal5_7' => '',
                    'soal5_8' => ['100000', '100.000'],
    
                    'soal6_1' => '',
                    'soal6_2' => '',
                    'soal6_3' => '2',
                    'soal6_4' => '',
                    'soal6_5' => ['40.000', '40000'],
                    'soal6_6' => '2',
                    'soal6_7' => '2',
                    'soal6_8' => ['65000', '65.000'],
                ],
                '3' => [
                    'soal1_1' => '1,3,5,8',
    
                    'soal2_1' => '',
                    'soal2_2' => '',
                    'soal2_3' => '6',
                    'soal2_4' => '2',
                    'soal2_5' => ['50.000', '50000'],
                    'soal2_6' => '3',
                    'soal2_7' => '',
                    'soal2_8' => ['25000', '25.000'],
    
                    'soal3_1' => '',
                    'soal3_2' => '',
                    'soal3_3' => '3',
                    'soal3_4' => '3',
                    'soal3_5' => ['117.000', '117000'],
                    'soal3_6' => '2',
                    'soal3_7' => '',
                    'soal3_8' => ['73000', '73.000'],
    
                    'soal4_1' => '',
                    'soal4_2' => '',
                    'soal4_3' => '2',
                    'soal4_4' => '2',
                    'soal4_5' => ['30.000', '30000'],
                    'soal4_6' => '3',
                    'soal4_7' => '5',
                    'soal4_8' => ['450000', '450.000'],
    
                    'soal5_1' => '',
                    'soal5_2' => '',
                    'soal5_3' => '2',
                    'soal5_4' => '-',
                    'soal5_5' => ['150.000', '150000'],
                    'soal5_6' => '',
                    'soal5_7' => '',
                    'soal5_8' => ['7150000', '7.150.000'],
    
                    'soal6_1' => '',
                    'soal6_2' => '',
                    'soal6_3' => '',
                    'soal6_4' => '-2',
                    'soal6_5' => ['0', '0'],
                    'soal6_6' => '2',
                    'soal6_7' => '-',
                    'soal6_8' => ['45', '45'],
                ]
            ]
        ],
        2 => [
            'kuis' => "Penyelesaian SPLDV",
            'jumlahSoal' => 10,
            'waktu' => 60,
            'keyAnswer' => []
        ],
        3 => [
            'kuis' => "Penerapan SPLDV",
            'jumlahSoal' => 4,
            'waktu' => 30,
            'keyAnswer' => [
                'soal1_1' => '10x',
                'soal1_2' => '5y',
                'soal1_3' => '200',
                'soal1_4' => '4x',
                'soal1_5' => '3y',
                'soal1_6' => '90',

                'soal2_1' => '2x',
                'soal2_2' => '3y',
                'soal2_3' => ['44000', '44.000'],
                'soal2_4' => 'x',
                'soal2_5' => 'y',
                'soal2_6' => ['18000', '18.000'],

                'soal3_1' => '2x',
                'soal3_2' => 'y',
                'soal3_3' => ['125000', '125.000'],
                'soal3_4' => '3x',
                'soal3_5' => '2y',
                'soal3_6' => ['210000', '210.000'],
                'soal3_30' => '335000',

                'soal4_1' => '3x',
                'soal4_2' => '3y',
                'soal4_3' => ['48000', '48.000'],
                'soal4_4' => '5x',
                'soal4_5' => '2y',
                'soal4_6' => ['50000', '50.000'],
                'soal4_30' => '40000',
            ]
        ],
        4 => [
            'kuis' => "Evaluasi",
            'jumlahSoal' => 10,
            'waktu' => 30,
            'keyAnswer' => [
                'soal1_1' => 'c',
                'soal2_1' => 'a',
                'soal3_1' => 'b',
                'soal4_1' => 'd',
                'soal5_1' => 'c',
                'soal6_1' => 'b',
                'soal7_1' => 'a',
                'soal8_1' => 'd',
                'soal9_1' => 'b',
                'soal10_1' => 'c',
            ]
        ]

    ];

    function index($jenis)
    {
        // dd(request()->route('jenis'));
        $data['jenis'] = $jenis;
        $data['title'] = $this->dataKuis[$jenis]['kuis'];
        if ($jenis < 3) {
            $data['setSoal'] = rand(1,3);
        }
        $data['jumlahSoal'] = $this->dataKuis[$jenis]['jumlahSoal'];
        $data['waktuPengerjaan'] = $this->dataKuis[$jenis]['waktu'];
        return view('siswa.kuis', $data);
    }

    function getSoal(Request $request)
    {
        $jenis = $request->query('jenis');
        $no = $request->query('no');
        $set = $request->query('set');

        if ($set != '') {
            return view('kuis.' . $jenis . '-' . $no . '_' . $set);
        }

        return view('kuis.' . $jenis . '-' . $no);
    }

    function checkAnswer(Request $request)
    {
        $siswaId = auth()->user()->siswa->id;
        $userAnswer = $request->userAnswer;
        $jenisKuis = $request->jenisKuis;
        $keyAnswer = $this->dataKuis[$jenisKuis]['keyAnswer'];
        $setSoal = $request->setSoal;

        $keys = array_keys($userAnswer);
        $benar = 0;

        if ($request->jenisKuis == '1') {
            for ($i = 1; $i <= 6; $i++) {
                if (
                    isset($userAnswer['soal' . $i . '_1']) && $userAnswer['soal' . $i . '_1'] != null &&
                    isset($userAnswer['soal' . $i . '_2']) && $userAnswer['soal' . $i . '_2'] != null
                ) {
                    $keyAnswer[$setSoal]['soal' . $i . '_1'] = $userAnswer['soal' . $i . '_1'];
                    $keyAnswer[$setSoal]['soal' . $i . '_2'] = $userAnswer['soal' . $i . '_2'];

                    $keyAnswer[$setSoal]['soal' . $i . '_3'] = $keyAnswer[$setSoal]['soal' . $i . '_3'] . $userAnswer['soal' . $i . '_1'];
                    $keyAnswer[$setSoal]['soal' . $i . '_4'] = $keyAnswer[$setSoal]['soal' . $i . '_4'] . $userAnswer['soal' . $i . '_2'];

                    $keyAnswer[$setSoal]['soal' . $i . '_6'] = $keyAnswer[$setSoal]['soal' . $i . '_6'] . $userAnswer['soal' . $i . '_1'];
                    $keyAnswer[$setSoal]['soal' . $i . '_7'] = $keyAnswer[$setSoal]['soal' . $i . '_7'] . $userAnswer['soal' . $i . '_2'];
                }
            }
        }

        if ($request->jenisKuis == '2') {
            if ($setSoal == '1') {
                // Keyanswer 1-4
                $xy = [
                    [4, 5, 28, 2, -3, -8, 2, 4],
                    [6, -3, 15, 4, 1, 7, 2, -1],
                    [3, 2, 8, 2, 3, 12, 0, 4],
                    [3, 4, -7, 2, 1, -3, -1, -1],
                ];
                // Keyanswer 6-8
                $xy_68= [
                    [7, -4, 19, 5, 2, 33, 5, 4],
                    [4, 6, 26, 2, 4, 16, 2, 3],
                    [8, -3, -7, 4, 2, 14, 1, 5]
                ];
                // Keyanswer 9-10
                $xy_910= [
                    [7,3,-55,0,5,-2,0,2,4,9],
                    [11,3,-53,0,2,-5,7,0,4,3]
                ];
            }elseif ($setSoal == '2') {
                // Keyanswer 1-4
                $xy = [
                    [4, 2, 14, 4, 4, 16, 3, -1],
                    [3, 2, 13, 1, -9, -15, 3, 2],
                    [3, 2, 22, 5, -1, 28, 6, 2],
                    [6, -2, 6, 4, 1, -25, 4, 9],
                ];
                // Keyanswer 6-8
                $xy_68= [
                    [1, 1, 7, 2, -1, -1, 2, 5],
                    [2, 1, 6, 3, -1, -1, 1, 4],
                    [1, -1, -5, 3, 1, 13, 2, 7]
                ];
                // Keyanswer 9-10
                $xy_910= [
                    [4, 4, -44, 0, 7, -2, 0, 23, 5, 6],
                    [6, -5, -7, 0, 1, 2, -13, 0, 3, 5]
                ];
            }elseif ($setSoal=='3') {
                // Keyanswer 1-4
                $xy = [
                    [8, 8, 80, 7, 9, 72, 9, 1],
                    [4, -4, 28, 3, 3, 27, 8, 1],
                    [5, 5, 40, 6, 4, 46, 7, 1],
                    [2, 9, 27, 2, 7, 25, 9, 1],
                ];
                // Keyanswer 6-8
                $xy_68= [
                    [4, -4, -4, 8, 8, 40, 2, 3],
                    [7, 3, 10, 5, 5, 10, 1, 1],
                    [2, 3, 25, 4, -4, 20, 8, 3]
                ];
                // Keyanswer 9-10
                $xy_910= [
                    [-7, 6, -2, 0, 9, -1, 0, 63, 8, 9],
                    [5, 5, -55, 0, 2, 7, -47, 0, 6, 5]
                ];
            }


            // Set default answer (-)
            for ($i = 1; $i <= 10; $i++) {
                for ($j = 1; $j <= 25; $j++) {
                    $keyAnswer['soal' . $i . '_' . $j] = '-';
                    if ($i == 5 && $j == 21) {
                        break;
                    }
                    if ($i >= 9 && $j ==24) {
                        break;
                    }
                }
            }

            // Set keyanswer 1-4
            for ($i = 1; $i <= 4; $i++) {
                if (
                    isset($userAnswer['soal' . $i . '_2']) && $userAnswer['soal' . $i . '_2'] != null &&
                    isset($userAnswer['soal' . $i . '_3']) && $userAnswer['soal' . $i . '_3'] != null
                ) {
                    $keyAnswer['soal' . $i . '_2'] = $userAnswer['soal' . $i . '_2'];
                    $keyAnswer['soal' . $i . '_3'] = $userAnswer['soal' . $i . '_3'];

                    if ((int) $userAnswer['soal' . $i . '_2'] && (int) $userAnswer['soal' . $i . '_3']) {
                        $x1 = $userAnswer['soal' . $i . '_2'] * $xy[$i - 1][0];
                        $y1 = $userAnswer['soal' . $i . '_2'] * $xy[$i - 1][1];
                        $c1 = $userAnswer['soal' . $i . '_2'] * $xy[$i - 1][2];
                        $x2 = $userAnswer['soal' . $i . '_3'] * $xy[$i - 1][3];
                        $y2 = $userAnswer['soal' . $i . '_3'] * $xy[$i - 1][4];
                        $c2 = $userAnswer['soal' . $i . '_3'] * $xy[$i - 1][5];

                        $keyAnswer['soal' . $i . '_4'] = $x1 . 'x';
                        $keyAnswer['soal' . $i . '_5'] = $y1 . 'y';
                        $keyAnswer['soal' . $i . '_6'] = $c1;
                        $keyAnswer['soal' . $i . '_7'] = $x2 . 'x';
                        $keyAnswer['soal' . $i . '_8'] = $y2 . 'y';
                        $keyAnswer['soal' . $i . '_9'] = $c2;

                        if ($userAnswer['soal' . $i . '_1'] == 'x') {
                            $keyAnswer['soal' . $i . '_1'] = 'x';
                            $keyAnswer['soal' . $i . '_10'] = $y1 - $y2;
                        } else {
                            $keyAnswer['soal' . $i . '_1'] = 'y';
                            $keyAnswer['soal' . $i . '_10'] = $x1 - $x2;
                        }
                        $keyAnswer['soal' . $i . '_11'] = $c1 - $c2;
                        $keyAnswer['soal' . $i . '_12'] = $keyAnswer['soal' . $i . '_11'] / $keyAnswer['soal' . $i . '_10'];
                    }
                }

                if (
                    isset($userAnswer['soal' . $i . '_13']) && $userAnswer['soal' . $i . '_14'] != null &&
                    isset($userAnswer['soal' . $i . '_13']) && $userAnswer['soal' . $i . '_14'] != null
                ) {
                    $keyAnswer['soal' . $i . '_13'] = $userAnswer['soal' . $i . '_13'];
                    $keyAnswer['soal' . $i . '_14'] = $userAnswer['soal' . $i . '_14'];

                    if ((int) $userAnswer['soal' . $i . '_13'] && (int) $userAnswer['soal' . $i . '_14']) {
                        $x1 = $userAnswer['soal' . $i . '_13'] * $xy[$i - 1][0];
                        $y1 = $userAnswer['soal' . $i . '_13'] * $xy[$i - 1][1];
                        $c1 = $userAnswer['soal' . $i . '_13'] * $xy[$i - 1][2];
                        $x2 = $userAnswer['soal' . $i . '_14'] * $xy[$i - 1][3];
                        $y2 = $userAnswer['soal' . $i . '_14'] * $xy[$i - 1][4];
                        $c2 = $userAnswer['soal' . $i . '_14'] * $xy[$i - 1][5];

                        $keyAnswer['soal' . $i . '_15'] = $x1 . 'x';
                        $keyAnswer['soal' . $i . '_16'] = $y1 . 'y';
                        $keyAnswer['soal' . $i . '_17'] = $c1;
                        $keyAnswer['soal' . $i . '_18'] = $x2 . 'x';
                        $keyAnswer['soal' . $i . '_19'] = $y2 . 'y';
                        $keyAnswer['soal' . $i . '_20'] = $c2;

                        if ($userAnswer['soal' . $i . '_1'] == 'x') {
                            $keyAnswer['soal' . $i . '_21'] = $x1 - $x2;
                        } else {
                            $keyAnswer['soal' . $i . '_21'] = $y1 - $y2;
                        }
                        $keyAnswer['soal' . $i . '_22'] = $c1 - $c2;
                        $keyAnswer['soal' . $i . '_23'] = $keyAnswer['soal' . $i . '_22'] / $keyAnswer['soal' . $i . '_21'];
                    }
                }

                $keyAnswer['soal' . $i . '_24'] = $xy[$i - 1][6];
                $keyAnswer['soal' . $i . '_25'] = $xy[$i - 1][7];
            }

            // Set keyanswer 5
            if (
                isset($userAnswer['soal5_2']) && $userAnswer['soal5_2'] != null &&
                isset($userAnswer['soal5_3']) && $userAnswer['soal5_3'] != null
            ) {
                $keyAnswer['soal5_2'] = $userAnswer['soal5_2'];
                $keyAnswer['soal5_3'] = $userAnswer['soal5_3'];

                if ((int) $userAnswer['soal5_2'] && (int) $userAnswer['soal5_3']) {
                    $x1 = $userAnswer['soal5_2'] * 2;
                    $y1 = $userAnswer['soal5_2'] * 1;
                    $z1 = $userAnswer['soal5_2'] * 2;
                    $c1 = $userAnswer['soal5_2'] * 0;
                    $x2 = $userAnswer['soal5_3'] * 1;
                    $y2 = $userAnswer['soal5_3'] * 1;
                    $z2 = $userAnswer['soal5_3'] * 2;
                    $c2 = $userAnswer['soal5_3'] * 0;

                    $keyAnswer['soal5_4'] = ($x1 > 1 ? $x1 . 'x' : 'x') . '+' . ($y1 > 1 ? $y1 . 'y' : 'y') . $z1;
                    $keyAnswer['soal5_5'] = 0;
                    $keyAnswer['soal5_6'] = ($x2 > 1 ? $x2 . 'x' : 'x') . '+' . ($y2 > 1 ? $y2 . 'y' : 'y') . $z2;
                    $keyAnswer['soal5_7'] = 0;

                    if ($userAnswer['soal5_1'] == 'x') {
                        $keyAnswer['soal5_1'] = 'x';
                        $keyAnswer['soal5_8'] = $y1 - $y2;
                    } else {
                        $keyAnswer['soal5_1'] = 'y';
                        $keyAnswer['soal5_8'] = $x1 - $x2;
                    }
                    $keyAnswer['soal5_9'] = $c1 - $c2;
                    $keyAnswer['soal5_10'] = $keyAnswer['soal5_9'] / $keyAnswer['soal5_8'];
                }
            }
            if (
                isset($userAnswer['soal5_11']) && $userAnswer['soal5_11'] != null &&
                isset($userAnswer['soal5_12']) && $userAnswer['soal5_12'] != null
            ) {
                $keyAnswer['soal5_11'] = $userAnswer['soal5_11'];
                $keyAnswer['soal5_12'] = $userAnswer['soal5_12'];

                if ((int) $userAnswer['soal5_11'] && (int) $userAnswer['soal5_12']) {
                    $x1 = $userAnswer['soal5_11'] * 2;
                    $y1 = $userAnswer['soal5_11'] * 1;
                    $z1 = $userAnswer['soal5_11'] * 2;
                    $c1 = $userAnswer['soal5_11'] * 0;
                    $x2 = $userAnswer['soal5_12'] * 1;
                    $y2 = $userAnswer['soal5_12'] * 1;
                    $z2 = $userAnswer['soal5_12'] * 2;
                    $c2 = $userAnswer['soal5_12'] * 0;

                    $keyAnswer['soal5_13'] = ($x1 > 1 ? $x1 . 'x' : 'x') . '+' . ($y1 > 1 ? $y1 . 'y' : 'y') . $z1;
                    $keyAnswer['soal5_14'] = 0;
                    $keyAnswer['soal5_15'] = ($x2 > 1 ? $x2 . 'x' : 'x') . '+' . ($y2 > 1 ? $y2 . 'y' : 'y') . $z2;
                    $keyAnswer['soal5_16'] = 0;

                    if ($userAnswer['soal5_1'] == 'x') {
                        $keyAnswer['soal5_17'] = $x1 - $x2;
                    } else {
                        $keyAnswer['soal5_17'] = $y1 - $y2;
                    }
                    $keyAnswer['soal5_18'] = $c1 - $c2;
                    $keyAnswer['soal5_19'] = $keyAnswer['soal5_18'] / $keyAnswer['soal5_17'];
                }
            }
            $keyAnswer['soal5_20'] = 0;
            $keyAnswer['soal5_21'] = -2;

            // Set Key Answer 6-8
            for ($i=6; $i <= 8; $i++) { 
                $keyAnswer['soal'.$i.'_1'] = $userAnswer['soal'.$i.'_1'];
                $keyAnswer['soal'.$i.'_2'] = $userAnswer['soal'.$i.'_2'];
                $keyAnswer['soal'.$i.'_16'] = $userAnswer['soal'.$i.'_16'];

                // Pers. 1
                if ($userAnswer['soal'.$i.'_1']=='1') {
                    $keyAnswer['soal'.$i.'_3'] = $xy_68[$i-6][0].'x';
                    $keyAnswer['soal'.$i.'_4'] = $xy_68[$i-6][1].'y';
                    $keyAnswer['soal'.$i.'_5'] = $xy_68[$i-6][2];
                    
                    // Pers. 1 Var. x
                    if ($userAnswer['soal'.$i.'_2']=='x') {
                        if ($xy_68[$i-6][1] == 1) {
                            $y1 = '-y';
                        }
                        elseif ($xy_68[$i-6][1] == -1) {
                            $y1 = '+y';
                        }
                        elseif ($xy_68[$i-6][1] > 0) {
                            $y1 = '-'.$xy_68[$i-6][1].'y';
                        }else{
                            $y1 = '+'. $xy_68[$i-6][1]*-1 . 'y';
                        }
                        
                        $keyAnswer['soal'.$i.'_6'] = '\\frac{'.$xy_68[$i-6][2].$y1.'}{'.$xy_68[$i-6][0].'}';
    
                        $keyAnswer['soal'.$i.'_7'] = $xy_68[$i-6][3].'\\left('.$keyAnswer['soal'.$i.'_6'].'\\right)' . $xy_68[$i-6][4]>0 ? '+'.$xy_68[$i-6][4] : $xy_68[$i-6][4] .'y';
                        
                        if ($setSoal == '1') {
                            if ($i==6) {
                                $keyAnswer['soal'.$i.'_9'] = '\\frac{95+20y}{7}+2y';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{95+34y}{7}';
                                $keyAnswer['soal'.$i.'_13'] = '34';
                                $keyAnswer['soal'.$i.'_14'] = '136';
                            }elseif ($i==7) {
                                $keyAnswer['soal'.$i.'_9'] = '\\frac{52-12y}{4}+4y';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{52+4y}{4}';
                                $keyAnswer['soal'.$i.'_13'] = '4';
                                $keyAnswer['soal'.$i.'_14'] = '12';
                            }elseif ($i==8) {
                                $keyAnswer['soal'.$i.'_9'] = '\\frac{-28+12y}{8}+2y';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{-28+28y}{8}';
                                $keyAnswer['soal'.$i.'_13'] = '28';
                                $keyAnswer['soal'.$i.'_14'] = '140';
                            }
                        }elseif ($setSoal == '2') {
                            if ($i==6) {
                                $keyAnswer['soal'.$i.'_3'] = 'x';
                                $keyAnswer['soal'.$i.'_4'] = 'y';
                                $keyAnswer['soal'.$i.'_6'] = '7-y';
                                $keyAnswer['soal'.$i.'_7'] = '2\\left(7-y\\right)-y';
                                $keyAnswer['soal'.$i.'_9'] = '14-2y-y';
                                $keyAnswer['soal'.$i.'_11'] = '14-3y';
                                $keyAnswer['soal'.$i.'_13'] = '-3';
                                $keyAnswer['soal'.$i.'_14'] = '-15';
                            }elseif ($i==7) {
                                $keyAnswer['soal'.$i.'_3'] = '2x';
                                $keyAnswer['soal'.$i.'_4'] = 'y';
                                $keyAnswer['soal'.$i.'_6'] = '\\frac{6-y}{2}';
                                $keyAnswer['soal'.$i.'_7'] = '3\\left(\\frac{6-y}{2}\\right)-y';
                                $keyAnswer['soal'.$i.'_9'] = '\\frac{18-3y}{2}-y';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{18-5y}{2}';
                                $keyAnswer['soal'.$i.'_13'] = '-5';
                                $keyAnswer['soal'.$i.'_14'] = '-20';
                            }elseif ($i==8) {
                                $keyAnswer['soal'.$i.'_3'] = 'x';
                                $keyAnswer['soal'.$i.'_4'] = '-y';
                                $keyAnswer['soal'.$i.'_6'] = '-5+y';
                                $keyAnswer['soal'.$i.'_7'] = '3\\left(-5+y\\right)+y';
                                $keyAnswer['soal'.$i.'_9'] = '-15+3y+y';
                                $keyAnswer['soal'.$i.'_11'] = '4y-15';
                                $keyAnswer['soal'.$i.'_13'] = '4';
                                $keyAnswer['soal'.$i.'_14'] = '28';
                            }
                        }elseif ($setSoal == '3') {
                            if ($i==6) {
                                $keyAnswer['soal'.$i.'_9'] = '\\frac{-32+32y}{4}+8y';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{64y-32}{4}';
                                $keyAnswer['soal'.$i.'_13'] = '64';
                                $keyAnswer['soal'.$i.'_14'] = '192';
                            }elseif ($i==7) {
                                $keyAnswer['soal'.$i.'_9'] = '\\frac{50-15y}{7}+5y';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{20y+50}{7}';
                                $keyAnswer['soal'.$i.'_13'] = '20';
                                $keyAnswer['soal'.$i.'_14'] = '20';
                            }elseif ($i==8) {
                                $keyAnswer['soal'.$i.'_9'] = '\\frac{100-12y}{2}-4y';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{100-20y}{2}';
                                $keyAnswer['soal'.$i.'_13'] = '-20';
                                $keyAnswer['soal'.$i.'_14'] = '-60';
                            }
                        }
                        
                        $keyAnswer['soal'.$i.'_8'] = $xy_68[$i-6][5];

                        $keyAnswer['soal'.$i.'_10'] = $xy_68[$i-6][5];
                        
                        $keyAnswer['soal'.$i.'_12'] = $xy_68[$i-6][5];
                            
                        $keyAnswer['soal'.$i.'_15'] = $xy_68[$i-6][7];
                        
                        // Terapan 1
                        if ($userAnswer['soal'.$i.'_16']=='1') {
                            if ($xy_68[$i-6][1]>0) {
                                $y = '+'.$xy_68[$i-6][1];
                            }else{
                                $y = $xy_68[$i-6][1];
                            }
                            $keyAnswer['soal'.$i.'_17'] = $xy_68[$i-6][0].'x'.$y.'\\left('.$xy_68[$i-6][7].'\\right)';
                            $keyAnswer['soal'.$i.'_18'] = $xy_68[$i-6][2];
    
                            $keyAnswer['soal'.$i.'_19'] = $xy_68[$i-6][0].'x'.$xy_68[$i-6][1]*$xy_68[$i-6][7] > 0 ? '+'.$xy_68[$i-6][1]*$xy_68[$i-6][7] : $xy_68[$i-6][1]*$xy_68[$i-6][7];
                            $keyAnswer['soal'.$i.'_20'] = $xy_68[$i-6][2];
                            
                            $keyAnswer['soal'.$i.'_21'] = $xy_68[$i-6][0];
                            $keyAnswer['soal'.$i.'_22'] = $xy_68[$i-6][1]*$xy_68[$i-6][7] > 0 ? $xy_68[$i-6][2] - $xy_68[$i-6][1]*$xy_68[$i-6][7] : $xy_68[$i-6][2] + $xy_68[$i-6][1]*$xy_68[$i-6][7];
                            
                            $keyAnswer['soal'.$i.'_23'] = $xy_68[$i-6][6];

                            if ($setSoal == '2') {
                                if ($i == '6') {
                                    $keyAnswer['soal'.$i.'_17'] = 'x+\\left(5\\right)';
                                    $keyAnswer['soal'.$i.'_19'] = 'x+5';
                                }elseif ($i == '7') {
                                    $keyAnswer['soal'.$i.'_17'] = '2x+\\left(4\\right)';
                                    $keyAnswer['soal'.$i.'_19'] = '2x+4';
                                }elseif ($i == '8') {
                                    $keyAnswer['soal'.$i.'_17'] = 'x-\\left(7\\right)';
                                    $keyAnswer['soal'.$i.'_19'] = 'x-7';
                                }
                            }
                            
                        }else{ // Terapan 2
                            if ($xy_68[$i-6][4]>0) {
                                $y = '+'.$xy_68[$i-6][4];
                            }else{
                                $y = $xy_68[$i-6][4];
                            }
                            $keyAnswer['soal'.$i.'_17'] = $xy_68[$i-6][3].'x'.$y.'\\left('.$xy_68[$i-6][7].'\\right)';
                            $keyAnswer['soal'.$i.'_18'] = $xy_68[$i-6][5];
    
                            $keyAnswer['soal'.$i.'_19'] = $xy_68[$i-6][3].'x'.$xy_68[$i-6][4]*$xy_68[$i-6][7] > 0 ? '+'.$xy_68[$i-6][4]*$xy_68[$i-6][7] : $xy_68[$i-6][4]*$xy_68[$i-6][7];
                            $keyAnswer['soal'.$i.'_20'] = $xy_68[$i-6][5];
                            
                            $keyAnswer['soal'.$i.'_21'] = $xy_68[$i-6][3];
                            $keyAnswer['soal'.$i.'_22'] = $xy_68[$i-6][4]*$xy_68[$i-6][7] > 0 ? $xy_68[$i-6][5] - $xy_68[$i-6][4]*$xy_68[$i-6][7] : $xy_68[$i-6][5] + $xy_68[$i-6][4]*$xy_68[$i-6][7];
                            
                            $keyAnswer['soal'.$i.'_23'] = $xy_68[$i-6][6];

                            if ($setSoal == '2') {
                                if ($i == '6') {
                                    $keyAnswer['soal'.$i.'_17'] = '2x-\\left(5\\right)';
                                    $keyAnswer['soal'.$i.'_19'] = '2x-5';
                                }elseif ($i == '7') {
                                    $keyAnswer['soal'.$i.'_17'] = '3x-\\left(4\\right)';
                                    $keyAnswer['soal'.$i.'_19'] = '3x-4';
                                }elseif ($i == '8') {
                                    $keyAnswer['soal'.$i.'_17'] = '3x+\\left(7\\right)';
                                    $keyAnswer['soal'.$i.'_19'] = '3x+7';
                                }
                            }

                        }
                    }else{ //Pers.1 Var. y
                        if ($xy_68[$i-6][0] == 1) {
                            $x1 = '-x';
                        }
                        elseif ($xy_68[$i-6][0] == -1) {
                            $x1 = '+x';
                        }
                        elseif ($xy_68[$i-6][0] > 0) {
                            $x1 = '-'.$xy_68[$i-6][0].'x';
                        }else{
                            $x1 = '+'. $xy_68[$i-6][0]*-1 . 'x';
                        }

                        $keyAnswer['soal'.$i.'_6'] = '\\frac{'.$xy_68[$i-6][2].$x1.'}{'.$xy_68[$i-6][1].'}';
    
                        $keyAnswer['soal'.$i.'_7'] = $xy_68[$i-6][3].'x'.$xy_68[$i-6][4]>0 ? '+'.$xy_68[$i-6][4] : $xy_68[$i-6][4] .'\\left(\\'.$keyAnswer['soal'.$i.'_6'].'\\right)';
                        $keyAnswer['soal'.$i.'_8'] = $xy_68[$i-6][5];
                        
                        if ($setSoal=='1') {
                            if ($i==6) {
                                $keyAnswer['soal'.$i.'_9'] = '5x+\\frac{38-14x}{-4}';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{-34x+38}{-4}';
                                $keyAnswer['soal'.$i.'_13'] = '-34';
                                $keyAnswer['soal'.$i.'_14'] = '-170';
                            }elseif ($i==7) {
                                $keyAnswer['soal'.$i.'_9'] = '2x+\\frac{104-16x}{6}';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{104-4x}{6';
                                $keyAnswer['soal'.$i.'_13'] = '-4';
                                $keyAnswer['soal'.$i.'_14'] = '-8';
                            }elseif ($i==8) {
                                $keyAnswer['soal'.$i.'_9'] = '4x-\\frac{14-16x}{-3}';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{-14-28x}{-3}';
                                $keyAnswer['soal'.$i.'_13'] = '-28';
                                $keyAnswer['soal'.$i.'_14'] = '-28';
                            }
                        }elseif ($setSoal=='2') {
                            if ($i==6) {
                                $keyAnswer['soal'.$i.'_3'] = 'x';
                                $keyAnswer['soal'.$i.'_4'] = 'y';
                                $keyAnswer['soal'.$i.'_6'] = '7-x';
                                $keyAnswer['soal'.$i.'_7'] = '2x-\\left(7-x\\right)';
                                $keyAnswer['soal'.$i.'_9'] = '2x-7+x';
                                $keyAnswer['soal'.$i.'_11'] = '3x-7';
                                $keyAnswer['soal'.$i.'_13'] = '3';
                                $keyAnswer['soal'.$i.'_14'] = '6';
                            }elseif ($i==7) {
                                $keyAnswer['soal'.$i.'_3'] = '2x';
                                $keyAnswer['soal'.$i.'_4'] = 'y';
                                $keyAnswer['soal'.$i.'_6'] = '6-2x';
                                $keyAnswer['soal'.$i.'_7'] = '3x-\\left(6-2x\\right)';
                                $keyAnswer['soal'.$i.'_9'] = '3x-6+2x';
                                $keyAnswer['soal'.$i.'_11'] = '5x-6';
                                $keyAnswer['soal'.$i.'_13'] = '5';
                                $keyAnswer['soal'.$i.'_14'] = '5';
                            }elseif ($i==8) {
                                $keyAnswer['soal'.$i.'_3'] = 'x';
                                $keyAnswer['soal'.$i.'_4'] = '-y';
                                $keyAnswer['soal'.$i.'_6'] = '5+x';
                                $keyAnswer['soal'.$i.'_7'] = '3x+\\left(5+x\\right)';
                                $keyAnswer['soal'.$i.'_9'] = '3x+5+x';
                                $keyAnswer['soal'.$i.'_11'] = '4x+5';
                                $keyAnswer['soal'.$i.'_13'] = '4';
                                $keyAnswer['soal'.$i.'_14'] = '8';
                            }
                            
                        }elseif ($setSoal=='3') {
                            if ($i==6) {
                                $keyAnswer['soal'.$i.'_9'] = '8x-\\frac{32-32x}{-4}';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{-64x-32}{-4}';
                                $keyAnswer['soal'.$i.'_13'] = '-64';
                                $keyAnswer['soal'.$i.'_14'] = '-128';
                            }elseif ($i==7) {
                                $keyAnswer['soal'.$i.'_9'] = '5x+\\frac{50-35x}{3}';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{50-20x}{3}';
                                $keyAnswer['soal'.$i.'_13'] = '-20';
                                $keyAnswer['soal'.$i.'_14'] = '-20';
                            }elseif ($i==8) {
                                $keyAnswer['soal'.$i.'_9'] = '4x-\\frac{100+8x}{3}';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{20x-100}{3}';
                                $keyAnswer['soal'.$i.'_13'] = '20';
                                $keyAnswer['soal'.$i.'_14'] = '160';
                            }
                            
                        }
                        
                        $keyAnswer['soal'.$i.'_10'] = $xy_68[$i-6][5];
                        
                        $keyAnswer['soal'.$i.'_12'] = $xy_68[$i-6][5];
                            
                        $keyAnswer['soal'.$i.'_15'] = $xy_68[$i-6][6];
                        
                        // Pers 1. Var. y Terapan 1
                        if ($userAnswer['soal'.$i.'_16']=='1') {
                            if ($xy_68[$i-6][1]>0) {
                                $y = '+'.$xy_68[$i-6][1];
                            }else{
                                $y = $xy_68[$i-6][1];
                            }
                            $keyAnswer['soal'.$i.'_17'] = $xy_68[$i-6][0].'\\left('.$xy_68[$i-6][6].'\\right)'.$y.'y';
                            $keyAnswer['soal'.$i.'_18'] = $xy_68[$i-6][2];
    
                            $keyAnswer['soal'.$i.'_19'] = $xy_68[$i-6][0]*$xy_68[$i-6][6].$y.'y';
                            $keyAnswer['soal'.$i.'_20'] = $xy_68[$i-6][2];
                            
                            $keyAnswer['soal'.$i.'_21'] = $xy_68[$i-6][1];
                            $keyAnswer['soal'.$i.'_22'] = $xy_68[$i-6][0]*$xy_68[$i-6][6]>0 ? $xy_68[$i-6][2]-$xy_68[$i-6][0]*$xy_68[$i-6][6]: $xy_68[$i-6][2]+$xy_68[$i-6][0]*$xy_68[$i-6][6];
                            
                            $keyAnswer['soal'.$i.'_23'] = $xy_68[$i-6][7];

                            if ($setSoal == '2') {
                                if ($i == '6') {
                                    $keyAnswer['soal'.$i.'_17'] = '\\left(2\\right)+y';
                                    $keyAnswer['soal'.$i.'_19'] = '2+y';
                                }elseif ($i=='7') {
                                    $keyAnswer['soal'.$i.'_17'] = '2\\left(1\\right)+y';
                                    $keyAnswer['soal'.$i.'_19'] = '2+y';
                                }elseif ($i=='8') {
                                    $keyAnswer['soal'.$i.'_17'] = '\\left(2\\right)-y';
                                    $keyAnswer['soal'.$i.'_19'] = '2-y';
                                }
                            }
                        }else{ // Pers 1. Var. y Terapan 2
                            if ($xy_68[$i-6][4]>0) {
                                $y = '+'.$xy_68[$i-6][4];
                            }else{
                                $y = $xy_68[$i-6][4];
                            }
                            $keyAnswer['soal'.$i.'_17'] = $xy_68[$i-6][3].'\\left('.$xy_68[$i-6][6].'\\right)'.$y.'y';
                            $keyAnswer['soal'.$i.'_18'] = $xy_68[$i-6][5];
    
                            $keyAnswer['soal'.$i.'_19'] = $xy_68[$i-6][3]*$xy_68[$i-6][6].$y.'y';
                            $keyAnswer['soal'.$i.'_20'] = $xy_68[$i-6][5];
                            
                            $keyAnswer['soal'.$i.'_21'] = $xy_68[$i-6][4];
                            $keyAnswer['soal'.$i.'_22'] = $xy_68[$i-6][3]*$xy_68[$i-6][6]>0 ? $xy_68[$i-6][5]-$xy_68[$i-6][3]*$xy_68[$i-6][6]: $xy_68[$i-6][5]+$xy_68[$i-6][3]*$xy_68[$i-6][6];
                            
                            $keyAnswer['soal'.$i.'_23'] = $xy_68[$i-6][7];

                            if ($setSoal == '2') {
                                if ($i == '6') {
                                    $keyAnswer['soal'.$i.'_17'] = '2\\left(2\\right)-y';
                                    $keyAnswer['soal'.$i.'_19'] = '4-y';
                                }elseif ($i=='7') {
                                    $keyAnswer['soal'.$i.'_17'] = '3\\left(1\\right)-y';
                                    $keyAnswer['soal'.$i.'_19'] = '3-y';
                                }elseif ($i=='8') {
                                    $keyAnswer['soal'.$i.'_17'] = '3\\left(2\\right)+y';
                                    $keyAnswer['soal'.$i.'_19'] = '6+y';
                                }
                            }
                        }
                    }
                }else{ //Pers.2
                    $keyAnswer['soal'.$i.'_3'] = $xy_68[$i-6][3].'x';
                    $keyAnswer['soal'.$i.'_4'] = $xy_68[$i-6][4].'y';
                    $keyAnswer['soal'.$i.'_5'] = $xy_68[$i-6][5];
                    
                    // Pers. 2 Var. x
                    if ($userAnswer['soal'.$i.'_2']=='x') {
                        if ($xy_68[$i-6][4] == 1) {
                            $y1 = '-y';
                        }
                        elseif ($xy_68[$i-6][4] == -1) {
                            $y1 = '+y';
                        }
                        elseif ($xy_68[$i-6][4] > 0) {
                            $y1 = '-'.$xy_68[$i-6][4].'y';
                        }else{
                            $y1 = '+'. $xy_68[$i-6][4]*-1 . 'y';
                        }
                        
                        $keyAnswer['soal'.$i.'_6'] = '\\frac{'.$xy_68[$i-6][5].$y1.'}{'.$xy_68[$i-6][3].'}';
    
                        $keyAnswer['soal'.$i.'_7'] = $xy_68[$i-6][0].'\\left('.$keyAnswer['soal'.$i.'_6'].'\\right)' . $xy_68[$i-6][1]>0 ? '+'.$xy_68[$i-6][1] : $xy_68[$i-6][1] .'y';
                        $keyAnswer['soal'.$i.'_8'] = $xy_68[$i-6][2];
                        
                        if ($setSoal == '1') {
                            if ($i==6) {
                                $keyAnswer['soal'.$i.'_9'] = '\\frac{231-14y}{5}-4y';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{231-34y}{5}';
                                $keyAnswer['soal'.$i.'_13'] = '-34';
                                $keyAnswer['soal'.$i.'_14'] = '-136';
                            }elseif ($i==7) {
                                $keyAnswer['soal'.$i.'_9'] = '\\frac{64-16y}{2}+6y';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{64-4y}{2}';
                                $keyAnswer['soal'.$i.'_13'] = '-4';
                                $keyAnswer['soal'.$i.'_14'] = '-12';
                            }elseif ($i==8) {
                                $keyAnswer['soal'.$i.'_9'] = '\\frac{112-16y}{4}-3y';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{112-28y}{4}';
                                $keyAnswer['soal'.$i.'_13'] = '-28';
                                $keyAnswer['soal'.$i.'_14'] = '-140';
                            }
                        }elseif ($setSoal=='2') {
                            if ($i==6) {
                                $keyAnswer['soal'.$i.'_3'] = '2x';
                                $keyAnswer['soal'.$i.'_4'] = '-y';
                                $keyAnswer['soal'.$i.'_6'] = '\\frac{-1+y}{2}';
                                $keyAnswer['soal'.$i.'_7'] = '\\left(\\frac{-1+y}{2}\\right)+y';
                                $keyAnswer['soal'.$i.'_9'] = '\\frac{-1+y}{2}+y';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{3y-1}{2}';
                                $keyAnswer['soal'.$i.'_13'] = '3';
                                $keyAnswer['soal'.$i.'_14'] = '15';
                            }elseif ($i==7) {
                                $keyAnswer['soal'.$i.'_3'] = '3x';
                                $keyAnswer['soal'.$i.'_4'] = '-y';
                                $keyAnswer['soal'.$i.'_6'] = '\\frac{-1+y}{3}';
                                $keyAnswer['soal'.$i.'_7'] = '2\\left(\\frac{-1+y}{3}\\right)+y';
                                $keyAnswer['soal'.$i.'_9'] = '\\frac{-2+2y}{3}+y';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{5y-2}{3}';
                                $keyAnswer['soal'.$i.'_13'] = '5';
                                $keyAnswer['soal'.$i.'_14'] = '20';
                            }elseif ($i==8) {
                                $keyAnswer['soal'.$i.'_3'] = '3x';
                                $keyAnswer['soal'.$i.'_4'] = 'y';
                                $keyAnswer['soal'.$i.'_6'] = '\\frac{13-y}{3}';
                                $keyAnswer['soal'.$i.'_7'] = '\\left(\\frac{13-y}{3}\\right)-y';
                                $keyAnswer['soal'.$i.'_9'] = '\\frac{13-y}{3}-y';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{13-4y}{3}';
                                $keyAnswer['soal'.$i.'_13'] = '-4';
                                $keyAnswer['soal'.$i.'_14'] = '-28';
                            }
                        }elseif ($setSoal=='3') {
                            if ($i==6) {
                                $keyAnswer['soal'.$i.'_9'] = '\\frac{160-32y}{8}-4y';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{160-64y}{8}';
                                $keyAnswer['soal'.$i.'_13'] = '-64';
                                $keyAnswer['soal'.$i.'_14'] = '-192';
                            }elseif ($i==7) {
                                $keyAnswer['soal'.$i.'_9'] = '\\frac{70-35y}{5}+3';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{70-20y}{5}';
                                $keyAnswer['soal'.$i.'_13'] = '-20';
                                $keyAnswer['soal'.$i.'_14'] = '-20';
                            }elseif ($i==8) {
                                $keyAnswer['soal'.$i.'_9'] = '\\frac{40+8y}{4}+3y';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{40+20y}{4}';
                                $keyAnswer['soal'.$i.'_13'] = '20';
                                $keyAnswer['soal'.$i.'_14'] = '60';
                            }
                        }
                        
                        $keyAnswer['soal'.$i.'_10'] = $xy_68[$i-6][2];
                        
                        $keyAnswer['soal'.$i.'_12'] = $xy_68[$i-6][2];
                            
                        $keyAnswer['soal'.$i.'_15'] = $xy_68[$i-6][7];
                        
                        // Terapan 1
                        if ($userAnswer['soal'.$i.'_16']=='1') {
                            if ($xy_68[$i-6][1]>0) {
                                $y = '+'.$xy_68[$i-6][1];
                            }else{
                                $y = $xy_68[$i-6][1];
                            }
                            $keyAnswer['soal'.$i.'_17'] = $xy_68[$i-6][0].'x'.$y.'\\left('.$xy_68[$i-6][7].'\\right)';
                            $keyAnswer['soal'.$i.'_18'] = $xy_68[$i-6][2];
    
                            $keyAnswer['soal'.$i.'_19'] = $xy_68[$i-6][0].'x'.$xy_68[$i-6][1]*$xy_68[$i-6][7] > 0 ? '+'.$xy_68[$i-6][1]*$xy_68[$i-6][7] : $xy_68[$i-6][1]*$xy_68[$i-6][7];
                            $keyAnswer['soal'.$i.'_20'] = $xy_68[$i-6][2];
                            
                            $keyAnswer['soal'.$i.'_21'] = $xy_68[$i-6][0];
                            $keyAnswer['soal'.$i.'_22'] = $xy_68[$i-6][1]*$xy_68[$i-6][7] > 0 ? $xy_68[$i-6][2] - $xy_68[$i-6][1]*$xy_68[$i-6][7] : $xy_68[$i-6][2] + $xy_68[$i-6][1]*$xy_68[$i-6][7];
                            
                            $keyAnswer['soal'.$i.'_23'] = $xy_68[$i-6][6];
                            if ($setSoal=='2') {
                                if ($i == '6') {
                                    $keyAnswer['soal'.$i.'_17'] = 'x+\\left(5\\right)';
                                    $keyAnswer['soal'.$i.'_19'] = 'x+5';
                                }elseif ($i == '7') {
                                    $keyAnswer['soal'.$i.'_17'] = '2x+\\left(4\\right)';
                                    $keyAnswer['soal'.$i.'_19'] = '2x+4';
                                }
                                elseif ($i == '8') {
                                    $keyAnswer['soal'.$i.'_17'] = 'x-\\left(7\\right)';
                                    $keyAnswer['soal'.$i.'_19'] = 'x-7';
                                }
                            }
                        }else{ // Terapan 2
                            if ($xy_68[$i-6][4]>0) {
                                $y = '+'.$xy_68[$i-6][4];
                            }else{
                                $y = $xy_68[$i-6][4];
                            }
                            $keyAnswer['soal'.$i.'_17'] = $xy_68[$i-6][3].'x'.$y.'\\left('.$xy_68[$i-6][7].'\\right)';
                            $keyAnswer['soal'.$i.'_18'] = $xy_68[$i-6][5];
    
                            $keyAnswer['soal'.$i.'_19'] = $xy_68[$i-6][3].'x'.$xy_68[$i-6][4]*$xy_68[$i-6][7] > 0 ? '+'.$xy_68[$i-6][4]*$xy_68[$i-6][7] : $xy_68[$i-6][4]*$xy_68[$i-6][7];
                            $keyAnswer['soal'.$i.'_20'] = $xy_68[$i-6][5];
                            
                            $keyAnswer['soal'.$i.'_21'] = $xy_68[$i-6][3];
                            $keyAnswer['soal'.$i.'_22'] = $xy_68[$i-6][4]*$xy_68[$i-6][7] > 0 ? $xy_68[$i-6][5] - $xy_68[$i-6][4]*$xy_68[$i-6][7] : $xy_68[$i-6][5] + $xy_68[$i-6][4]*$xy_68[$i-6][7];
                            
                            $keyAnswer['soal'.$i.'_23'] = $xy_68[$i-6][6];
                            
                            if ($setSoal=='2') {
                                if ($i == '6') {
                                    $keyAnswer['soal'.$i.'_17'] = '2x-\\left(5\\right)';
                                    $keyAnswer['soal'.$i.'_19'] = '2x-5';
                                }elseif ($i=='7') {
                                    $keyAnswer['soal'.$i.'_17'] = '3x-\\left(4\\right)';
                                    $keyAnswer['soal'.$i.'_19'] = '3x-4';
                                }
                                elseif ($i == '8') {
                                    $keyAnswer['soal'.$i.'_17'] = '3x+\\left(7\\right)';
                                    $keyAnswer['soal'.$i.'_19'] = '3x+7';
                                }
                            }
                        }
                    }else{ //Pers. 2 Var. y
                        if ($xy_68[$i-6][3] == 1) {
                            $x1 = '-x';
                        }
                        elseif ($xy_68[$i-6][3] == -1) {
                            $x1 = '+x';
                        }
                        elseif ($xy_68[$i-6][3] > 0) {
                            $x1 = '-'.$xy_68[$i-6][3].'x';
                        }else{
                            $x1 = '+'. $xy_68[$i-6][3]*-1 . 'x';
                        }
                        
                        $keyAnswer['soal'.$i.'_6'] = '\\frac{'.$xy_68[$i-6][5].$x1.'}{'.$xy_68[$i-6][4].'}';
    
                        $keyAnswer['soal'.$i.'_7'] = $xy_68[$i-6][0].'x'.$xy_68[$i-6][1]>0 ? '+'.$xy_68[$i-6][1] : $xy_68[$i-6][1] .'\\left(\\'.$keyAnswer['soal'.$i.'_6'].'\\right)';
                        $keyAnswer['soal'.$i.'_8'] = $xy_68[$i-6][2];
                        
                        if ($setSoal == '1') {
                            if ($i==6) {
                                $keyAnswer['soal'.$i.'_9'] = '7x-\\frac{132-20x}{2}';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{-132+34x}{2}';
                                $keyAnswer['soal'.$i.'_13'] = '34';
                                $keyAnswer['soal'.$i.'_14'] = '170';
                            }elseif ($i==7) {
                                $keyAnswer['soal'.$i.'_9'] = '4x+\\frac{96-12x}{4}';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{4x+96}{4}';
                                $keyAnswer['soal'.$i.'_13'] = '4';
                                $keyAnswer['soal'.$i.'_14'] = '8';
                            }elseif ($i==8) {
                                $keyAnswer['soal'.$i.'_9'] = '8x-\\frac{42+12x}{2}';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{28x-42}{2}';
                                $keyAnswer['soal'.$i.'_13'] = '28';
                                $keyAnswer['soal'.$i.'_14'] = '28';
                            }
                        }elseif ($setSoal == '2') {
                            if ($i==6) {
                                $keyAnswer['soal'.$i.'_3'] = '2x';
                                $keyAnswer['soal'.$i.'_4'] = '-y';
                                $keyAnswer['soal'.$i.'_6'] = '1+2x';
                                $keyAnswer['soal'.$i.'_7'] = 'x+\\left(1+2x\\right)';
                                $keyAnswer['soal'.$i.'_9'] = 'x+1+2x';
                                $keyAnswer['soal'.$i.'_11'] = '3x+1';
                                $keyAnswer['soal'.$i.'_13'] = '3';
                                $keyAnswer['soal'.$i.'_14'] = '6';
                            }elseif ($i==7) {
                                $keyAnswer['soal'.$i.'_3'] = '3x';
                                $keyAnswer['soal'.$i.'_4'] = '-y';
                                $keyAnswer['soal'.$i.'_6'] = '1+3x';
                                $keyAnswer['soal'.$i.'_7'] = '2x+\\left(1+3x\\right)';
                                $keyAnswer['soal'.$i.'_9'] = '2x+1+3x';
                                $keyAnswer['soal'.$i.'_11'] = '5x+1';
                                $keyAnswer['soal'.$i.'_13'] = '5';
                                $keyAnswer['soal'.$i.'_14'] = '5';
                            }elseif ($i==8) {
                                $keyAnswer['soal'.$i.'_3'] = '3x';
                                $keyAnswer['soal'.$i.'_4'] = 'y';
                                $keyAnswer['soal'.$i.'_6'] = '13-3x';
                                $keyAnswer['soal'.$i.'_7'] = 'x-\\left(13-3x\\right)';
                                $keyAnswer['soal'.$i.'_9'] = 'x-13+3x';
                                $keyAnswer['soal'.$i.'_11'] = '4x-13';
                                $keyAnswer['soal'.$i.'_13'] = '4';
                                $keyAnswer['soal'.$i.'_14'] = '8';
                            }
                            
                        } elseif ($setSoal == '3') {
                            if ($i==6) {
                                $keyAnswer['soal'.$i.'_9'] = '4x-\\frac{160+32x}{8}';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{64x-160}{8}';
                                $keyAnswer['soal'.$i.'_13'] = '64';
                                $keyAnswer['soal'.$i.'_14'] = '128';
                            }elseif ($i==7) {
                                $keyAnswer['soal'.$i.'_9'] = '7x+\\frac{30-15x}{5}';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{20x+30}{5}';
                                $keyAnswer['soal'.$i.'_13'] = '20';
                                $keyAnswer['soal'.$i.'_14'] = '20';
                            }elseif ($i==8) {
                                $keyAnswer['soal'.$i.'_9'] = '2x+\\frac{60-12x}{-4}';
                                $keyAnswer['soal'.$i.'_11'] = '\\frac{60-20x}{-4}';
                                $keyAnswer['soal'.$i.'_13'] = '-20';
                                $keyAnswer['soal'.$i.'_14'] = '-160';
                            }
                            
                        }
                        
                        $keyAnswer['soal'.$i.'_10'] = $xy_68[$i-6][2];
                        
                        $keyAnswer['soal'.$i.'_12'] = $xy_68[$i-6][2];
                            
                        $keyAnswer['soal'.$i.'_15'] = $xy_68[$i-6][6];
                        
                        // Terapan 1
                        if ($userAnswer['soal'.$i.'_16']=='1') {
                            if ($xy_68[$i-6][1]>0) {
                                $y = '+'.$xy_68[$i-6][1];
                            }else{
                                $y = $xy_68[$i-6][1];
                            }
                            $keyAnswer['soal'.$i.'_17'] = $xy_68[$i-6][0].'\\left('.$xy_68[$i-6][6].'\\right)'.$y.'y';
                            $keyAnswer['soal'.$i.'_18'] = $xy_68[$i-6][2];
    
                            $keyAnswer['soal'.$i.'_19'] = $xy_68[$i-6][0]*$xy_68[$i-6][6].$y.'y';
                            $keyAnswer['soal'.$i.'_20'] = $xy_68[$i-6][2];
                            
                            $keyAnswer['soal'.$i.'_21'] = $xy_68[$i-6][1];
                            $keyAnswer['soal'.$i.'_22'] = $xy_68[$i-6][0]*$xy_68[$i-6][6]>0 ? $xy_68[$i-6][2]-$xy_68[$i-6][0]*$xy_68[$i-6][6]: $xy_68[$i-6][2]+$xy_68[$i-6][0]*$xy_68[$i-6][6];
                            
                            $keyAnswer['soal'.$i.'_23'] = $xy_68[$i-6][7];

                            if ($setSoal == '2') {
                                if ($i == '6') {
                                    $keyAnswer['soal'.$i.'_17'] = '\\left(2\\right)+y';
                                    $keyAnswer['soal'.$i.'_19'] = '2+y';
                                }elseif ($i == '7') {
                                    $keyAnswer['soal'.$i.'_17'] = '2\\left(1\\right)+y';
                                    $keyAnswer['soal'.$i.'_19'] = '2+y';
                                }elseif ($i == '8') {
                                    $keyAnswer['soal'.$i.'_17'] = '\\left(2\\right)-y';
                                    $keyAnswer['soal'.$i.'_19'] = '2-y';
                                }
                            }
                        }else{ // Terapan 2
                            if ($xy_68[$i-6][4]>0) {
                                $y = '+'.$xy_68[$i-6][4];
                            }else{
                                $y = $xy_68[$i-6][4];
                            }
                            $keyAnswer['soal'.$i.'_17'] = $xy_68[$i-6][3].'\\left('.$xy_68[$i-6][6].'\\right)'.$y.'y';
                            $keyAnswer['soal'.$i.'_18'] = $xy_68[$i-6][5];
    
                            $keyAnswer['soal'.$i.'_19'] = $xy_68[$i-6][3]*$xy_68[$i-6][6].$y.'y';
                            $keyAnswer['soal'.$i.'_20'] = $xy_68[$i-6][5];
                            
                            $keyAnswer['soal'.$i.'_21'] = $xy_68[$i-6][4];
                            $keyAnswer['soal'.$i.'_22'] = $xy_68[$i-6][3]*$xy_68[$i-6][6]>0 ? $xy_68[$i-6][5]-$xy_68[$i-6][3]*$xy_68[$i-6][6]: $xy_68[$i-6][5]+$xy_68[$i-6][3]*$xy_68[$i-6][6];
                            
                            $keyAnswer['soal'.$i.'_23'] = $xy_68[$i-6][7];

                            if ($setSoal == '2') {
                                if ($i == '6') {
                                    $keyAnswer['soal'.$i.'_17'] = '2\\left(2\\right)-y';
                                    $keyAnswer['soal'.$i.'_19'] = '4-y';
                                }elseif ($i == '7') {
                                    $keyAnswer['soal'.$i.'_17'] = '3\\left(1\\right)-y';
                                    $keyAnswer['soal'.$i.'_19'] = '3-y';
                                }
                                elseif ($i == '8') {
                                    $keyAnswer['soal'.$i.'_17'] = '3\\left(2\\right)-y';
                                    $keyAnswer['soal'.$i.'_19'] = '6+y';
                                }
                            }
                        }
                    }
                }
                $keyAnswer['soal'.$i.'_24'] = $xy_68[$i-6][6];
                $keyAnswer['soal'.$i.'_25'] = $xy_68[$i-6][7];
            }

            
            // Set Keyanswer 9-10
            for ($i=9; $i <= 10; $i++) { 
                $keyAnswer['soal'.$i.'_1'] = $userAnswer['soal'.$i.'_1'];
                $keyAnswer['soal'.$i.'_2'] = $userAnswer['soal'.$i.'_2'];
                $keyAnswer['soal'.$i.'_15'] = $userAnswer['soal'.$i.'_16'];

                // Pers. 1
                if ($userAnswer['soal'.$i.'_1']=='1') {
                    $y1 = $xy_910[$i-9][1]>0 ? '+'.$xy_910[$i-9][1] : $xy_910[$i-9][1];
                    $y2 = $xy_910[$i-9][5]>0 ? '+'.$xy_910[$i-9][5] : $xy_910[$i-9][5];

                    if ($xy_910[$i-9][2] != 0) {
                        $z1 = $xy_910[$i-9][2]>0 ? '+'.$xy_910[$i-9][2] : $xy_910[$i-9][2];
                    } else{
                        $z1 = '';
                    }

                    if ($xy_910[$i-9][6]!=0) {
                        $z2 = $xy_910[$i-9][6]>0 ? '+'.$xy_910[$i-9][6] : $xy_910[$i-9][6];
                    }else{
                        $z2 = '';
                    }

                    $keyAnswer['soal'.$i.'_3'] = $xy_910[$i-9][0].'x'.$y1.'y'.$z1;
                    $keyAnswer['soal'.$i.'_4'] = $xy_910[$i-9][3];

                    // Pers.1 Var. x
                    if ($userAnswer['soal'.$i.'_2']=='x') {
                        if ($setSoal=='1') {
                            if ($i == 9) {
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{55-3y}{7}';
                                $keyAnswer['soal'.$i.'_8'] = '\\frac{275-15y}{7}-2y';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{275-29y}{7}';
                                $keyAnswer['soal'.$i.'_12'] = '-29';
                                $keyAnswer['soal'.$i.'_13'] = '-29';
                            }else{
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{53-3y}{11}';
                                $keyAnswer['soal'.$i.'_8'] = '\\frac{106-6y}{11}-5y+7';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{183-61y}{11}';
                                $keyAnswer['soal'.$i.'_12'] = '-61';
                                $keyAnswer['soal'.$i.'_13'] = '-183';
                            }
                        }elseif ($i == '2') {
                            if ($i == 9) {
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{44-4y}{4}';
                                $keyAnswer['soal'.$i.'_8'] = '\\frac{308-28y}{4}-2y';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{308-36y}{4}';
                                $keyAnswer['soal'.$i.'_12'] = '-36';
                                $keyAnswer['soal'.$i.'_13'] = '-216';
                            }else{
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{-7+5y}{6}';
                                $keyAnswer['soal'.$i.'_8'] = '\\frac{-7+5y}{6}+2y-13';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{17y-85}{6}';
                                $keyAnswer['soal'.$i.'_12'] = '17';
                                $keyAnswer['soal'.$i.'_13'] = '85';
                            }
                        }elseif ($i == '3') {
                            if ($i == 9) {
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{-2-6y}{-7}';
                                $keyAnswer['soal'.$i.'_8'] = '\\frac{-18-54y}{-7}-y';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{-18-47y}{-7}';
                                $keyAnswer['soal'.$i.'_12'] = '-47';
                                $keyAnswer['soal'.$i.'_13'] = '-423';
                            }else{
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{55-5y}{5}';
                                $keyAnswer['soal'.$i.'_8'] = '\\frac{110-10y}{5}+7y-47';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{25y-125}{5}';
                                $keyAnswer['soal'.$i.'_12'] = '25';
                                $keyAnswer['soal'.$i.'_13'] = '125';
                            }
                        }
                        
                        
                        
                        $keyAnswer['soal'.$i.'_6'] = $xy_910[$i-9][4].'\\left('.$keyAnswer['soal'.$i.'_5'].'\\right)'.$y2.'y'.$z2;
                        $keyAnswer['soal'.$i.'_7'] = $xy_910[$i-9][7];
                        $keyAnswer['soal'.$i.'_9'] = $xy_910[$i-9][7];
                        $keyAnswer['soal'.$i.'_11'] = $xy_910[$i-9][7];
                        $keyAnswer['soal'.$i.'_14'] = $xy_910[$i-9][9];

                        if ($userAnswer['soal'.$i.'_15']=='1') {
                            $y_substitusi = $xy_910[$i-9][1]*$xy_910[$i-9][9];
                            $keyAnswer['soal'.$i.'_16'] = $xy_910[$i-9][0].'x'.$y1.'\\left('.$xy_910[$i-9][9].'\\right)'.$z1;
                            $keyAnswer['soal'.$i.'_17'] = $xy_910[$i-9][3];
                            
                            $keyAnswer['soal'.$i.'_18'] = $xy_910[$i-9][0].'x'. $y_substitusi>0 ? '+'. $y_substitusi : $y_substitusi .$z1;
                            $keyAnswer['soal'.$i.'_19'] = $xy_910[$i-9][3];
                            
                            $keyAnswer['soal'.$i.'_20'] = $xy_910[$i-9][0];
                            $keyAnswer['soal'.$i.'_21'] = $xy_910[$i-9][3] + $y_substitusi*-1 + $xy_910[$i-1][2]*-1;

                            $keyAnswer['soal'.$i.'_22'] = $xy_910[$i-9][8];
                        }else{
                            $y_substitusi = $xy_910[$i-9][5]*$xy_910[$i-9][9];
                            $keyAnswer['soal'.$i.'_16'] = $xy_910[$i-9][4].'x'.$y2.'\\left('.$xy_910[$i-9][9].'\\right)'.$z2;
                            $keyAnswer['soal'.$i.'_17'] = $xy_910[$i-9][7];
                            
                            $keyAnswer['soal'.$i.'_18'] = $xy_910[$i-9][4].'x'. $y_substitusi>0 ? '+'. $y_substitusi : $y_substitusi .$z1;
                            $keyAnswer['soal'.$i.'_19'] = $xy_910[$i-9][7];
                            
                            $keyAnswer['soal'.$i.'_20'] = $xy_910[$i-9][4];
                            $keyAnswer['soal'.$i.'_21'] = $xy_910[$i-9][7] + $y_substitusi*-1 + $xy_910[$i-1][6]*-1;

                            $keyAnswer['soal'.$i.'_22'] = $xy_910[$i-9][8];
                        }
                    }else{ //Pers.1 Var. y
                        if ($setSoal =='1') {
                            if ($i == 9) {
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{55-3y}{7}';
                                $keyAnswer['soal'.$i.'_8'] = '\\frac{275-15y}{7}-2y';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{275-29y}{7}';
                                $keyAnswer['soal'.$i.'_12'] = '29';
                                $keyAnswer['soal'.$i.'_13'] = '116';
                            }else{
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{53-11x}{3}';
                                $keyAnswer['soal'.$i.'_8'] = '2x-\\frac{265+55x}{3}+7';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{61x-244}{3}';
                                $keyAnswer['soal'.$i.'_12'] = '61';
                                $keyAnswer['soal'.$i.'_13'] = '244';
                            }
                        }elseif ($setSoal == '2') {
                            if ($i == 9) {
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{44-4x}{4}';
                                $keyAnswer['soal'.$i.'_8'] = '7x-\\frac{88+8x}{4}';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{36x-88}{4}';
                                $keyAnswer['soal'.$i.'_12'] = '36';
                                $keyAnswer['soal'.$i.'_13'] = '180';
                            }else{
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{-7-6x}{-5}';
                                $keyAnswer['soal'.$i.'_8'] = 'x-\\frac{14-12x}{-5}-13';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{-17x+51}{-5}';
                                $keyAnswer['soal'.$i.'_12'] = '-17';
                                $keyAnswer['soal'.$i.'_13'] = '-51';
                            }
                        }elseif ($setSoal == '3') {
                            if ($i == 9) {
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{-2+7x}{6}';
                                $keyAnswer['soal'.$i.'_8'] = '9x+\\frac{2-7x}{6}';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{47x+2}{6}';
                                $keyAnswer['soal'.$i.'_12'] = '47';
                                $keyAnswer['soal'.$i.'_13'] = '376';
                            }else{
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{55-5x}{5}';
                                $keyAnswer['soal'.$i.'_8'] = '2x+\\frac{385-35x}{5}-47';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{150-25x}{5}';
                                $keyAnswer['soal'.$i.'_12'] = '-25';
                                $keyAnswer['soal'.$i.'_13'] = '-150';
                            }
                        }
                        
                        $keyAnswer['soal'.$i.'_6'] = $xy_910[$i-9][4].'x'.$y2.'\\left('.$keyAnswer['soal'.$i.'_5'].'\\right)'.$z2;
                        $keyAnswer['soal'.$i.'_7'] = $xy_910[$i-9][7];
                        $keyAnswer['soal'.$i.'_9'] = $xy_910[$i-9][7];
                        $keyAnswer['soal'.$i.'_11'] = $xy_910[$i-9][7];
                        $keyAnswer['soal'.$i.'_14'] = $xy_910[$i-9][8];

                        if ($userAnswer['soal'.$i.'_15']=='1') {
                            $y_substitusi = $xy_910[$i-9][1]*$xy_910[$i-9][9];
                            $keyAnswer['soal'.$i.'_16'] = $xy_910[$i-9][0].'x'.$y1.'\\left('.$xy_910[$i-9][9].'\\right)'.$z1;
                            $keyAnswer['soal'.$i.'_17'] = $xy_910[$i-9][3];
                            
                            $keyAnswer['soal'.$i.'_18'] = $xy_910[$i-9][0].'x'. $y_substitusi>0 ? '+'. $y_substitusi : $y_substitusi .$z1;
                            $keyAnswer['soal'.$i.'_19'] = $xy_910[$i-9][3];
                            
                            $keyAnswer['soal'.$i.'_20'] = $xy_910[$i-9][0];
                            $keyAnswer['soal'.$i.'_21'] = $xy_910[$i-9][3] + $y_substitusi*-1 + $xy_910[$i-1][2]*-1;

                            $keyAnswer['soal'.$i.'_22'] = $xy_910[$i-9][8];
                        }else{
                            $y_substitusi = $xy_910[$i-9][5]*$xy_910[$i-9][9];
                            $keyAnswer['soal'.$i.'_16'] = $xy_910[$i-9][4].'x'.$y2.'\\left('.$xy_910[$i-9][9].'\\right)'.$z2;
                            $keyAnswer['soal'.$i.'_17'] = $xy_910[$i-9][7];
                            
                            $keyAnswer['soal'.$i.'_18'] = $xy_910[$i-9][4].'x'. $y_substitusi>0 ? '+'. $y_substitusi : $y_substitusi .$z1;
                            $keyAnswer['soal'.$i.'_19'] = $xy_910[$i-9][7];
                            
                            $keyAnswer['soal'.$i.'_20'] = $xy_910[$i-9][4];
                            $keyAnswer['soal'.$i.'_21'] = $xy_910[$i-9][7] + $y_substitusi*-1 + $xy_910[$i-1][6]*-1;

                            $keyAnswer['soal'.$i.'_22'] = $xy_910[$i-9][8];
                        }
                    }
                }else{ // Pers. 2
                    $y1 = $xy_910[$i-9][1]>0 ? '+'.$xy_910[$i-9][1] : $xy_910[$i-9][1];
                    $y2 = $xy_910[$i-9][5]>0 ? '+'.$xy_910[$i-9][5] : $xy_910[$i-9][5];

                    if ($xy_910[$i-9][2] != 0) {
                        $z1 = $xy_910[$i-9][2]>0 ? '+'.$xy_910[$i-9][2] : $xy_910[$i-9][2];
                    } else{
                        $z1 = '';
                    }

                    if ($xy_910[$i-9][6]!=0) {
                        $z2 = $xy_910[$i-9][6]>0 ? '+'.$xy_910[$i-9][6] : $xy_910[$i-9][6];
                    }else{
                        $z2 = '';
                    }

                    $keyAnswer['soal'.$i.'_3'] = $xy_910[$i-9][4].'x'.$y2.'y'.$z2;
                    $keyAnswer['soal'.$i.'_4'] = $xy_910[$i-9][7];

                    // Pers.2 Var. x
                    if ($userAnswer['soal'.$i.'_2']=='x') {
                        if ($setSoal == '1') {
                            if ($i == 9) {
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{2+2y}{5}';
                                $keyAnswer['soal'.$i.'_8'] = '\\frac{14y+14}{5}+3y-55';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{29y-261}{5}';
                                $keyAnswer['soal'.$i.'_12'] = '29';
                                $keyAnswer['soal'.$i.'_13'] = '261';
                            }else{
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{-7+5y}{2}';
                                $keyAnswer['soal'.$i.'_8'] = '\\frac{-77+55y}{2}+3y-53';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{61y-183}{2}';
                                $keyAnswer['soal'.$i.'_12'] = '61';
                                $keyAnswer['soal'.$i.'_13'] = '183';
                            }
                        }elseif ($setSoal=='2') {
                            if ($i == 9) {
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{23+2y}{7}';
                                $keyAnswer['soal'.$i.'_8'] = '\\frac{92+8y}{7}+4y-44';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{36y-216}{7}';
                                $keyAnswer['soal'.$i.'_12'] = '36';
                                $keyAnswer['soal'.$i.'_13'] = '216';
                            }else{
                                $keyAnswer['soal'.$i.'_5'] = '13-2y';
                                $keyAnswer['soal'.$i.'_8'] = '78-12y-5y+7';
                                $keyAnswer['soal'.$i.'_10'] = '85-17y';
                                $keyAnswer['soal'.$i.'_12'] = '-17';
                                $keyAnswer['soal'.$i.'_13'] = '-85';
                            }
                        }elseif ($setSoal=='3') {
                            if ($i == 9) {
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{63+y}{9}';
                                $keyAnswer['soal'.$i.'_8'] = '\\frac{-441-7y}{9}+6y+2';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{47y-423}{9}';
                                $keyAnswer['soal'.$i.'_12'] = '47';
                                $keyAnswer['soal'.$i.'_13'] = '423';
                            }else{
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{47-7y}{2}';
                                $keyAnswer['soal'.$i.'_8'] = '\\frac{235-35y}{2}+5y-55';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{-25y+125}{2}';
                                $keyAnswer['soal'.$i.'_12'] = '-25';
                                $keyAnswer['soal'.$i.'_13'] = '-125';
                            }
                        }
                        
                        $keyAnswer['soal'.$i.'_6'] = $xy_910[$i-9][0].'\\left('.$keyAnswer['soal'.$i.'_5'].'\\right)'.$y1.'y'.$z1;
                        $keyAnswer['soal'.$i.'_7'] = $xy_910[$i-9][3];
                        $keyAnswer['soal'.$i.'_9'] = $xy_910[$i-9][3];
                        $keyAnswer['soal'.$i.'_11'] = $xy_910[$i-9][3];
                        $keyAnswer['soal'.$i.'_14'] = $xy_910[$i-9][9];

                        if ($userAnswer['soal'.$i.'_15']=='1') {
                            $y_substitusi = $xy_910[$i-9][1]*$xy_910[$i-9][9];
                            $keyAnswer['soal'.$i.'_16'] = $xy_910[$i-9][0].'x'.$y1.'\\left('.$xy_910[$i-9][9].'\\right)'.$z1;
                            $keyAnswer['soal'.$i.'_17'] = $xy_910[$i-9][3];
                            
                            $keyAnswer['soal'.$i.'_18'] = $xy_910[$i-9][0].'x'. $y_substitusi>0 ? '+'. $y_substitusi : $y_substitusi .$z1;
                            $keyAnswer['soal'.$i.'_19'] = $xy_910[$i-9][3];
                            
                            $keyAnswer['soal'.$i.'_20'] = $xy_910[$i-9][0];
                            $keyAnswer['soal'.$i.'_21'] = $xy_910[$i-9][3] + $y_substitusi*-1 + $xy_910[$i-1][2]*-1;

                            $keyAnswer['soal'.$i.'_22'] = $xy_910[$i-9][8];
                        }else{
                            $y_substitusi = $xy_910[$i-9][5]*$xy_910[$i-9][9];
                            $keyAnswer['soal'.$i.'_16'] = $xy_910[$i-9][4].'x'.$y2.'\\left('.$xy_910[$i-9][9].'\\right)'.$z2;
                            $keyAnswer['soal'.$i.'_17'] = $xy_910[$i-9][7];
                            
                            $keyAnswer['soal'.$i.'_18'] = $xy_910[$i-9][4].'x'. $y_substitusi>0 ? '+'. $y_substitusi : $y_substitusi .$z1;
                            $keyAnswer['soal'.$i.'_19'] = $xy_910[$i-9][7];
                            
                            $keyAnswer['soal'.$i.'_20'] = $xy_910[$i-9][4];
                            $keyAnswer['soal'.$i.'_21'] = $xy_910[$i-9][7] + $y_substitusi*-1 + $xy_910[$i-1][6]*-1;

                            $keyAnswer['soal'.$i.'_22'] = $xy_910[$i-9][8];
                        }
                    }else{ //Pers. 2 Var. y
                        if ($setSoal == '1') {
                            if ($i == 9) {
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{2-5x}{-2}';
                                $keyAnswer['soal'.$i.'_8'] = '7x+\\frac{6-15x}{-2}-55';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{116-29x}{-2}';
                                $keyAnswer['soal'.$i.'_12'] = '-29';
                                $keyAnswer['soal'.$i.'_13'] = '-116';
                            }else{
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{-7-2x}{-5}';
                                $keyAnswer['soal'.$i.'_8'] = '11x-\\frac{21-6x}{-5}-53';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{244-61x}{-5}';
                                $keyAnswer['soal'.$i.'_12'] = '-61';
                                $keyAnswer['soal'.$i.'_13'] = '244';
                            }
                        } elseif ($setSoal == '2') {
                            if ($i == 9) {
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{23-7x}{-2}';
                                $keyAnswer['soal'.$i.'_8'] = '4x+\\frac{92-28x}{-2}-44';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{-36x+180}{-2}';
                                $keyAnswer['soal'.$i.'_12'] = '-36';
                                $keyAnswer['soal'.$i.'_13'] = '-180';
                            }else{
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{13-x}{2}';
                                $keyAnswer['soal'.$i.'_8'] = '6x-\\frac{65+5x}{2}+7';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{17x-51}{2}';
                                $keyAnswer['soal'.$i.'_12'] = '17';
                                $keyAnswer['soal'.$i.'_13'] = '51';
                            }
                        } elseif ($setSoal == '3') {
                            if ($i == 9) {
                                $keyAnswer['soal'.$i.'_3'] = '-9x-y';
                                $keyAnswer['soal'.$i.'_5'] = '-63+9x';
                                $keyAnswer['soal'.$i.'_8'] = '-7x-378+54x+2';
                                $keyAnswer['soal'.$i.'_10'] = '47x-376';
                                $keyAnswer['soal'.$i.'_12'] = '47';
                                $keyAnswer['soal'.$i.'_13'] = '376';
                            }else{
                                $keyAnswer['soal'.$i.'_5'] = '\\frac{47-2x}{7}';
                                $keyAnswer['soal'.$i.'_8'] = '5x+\\frac{235-10x}{7}-55';
                                $keyAnswer['soal'.$i.'_10'] = '\\frac{25x-150}{7}';
                                $keyAnswer['soal'.$i.'_12'] = '25';
                                $keyAnswer['soal'.$i.'_13'] = '150';
                            }
                        }
                        
                        $keyAnswer['soal'.$i.'_6'] = $xy_910[$i-9][0].'x'.$y1.'\\left('.$keyAnswer['soal'.$i.'_5'].'\\right)'.$z1;
                        $keyAnswer['soal'.$i.'_7'] = $xy_910[$i-9][3];
                        $keyAnswer['soal'.$i.'_9'] = $xy_910[$i-9][3];
                        $keyAnswer['soal'.$i.'_11'] = $xy_910[$i-9][3];
                        $keyAnswer['soal'.$i.'_14'] = $xy_910[$i-9][8];

                        if ($userAnswer['soal'.$i.'_15']=='1') {
                            $y_substitusi = $xy_910[$i-9][1]*$xy_910[$i-9][9];
                            $keyAnswer['soal'.$i.'_16'] = $xy_910[$i-9][0].'x'.$y1.'\\left('.$xy_910[$i-9][9].'\\right)'.$z1;
                            $keyAnswer['soal'.$i.'_17'] = $xy_910[$i-9][3];
                            
                            $keyAnswer['soal'.$i.'_18'] = $xy_910[$i-9][0].'x'. $y_substitusi>0 ? '+'. $y_substitusi : $y_substitusi .$z1;
                            $keyAnswer['soal'.$i.'_19'] = $xy_910[$i-9][3];
                            
                            $keyAnswer['soal'.$i.'_20'] = $xy_910[$i-9][0];
                            $keyAnswer['soal'.$i.'_21'] = $xy_910[$i-9][3] + $y_substitusi*-1 + $xy_910[$i-1][2]*-1;

                            $keyAnswer['soal'.$i.'_22'] = $xy_910[$i-9][8];
                        }else{
                            $y_substitusi = $xy_910[$i-9][5]*$xy_910[$i-9][9];
                            $keyAnswer['soal'.$i.'_16'] = $xy_910[$i-9][4].'x'.$y2.'\\left('.$xy_910[$i-9][9].'\\right)'.$z2;
                            $keyAnswer['soal'.$i.'_17'] = $xy_910[$i-9][7];
                            
                            $keyAnswer['soal'.$i.'_18'] = $xy_910[$i-9][4].'x'. $y_substitusi>0 ? '+'. $y_substitusi : $y_substitusi .$z1;
                            $keyAnswer['soal'.$i.'_19'] = $xy_910[$i-9][7];
                            
                            $keyAnswer['soal'.$i.'_20'] = $xy_910[$i-9][4];
                            $keyAnswer['soal'.$i.'_21'] = $xy_910[$i-9][7] + $y_substitusi*-1 + $xy_910[$i-1][6]*-1;

                            $keyAnswer['soal'.$i.'_22'] = $xy_910[$i-9][8];
                        }
                    }
                }

                $keyAnswer['soal'.$i.'_23'] = $xy_910[$i-9][8];
                $keyAnswer['soal'.$i.'_24'] = $xy_910[$i-9][9];
            }
        }

        if ($request->jenisKuis == '3') {
            $xy = [
                [10, 5, 200, 4, 3, 90, 15, 10],
                [2, 3, 44000, 2, 2, 36000, 2, -1],
                [2, 1, 125000, 3, 2, 210000, 40000, 45000],
                [3, 3, 48000, 5, 2, 50000, 6000, 10000],
            ];

            // Set default keyAnswer (-) to Question 1 & 2
            for ($i = 1; $i <= 2; $i++) {
                for ($j = 7; $j <= 31; $j++) {
                    $keyAnswer['soal' . $i . '_' . $j] = '-';
                    if ($i == 2 && $j == 30) {
                        break;
                    }
                }
            }

            // Set default keyAnswer (-) to Question 3 & 4
            for ($i = 3; $i <= 4; $i++) {
                for ($j = 7; $j <= 30; $j++) {
                    $keyAnswer['soal' . $i . '_' . $j] = '-';
                }
            }

            // Set KeyAnswer Question 1 & 2
            for ($i = 1; $i <= 2; $i++) {
                if (
                    isset($userAnswer['soal' . $i . '_8']) && $userAnswer['soal' . $i . '_8'] != null &&
                    isset($userAnswer['soal' . $i . '_9']) && $userAnswer['soal' . $i . '_9'] != null
                ) {
                    $keyAnswer['soal' . $i . '_8'] = $userAnswer['soal' . $i . '_8'];
                    $keyAnswer['soal' . $i . '_9'] = $userAnswer['soal' . $i . '_9'];

                    if ((int) $userAnswer['soal' . $i . '_8'] && (int) $userAnswer['soal' . $i . '_9']) {
                        $x1 = $userAnswer['soal' . $i . '_8'] * $xy[$i - 1][0];
                        $y1 = $userAnswer['soal' . $i . '_8'] * $xy[$i - 1][1];
                        $c1 = $userAnswer['soal' . $i . '_8'] * $xy[$i - 1][2];
                        $x2 = $userAnswer['soal' . $i . '_9'] * $xy[$i - 1][3];
                        $y2 = $userAnswer['soal' . $i . '_9'] * $xy[$i - 1][4];
                        $c2 = $userAnswer['soal' . $i . '_9'] * $xy[$i - 1][5];

                        $keyAnswer['soal' . $i . '_10'] = $x1 . 'x';
                        $keyAnswer['soal' . $i . '_11'] = $y1 . 'y';
                        $keyAnswer['soal' . $i . '_12'] = $c1;
                        $keyAnswer['soal' . $i . '_13'] = $x2 . 'x';
                        $keyAnswer['soal' . $i . '_14'] = $y2 . 'y';
                        $keyAnswer['soal' . $i . '_15'] = $c2;

                        if ($userAnswer['soal' . $i . '_1'] == 'x') {
                            $keyAnswer['soal' . $i . '_1'] = 'x';
                            $keyAnswer['soal' . $i . '_16'] = $y1 - $y2;
                            $keyAnswer['soal' . $i . '_18'] = $xy[$i - 1][7];
                        } else {
                            $keyAnswer['soal' . $i . '_1'] = 'y';
                            $keyAnswer['soal' . $i . '_16'] = $x1 - $x2;
                            $keyAnswer['soal' . $i . '_18'] = $xy[$i - 1][6];
                        }
                        $keyAnswer['soal' . $i . '_17'] = $c1 - $c2;
                    }
                }

                if (
                    isset($userAnswer['soal' . $i . '_19']) && $userAnswer['soal' . $i . '_20'] != null &&
                    isset($userAnswer['soal' . $i . '_19']) && $userAnswer['soal' . $i . '_20'] != null
                ) {
                    $keyAnswer['soal' . $i . '_19'] = $userAnswer['soal' . $i . '_19'];
                    $keyAnswer['soal' . $i . '_20'] = $userAnswer['soal' . $i . '_20'];

                    if ((int) $userAnswer['soal' . $i . '_19'] && (int) $userAnswer['soal' . $i . '_20']) {
                        $x1 = $userAnswer['soal' . $i . '_19'] * $xy[$i - 1][0];
                        $y1 = $userAnswer['soal' . $i . '_19'] * $xy[$i - 1][1];
                        $c1 = $userAnswer['soal' . $i . '_19'] * $xy[$i - 1][2];
                        $x2 = $userAnswer['soal' . $i . '_20'] * $xy[$i - 1][3];
                        $y2 = $userAnswer['soal' . $i . '_20'] * $xy[$i - 1][4];
                        $c2 = $userAnswer['soal' . $i . '_20'] * $xy[$i - 1][5];

                        $keyAnswer['soal' . $i . '_21'] = $x1 . 'x';
                        $keyAnswer['soal' . $i . '_22'] = $y1 . 'y';
                        $keyAnswer['soal' . $i . '_23'] = $c1;
                        $keyAnswer['soal' . $i . '_24'] = $x2 . 'x';
                        $keyAnswer['soal' . $i . '_25'] = $y2 . 'y';
                        $keyAnswer['soal' . $i . '_26'] = $c2;

                        if ($userAnswer['soal' . $i . '_1'] == 'x') {
                            $keyAnswer['soal' . $i . '_27'] = $x1 - $x2;
                            $keyAnswer['soal' . $i . '_29'] = $xy[$i - 1][6];
                        } else {
                            $keyAnswer['soal' . $i . '_27'] = $y1 - $y2;
                            $keyAnswer['soal' . $i . '_29'] = $xy[$i - 1][7];
                        }
                        $keyAnswer['soal' . $i . '_28'] = $c1 - $c2;
                    }
                }

                if ($i == 1) {
                    $keyAnswer['soal' . $i . '_30'] = $xy[$i - 1][6];
                    $keyAnswer['soal' . $i . '_31'] = $xy[$i - 1][7];
                } else if ($i == 2) {
                    $keyAnswer['soal' . $i . '_30'] = 3 * $xy[$i - 1][6] + 2 * $xy[$i - 1][7];
                }
            }

            // Set KeyAnswer Question 3 & 4
            for ($i=3; $i <= 4; $i++) { 
                $keyAnswer['soal'.$i.'_7'] = $userAnswer['soal'.$i.'_7'];
                $keyAnswer['soal'.$i.'_8'] = $userAnswer['soal'.$i.'_8'];
                $keyAnswer['soal'.$i.'_22'] = $userAnswer['soal'.$i.'_22'];
            }
            // Soal 3
            if ($userAnswer['soal3_7'] == '1') {
                if ($userAnswer['soal3_8']== 'x') {
                    $keyAnswer['soal3_9'] = '2x';
                    $keyAnswer['soal3_10'] = 'y';
                    $keyAnswer['soal3_11'] = ['125000','125.000'];
                    $keyAnswer['soal3_12'] = '\\frac{125000-y}{2}';
                    
                    $keyAnswer['soal3_13'] = '3\\left(\\frac{125000-y}{2}\\right)+2y';
                    $keyAnswer['soal3_14'] = ['210000','210.000'];
                    
                    $keyAnswer['soal3_15'] = '\\frac{375000-3y}{2}+2y';
                    $keyAnswer['soal3_16'] = ['210000','210.000'];
                    
                    $keyAnswer['soal3_17'] = '\\frac{375000+y}{2}';
                    $keyAnswer['soal3_18'] = ['210000','210.000'];
                    
                    $keyAnswer['soal3_19'] = '1';
                    $keyAnswer['soal3_20'] = '45000';
                    
                    $keyAnswer['soal3_21'] = '45000';

                    if ($userAnswer['soal3_22']=='1') {
                        $keyAnswer['soal3_23'] = '2x+45000';
                        $keyAnswer['soal3_24'] = '125000';

                        $keyAnswer['soal3_25'] = '2x';
                        $keyAnswer['soal3_26'] = '125000';

                        $keyAnswer['soal3_27'] = '2';
                        $keyAnswer['soal3_28'] = '80000';

                        $keyAnswer['soal3_29'] = '40000';
                    }else{
                        $keyAnswer['soal3_23'] = '3x+2\\left(45000\\right)';
                        $keyAnswer['soal3_24'] = '210000';

                        $keyAnswer['soal3_25'] = '3x+90000';
                        $keyAnswer['soal3_26'] = '210000';

                        $keyAnswer['soal3_27'] = '3';
                        $keyAnswer['soal3_28'] = '120000';

                        $keyAnswer['soal3_29'] = '40000';
                    }
                }else{
                    $keyAnswer['soal3_9'] = '2x';
                    $keyAnswer['soal3_10'] = 'y';
                    $keyAnswer['soal3_11'] = ['125000','125.000'];
                    $keyAnswer['soal3_12'] = '125000-2x';
                    
                    $keyAnswer['soal3_13'] = '3x+2\\left(125000-2x\\right)';
                    $keyAnswer['soal3_14'] = ['210000','210.000'];
                    
                    $keyAnswer['soal3_15'] = '3x+250000-4x';
                    $keyAnswer['soal3_16'] = ['210000','210.000'];
                    
                    $keyAnswer['soal3_17'] = '-x+250000';
                    $keyAnswer['soal3_18'] = ['210000','210.000'];
                    
                    $keyAnswer['soal3_19'] = '-1';
                    $keyAnswer['soal3_20'] = '-40000';
                    
                    $keyAnswer['soal3_21'] = '40000';

                    if ($userAnswer['soal3_22']=='1') {
                        $keyAnswer['soal3_23'] = '2\\left(40000\\right)+y';
                        $keyAnswer['soal3_24'] = '125000';

                        $keyAnswer['soal3_25'] = '80000+y';
                        $keyAnswer['soal3_26'] = '125000';

                        $keyAnswer['soal3_27'] = '1';
                        $keyAnswer['soal3_28'] = '45000';

                        $keyAnswer['soal3_29'] = '45000';
                    }else{
                        $keyAnswer['soal3_23'] = '3\\left(40000\\right)+2y';
                        $keyAnswer['soal3_24'] = '210000';

                        $keyAnswer['soal3_25'] = '120000+2y';
                        $keyAnswer['soal3_26'] = '210000';

                        $keyAnswer['soal3_27'] = '2';
                        $keyAnswer['soal3_28'] = '90000';

                        $keyAnswer['soal3_29'] = '45000';
                    }
                }
            }else {
                if ($userAnswer['soal3_8']== 'x') {
                    $keyAnswer['soal3_9'] = '3x';
                    $keyAnswer['soal3_10'] = '2y';
                    $keyAnswer['soal3_11'] = ['210000','210.000'];
                    $keyAnswer['soal3_12'] = '\\frac{210000-2y}{3}';
                    
                    $keyAnswer['soal3_13'] = '2\\left(\\frac{210000-2y}{3}\\right)+y';
                    $keyAnswer['soal3_14'] = ['125000','125.000'];
                    
                    $keyAnswer['soal3_15'] = '\\frac{420000-4y}{3}+y';
                    $keyAnswer['soal3_16'] = ['125000','125.000'];
                    
                    $keyAnswer['soal3_17'] = '\\frac{420000-y}{3}';
                    $keyAnswer['soal3_18'] = ['125000','125.000'];
                    
                    $keyAnswer['soal3_19'] = '-1';
                    $keyAnswer['soal3_20'] = '-45000';
                    
                    $keyAnswer['soal3_21'] = '45000';
                    // SAMPAI SINI
                    if ($userAnswer['soal3_22']=='1') {
                        $keyAnswer['soal3_23'] = '2x+45000';
                        $keyAnswer['soal3_24'] = '125000';

                        $keyAnswer['soal3_25'] = '2x';
                        $keyAnswer['soal3_26'] = '125000';

                        $keyAnswer['soal3_27'] = '2';
                        $keyAnswer['soal3_28'] = '80000';

                        $keyAnswer['soal3_29'] = '40000';
                    }else{
                        $keyAnswer['soal3_23'] = '3x+2\\left(45000\\right)';
                        $keyAnswer['soal3_24'] = '210000';

                        $keyAnswer['soal3_25'] = '3x+90000';
                        $keyAnswer['soal3_26'] = '210000';

                        $keyAnswer['soal3_27'] = '3';
                        $keyAnswer['soal3_28'] = '120000';

                        $keyAnswer['soal3_29'] = '40000';
                    }
                }else{
                    $keyAnswer['soal3_9'] = '3x';
                    $keyAnswer['soal3_10'] = '2y';
                    $keyAnswer['soal3_11'] = ['210000','210.000'];
                    $keyAnswer['soal3_12'] = '\\frac{210000-3x}{2}';
                    
                    $keyAnswer['soal3_13'] = '2x+\\frac{210000-3x}{2}';
                    $keyAnswer['soal3_14'] = ['125000','125.000'];
                    
                    $keyAnswer['soal3_15'] = '\\frac{4x+21000-3x}{2}';
                    $keyAnswer['soal3_16'] = ['125000','125.000'];
                    
                    $keyAnswer['soal3_17'] = '\\frac{x+210000}{2}';
                    $keyAnswer['soal3_18'] = ['125000','125.000'];
                    
                    $keyAnswer['soal3_19'] = '1';
                    $keyAnswer['soal3_20'] = '40000';
                    
                    $keyAnswer['soal3_21'] = '40000';

                    if ($userAnswer['soal3_22']=='1') {
                        $keyAnswer['soal3_23'] = '2\\left(40000\\right)+y';
                        $keyAnswer['soal3_24'] = '125000';

                        $keyAnswer['soal3_25'] = '80000+y';
                        $keyAnswer['soal3_26'] = '125000';

                        $keyAnswer['soal3_27'] = '1';
                        $keyAnswer['soal3_28'] = '45000';

                        $keyAnswer['soal3_29'] = '45000';
                    }else{
                        $keyAnswer['soal3_23'] = '3\\left(40000\\right)+2y';
                        $keyAnswer['soal3_24'] = '210000';

                        $keyAnswer['soal3_25'] = '120000+2y';
                        $keyAnswer['soal3_26'] = '210000';

                        $keyAnswer['soal3_27'] = '2';
                        $keyAnswer['soal3_28'] = '90000';

                        $keyAnswer['soal3_29'] = '45000';
                    }
                }
            }
            // Soal 4
            if ($userAnswer['soal4_7'] == '1') {
                if ($userAnswer['soal4_8']== 'x') {
                    $keyAnswer['soal4_9'] = '3x';
                    $keyAnswer['soal4_10'] = '3y';
                    $keyAnswer['soal4_11'] = ['48000','48.000'];
                    $keyAnswer['soal4_12'] = '16000-y';
                    
                    $keyAnswer['soal4_13'] = '5\\left(16000-y\\right)+2y';
                    $keyAnswer['soal4_14'] = ['50000','50.000'];
                    
                    $keyAnswer['soal4_15'] = '80000-5y+2y';
                    $keyAnswer['soal4_16'] = ['50000','50.000'];
                    
                    $keyAnswer['soal4_17'] = '80000-3y';
                    $keyAnswer['soal4_18'] = ['50000','50.000'];
                    
                    $keyAnswer['soal4_19'] = '-3';
                    $keyAnswer['soal4_20'] = '-30000';
                    
                    $keyAnswer['soal4_21'] = '10000';

                    if ($userAnswer['soal4_22']=='1') {
                        $keyAnswer['soal4_23'] = '3x+3\\left(10000\\right)';
                        $keyAnswer['soal4_24'] = '48000';

                        $keyAnswer['soal4_25'] = '3x+30000';
                        $keyAnswer['soal4_26'] = '48000';

                        $keyAnswer['soal4_27'] = '3';
                        $keyAnswer['soal4_28'] = '18000';

                        $keyAnswer['soal4_29'] = '6000';
                    }else{
                        $keyAnswer['soal4_23'] = '5x+2\\left(10000\\right)';
                        $keyAnswer['soal4_24'] = '50000';

                        $keyAnswer['soal4_25'] = '5x+20000';
                        $keyAnswer['soal4_26'] = '50000';

                        $keyAnswer['soal4_27'] = '5';
                        $keyAnswer['soal4_28'] = '30000';

                        $keyAnswer['soal4_29'] = '6000';
                    }
                }else{
                    $keyAnswer['soal4_9'] = '3x';
                    $keyAnswer['soal4_10'] = '3y';
                    $keyAnswer['soal4_11'] = ['48000','48.000'];
                    $keyAnswer['soal4_12'] = '16000-x';
                    
                    $keyAnswer['soal4_13'] = '5x+2\\left(16000-x\\right)';
                    $keyAnswer['soal4_14'] = ['50000','50.000'];
                    
                    $keyAnswer['soal4_15'] = '5x+32000-2x';
                    $keyAnswer['soal4_16'] = ['50000','50.000'];
                    
                    $keyAnswer['soal4_17'] = '3x+32000';
                    $keyAnswer['soal4_18'] = ['50000','50.000'];
                    
                    $keyAnswer['soal4_19'] = '3';
                    $keyAnswer['soal4_20'] = '18000';
                    
                    $keyAnswer['soal4_21'] = '6000';

                    if ($userAnswer['soal4_22']=='1') {
                        $keyAnswer['soal4_23'] = '3\\left(6000\\right)+3y';
                        $keyAnswer['soal4_24'] = '48000';

                        $keyAnswer['soal4_25'] = '18000+3y';
                        $keyAnswer['soal4_26'] = '48000';

                        $keyAnswer['soal4_27'] = '3';
                        $keyAnswer['soal4_28'] = '30000';

                        $keyAnswer['soal4_29'] = '10000';
                    }else{
                        $keyAnswer['soal4_23'] = '5\\left(6000\\right)+2y';
                        $keyAnswer['soal4_24'] = '50000';

                        $keyAnswer['soal4_25'] = '30000+2y';
                        $keyAnswer['soal4_26'] = '50000';

                        $keyAnswer['soal4_27'] = '2';
                        $keyAnswer['soal4_28'] = '20000';

                        $keyAnswer['soal4_29'] = '10000';
                    }
                }
            }else {
                if ($userAnswer['soal4_8']== 'x') {
                    $keyAnswer['soal4_9'] = '5x';
                    $keyAnswer['soal4_10'] = '2y';
                    $keyAnswer['soal4_11'] = ['50000','50.000'];
                    $keyAnswer['soal4_12'] = '\\frac{50000-2y}{5}';
                    
                    $keyAnswer['soal4_13'] = '3\\left(\\frac{50000-2y}{5}\\right)+3y';
                    $keyAnswer['soal4_14'] = ['48000','48.000'];
                    
                    $keyAnswer['soal4_15'] = '\\frac{150000-6y}{5}+3y';
                    $keyAnswer['soal4_16'] = ['48000','48.000'];
                    
                    $keyAnswer['soal4_17'] = '\\frac{150000+9y}{5}';
                    $keyAnswer['soal4_18'] = ['48000','48.000'];
                    
                    $keyAnswer['soal4_19'] = '9';
                    $keyAnswer['soal4_20'] = '90000';
                    
                    $keyAnswer['soal4_21'] = '10000';
                    // SAMPAI SINI
                    if ($userAnswer['soal4_22']=='1') {
                        $keyAnswer['soal4_23'] = '3x+3\\left(10000\\right)';
                        $keyAnswer['soal4_24'] = '48000';

                        $keyAnswer['soal4_25'] = '3x+30000';
                        $keyAnswer['soal4_26'] = '48000';

                        $keyAnswer['soal4_27'] = '3';
                        $keyAnswer['soal4_28'] = '18000';

                        $keyAnswer['soal4_29'] = '6000';
                    }else{
                        $keyAnswer['soal4_23'] = '5x+2\\left(10000\\right)';
                        $keyAnswer['soal4_24'] = '50000';

                        $keyAnswer['soal4_25'] = '5x+20000';
                        $keyAnswer['soal4_26'] = '50000';

                        $keyAnswer['soal4_27'] = '5';
                        $keyAnswer['soal4_28'] = '30000';

                        $keyAnswer['soal4_29'] = '6000';
                    }
                }else{
                    $keyAnswer['soal4_9'] = '5x';
                    $keyAnswer['soal4_10'] = '2y';
                    $keyAnswer['soal4_11'] = ['50000','50.000'];
                    $keyAnswer['soal4_12'] = '\\frac{50000-5x}{2}';
                    
                    $keyAnswer['soal4_13'] = '3x+3\\left(\\frac{50000-5y}{2}\\right)';
                    $keyAnswer['soal4_14'] = ['48000','48.000'];
                    
                    $keyAnswer['soal4_15'] = '3x+\\frac{150000-15y}{2}';
                    $keyAnswer['soal4_16'] = ['48000','48.000'];
                    
                    $keyAnswer['soal4_17'] = '\\frac{150000-9y}{2}';
                    $keyAnswer['soal4_18'] = ['48000','48.000'];
                    
                    $keyAnswer['soal4_19'] = '-9';
                    $keyAnswer['soal4_20'] = '-54000';
                    
                    $keyAnswer['soal4_21'] = '6000';

                    if ($userAnswer['soal4_22']=='1') {
                        $keyAnswer['soal4_23'] = '3\\left(6000\\right)+3y';
                        $keyAnswer['soal4_24'] = '48000';

                        $keyAnswer['soal4_25'] = '18000+3y';
                        $keyAnswer['soal4_26'] = '48000';

                        $keyAnswer['soal4_27'] = '3';
                        $keyAnswer['soal4_28'] = '30000';

                        $keyAnswer['soal4_29'] = '10000';
                    }else{
                        $keyAnswer['soal4_23'] = '5\\left(6000\\right)+2y';
                        $keyAnswer['soal4_24'] = '50000';

                        $keyAnswer['soal4_25'] = '30000+2y';
                        $keyAnswer['soal4_26'] = '50000';

                        $keyAnswer['soal4_27'] = '2';
                        $keyAnswer['soal4_28'] = '20000';

                        $keyAnswer['soal4_29'] = '10000';
                    }
                }
            }

        }

        // Loop Check Answer
        foreach ($keys as $key) {
            if ($jenisKuis == 1 || $jenisKuis == 2) {
                if (is_array($keyAnswer[$setSoal][$key])) {
                    if (in_array($userAnswer[$key], $keyAnswer[$setSoal][$key])) {
                        $benar++;
                    }
                } else {
                    if ($userAnswer[$key] == $keyAnswer[$setSoal][$key]) {
                        $benar++;
                    }
                }
            }else{
                if (is_array($keyAnswer[$key])) {
                    if (in_array($userAnswer[$key], $keyAnswer[$key])) {
                        $benar++;
                    }
                } else {
                    if ($userAnswer[$key] == $keyAnswer[$key]) {
                        $benar++;
                    }
                }

            }
        }

        if ($jenisKuis == 1 || $jenisKuis == 2) {
            $nilai = $benar / count($keyAnswer[$setSoal]) * 100;
        }else{
            $nilai = $benar / count($keyAnswer) * 100;
        }
        $percobaan = Nilai::where('siswa_id', $siswaId)->where('jenis_kuis', $request->jenisKuis)->count();
        $waktuPengerjaan = gmdate("H:i:s", $this->dataKuis[$jenisKuis]['waktu'] * 60 - $request->waktuPengerjaan);

        $storeNilai = Nilai::create([
            'siswa_id' => $siswaId,
            'jenis_kuis' => $jenisKuis,
            'nilai' => number_format($nilai, 2),
            'percobaan' => ++$percobaan,
            'waktu_pengerjaan' => $waktuPengerjaan
        ]);

        return response([
            'status' => "success",
            'idNilai' => encrypt($storeNilai->id)
        ]);
    }

    function hasilKuis($id)
    {
        $nilaiId = decrypt($id);
        $data['nilaiUser'] = Nilai::find($nilaiId);
        $jenisKuis = $data['nilaiUser']->jenis_kuis;
        $data['judulKuis'] = $this->dataKuis[$jenisKuis]['kuis'];

        if ($data['nilaiUser']->nilai >= 75) {
            $data['pesan'] = "Selamat, anda berhasil mengerjakan " . $data['nilaiUser']->jenis_tes . " dengan baik!";
        } else {
            $data['pesan'] = "Nilai anda di bawah batas minimal.";
        }
        return view('siswa.hasil-kuis', $data);
    }
}
