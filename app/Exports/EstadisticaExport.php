<?php
    namespace App\Exports;
    use App\Models\Reportes;
    use Illuminate\Support\Facades\DB;
    use Carbon\Doctrine\DateTimeType;
    use Maatwebsite\Excel\Concerns\FromCollection;
    use Maatwebsite\Excel\Concerns\WithHeadings;

    class EstadisticaExport implements FromCollection, WithHeadings{
        /**
        * @return \Illuminate\Support\Collection
        */



        public function collection()
        {
            return DB::table('users')
                        ->get();
        }
        public function headings(): array
        {
            return [
                'ID Usuario',
                'Nombre',
                'Email',
                'Fecha registro',
                'Contraseña',
                'Fecha nacimiento',
                'Telefono',
                'DNI',
                'Token'
            ];
        }
    }

