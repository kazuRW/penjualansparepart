<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Tambah Produk
        </h2>
    </div>
    <div class="grid grid-cols-11 gap-x-6 mt-5 pb-20">
        <!-- BEGIN: Notification -->
        <div class="intro-y col-span-11 alert alert-primary alert-dismissible show flex items-center mb-6" role="alert">
            <span><i data-lucide="info" class="w-4 h-4 mr-2"></i></span>
            <span>Mulai 03 Juni 2023, akan ada perubahan Syarat & Ketentuan terkait jumlah produk yang dapat ditambahkan oleh Penjual. <a href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820" class="underline ml-1" target="blank">Pelajari Lebih Lanjut</a></span>
            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button>
        </div>
        <!-- BEGIN: Notification -->
        <div class="intro-y col-span-11 2xl:col-span-9">
            <form action="<?= site_url('admin/product/insert') ?>" method="post" enctype="multipart/form-data">
                <!-- BEGIN: Uplaod Product -->
                <div class="intro-y box p-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Upload Produk </div>
                        <div class="mt-5">
                            <div class="flex items-center text-slate-500">
                                <span><i data-lucide="lightbulb" class="w-5 h-5 text-warning"></i></span>
                                <div class="ml-2"> <span class="mr-1">Hindari menjual produk palsu/melanggar Hak Kekayaan Intelektual, agar produk Anda tidak terhapus.</span> <a href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820" class="text-primary font-medium" target="blank">Pelajari Lebih Lanjut</a> </div>
                            </div>
                            <div class="form-inline items-start flex-col xl:flex-row mt-10">
                                <div class="form-label w-full xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Foto Produk</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Dibutuhkan</div>
                                        </div>
                                        <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                            <div>Format gambar adalah .jpg .jpeg .png dan ukuran minimal 300 x 300 piksel (Untuk gambar optimal gunakan ukuran minimal 700 x 700 piksel).</div>
                                            <div class="mt-2">Pilih foto produk atau drag and drop hingga 5 foto sekaligus di sini. Sertakan min. 3 foto yang menarik agar produk lebih menarik bagi pembeli.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input id="product-name" name="gambar" type="file" class="form-control" placeholder="Product name">
                                    <div class="form-help text-right">Diperlukan untuk jenis file dengan tipe jpg, jpeg atau png</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Uplaod Product -->
                <!-- BEGIN: Product Information -->
                <div class="intro-y box p-5 mt-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Product Information </div>
                        <div class="mt-5">
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Nama Produk</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Dibutuhkan</div>
                                        </div>
                                        <div class="leading-relaxed text-slate-500 text-xs mt-3"> Sertakan min. 40 karakter agar lebih menarik dan mudah ditemukan pembeli, terdiri dari tipe produk, merek, dan informasi seperti warna, bahan, atau tipe. </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input id="product-name" type="text" name="nama_brg" class="form-control" placeholder="Nama Produk">
                                    <div class="form-help text-right">Maksimal Huruf 0/70</div>
                                </div>
                            </div>
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Kategori</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Dibutuhkan</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <select id="category" name="kategori" class="form-select">
                                        <option hidden>-- Pilih Kategori --</option>
                                        <option value="Processor">Processor</option>
                                        <option value="Vga">VGA</option>
                                        <option value="Ssd">SSD</option>
                                        <option value="Ram">RAM (Memory)</option>
                                        <option value="PC Gaming">PC gaming</option>
                                        <option value="Produk Lainnya">Produk Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Deskripsi Produk</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Dibutuhkan</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input id="product-name" type="text" name="keterangan" class="form-control" placeholder="Product description">
                                    <div class="form-help text-right">Maksimal Huruf 0/255</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Product Information -->

                <!-- BEGIN: Product Management -->
                <div class="intro-y box p-5 mt-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Kelola Produk </div>
                        <div class="mt-5">
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Ketersediaan Produk</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Dibutuhkan</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input id="product-stock" type="text" name="stok" class="form-control" placeholder="Masukan Ketersediaan Produk">
                                </div>
                            </div>
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Harga Barang</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Dibutuhkan</div>
                                        </div>
                                        <div class="leading-relaxed text-slate-500 text-xs mt-3"> Gunakan kode SKU yang unik jika Anda ingin menandai produk Anda. </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input id="sku" name="harga" type="number" class="form-control" placeholder="Rp. 0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Product Management -->
                <div class="flex justify-end flex-col md:flex-row gap-2 mt-5">
                    <a href="<?= site_url('admin/product') ?>" class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-full md:w-52">Batal</a>
                    <button type="submit" class="btn py-3 btn-primary w-full md:w-52">Simpan</button>
                </div>
            </form>
        </div>
        <div class="intro-y col-span-2 hidden 2xl:block">
            <div class="pt-10 sticky top-0">
                <ul class="text-slate-500 relative before:content-[''] before:w-[2px] before:bg-slate-200 before:dark:bg-darkmode-600 before:h-full before:absolute before:left-0 before:z-[-1]">
                    <li class="mb-4 border-l-2 pl-5 border-primary dark:border-primary text-primary font-medium"> <a href="">Upload Produk</a> </li>
                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent"> <a href="">Informasi Produk</a> </li>
                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent"> <a href="">Detail Produk</a> </li>
                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent"> <a href="">Varian Produk</a> </li>
                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent"> <a href="">Varian Produk (Detail)</a> </li>
                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent"> <a href="">Kelola Produk</a> </li>
                </ul>
                <div class="mt-10 bg-warning/20 dark:bg-darkmode-600 border border-warning dark:border-0 rounded-md relative p-5">
                    <i data-lucide="lightbulb" class="w-12 h-12 text-warning/80 absolute top-0 right-0 mt-5 mr-3"></i>
                    <h2 class="text-lg font-medium">
                        Tips
                    </h2>
                    <div class="mt-5 font-medium">Harga</div>
                    <div class="leading-relaxed text-xs mt-2 text-slate-600 dark:text-slate-500">
                        <div>Format gambar adalah .jpg .jpeg .png dan ukuran minimal 300 x 300 piksel (Untuk gambar optimal gunakan ukuran minimal 700 x 700 piksel).</div>
                        <div class="mt-2">Pilih foto produk atau drag and drop hingga 5 foto sekaligus di sini. Sertakan min. 3 foto yang menarik agar produk lebih menarik bagi pembeli.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>