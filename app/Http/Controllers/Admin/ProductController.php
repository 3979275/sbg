<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{
		$title = '商品列表';
		$data = [
			'list' => [],
			'count' => 0
		];
		$page = '';
		return view('admin.product.index', [
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
		return view('admin.product.detail', ['data' => $data]);
	}

	/**
	 * [create description]
	 * @return [type] [description]
	 */
	public function create()
	{
		$title = '新增商品';
		return view('admin.product.create', ['title' => $title]);
	}

	/**
	 * [edit description]
	 * @return [type] [description]
	 */
	public function edit()
	{
		return view('admin.product.edit');
	}

	/**
	 * [delete description]
	 * @return [type] [description]
	 */
	public function delete()
	{

	}
}