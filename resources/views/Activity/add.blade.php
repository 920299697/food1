@extends("admin.layouts.admin.default")
@section('title','添加活动')
@section('content')
    <form method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label>活动标题</label>
            <input type="text" class="form-control" name="title" placeholder="请输入活动标题">
        </div>

        <div class="form-group">
            <label>活动内容</label>
            <textarea name="content" class="form-control" height="100"></textarea>
        </div>
        <div class="form-group">
            <label>活动开始时间</label>
            <input type="date" name="start_time">
        </div>
        <div class="form-group">
            <label>活动结束时间</label>
            <input type="date" name="end_time">
        </div>

        <!-- 实例化编辑器 -->
        <script type="text/javascript">
            var ue = UE.getEditor('container');
            ue.ready(function() {
                ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
            });
        </script>

        <!-- 编辑器容器 -->
        <script id="container" name="content" type="text/plain"></script>

        <button type="submit" class="btn btn-default">提交</button>


    </form>
@endsection