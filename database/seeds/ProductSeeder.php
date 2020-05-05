<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'category_id' => 2,
            'name' => "Viền Cổ Hoa",
            'description' => '',
            'price' => '179000.00',
            'primary_image' => 'ao-so-mi-nu-vien-co-hoa-31.jpg',
            'image_list' => '["ao-so-mi-nu-vien-co-hoa-3d1.jpg","ao-so-mi-nu-vien-co-hoa-3dl1.jpg","ao-so-mi-nu-vien-co-hoa-3dla1.jpg"]',
            'on_stock' => '10'
        ]);

        DB::table('product')->insert([
            'category_id' => 2,
            'name' => "ÁO KIỂU HÀN QUỐC",
            'description' => '',
            'price' => '300000.00',
            'primary_image' => 'ao-kieu-han-quoc-v0040-1m4G3-8352b3_simg_d0daf0_800x1200_max.jpg',
            'image_list' => '["ao-kieu-han-quoc-v0040-1m4G3-7118e0_simg_d0daf0_800x1200_max.jpg","ao-kieu-han-quoc-v0040-1m4G3-131527_simg_d0daf0_800x1200_max.jpg"]',
            'on_stock' => '5'
        ]);

        DB::table('product')->insert([
            'category_id' => 2,
            'name' => "cổ trụ thắt nơ",
            'description' => '',
            'price' => '255000.00',
            'primary_image' => 'hang-nhap-so-mi-nu-co-tru-that-no-sm1.jpg',
            'image_list' => '["hang-nhap-so-mi-nu-co-tru-that-no.jpg","hang-nhap-so-mi-nu-co-tru-that-no-sm125-1.jpg"]',
            'on_stock' => '20'
        ]);

        DB::table('product')->insert([
            'category_id' => 1,
            'name' => "phối ren",
            'description' => '',
            'price' => '280000.00',
            'primary_image' => 'hang-nhap-cao-cap-so-mi-nu-phoi-ren-sm115-1m4G3-HuHbF8_simg_d0daf0_800x1200_max.jpg',
            'image_list' => '["hang-nhap-cao-cap-so-mi-nu-phoi-ren-sm115-1m4G3-q1bUZr_simg_d0daf0_800x1200_max.jpg"]',
            'on_stock' => '5'
        ]);

        DB::table('product')->insert([
            'category_id' => 1,
            'name' => "Đầm maxi phối ren cao cấp",
            'description' => '',
            'price' => '720000.00',
            'primary_image' => 'dam-maxi-phoi-ren-cao-cap-1m4G3-QXVTv3_simg_d0daf0_800x1200_max.jpg',
            'image_list' => '["dam-maxi-phoi-ren-cao-cap-1m4G3-sh6ofY_simg_d0daf0_800x1200_max.jpg","dam-maxi-phoi-ren-cao-cap-1m4G3-sUX4Gv_simg_d0daf0_800x1200_max.jpg","dam-maxi-phoi-ren-cao-cap-1m4G3-VEbARk_simg_d0daf0_800x1200_max.jpg"]',
            'on_stock' => '6'
        ]);

        DB::table('product')->insert([
            'category_id' => 2,
            'name' => "Đầm ren Thái form dài",
            'description' => '',
            'price' => '200000.00',
            'primary_image' => 'dam-ren-thai-form-dai-1m4G3-9f2a11.jpg',
            'image_list' => '["dam-ren-thai-form-dai-1m4G3-38d74e.jpg","dam-ren-thai-form-dai-1m4G3-918972.jpg","dam-ren-thai-form-dai-1m4G3-d5e05d.jpg"]',
            'on_stock' => '6'
        ]);

        DB::table('product')->insert([
            'category_id' => 1,
            'name' => "Ngắn Tay Cao Cấp Kiểu Dáng Hàn Quốc",
            'description' => '',
            'price' => '165000.00',
            'primary_image' => 'quan-kaki-short-nam-qs43-1m4G3-Czuekh_simg_d0daf0_800x1200_max.jpg',
            'image_list' => '["quan-kaki-short-nam-qs43-1m4G3-3TUeRm_simg_d0daf0_800x1200_max.jpg","quan-kaki-short-nam-qs43-1m4G3-JsGgBd_simg_d0daf0_800x1200_max.jpg","quan-kaki-short-nam-qs43-1m4G3-lqqiMY_simg_d0daf0_800x1200_max.jpg"]',
            'on_stock' => '7'
        ]);

        DB::table('product')->insert([
            'category_id' => 1,
            'name' => "Quần short kaki nam - QKN44",
            'description' => '',
            'price' => '200000.00',
            'primary_image' => 'quan-short-kaki-nam-1m4G3-sexFoa_simg_d0daf0_800x1200_max.jpg',
            'image_list' => '["quan-short-kaki-nam-1m4G3-E4MW4M_simg_d0daf0_800x1200_max.jpg","quan-short-kaki-nam-1m4G3-iKaEX7_simg_d0daf0_800x1200_max.jpg","quan-short-kaki-nam-1m4G3-reyYEA_simg_d0daf0_800x1200_max.jpg"]',
            'on_stock' => '2'
        ]);

        DB::table('product')->insert([
            'category_id' => 1,
            'name' => "Quần kaki Nam Lịch Lãm - D36",
            'description' => '',
            'price' => '169000.00',
            'primary_image' => 'quan-kaki-nam-lich-lam-1m4G3-NvjQo7_simg_d0daf0_800x1200_max.jpg',
            'image_list' => '["quan-kaki-nam-lich-lam-1m4G3-tyzFof_simg_d0daf0_800x1200_max.png","quan-kaki-nam-lich-lam-1m4G3-uSjiJP_simg_d0daf0_800x1200_max.jpg"]',
            'on_stock' => '9'
        ]);

        DB::table('product')->insert([
            'category_id' => 1,
            'name' => "QUẦN KAKI THUN JOGGER",
            'description' => '',
            'price' => '300000.00',
            'primary_image' => 'cu-cai-quan-kaki-thun-jogger-thoi-trang-mau-kem-qg06-1m4G3-7ec3c2_simg_d0daf0_800x1200_max.jpg',
            'image_list' => '["cu-cai-quan-kaki-thun-jogger-thoi-trang-mau-kem-qg06-1m4G3-3e0554_simg_d0daf0_800x1200_max.jpg","cu-cai-quan-kaki-thun-jogger-thoi-trang-mau-kem-qg06-1m4G3-63841e_simg_d0daf0_800x1200_max.jpg","cu-cai-quan-kaki-thun-jogger-thoi-trang-mau-kem-qg06-1m4G3-fd6df6_simg_d0daf0_800x1200_max.jpg"]',
            'on_stock' => '4'
        ]);
    }
}
