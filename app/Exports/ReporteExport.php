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



        public function collection($fchInicio, $fchFin)
        {
            $this->fchInicio = date($fchInicio);
            $this->fchFin = date($fchFin);
            return DB::table('incidencias')
                        ->whereBetween('incidencias.fechaInicio', [$this->fchInicio, $this->fchFin])
                        ->get();
        }
        public function headings(): array
        {
            return [
                'ID Incidencia',
                'Nombre Cliente',
                'Fecha de la Incidencia',
                'Email Cliente',
                'Nivel de Urgencia',
                'Tipo de Averia',
                'ID Tecnico',
                'Nombre Tecnico',
                'Telefono Tecnico',
                'Equipo'
            ];
        }
    }
?>
