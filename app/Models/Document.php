<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Document extends Model
{
    use HasFactory, Searchable;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}



// // control how the data is added to the Meilisearch server
// public function toSearchableArray(): array
// {
//     return [
//         'id' => (int) $this->title,
//         'title' => $this->title,
//         'slug' => $this->slug,
//         'content' => $this->content,
//         'published' => (bool) $this->published,
//         // making sure the category id is treated as a number
//         'category_id' => (int) $this->category_id,
//         'created_at' => $this->created_at,
//         'updated_at' => $this->updated_at,
//     ];
// }

// public function shouldBeSearchable(): bool
// {
//     return $this->published;
// }
