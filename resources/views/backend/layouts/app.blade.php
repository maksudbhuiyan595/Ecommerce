<!DOCTYPE html>
<html lang="en">

@include('backend.components.includes.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('backend.components.includes.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

         <!-- Main Content -->
        <div id="content">

        <!-- Topbar -->
        @include('backend.components.includes.topbar')
        <!-- End of Topbar -->

                
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('backend.components.includes.footer')
        <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   

        <!-- Bootstrap core JavaScript-->
    
        @include('backend.components.includes.script')


</body>

</html>