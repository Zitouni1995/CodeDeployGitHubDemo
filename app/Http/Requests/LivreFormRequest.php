<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivreFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           
                'titre'=>'required|min:5|max:50|unique:livres,titre,'.$this->livre,//.$id permet de mettre une exception pour pouvoir modifier le produit
                'auteur'=>'required|min:5|max:50',
                'editeur'=>'required|min:5|max:50',
                'resume'=>'nullable|max:255',
                'exemplaire'=>'requirer|numeric|between:5,100',
                'category_id'=>'required|numeric',
                'image'=>'nullable|mimes:png,jpg,jpeg,gif,bmp,svg',
               
            
        ];
    }
}
