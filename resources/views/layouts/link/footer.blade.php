  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
  <!-- Page level plugins -->
  <script src="{{ asset('admin_assets/vendor/chart.js/Chart.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('admin_assets/richtexteditor/rte.js') }}"></script>
  <script type="text/javascript" src='{{ asset('admin_assets/richtexteditor/plugins/all_plugins.js') }}'></script>
  <script>
    var editor1cfg = {}
	editor1cfg.toolbar = "basic";
	var editor1 = new RichTextEditor("#editor", editor1cfg);
  var editor2 = new RichTextEditor("#editor-two", editor1cfg);
  var editor3 = new RichTextEditor("#editor-three", editor1cfg);
    //editor1.setHTMLCode("Use inline HTML or setHTMLCode to init the default content.");
  </script>

</html>