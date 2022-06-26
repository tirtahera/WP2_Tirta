<div class="mt-5">
    <?php $this->load->view('template/navbar'); ?>
</div>
<div class="container">
    <div class="d-flex justify-content-center mt-5">
        <div class="col-md-8">
            <h2 class="text-center">Buku</h2>
            <hr>
            <div class="justify-content-center">
            <?php if ($this->session->flashdata('msg_success')) { ?>
                <div class="alert alert-success alert-dismissible fade show mt-3 mb-3" role="alert">
                    <?= $this->session->flashdata('msg_success') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata('msg_error')) { ?>
                <div class="alert alert-danger alert-dismissible fade show mt-3 mb-3" role="alert">
                    <?= $this->session->flashdata('msg_error') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <?php foreach($list_buku as $key=>$row): ?>
                <div class="d-flex justify-content-center">
                    <div class="card mb-5 mt-3" style="width: 100%;">
                        <div class="d-flex">
                            <div class="col-md-4 d-flex align-items-center justify-content-center">
                                <img src="<?= $row->image ?>" alt="<?= $row->judul_buku ?>'s Cover Book" class="card-img ms-3">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Judul        : <?= $row->judul_buku ?></li>
                                        <li class="list-group-item">Pengarang    : <?= $row->pengarang ?></li>
                                        <li class="list-group-item">Penerbit     : <?= $row->penerbit ?></li>
                                        <li class="list-group-item">Tahun Terbit : <?= $row->tahun_terbit ?></li>
                                        <li class="list-group-item">ISBN         : <?= $row->isbn ?></li>
                                        <li class="list-group-item">Stok         : <?= $row->stok ?></li>
                                        <li class="list-group-item">Kategori     : <?= $row->kategori ?></li>
                                    </ul>
                                    <hr>
                                    <div class="d-flex justify-content-end mt-2">
                                        <div class="col-2">
                                            <form action="<?= base_url() . 'buku/pinjam' ?>" method="post">
                                                <input type="hidden" name="book_target_id" value="<?= $row->id_buku ?>">
                                                <button class="btn btn-success" role="button" id="bookingButton">
                                                    Booking
                                                </button>
                                            </form>
                                        </div>
                                        <?php if($this->session->userdata('role') == 1) { ?>
                                        <div class="col-2">
                                            <form action="<?= base_url() . 'buku/edit' ?>" method="post">
                                                <input type="hidden" name="book_target_id" value="<?= $row->id_buku ?>">
                                                <button class="btn btn-warning" style="width: 85%" role="button" id="editButton">
                                                    Edit
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col-2">
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#buku_<?= $row->id_buku ?>">
                                            Delete
                                            </button>

                                            <div class="modal fade" id="buku_<?= $row->id_buku ?>" tabindex="-1" aria-labelledby="buku_<?= $row->id_buku ?>Label" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <h5 class="h5">Kamu yakin ingin menghapus buku <strong><?= $row->judul_buku ?></strong> ?</h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                            <form action="<?= base_url() . 'buku/delete' ?>" method="post">
                                                                <input type="hidden" name="book_id" value="<?= $row->id_buku ?>">
                                                                <button type="submit" class="btn btn-danger">Delete</button>                                                                
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>