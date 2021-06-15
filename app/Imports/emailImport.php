<?php

namespace App\Imports;

// use App\Mail\mailBlast;

use App\Mail\mailBlast;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PDF;

class emailImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        // para leer el excel
        foreach ($collection as $col) {
            # code...
            // dd($col);

            if ($col['email_de_participante']) {
                # Si hay se envia ...

                // Creamos el pdf.
                // [0, 0, 685.98, 396.85]
                // $pdf = PDF::loadView('pdf.cert', $col)->setPaper('A4', 'landscape');
                $pdf = PDF::loadView('pdf.cert', $col)->setPaper([0, 0, 915.00, 700.00], 'portrait');
                $path = public_path() . "/storage/certs";
                $attachment = $col['nombre_de_participante'] . "-certificado.pdf";
                $pdf->save($path . "/" . $attachment);

                try {
                    //Envio de email...
                    Mail::to($col['email_de_participante'])
                         ->send(new mailBlast($attachment, $col));

                    echo $col['email_de_participante'] . " ✅️ \n";
                } catch (\Throwable $th) {
                    //throw $th;
                    echo $col['email_de_participante'] . " 🚫️ \n";
                }


                // Borramos el archivo
                Storage::disk('certs')->delete($attachment);

            // echo $col['email_de_participante'] . " ✅️ \n";
            } else {
                # No se envia ...
                echo "No Email: " . " 🚫️\n";
            }
        }
    }
}
