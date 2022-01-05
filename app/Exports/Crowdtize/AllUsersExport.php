<?php

namespace App\Exports\Crowdtize;

use App\Models\Crowdtize\RegistredUser;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AllUsersExport implements FromCollection,WithHeadings
{
    use Exportable;

    private $query;
    public function __construct($query=null)
    {

        $this->query=$query;

    }


    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //




        if($this->query!=null){
            $date=explode('/',$this->query['for']);

            $out = RegistredUser::whereDate('created_at','=',now()->setDate($date[2],$date[1],$date[0]))->get();

        }else{
            $out=    RegistredUser::all();
        }


        return  $out??collect([]);
    }



    public function headings(): array
    {
        return ($this->collection()->first()!=null)?array_keys($this->collection()->first()->toArray()):[];
        // TODO: Implement headings() method.
    }
}
