<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Interview;

class ImportController extends Controller
{
    public function show()
    {
    	return view('import');
    }

    public function import(Request $request)
    {
    	if ($request->hasFile('pvb_file')) {
		    if ($request->file('pvb_file')->isValid()) {
				
				DB::table('interviews')->truncate();
		    	$lines = preg_split("/\\r\\n|\\r|\\n/", file_get_contents($request->pvb_file->path()));
				
				foreach($lines as $line)
				{
					$line = explode(";", $line);
					if(!empty($line[1]) && $line[1] != 'Naam' && !empty($line[6]) && !empty($line[9]))
					{
						$interview = new Interview();
						if(preg_match("/ (.+) \s+ ([a-z]{1,2}[0-9]{5,6}) /ix", $line[1], $matches))
						{
							$interview->student_id = $matches[2];
							$interview->student_name = $matches[1];
						}
						else
						{
							$interview->student_name = $line[1];
						}

						$interview->case_number = $line[4];
						$interview->kerntaak = $line[5];
						$interview->date = date("Y-m-d", strtotime($line[6]));
						$interview->time = $line[7];
						$interview->room = $line[8];
						$interview->assessor_1 = $line[9];
						$interview->assessor_2 = $line[10];

						$interview->save();
					}
				}
				
				return redirect()->route('home');

			}
		}
    }
}
