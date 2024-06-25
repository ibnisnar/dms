<?php

namespace App\Livewire\Document;

use Livewire\Component;
use App\Models\Document;

class ViewDocument extends Component
{
    public $docid;
    public $homeFolder;
    public $selectedDocument;

    public function mount()
    {
        $this->docid = request()->query('docid');
        $this->selectedDocument = Document::where('id', $this->docid)->with('folder','contents')->first();
    }

    public function render()
    {
        return view('livewire.document.view-document', ['selectedDocument' => $this->selectedDocument])->layout('layouts.app');
    }
}
