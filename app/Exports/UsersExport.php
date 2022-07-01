<?php

namespace App\Exports;

use App\Models\Admin;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Admin::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'Nome',
            'Email',
            'Senha',
            'Link',
            'Aluno',
            'Admin',
            'Criado em',
            'Atualizado em',
            'ID Curso'
        ];
    }
}
