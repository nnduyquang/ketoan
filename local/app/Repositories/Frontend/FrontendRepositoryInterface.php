<?php

namespace App\Repositories\Frontend;

interface FrontendRepositoryInterface
{

    public function getFrontend();

    public function getAllDichVu();

    public function getPostDetail($path);

    public function getPageGioiThieu();

    public function getPageBaoGia();

    public function getAllTinTuc();

    public function getFrontendCommon();

    public function getAllMenuFrontend();
}