<?php

namespace App\Repositories\Frontend;


use App\CategoryItem;
use App\Config;
use App\Menu;
use App\Post;


class FrontendRepository implements FrontendRepositoryInterface
{
    public function getFrontend()
    {
        $data = [];
        $category = new CategoryItem();
        $services = $category->getAllPostsByCategory('dich-vu', 6);

        foreach ($services as $key => $item) {
            $item->description = loai_bo_html_tag($item->description);
        }

        $data['services'] = $services;

        return $data;
    }

    public function getAllDichVu()
    {
        $data = [];
        $category = new CategoryItem();
        $services = $category->getAllPostsByCategory('dich-vu', NO_LIMIT);
        foreach ($services as $key => $item) {
            $item->description = loai_bo_html_tag($item->description);
        }
        $data['services'] = $services;
        return $data;
    }

    public function getAllTinTuc()
    {
        $data = [];
        $category = new CategoryItem();
        $news = $category->getAllPostsByCategory('tin-tuc', NO_LIMIT);
        foreach ($news as $key => $item) {
            $item->description = loai_bo_html_tag($item->description);
        }
        $data['news'] = $news;
        return $data;
    }


    public function getPostDetail($path)
    {
        $data = [];
        $post = new Post();
        $post = $post->getPostByPath($path);
        $data['post'] = $post;
        return $data;
    }

    public function getPageGioiThieu()
    {
        $data = [];
        $post = new Post();
        $post = $post->getPostByPath('gioi-thieu');
        $data['post'] = $post;
        return $data;
    }

    public function getPageBaoGia()
    {
        $data = [];
        $post = new Post();
        $post = $post->getPostByPath('bang-gia');
        $data['post'] = $post;
        return $data;
    }


    public function getFrontendCommon()
    {
        $data = [];
        $category = new CategoryItem();
        $config = new Config();
        $post = new Post();
        $services = $category->getAllPostsByCategory('dich-vu', 0);
        $camnangs = $category->getAllPostsByCategory('cam-nang-doanh-nghiep', 6);
        foreach ($camnangs as $key => $item) {
            $item->description = loai_bo_html_tag($item->description);
        }
        $news = $category->getAllPostsByCategory('tin-tuc', 10);
        $servicesFooter = $category->getAllPostsByCategory('dich-vu', 10);
        $introduceFooter=$post->getPostById(1);
        $dataConfig = $config->getConfigByListName(['config-company-name','config-phone-1','config-phone-2','config-phone','config-address', 'config-email', 'config-contact', 'logo-config','script-js-header','script-js-body']);
        $data['services'] = $services;
        $data['camnangs'] = $camnangs;
        $data['news'] = $news;
        $data['servicesFooter'] = $servicesFooter;
        $introduceFooter->description=loai_bo_html_tag($introduceFooter->description);
        $data['introduceFooter']=$introduceFooter;
        foreach ($dataConfig as $key => $item) {
            if ($item->name == 'config-phone')
                $data['hotline'] = $item->content;
            if ($item->name == 'config-company-name')
                $data['company-name'] = $item->content;
            if ($item->name == 'config-email')
                $data['email'] = $item->content;
            if ($item->name == 'config-address')
                $data['address'] = $item->content;
            if ($item->name == 'config-contact')
                $data['contact'] = $item->content;
            if ($item->name == 'logo-config')
                $data['logo'] = $item->content;
            if ($item->name == 'script-js-header')
                $data['script-js-header'] = $item->content;
            if ($item->name == 'script-js-body')
                $data['script-js-body'] = $item->content;
            if ($item->name == 'config-phone-1')
                $data['phone-1'] = $item->content;
            if ($item->name == 'config-phone-2')
                $data['phone-2'] = $item->content;
        }
        return $data;
    }

    public function getAllMenuFrontend()
    {
        $menu = new Menu();
        $data = $menu->getAllOrderBy('order');
        return $data;
    }

    public function getSearch($request)
    {
        $data = [];
        $post=new Post();
        $data['posts']=$post->searchAllPost($request);
        return $data;
    }


}