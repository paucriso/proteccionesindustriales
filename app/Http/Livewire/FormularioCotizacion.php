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
    public $items;
    public $titulo;

    public function submitForm()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);
        Mail::to('formulario@proteccionesdeacero.com.mx')
            ->send(new Cotizacion($validatedData, $this->items));
        // Limpiar los campos después de procesar el formulario
        $this->reset(['name', 'email', 'phone', 'message']);
        $this->formSubmitted = true;
        // Emitir un mensaje de éxito
        session()->flash('message', '¡Formulario enviado con éxito');

        /* Formulario::create($validatedData);
        return redirect()->to('/'); */
    }


    public function render()
    {
        return view('livewire.formulario-cotizacion');
    }
}
