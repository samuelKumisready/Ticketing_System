<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryTable extends Component
{
    use WithPagination;

    public $categoryId;
    public $categoryname;

    protected $rules = [
        'categoryname' => 'required|min:5',
    ];

    public function render()
    {
        $categories = Category::all();
        return view('livewire.category-table', compact('categories'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        if($category){
        $this->categoryId = $id;
        $this->categoryname = $category->name;
        }
    }

    public function updateCategory()
    {
        $this->validate();
        $category = Category::find($this->categoryId);
        $category->name = $this->categoryname;
        $category->save();

        $this->reset(['categoryId', 'categoryname']);
       
    }
    public function deleteCategory($id)
    {
        // Find the category
        $category = Category::find($id);
        if ($category) {
            // Delete the category
            $category->delete();
        }
    }
}