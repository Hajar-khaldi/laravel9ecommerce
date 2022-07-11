
 <!-- Javascript -->
 <script src="{{ asset('backend/js/plugins/popper.min.js') }}"></script>
 <script src="{{ asset('backend/js/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

 <!-- Charts JS -->
 <script src="{{ asset('backend/js/plugins/chart.js/chart.min.js') }}"></script>
 <script src="{{ asset('backend/js/index-charts.js') }}"></script>

 <!-- Page Specific JS -->
 <script src="{{ asset('backend/js/app.js') }}"></script>

 <!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" integrity="sha512-Y+0b10RbVUTf3Mi0EgJue0FoheNzentTMMIE2OreNbqnUPNbQj8zmjK3fs5D2WhQeGWIem2G2UkKjAL/bJ/UXQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

<!-- Tempus Dominus JavaScript -->
<script src="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/js/tempus-dominus.js"
      crossorigin="anonymous"></script>

<!-- TinyMCE  -->
<script src="https://cdn.tiny.cloud/1/uwsbq1y22hagialqu6n033tsaa92bjs5l7g2zqv5pyjhkea1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    @stack('scripts')
