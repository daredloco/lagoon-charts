<?php

namespace Helvetiapps\LagoonCharts\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class CandlestickChart extends Component
{
    public $title = "NO_TITLE";
    public $chartData = [];

    public $height;
    public $width;
    
    public $options; 

    public $chartId;
    public $random;

    public $optionsArray;
    
    public $printable = false;

    public function mount(){
        $newOptions = [
            'title' => $this->title,
        ];

        if(!is_null($this->height)){
            $newOptions["height"] = $this->height;
        }
        if(!is_null($this->width)){
            $newOptions["width"] = $this->width;
        }
        if(!is_null($this->options) && is_array($this->options)){
            foreach($this->options as $key => $value){
                $newOptions[$key] = $value;
            }
        }

        $this->optionsArray = $newOptions;
    }

    public function render()
    {
        $this->random = Carbon::now()->timestamp;
        return view('lagoon::livewire.line-chart');
    }
}
