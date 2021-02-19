<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {

        $rating = 0;
        if ($this->rating->count() > 0)
            $rating = round($this->rating->sum('point') / $this->rating->count(),2);
        return [
            'title' => $this->title,
            'body' => $this->body,
            'rating' => $rating,
            'author' => $this->author->name,
        ];
    }
}
