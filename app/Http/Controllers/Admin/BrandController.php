<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{
		$title = '品牌列表';
		$data = [
			'list' => [],
			'count' => 0
		];
		$page = '';
		return view('admin.brand.index', [
			'datas' => $data['list'],
			'count' => $data['count'],
			'page' => $page,
			'title' => $title
		]);
	}

	/**
	 * [detail description]
	 * @return [type] [description]
	 */
	public function detail()
	{
		$data = [];
		return view('admin.brand.detail', ['data' => $data]);
	}

	/**
	 * [create description]
	 * @return [type] [description]
	 */
	public function create()
	{
		$title = '新增品牌';
		return view('admin.brand.create', ['title' => $title]);
	}

	/**
	 * [edit description]
	 * @return [type] [description]
	 */
	public function edit()
	{
		$title = '编辑品牌';
		$data = [
			'zhname' => '四季优美',
			'cnname' => 'sijiyoumei',
			'sort' => 100,
			'origin_img' => '',
			'introduction' => '四季优美是XXX'
		];
		return view('admin.brand.edit', [
			'data' => $data,
			'title' => $title
		]);
	}

	/**
	 * [delete description]
	 * @return [type] [description]
	 */
	public function delete()
	{

	}
}
