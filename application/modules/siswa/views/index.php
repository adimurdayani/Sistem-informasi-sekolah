<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active"><?= $title; ?></li>
                            </ol>
                        </div>
                        <h4 class="page-title"><?= $title; ?></h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <div class="tab-pane show active" id="siswa">
                                <form action="<?= base_url('siswa/hapus_all/') ?>" method="POST" id="form-delete">
                                    <?php if ($session->id == 1) : ?>
                                        <a href="<?= base_url('siswa/tambah_siswa') ?>" class="btn btn-primary mb-3"><i class="fe-plus"></i> Tambah</a>
                                        <button type="submit" class="btn btn-danger mb-3" id="hapus"><i class="fe-trash"></i> Hapus</button>
                                    <?php endif; ?>

                                    <h4 class="header-title mb-2">Data <?= $title; ?></h4>
                                    <table class="table table-hover w-100" id="basic-datatable">
                                        <thead>
                                            <tr>
                                                <?php if ($session->id == 1) : ?>
                                                    <th><input type="checkbox" id="chack-all"></th>
                                                    <th>Action</th>
                                                <?php endif; ?>
                                                <th>#</th>
                                                <th>NIS</th>
                                                <th>NISN</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($get_siswa as $data) : ?>
                                                <tr>
                                                    <?php if ($session->id == 1) : ?>
                                                        <td><input type="checkbox" class="check-item" name="id_siswa[]" value="<?= $data['id_siswa'] ?>"></td>
                                                        <td>
                                                            <a href="<?= base_url('siswa/detail/') . $data['id_siswa'] ?>" class="badge badge-info"><i class="fe-eye"></i> Detail</a>
                                                            <a href="<?= base_url('siswa/edit/') . $data['id_siswa'] ?>" class="badge badge-warning"><i class="fe-edit"></i> Edit</a>
                                                            <a href="<?= base_url('siswa/hapus/') . $data['id_siswa'] ?>" class="badge badge-danger hapus"><i class="fe-trash"></i> Hapus</a>
                                                        </td>
                                                    <?php endif; ?>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $data['nis'] ?></td>
                                                    <td><?= $data['nis_nasional'] ?></td>
                                                    <td><?= $data['nama'] ?></td>
                                                    <td><?= $data['jenis_kelamin'] ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>


                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->

            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->