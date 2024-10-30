<div class="wrap cid-editor-container">
    <div class="crypto-edit">
        <div class="container sm">
            <div id="cid-editor" class="cid-editor cid-widget">
                <div class="d-flex d-flex-column align-center">
                    <img src="<?php echo CID_URL; ?>assets/admin/img/info.svg" style="max-width: 200px;" alt="">
                    <h1 class="mt-10 mb-10">Kunci API diperlukan</h1>
                    <div class="mb-30">Sebelum melanjutkan, Anda harus membuat akun di <a href="https://cryptocurrency.id/register/" target="_blank">Cryptocurrency.id</a> dan dapatkan token akses API Anda untuk digunakan di sini </div>
                    <form action="<?php echo admin_url('admin-post.php'); ?>" method="POST" class="w-100">
                        <input type="hidden" name="action" value="cid_save_api_key">
                        <div class="form-group w-100">
                            <input name="token" type="text" class="form-control form-control-lg" placeholder="" value="<?php echo $this->apitoken; ?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>