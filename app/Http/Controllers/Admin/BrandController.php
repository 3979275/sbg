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

		$datas = \App\Model\Brand::all();
		$count = 0;
		$page = '';
		return view('admin.brand.index', [
			'datas' => $datas,
			'count' => $count,
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
	 * [store description]
	 * @return [type] [description]
	 */
	public function store(Request $Request)
	{
		var_dump($Request->all());
	}

	/**
	 * [edit description]
	 * @return [type] [description]
	 */
	public function edit($id)
	{
		$title = '编辑品牌';
		$data = \App\Model\Brand::find($id);
		return view('admin.brand.edit', [
			'data' => $data,
			'title' => $title
		]);
	}

	public function update($id)
	{

	}

	/**
	 * [delete description]
	 * @return [type] [description]
	 */
	public function delete($id)
	{
		$Brand = \App\Model\Brand::find($id);
		$Brand->delete();
	}
}
