<?php

Namespace App\Validation;

class ForPlan
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'type' => 'required',
            'price' => 'required',
            'duration' => 'required',
            // 'free_space' => 'required',
            'number_of_agents' => 'required',
            'number_of_proprties' => 'required',
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
