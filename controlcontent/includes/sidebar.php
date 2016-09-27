<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="active">
            <a href="dashboard.php"><i class="fa fa-fw fa-home"></i> Dashboard</a>
        </li>
        <li>
            <a href="dashboard.php?m=kategori"><i class="fa fa-fw fa-reorder"></i> Kategori</a>
        </li>
        <li>
            <a href="dashboard.php?m=berita"><i class="fa fa-fw fa-send"></i> Posting</a>
        </li>
        <li>
            <a href="dashboard.php?m=komentar"><i class="fa fa-fw fa-comments-o"></i> Komentar</a>
        </li>
        <li>
            <a href="{{ URL::to('/materi') }}"><i class="fa fa-fw fa-tags"></i> Tag</a>
        </li>
        <li>
            <a href=""><i class="fa fa-fw fa-book"></i> Portofolio Pekerjaan</a>
        </li>


    <!--  matikan dulu fiturnya
         <li>
            <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
        </li>
        <li>
            <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
        </li>
        <li>
            <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
        </li>
        <li>
            <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="#">Dropdown Item</a>
                </li>
                <li>
                    <a href="#">Dropdown Item</a>
                </li>
            </ul>
        </li> -->
    </ul>
</div>