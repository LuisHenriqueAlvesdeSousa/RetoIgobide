<?php
    namespace App\Exports;
    use Illuminate\Support\Facades\DB;
    use Carbon\Doctrine\DateTimeType;
    use Maatwebsite\Excel\Concerns\FromCollection;
    use Maatwebsite\Excel\Concerns\WithHeadings;

    class ReporteExport implements FromCollection, WithHeadings{
        /**
        * @return \Illuminate\Support\Collection
        */



        public function collection()
        {
            return DB::table('incidencias')->get();
        }
        public function headings(): array
        {
            return [
                'ID Incidencia',
                'Nombre Cliente',
                'Fecha Inicio de la Incidencia',
                'Fecha Fin de la Incidencia',
                'Email Cliente',
                'Descripcion',
                'ID Ascensor',
                'ID Tecnico',
                'ID Operador',
                'Nivel de Urgencia',
                'Tipo de Averia',
            ];
        }
    }
?>
