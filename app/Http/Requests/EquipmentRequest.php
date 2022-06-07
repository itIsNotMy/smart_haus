<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Type;

class EquipmentRequest extends FormRequest
{
    private $regx = [
            "N" => "[0-9]",
            "A" => "[A-Z]",
            "a" => "[a-z]",
            "X" => "[A-Z0-9]",
            "Z" => "[-|_|@]"
    ];
    
    private $outputRegex;

    public function authorize()
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $type = Type::where('name', $this->typeName)->firstOrFail();
        
        $serialMaskArray = str_split($type->mask_sireal_number);
        
        $outputRegex = "/^";
        
        foreach ($serialMaskArray as $char) {
            $outputRegex .= $this->regx[$char];
        }

        $outputRegex .= "/";

        $this->outputRegex = $outputRegex;

        $serialNumberArray = preg_split("/[\s,]+/", $this->serialNumber);

        $this->merge(['serialNumber' => $serialNumberArray]);
        
        if ($this->method() == 'POST') {
            foreach($serialNumberArray as $key=>$serialNumber) {
                $value[$key] = ['code_type'=>$type->id, 'sireal_number'=>$serialNumber];
            } 
        }else {
            foreach($serialNumberArray as $serialNumber) {
                $value = ['code_type'=>$type->id, 'sireal_number'=>$serialNumber];
            }
        }

            $this->merge(['value' => $value]);
    }

    public function rules()
    {
        return [
             'typeName'=>'required',

             'serialNumber.*'=>['required','min:10','max:10','unique:equipments,sireal_number','regex:' . $this->outputRegex],
        ];
    }
}
