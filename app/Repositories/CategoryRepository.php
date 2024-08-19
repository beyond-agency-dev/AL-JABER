<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function store($data)
    {
        $this->validateData($data);

        $category =  Category::create([
            'name' => $data['name'],
            'parent_id' => $data['parent_id'] ?? null,
            'description' => $data['description'] ?? null,
        ]);

        if ((isset($data['thumbnail']) && $data['thumbnail'])) {
            $path = $data['thumbnail']->store('thumbnails', 'public');
            $category->thumbnail = $path;
            $category->save();
        }

        return $category;
    }

    public function getAllCategories()
    {
        return Category::get();
    }

    public function getActiveCategories()
    {
        return Category::where('status', true)->get();
    }

    public function validateData($data, $for_update = false)
    {
        validator(
            $data,
            [
                'name' => 'required|max:100',
            ],
        )->validate();
    }
}
