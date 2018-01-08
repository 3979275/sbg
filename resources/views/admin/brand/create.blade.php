@extends('admin.layout.layout')

@section('container')

					<div class="row">
						<div class="col-lg-12 col-sm-12 col-xs-12">
							<div class="widget">
								<div class="widget-header bordered-bottom bordered-lightred">
									<span class="widget-caption"><i class="widget-icon fa fa-plus"></i>品牌 Form</span>
								</div>
								<div class="widget-body">
									<div id="horizontal-form">
										<form class="form-horizontal" role="form" action="" method="POST" enctype="multipart/form-data">
											{{ csrf_field() }}
											<div class="form-group">
												<label for="inputzhname" class="col-sm-2 control-label no-padding-right">中文名称</label>
												<div class="col-sm-4">
													<input type="text" name="zhname" class="form-control" id="inputzhname" placeholder="品牌中文名称">
												</div>
												<div class="col-sm-4">
												</div>
											</div>

											<div class="form-group">
												<label for="inputcnname" class="col-sm-2 control-label no-padding-right">英文名称</label>
												<div class="col-sm-4">
													<input type="text" name="cnname" class="form-control" id="inputcnname" placeholder="品牌英文名称">
												</div>
												<div class="col-sm-4">
												</div>
											</div>

											<div class="form-group">
												<label for="LOGO" class="col-sm-2 control-label no-padding-right">品牌LOGO</label>
												<div class="col-sm-4">
													<span class="file-input btn btn-block btn-default btn-file">
														本地预览 <input type="file" name="origin_img" multiple="">
													</span>
												</div>
												<div class="col-sm-4">
												</div>
											</div>

											<div class="form-group">
												<label for="inputSort" class="col-sm-2 control-label no-padding-right">排序</label>
												<div class="col-sm-4">
													<input type="text" name="sort" class="form-control" id="inputSort" placeholder="50">
												</div>
												<div class="col-sm-4">
												</div>
											</div>

											<div class="form-group">
												<label for="textarea" class="col-sm-2 control-label no-padding-right">品牌简介</label>
												<div class="col-sm-4">
													<textarea class="form-control" name="introduction" rows="6" id="textarea" placeholder="品牌简介"></textarea>
												</div>
												<div class="col-sm-4">
												</div>
											</div>

											<div class="form-group">
												<div class="col-sm-offset-2 col-sm-10">
													<button type="submit" class="btn btn-blue shiny">添加</button>
													<button type="button" class="btn btn-default shiny">返回</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

@endsection