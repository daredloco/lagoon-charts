<?php

namespace Helvetiapps\LagoonCharts\DataTables;

use Carbon\Carbon;

class GanttChartTable{
    private $data = [];

    public function addTask(string $id, string $name, Carbon $start, Carbon $end, int $duration, int $completion, string $dependencies){
        array_push($data, [
            $id,
            $name,
            "new Date('".$start->year."','".$start->month."','".$start->day."')",
            "new Date('".$end->year."','".$end->month."','".$end->day."')",
            $duration,
            $completion,
            $dependencies
        ]);
    }

    public function __toString()
    {
        return json_encode($this->data);
    }

    public function toArray():array{
        return $this->data;
    }

}