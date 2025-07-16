<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\FAQCategory;
use App\Models\TagEntity;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    private $data;
    public function index(Request $request)
    {
        // $faqs = FAQ::with('category')->get();
        $categories = FAQCategory::get();

        foreach ($categories as $key => $category) {
            $category->category_faqs = FAQ::where('post_category', $category->id)->get();
        }

        $this->data = [
            'faqs_categories' => $categories
        ];
        return view('theme02.faqs.home', $this->data);
    }
}
