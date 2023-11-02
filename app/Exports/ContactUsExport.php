<?php

namespace App\Exports;

use App\Models\ContactUs;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ContactUsExport implements FromCollection, WithHeadings, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ContactUs::get(['name','email','number','gender','dob','city','country','message','age_group']);
    }
    public function headings(): array
    {
        // Replace these headings with your desired field titles
        return [
            'Name',
            'Email',
            'Contact Number',
            'Gender',
            'Date-of-birth',
            'City',
            'Country',
            'Message',
            'age-group',
        ];
    }
    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}
