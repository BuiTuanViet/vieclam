<?php

namespace App\Http\Controllers\Site;

use App\Entity\Category;
use App\Entity\Input;
use App\Entity\Language;
use App\Entity\Post;
use Illuminate\Support\Facades\Log;

/**
 * Created by PhpStorm.
 * User: Nam Handsome
 * Date: 10/19/2017
 * Time: 9:50 AM
 */
class PostController extends SiteController
{

    public function index($languageCurrent, $cate_slug, $slug_post) {
        $post = Post::where('slug', $slug_post)
            ->where('language', $languageCurrent)
            ->first();

        $languages = Language::orderBy('language_id', 'asc')->get();
        $indexLangCurrent = 0;
        foreach ($languages as $id => $language) {
            if ($language->acronym == $languageCurrent) {
                $indexLangCurrent = $id;
            }
        }
        $mainId = $post->post_id - $indexLangCurrent;
        $nameRoute = 'post';

        $category = Category::where('slug', $cate_slug)
            ->where('language', $languageCurrent)
            ->first();
        if (empty($category)) {
            $category = Category::where('slug', 'tin-tuc')
                ->where('language', $languageCurrent)->first();
            $arrayRoute =  $category->category_id;
        } else {
            $arrayRoute =  $category->category_id - $indexLangCurrent;
        }

        $activeMenu = route('post', ['languageCurrent' => $languageCurrent, 'cate_slug' => $cate_slug, 'post_slug' => $slug_post]);

        $category = $this->getCategory($post);
        $nextPost = $this->getNextPostDetail($post->post_id);
        $prevPost = $this->getPrevPostDetail($post->post_id);

        if ($post->template == 'default') {
            return view('site.default.single', compact('post', 'category', 'activeMenu', 'mainId', 'nameRoute', 'arrayRoute', 'nextPost', 'prevPost'));
        } else {
            return view('site.template.'.$post->template, compact('post', 'category', 'activeMenu', 'mainId', 'nameRoute', 'arrayRoute', 'nextPost', 'prevPost'));
        }
    }

    private function getCategory($post) {
        try {
            $category = Category::join('category_post', 'categories.category_id', '=', 'category_post.category_id')
                ->select('categories.*')
                ->where('category_post.post_id', $post->post_id)
                ->first();

            if (empty($category)) {
                $category = Category::first();
            }

            return $category;
        } catch (\Exception $e) {
            Log::error('http->site->PostController->getPostDetail: lỗi lấy dữ liệu post');

            return redirect('/');
        }
    }

    private function getNextPostDetail($id)
    {
        try {
            $postID = Post::where('post_id', ">", $id)
                ->where('post_type', 'post')
                ->min('post_id');

            $post = Post::find($postID);

            $inputs = Input::where('post_id', $post->post_id)->get();
            foreach ($inputs as $input) {
                $post[$input->type_input_slug] = $input->content;
            }

            return $post;
        } catch (\Exception $e) {
            Log::error('http->site->PostController->getPostDetail: lỗi lấy dữ liệu post');

            return null;
        }
    }

    private function getPrevPostDetail($id)
    {
        try {
            $postID = Post::where('post_id', "<", $id)
                ->where('post_type', 'post')
                ->max('post_id');

            $post = Post::find($postID);

            $inputs = Input::where('post_id', $post->post_id)->get();
            foreach ($inputs as $input) {
                $post[$input->type_input_slug] = $input->content;
            }

            return $post;
        } catch (\Exception $e) {
            Log::error('http->site->PostController->getPostDetail: lỗi lấy dữ liệu post');

            return null;
        }
    }
    
}
