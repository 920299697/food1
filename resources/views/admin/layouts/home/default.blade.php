<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("title","首页")</title>

    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>

</head>

<body>
@include("admin.layouts.home._header")
@include("admin.layouts.home._errors")
@include("admin.layouts.home._msg")

<div class="container-fluid">
    @yield("content")
    @include('vendor.ueditor.assets')
</div>

<script src="/bootstrap/js/jquery.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
@include("admin.layouts.home._footer")
</html>