<?php
    namespace App\Exports;
    use App\Models\Reportes;
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
            return DB::table('operador')
                        ->join('user', 'user.id', '=', 'operador.idUsuario')
                        ->join('incidencia', 'incidencia.idUsuario', '=', 'user.id')
                        ->select(
                                 'user.id', 
                                 'user.nombre', 
                                 'user.telefono'
                                )
                        ->groupBy('incidencia.idOperador')
                        ->ordeby('operador.idUsuario')
                        ->whereBetween('incidencia.fch', [$this->fchInicio, $this->fchFin])
                        ->get();
        }
        public function headings(): array
        {
            return [
                'ID Operario',
                'Nombre Operario',
                'Telefono Operario'
            ];
        }
    }

