<?php

namespace App\Exports;

use App\Models\Amc;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AmcExport implements FromCollection, WithHeadings
{
   
    protected $query;
    public function __construct($query){
        $this->query = $query;
      
    } 

    public function collection()
    {
        return  collect($this->query);
    }
    
   
    public function headings() :array
    {
        return [
            'SerialNo', 
            'VendorName', 
            'PeriodFrom',
            'PeriodTo',
            'ServicePattern',
            'Department',
            'Section',
            'AssetType',
            'AssetName',
        ];
    }
}
