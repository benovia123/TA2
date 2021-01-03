<?php

namespace App\Imports;

use App\rawData;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class RawDataImport implements ToModel,WithHeadingRow,WithChunkReading,WithBatchInserts
{
    public function model(array $row)
    {
        return new rawData([
            'year'=>$row['year']??'-',
            'month'=>$row['month']??'-',
            'section'=>$row['section']??'-',
            'category'=>$row['category']??'-',
            'advertiser'=>$row['advertiser']??'-',
            'mothercorp'=>$row['mother_corp']??'-',
            'product'=>$row['product']??'-',
            'tv'=>$row['tv']??0,
            'press'=>$row['press']??0,
            'magazine'=>$row['magazine']??0,
            'total'=>$row['total']??0,
        ]);
    }

    public function batchSize(): int
    {
        return 5000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }

}
