@extends('admin.layout.layout')

@section('container')
					<div class="row">
						<div class="col-xs-12 col-md-12">
							<div class="widget">
								<div class="widget-header bordered-bottom bordered-sky">
									<span class="widget-caption">文章列表</span>
									<div class="widget-buttons">
										<a href="#" data-toggle="maximize">
											<i class="fa fa-expand pink"></i>
										</a>
										<a href="#" data-toggle="collapse">
											<i class="fa fa-minus blue"></i>
										</a>
										<a href="#" data-toggle="dispose">
											<i class="fa fa-times danger"></i>
										</a>
									</div>
								</div>
								<div class="widget-body">
									<div class="table-toolbar">
										<a id="editabledatatable_new" href="/Admin/Article/create" class="btn btn-default shiny">
											<i class="fa fa-plus azure"></i>
											新增文章
										</a>
										<a id="editabledatatable_new" href="javascript:void(0);" class="btn btn-default shiny">
											<i class="fa fa-remove danger"></i>
											删除全部
										</a>
										<div class="btn-group pull-right">
											<a class="btn btn-default" href="javascript:void(0);">Tools</a>
											<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><i class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu dropdown-default">
												<li>
													<a href="javascript:void(0);">Action</a>
												</li>
												<li>
													<a href="javascript:void(0);">Another action</a>
												</li>
												<li>
													<a href="javascript:void(0);">Something else here</a>
												</li>
												<li class="divider"></li>
												<li>
													<a href="javascript:void(0);">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<div id="editabledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
										<!-- <div class="DTTT btn-group">
											<a class="btn btn-default DTTT_button_print" id="ToolTables_editabledatatable_1" title="View print view" tabindex="0" aria-controls="editabledatatable">
												<span>Print</span>
											</a>
											<a class="btn btn-default DTTT_button_collection" id="ToolTables_editabledatatable_2" tabindex="0" aria-controls="editabledatatable">
												<span>Save <i class="fa fa-angle-down"></i></span>
											</a>
										</div> -->
										<div id="editabledatatable_filter" class="dataTables_filter">
											<label>
												<input type="search" class="form-control input-sm" placeholder="" aria-controls="editabledatatable">
											</label>
										</div>
										<!-- <div class="dataTables_length" id="editabledatatable_length">
											<label>
												<select name="editabledatatable_length" aria-controls="editabledatatable" class="form-control input-sm">
													<option value="5">5</option>
													<option value="15">15</option>
													<option value="20">20</option>
													<option value="100">100</option>
													<option value="-1">All</option>
												</select>
											</label>
										</div> -->
										<table class="table table-striped table-hover table-bordered dataTable no-footer" id="editabledatatable" role="grid" aria-describedby="editabledatatable_info">
											<thead class="bordered-darkorange">
												<tr role="row">
													<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 27px;">
														<label>
															<input type="checkbox">
															<span class="text"></span>
														</label>
													</th>
													<th class="sorting_asc" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending">
														文章标题
													</th>
													<th class="sorting" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending">
														作者
													</th>
													<th class="sorting" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="Points: activate to sort column ascending">
														分类
													</th>
													<th class="sorting" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="Notes: activate to sort column ascending">
														标签
													</th>
													<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="">创建时间
													</th>
													<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="">操作
													</th>
												</tr>
											</thead>

											<tbody>
												<tr role="row" class="odd">
													<td>
														<label>
															<input type="checkbox">
															<span class="text"></span>
														</label>
													</td>
													<td class="sorting_1">alex</td>
													<td>Alex Nilson</td>
													<td>1234</td>
													<td class="center ">power user</td>
													<td>
														2017-10-10 10:10:10
													</td>
													<td>
														<a href="/Admin/Article/detail/id" title="详情"><i class="fa fa-file-text-o warning"></i></a>｜
														<a href="/Admin/Article/id/edit" title="编辑"><i class="fa fa-edit info"></i></a>｜
														<a href="javascript:;" title="删除"><i class="fa fa-trash-o danger"></i></a>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td>
														<label>
															<input type="checkbox">
															<span class="text"></span>
														</label>
													</td>
													<td class="sorting_1">
														nick12
													</td>
													<td>
														Nick Roberts
													</td>
													<td>
														232
													</td>
													<td class="center ">
														power user
													</td>
													<td>
														2017-11-11 11:11:11
													</td>
													<td>
														<a href="/Admin/Article/detail/id" title="详情"><i class="fa fa-file-text-o warning"></i></a>｜
														<a href="/Admin/Article/id/edit" title="编辑"><i class="fa fa-edit info"></i></a>｜
														<a href="javascript:;" title="删除"><i class="fa fa-trash-o danger"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
										<div class="row DTTTFooter">
											<div class="col-sm-6">
												<div class="dataTables_info" id="editabledatatable_info" role="status" aria-live="polite">Showing 1 to 5 of 6 entries</div>
											</div>
											<div class="col-sm-6">
												<div class="dataTables_paginate paging_bootstrap" id="editabledatatable_paginate">
													<ul class="pagination">
														<li class="prev disabled">
															<a href="#">Prev</a>
														</li>
														<li class="active">
															<a href="#">1</a>
														</li>
														<li>
															<a href="#">2</a>
														</li>
														<li class="next">
															<a href="#">Next</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
@endsection

@section('javascript')
@endsection
