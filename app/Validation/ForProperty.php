<?php

Namespace App\Validation;

class ForProperty
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'user_id' => 'required',
            'name' => 'required',
            'type' => 'required',
            'contract_type' => 'required',
            'price' => 'required',
            'location' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'area' => 'required',
            'photo' => 'required',
            'description' => 'required',
        ];
    }

   /**
    * Error messages mappings.
    *
    * @param string|null $rule
    * @return array
    */
    public function messages($rule = null)
    {
        $messages = [

        ];

        return  $messages[$rule] ?? $messages;
    }



}
