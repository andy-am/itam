


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>



{{ Html::script("/admin/libs/DataTables/datatables.min.js") }}

<!-- Bootstrap -->
{{ Html::script("/admin/js/bootstrap.min.js") }}


<!-- AdminLTE App -->
{{ Html::script("/admin/js/AdminLTE/app.js") }}


{{ Html::script("/admin/js/main.js") }}
{{ Html::script("/admin/js/notify.js") }}


{{ Html::script("/admin/js/plugins/ckeditor/ckeditor.js") }}

{{ Html::script("/admin/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") }}

{{ Html::script("/admin/js/modals/modals.js") }}

{{--{{ Html::script("/admin/js/plugins/moris/moris.js") }}
{{ Html::script("/admin/js/plugins/moris/moris.min.js") }}--}}

@yield('scripts')