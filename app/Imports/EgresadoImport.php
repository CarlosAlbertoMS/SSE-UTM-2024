<?php
namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;

class EgresadoImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        return $rows; // Solo devolvemos los datos sin guardar nada en Laravel
    }

    public function headingRow(): int
    {
        return 1; // La primera fila del Excel son los encabezados
    }
}
