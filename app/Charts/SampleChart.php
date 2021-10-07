<?php

declare(strict_types=1);

namespace App\Charts;

use DateTime;
use App\Models\Balance;
use Chartisan\PHP\Chartisan;
use Illuminate\Http\Request;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class SampleChart extends BaseChart
{
    private function getTotalByType(string $tipo, int $month)
    {
        $fecha = new DateTime();
        $fecha->setDate(intval(date("Y")), intval(date("m"))-$month, 1);

        $new_fecha = new DateTime();
        $new_fecha->setDate(intval(date("Y")), intval(date("m"))-$month+1, 0);
        
        $ac = 0;
        $values = Balance::where('type', '=', $tipo)->get();
        
        foreach ($values as $val) {
            if($val->created_at >= $fecha && $val->created_at <= $new_fecha){

                $ac += $val->value;
            }
        }
        /* return $new_fecha->format('Y-m-d'); */
        return $ac;
    }

    public function handler(Request $request): Chartisan
    {
        return Chartisan::build()
            ->labels([date("Y-m")])
            ->dataset('Egresos', [$this->getTotalByType('egreso', 0)])
            ->dataset('Ingresos', [$this->getTotalByType('ingreso', 0)]);
    }
}
