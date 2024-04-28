      <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
  <!-- Page level plugins -->
  <script src="{{ asset('admin_assets/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('admin_assets/js/local-script.js') }}"></script>

</html>
    <script type="text/javascript" src="{{ asset('admin_assets/richtexteditor/rte.js') }}"></script>
  <script type="text/javascript" src='{{ asset('admin_assets/richtexteditor/plugins/all_plugins.js') }}'></script>
  <script>
    var editor1cfg = {}
  var editor1cfg = {}
	editor1cfg.toolbar = "basic";
// 	var editor1 = new RichTextEditor("#editor", editor1cfg);
//   var editor2 = new RichTextEditor("#editor-two", editor1cfg);
//   var editor3 = new RichTextEditor("#editor-three", editor1cfg);
  var editor = document.getElementById("editor");
  if(editor) {
    var editor1 = new RichTextEditor("#editor", editor1cfg);
  }
  
  var editor2cfg = {}
	editor2cfg.toolbar = "basic";
  var editorTwo = document.getElementById("editor-two");
  if(editorTwo) {
    var editor2 = new RichTextEditor("#editor-two", editor2cfg);
  }
  var editor3cfg = {}
	editor3cfg.toolbar = "basic";
  var editorThree = document.getElementById("editor-three");
  
  if(editorThree) {
    var editor3 = new RichTextEditor("#editor-three", editor3cfg);
  }
  var editor4cfg = {}
	editor4cfg.toolbar = "basic";
  var editorFour = document.getElementById("editor_edit1");
  
  if(editorFour) {
    var editor4 = new RichTextEditor("#editor_edit1", editor4cfg);
  }
  var editor5cfg = {}
	editor5cfg.toolbar = "basic";
  var editorFive = document.getElementById("editor_edit2");
  if(editorFive) {
    var editor5 = new RichTextEditor("#editor_edit2", editor5cfg);
  }
  var editor6cfg = {}
	editor6cfg.toolbar = "basic";
  var editorSix = document.getElementById("editor_edit3");
  if(editorSix) {
    var editor6 = new RichTextEditor("#editor_edit3", editor6cfg);
  }
    //editor1.setHTMLCode("Use inline HTML or setHTMLCode to init the default content.");
  </script>

</html>