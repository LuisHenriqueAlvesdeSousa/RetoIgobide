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

        public function _constructor($fchInicio, $fchFin){
            $this->fchInicio = $fchInicio;
            $this->fchFin = $fchFin;
        }

        public function collection()
        {
            return DB::table('incidencias')
                        ->join('users', 'users.id', '=', 'tecnicos.user_id')
                        ->join('tecnicos', 'tecnicos.codigo', '=', 'incidencias.tecnico_id')
                        ->join('equipos', 'equipos.id', '=', 'tecnicos.equipo_id')
                        ->select(
                                 'incidencias.id',
                                 'incidencias.cliente', 
                                 'incidencias.fechaInicio', 
                                 'incidencias.email', 
                                 'incidencias.urgencia', 
                                 'incidencias.tipoAveria', 
                                 'users.id', 
                                 'users.name', 
                                 'users.telefono',
                                 'equipos.codPostal'
                                )
                        ->ordeby('tecnicos.equipo_id')
                        ->whereBetween('incidencias.fch', [$this->fchInicio, $this->fchFin])
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
