<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Mail;
use App\Mail\Cotizacion;

use Livewire\Component;

class FormularioCotizacion extends Component
{

    public $name;
    public $email;
    public $phone;
    public $message;
    public $formSubmitted = false;

    public function submitForm()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Mail::to('paulot73@hotmail.com')
            ->send(new Cotizacion($validatedData));
        // Limpiar los campos después de procesar el formulario
        $this->reset(['name', 'email', 'phone', 'message']);
        $this->formSubmitted = true;
        // Emitir un mensaje de éxito
        session()->flash('message', '¡Formulario enviado con éxito y correo electrónico enviado!');

        /* Formulario::create($validatedData);
        return redirect()->to('/'); */
    }


    public function render()
    {
        return view('livewire.formulario-cotizacion');
    }
}
