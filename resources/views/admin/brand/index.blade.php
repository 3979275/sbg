@extends('admin.layout.layout')

@section('container')

					<div class="row">
						<div class="col-lg-12 col-sm-12 col-xs-12">
							<div class="widget radius-bordered">
								<div class="widget-header bordered-bottom bordered-sky">
									<i class="widget-icon fa fa-list"></i>
									<span class="widget-caption">{{ $title }}</span>
									<div class="widget-buttons">
										<a href="#" data-toggle="maximize">
											<i class="fa fa-expand pink"></i>
										</a>
										<a href="#" data-toggle="collapse">
											<i class="fa fa-minus blue"></i>
										</a>
										<a href="#" data-toggle="dispose">
											<i class="fa fa-times darkorange"></i>
										</a>
									</div><!--Widget Buttons-->
								</div><!--Widget Header-->

								<div class="widget-body">
									<div class="table-toolbar">
										<a href="/Admin/Brand/create" class="btn btn-default shiny">
											<i class="fa fa-plus success"></i>
											新增品牌
										</a>
										<a href="javascript:void(0);" class="btn btn-default shiny" id="del-all">
											<i class="fa fa-remove danger"></i>
											删除全部
										</a>

										<div class="btn-group pull-right">
											<a href="javascript:void(0);" target="_blank" class="btn btn-default">前台首页</a>
											<a href="javascript:void(0);" class="btn btn-default">模板下载</a>
										</div>
									</div>

									<div id="editabledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
										<div class="DTTT btn-group">
											<a class="btn btn-default DTTT_button_print" id="ToolTables_editabledatatable_1" title="View print view" tabindex="0" aria-controls="editabledatatable">
												<span>打印</span>
											</a>
											<a class="btn btn-default DTTT_button_collection" id="ToolTables_editabledatatable_2" tabindex="0" aria-controls="editabledatatable">
												<span>导出 <i class="fa fa-angle-down"></i></span>
											</a>
										</div>

										<div id="editabledatatable_filter" class="dataTables_filter">
											<form action="" method="get">
												<label>
													<input type="search" name="search" class="form-control input-sm" placeholder="" aria-controls="editabledatatable">
												</label>
											</form>
										</div>
										<div class="dataTables_length" id="editabledatatable_length">
											<label>
												<select name="editabledatatable_length" aria-controls="editabledatatable" class="form-control input-sm">
													<option value="5">5</option>
													<option value="10">10</option>
													<option value="15">15</option>
													<option value="20">20</option>
													<option value="30">30</option>
												</select>
											</label>
										</div>
										<table class="table table-striped table-hover table-bordered dataTable no-footer" id="editabledatatable" role="grid" aria-describedby="editabledatatable_info">
											<thead class="bordered-darkorange">
												<tr role="row">
													<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 0.2%;">
														<label style="margin-bottom: 0;">
															<input type="checkbox" class="colored-success checkall">
															<span class="text"></span>
														</label>
													</th>
													<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 1%;">
														ID
													</th>
													<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 2%;">
														品牌LOGO
													</th>
													<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 3%;">
														中文名称
													</th>
													<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 3%;">
														英文名称
													</th>
													<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 6%;">
														品牌简介
													</th>
													<th class="sorting" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="order : activate to sort column descending" style="width: 1%;" aria-sort="">
														排序
													</th>
													<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 1%;">
														是否显示
													</th>
													<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 3%;">
														操作
													</th>
												</tr>
											</thead>

											<tbody>

												@if ($datas)
													@foreach ($datas as $k => $v)
													<tr role="row" class="odd">
														<td>
															<label>
																<input type="checkbox" class="colored-success checks" value="{{ $v->id }}">
																<span class="text"></span>
															</label>
														</td>
														<td class="center ">{{ $k }}</td>
														<td class="sorting_1">{{ $v->id }}</td>
														<td class="center ">{{ $v->id }}</td>
														<td class="center ">{{ $v->id }}</td>
														<td class="center ">{{ $v->id }}</td>
														<td class="center ">{{ $v->id }}</td>
														<td class="center ">{{ $v->id }}</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-magenta shiny btn-xs view" data-id="{{ $v->id }}">
																<i class="fa fa-neuter"></i> 详情
															</a>
															<a href="Product/{{ $v->id }}/edit" class="btn btn-info shiny btn-xs edit">
																<i class="fa fa-edit"></i> 编辑
															</a>
															<a href="javascript:void(0);" class="btn btn-danger shiny btn-xs delete" data-id="{{ $v->id }}" data-page="{$p}">
																<i class="fa fa-trash-o"></i> 删除
															</a>
														</td>
													</tr>
													@endforeach
												@else
													<tr role="row" class="odd">
														<td class="center" colspan="9">暂无数据，请添加数据！</td>
													</tr>
												@endif

											</tbody>
										</table>
										<div class="row DTTTFooter">
											<div class="col-sm-6">
												<div class="dataTables_info" id="editabledatatable_info" role="status" aria-live="polite">共 {{ $count }} 条记录</div>
											</div>
											<div class="col-sm-6">
												{{ $page }}
											</div>
										</div>
									</div>
								</div><!--Widget Body-->
							</div><!--Widget-->
						</div>
					</div>

@endsection