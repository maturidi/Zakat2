<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Information Zakat</title>
    <link rel="shortcut icon" type="image icon" href="<?php echo base_url() ?>/assets/img/Zakat.png"/>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/sb-admin2/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/sb-admin2/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url(); ?>assets/sb-admin2/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url(); ?>assets/sb-admin2/bower_components/datatables-responsive/css/responsive.dataTables.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/sb-admin2/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/sb-admin2/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Sistem Information Zakat</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                   Login : <?php echo $this->session->userdata('nama'); ?>
                </li>
                <li class="dropdown">
                    <a href="<?php echo base_url();?>welcome/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url(); ?>"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>amil"><i class="fa fa-table fa-fw"></i> Amil</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>muzaki"><i class="fa fa-table fa-fw"></i> Muzaki</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>barang"><i class="fa fa-table fa-fw"></i> Barang</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>Mustahiq"><i class="fa fa-table fa-fw"></i> Mustahiq</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>bagi_barang"><i class="fa fa-table fa-fw"></i> Bagi Zakat</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>About"><i class="fa fa-table fa-fw"></i> About</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		
		
        <div id="page-wrapper">	
			<?php
			if ($this->session->flashdata('message')) { ?>
				<div class="row">
					<div class="col-lg-12">
						<div class="alert alert-danger"><center><?php echo $this->session->flashdata('message') ?> </center></div>;
					</div>
				 </div>
			<?php }	?>
			
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tabel Mustahiq</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<div class="row">
                <div class="col-lg-12">
					<form action="<?php echo base_url(); ?>bagi_barang/choose/" method="GET">
						<div class="col-lg-6 col-md-6 col-sm-6" style="padding-top: 7px;">
							<input type="text" name="nama" class="form-control" placeholder="Search"></input>
							<input type="hidden" value="<?php if($id){ echo $id; } ?>" name="id" class="form-control"</input>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="btn btn-group">
								<button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button>
							</div>
						</div>
					</form>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mustahiq
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Umur</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php $no = 1; foreach($list->result() as $row): ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_mustahiq; ?></td>
                                            <td><?php echo $row->alamat_mustahiq; ?></td>
                                            <td><?php echo $row->umur_mustahiq; ?></td>
                                            <td><?php echo $row->jk_mustahiq; ?></td>
                                            <td><?php echo ucwords($row->nama_macam); ?></td>
                                            <td>
												<a href="<?php echo base_url();?>bagi_barang/choosed/<?php echo $row->id_mustahiq; if($id){ echo '/'.$id; } ?>" class="btn btn-primary"><span class="glyphicon glyphicon-record"></span> Pilih</a>
											</td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
							<div class="pagination"><?php echo $this->pagination->create_links(); ?></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <p align="center">CopyRight &copy2016 Sistem Informasi Zakat | Create by Ti2d </p>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/sb-admin2/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/sb-admin2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/sb-admin2/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>assets/sb-admin2/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/sb-admin2/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/sb-admin2/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
</body>

</html>
