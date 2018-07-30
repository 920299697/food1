@extends("admin.layouts.admin.default")
@section("title","活动管理")
@section("content")
    <br>
      <a href="{{route('activity.add')}}" class="btn btn-info">添加活动</a><br><br>
    <table class="table tab-content">
        <tr>
            <th>活动编号</th>
            <th>标题</th>
            <th>内容</th>
            <th>开始时间</th>
            <th>结束时间</th>
            <th>操作</th>
        </tr>
        @foreach($actives as $active)
            <tr>
                <td>{{$active->id}}</td>
                <td>{{$active->title}}</td>
                <td>{{$active->content}}</td>
                <td>{{$active->start_time}}</td>
                <td>{{$active->end_time}}</td>
                <td>
                    <a href="{{route('activity.edit',$active)}}" class="btn btn-default">编辑</a>
                    <a href="{{route('activity.del',$active)}}" class="btn btn-danger">删除</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{$actives->links()}}
@endsection