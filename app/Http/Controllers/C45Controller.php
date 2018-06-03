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
      $reader = new \DataReader\CSV\Reader($filename);

      $temp=$reader->getClasses();
      $att=array_keys($reader->getClasses());
      // print generated tree
      //dd($temp[$att[0]]);

      return view('decisionTree')->with('tree',$treeString);
    }
}
