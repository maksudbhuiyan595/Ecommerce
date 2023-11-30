<!DOCTYPE html>
<html lang="en">

@include('backend.layouts.includes.head')


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('backend.layouts.includes.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

         <!-- Main Content -->
        <div id="content">

        <!-- Topbar -->
        @include('backend.layouts.includes.topbar')
        <!-- End of Topbar -->

            @yield('content')
            
        <!-- End of Main Content -->

        </div>
        
        <!-- Footer -->
        @include('backend.layouts.includes.footer')
        <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   

        <!-- Bootstrap core JavaScript-->
    
        @include('backend.layouts.includes.script')
        
        


</body>

</html>