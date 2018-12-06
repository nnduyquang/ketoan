<?php

namespace App\Http\Controllers;

use App\Repositories\Frontend\FrontendRepositoryInterface;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected $frontendRepository;

    public function __construct(FrontendRepositoryInterface $frontendRepository)
    {
        $this->frontendRepository = $frontendRepository;
    }

    public function getFrontend(){
        $data = $this->frontendRepository->getFrontend();
        return view('frontend.home.index', compact('data'));
    }
    public function getAllDichVu(){
        $data = $this->frontendRepository->getAllDichVu();
        return view('frontend.dichvu.index', compact('data'));
    }
    public function getPostDetail($path){
        $data = $this->frontendRepository->getPostDetail($path);
        return view('frontend.gioithieu.index', compact('data'));
    }
    public function getPageGioiThieu(){
        $data = $this->frontendRepository->getPageGioiThieu();
        return view('frontend.gioithieu.index', compact('data'));
    }
    public function getPageBaoGia(){
        $data = $this->frontendRepository->getPageBaoGia();
        return view('frontend.gioithieu.index', compact('data'));
    }
    public function getAllTinTuc(){
        $data = $this->frontendRepository->getAllTinTuc();
        return view('frontend.tintuc.index', compact('data'));
    }
    public function getSearch(Request $request){
        $data = $this->frontendRepository->getSearch($request);
        return view('frontend.list-search.index', compact('data'));
    }

}

