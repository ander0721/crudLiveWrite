<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Product;

class ProductComponent extends Component
{
    use WithPagination;

    public $name, $description, $selected_id;
    public $updateMode = false;

    public function render()
    {
        $products = Product::paginate(5);

        return view('livewire.products.component', ['products' => $products]);
    }

    private function resetInput()
    {
        $this->name = null;
        $this->description = null;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:5',
            'description' => 'required|min:5'
        ]);

        Product::create([
            'name' => $this->name,
            'description' => $this->description
        ]);

        $this->resetInput();

    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        $this->selected_id = $id;
        $this->name = $product->name;
        $this->description = $product->description;

        $this->updateMode = true;

    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required|min:5',
            'description' => 'required|min:5'
        ]);

        if ($this->selected_id) {
            $product = Product::find($this->selected_id);

            $product->update([
                'name' => $this->name,
                'description' => $this->description
            ]);

            $this->resetInput();
            $this->updateMode = false;
        }

    }

    public function destroy($id)
    {
        if ($id) {
            $product = Product::where('id', $id);
            $product->delete();
        }
    }
}
