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
                        ->join('user', 'user.id', '=', 'incidencia.idTecnico')
                        ->join('tecnico', 'tecnico.idUsuario', '=', 'user.id')
                        ->join('equipo', 'equipo.id', '=', 'tecnico.idEquipo')
                        ->select(
                                 'incidencia.id',
                                 'incidencia.nombreCliente', 
                                 'incidencia.fch', 
                                 'incidencia.emailCliente', 
                                 'incidencia.urgencia', 
                                 'incidencia.tipoAveria', 
                                 'user.id', 
                                 'user.nombre', 
                                 'user.telefono',
                                 'equipo.cp'
                                )
                        ->ordeby('tecnico.idEquipo')
                        ->whereBetween('incidencia.fch', [$this->fchInicio, $this->fchFin])
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