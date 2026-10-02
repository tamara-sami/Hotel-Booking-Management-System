 <!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm py-3 px-3"
    style="position: fixed; top: 0; left: 0; width: 100%; z-index: 1000; background-color: rgba(0, 0, 0, 0.9); transition: all 0.3s ease-in-out; padding: 10px 20px;">
    
    <div class="container-fluid d-flex justify-content-between align-items-center">
        
        <!-- القائمة على اليسار -->
        <div class="navbar-nav">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="rooms.php" class="nav-item nav-link">Rooms</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                <div class="dropdown-menu m-0">
                    <a href="blog.php" class="dropdown-item">Blog</a>
                    <a href="single-blog.php" class="dropdown-item">Single Blog</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="elements.php" class="dropdown-item">Elements</a>
                </div>
            </div>
            <a href="contact.php" class="nav-item nav-link">Contact</a>
        </div>

        <!-- العنوان في المنتصف -->
        <span class="navbar-title"
            style="font-size: 1.8rem; font-weight: bold; color: white !important; text-transform: uppercase;">
            Montana
        </span>

        <!-- أيقونات التواصل الاجتماعي على اليمين -->
        <div class="d-flex align-items-center">
            <div class="social-links" style="display: flex;">
                <a href="#" style="font-size: 1.5rem; color: white; margin-left: 15px;"><i class="fa fa-facebook-square"></i></a>
                <a href="#" style="font-size: 1.5rem; color: white; margin-left: 15px;"><i class="fa fa-twitter"></i></a>
                <a href="#" style="font-size: 1.5rem; color: white; margin-left: 15px;"><i class="fa fa-instagram"></i></a>
            </div>
            <a class="btn btn-primary ms-3" href="#test-form"
                style="font-size: 1rem; font-weight: bold; padding: 8px 15px;">
                Book A Room
            </a>
        </div>
    </div>
</nav>
<!-- Navbar End -->