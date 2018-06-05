<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use C45\C45;

class C45Controller extends Controller
{
    public function processing(Request $request)
    {
      //dd($request->file);
      $csv = $request->file;
      $csv->move(public_path(), 'data.csv');
      $filename = public_path(). '/data.csv';
      $c45 = new C45([
                      'targetAttribute' => 'KETERANGAN',
                      'trainingFile' => $filename,
                      'splitCriterion' => C45::SPLIT_GAIN,
                  ]);

      $tree = $c45->buildTree();
      $treeString = $tree->toString();
      return view('decisionTree')->with('tree',$treeString);
    }

    public function test(Request $request)
    {
        switch ($request->jalur){
            case "mandiri ujian tulis":
                switch ($request->daerah){
                    case "madura":

                        switch ($request->sekolah){
                            case "sman":
                                $keterangan="Tepat Waktu";
                                break;
                            default:
                                $keterangan="Tidak Tepat Waktu";
                                break;
                        }
                        break;
                    default:
                        $keterangan="Tidak Tepat Waktu";
                        break;
                }
                break;


            case "snmptn ujian tulis":

                switch ($request->ip1){
                    case "b":

                        switch ($request->sekolah){
                            case "man":
                                switch ($request->pesantren){
                                    case "tidak":
                                        switch ($request->daerah){
                                            case "jawa timur":

                                                switch ($request->ipk){
                                                    case "a":
                                                        $keterangan="Tepat Waktu";

                                                        break;
                                                    case "b":


                                                        switch ($request->ip2){
                                                            case "b":
                                                                switch ($request->ip3){

                                                                    case"b":
                                                                        switch ($request->ip4){

                                                                            case "b":

                                                                                switch ($request->ip5){

                                                                                    default:
                                                                                        $keterangan="Tidak Tepat Waktu";
                                                                                        break;
                                                                                }


                                                                                break;
                                                                            default:
                                                                                $keterangan="Tidak Tepat Waktu";
                                                                                break;
                                                                        }




                                                                        break;
                                                                    case"a":
                                                                        $keterangan="Tepat Waktu";

                                                                        break;
                                                                    case"b":
                                                                        $keterangan="Tidak Tepat Waktu";
                                                                        break;
                                                                }



                                                                break;
                                                            case"c":
                                                                $keterangan="Tidak Tepat Waktu";
                                                                break;



                                                        }




                                                        break;
                                                    case "c":
                                                        $keterangan="Tidak Tepat Waktu";
                                                        break;
                                                }


                                                break;
                                            default:
                                                $keterangan="Tidak Tepat Waktu";
                                                break;
                                        }



                                        break;
                                    case "iya":
                                        $keterangan="Tidak Tepat Waktu";
                                        break;
                                }


                                break;
                            case "mas":
                                $keterangan="Tepat Waktu";
                                break;
                            case "sman":

                                switch ($request->ip3){
                                    case "b":
                                        switch ($request->daerah){

                                            case "jawa timur":
                                                switch ($request->ipk){

                                                    case "c":
                                                        $keterangan="Tidak Tepat Waktu";
                                                        break;
                                                    case "b":

                                                        switch ($request->ip2){

                                                            case "b":
                                                                switch ($request->ip4){

                                                                    case "b":
                                                                        $keterangan="Tidak Tepat Waktu";
                                                                        break;
                                                                    default:
                                                                        $keterangan="Tidak Tepat Waktu";
                                                                        break;


                                                                }



                                                                break;

                                                            case "c":
                                                                $keterangan="Tidak Tepat Waktu";

                                                                break;
                                                        }



                                                        break;
                                                    case "a":
                                                        $keterangan="Tepat Waktu";
                                                        break;


                                                }




                                                break;
                                            default:
                                                $keterangan="Tidak Tepat Waktu";
                                                break;
                                        }





                                        break;

                                    case "a":
                                        $keterangan="Tepat Waktu";
                                        break;

                                    case "c":
                                        $keterangan="Tidak Tepat Waktu";
                                        break;
                                }





                                break;
                            case "smas":
                                switch ($request->pesantren){
                                    case "tidak":
                                        $keterangan="Tepat Waktu";
                                        break;
                                    case "iya":
                                        $keterangan="Tidak Tepat Waktu";
                                        break;
                                }


                                break;
                            default:
                                $keterangan="Tidak Tepat Waktu";
                                break;
                        }



                        break;
                    default:
                        $keterangan="Tidak Tepat Waktu";
                        break;
                }

                break;
            case "snmptn undangan":


                switch ($request->sekolah){

                    case "mas":

                        switch ($request->daerah){

                            case "jawa timur":
                                $keterangan="Tepat Waktu";
                                break;

                            default:
                                $keterangan="Tidak Tepat Waktu";
                                break;
                        }
                        break;
                    case "sman":
                        switch ($request->ip1){
                            case "b":
                                $keterangan="Tepat Waktu";
                                break;

                            default:
                                $keterangan="Tidak Tepat Waktu";
                                break;
                        }


                        break;
                    default:
                        $keterangan="Tidak Tepat Waktu";
                        break;

                }

                break;
            case "mandiri prestasi":

                $keterangan="Tidak Tepat Waktu";

                break;
            case "spmb-ptaIn":

                $keterangan="Tepat Waktu";

                break;

        }


        return view('hasil')->with('keterangan',$keterangan)
                                  ->with('input',$request);
    }
}
