<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-black-100 dark:bg-black-900 py-4 sm:pt-0">
            
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-right pt-8 sm:justify-start sm:pt-0">

                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="">
                        <div class="p-6">
                            <div class="ml-12">
                                <div class="mt-2 text-gray-900 dark:text-white text-lg">
                                    Laravel Framework: Pengertian, Keunggulan & Tips untuk Pemula
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <article class="article-post">
                                        <p>Pengembangan website akan terasa lebih mudah jika menggunakan tool yang tepat. Contohnya pemilihan <a href="https://www.niagahoster.co.id/blog/framework-php-terbaik/">framework php</a> yang akan digunakan</p>
                                        <p><strong><a href="https://www.niagahoster.co.id/blog/apa-itu-framework/" target="_blank" aria-label="undefined (opens in a new tab)" rel="noreferrer noopener">Framework</a></strong> yang baik adalah framework yang sesuai dengan kebutuhan aplikasi web yang akan Anda bangun. Tidak hanya itu, framework juga harus bisa menyederhanakan proses pembuatan dan menghasilkan performa yang aplikasi web yang lebih maksimal.</p>
                                        <p>Nah! Salah satu framework yang sangat populer saat ini adalah Laravel. Framework ini terkenal kesederhanaannya dan menghasilkan aplikasi web yang powerful.</p>
                                        <p>Artikel ini akan membahas soal apa itu Laravel, manfaat Laravel, fitur-fitur Laravel, hingga tips Laravel untuk pemula. </p>
                                        <div class="lwptoc lwptoc-autoWidth lwptoc-baseItems lwptoc-light lwptoc-notInherit" data-smooth-scroll="1" data-smooth-scroll-offset="24"><div class="lwptoc_i"> <div class="lwptoc_header">
                                        </div>
                                        <div class="lwptoc_items lwptoc_items-visible">
                                        <div class="lwptoc_itemWrap"><div class="lwptoc_item"> <a href="#Apa_itu_Laravel">
                                        <span class="lwptoc_item_number">1</span>
                                        <span class="lwptoc_item_label">Apa itu Laravel?</span>
                                        </a>
                                        </div><div class="lwptoc_item"> <a href="#Manfaat_Laravel_untuk_Proses_Pengembangan_Website">
                                        <span class="lwptoc_item_number">2</span>
                                        <span class="lwptoc_item_label">Manfaat Laravel untuk Proses Pengembangan Website</span>
                                        </a>
                                        </div><div class="lwptoc_item"> <a href="#2_Tools_Andalan_Laravel">
                                        <span class="lwptoc_item_number">3</span>
                                        <span class="lwptoc_item_label">2 Tools Andalan Laravel</span>
                                        </a>
                                        <div class="lwptoc_itemWrap"><div class="lwptoc_item"> <a href="#1_Composer">
                                        <span class="lwptoc_item_number">3.1</span>
                                        <span class="lwptoc_item_label">1. Composer</span>
                                        </a>
                                        </div><div class="lwptoc_item"> <a href="#2_Artisan">
                                        <span class="lwptoc_item_number">3.2</span>
                                        <span class="lwptoc_item_label">2. Artisan</span>
                                        </a>
                                        </div></div></div><div class="lwptoc_item"> <a href="#Fitur-Fitur_Laravel_Lainnya">
                                        <span class="lwptoc_item_number">4</span>
                                        <span class="lwptoc_item_label">Fitur-Fitur Laravel Lainnya</span>
                                        </a>
                                        </div><div class="lwptoc_item"> <a href="#Laravel_Add-On_Package">
                                        <span class="lwptoc_item_number">5</span>
                                        <span class="lwptoc_item_label">Laravel Add-On Package</span>
                                        </a>
                                        <div class="lwptoc_itemWrap"><div class="lwptoc_item"> <a href="#1_Spatie">
                                        <span class="lwptoc_item_number">5.1</span>
                                        <span class="lwptoc_item_label">1. Spatie</span>
                                        </a>
                                        </div><div class="lwptoc_item"> <a href="#2_Entrust">
                                        <span class="lwptoc_item_number">5.2</span>
                                        <span class="lwptoc_item_label">2. Entrust</span>
                                        </a>
                                        </div><div class="lwptoc_item"> <a href="#3_Laravel_User_Verification">
                                        <span class="lwptoc_item_number">5.3</span>
                                        <span class="lwptoc_item_label">3. Laravel User Verification</span>
                                        </a>
                                        </div><div class="lwptoc_item"> <a href="#4_Migration_Generator">
                                        <span class="lwptoc_item_number">5.4</span>
                                        <span class="lwptoc_item_label">4. Migration Generator</span>
                                        </a>
                                        </div><div class="lwptoc_item"> <a href="#5_Laravel_Debugbar">
                                        <span class="lwptoc_item_number">5.5</span>
                                        <span class="lwptoc_item_label">5. Laravel Debugbar</span>
                                        </a>
                                        </div></div></div><div class="lwptoc_item"> <a href="#Mengapa_Memilih_Laravel">
                                        <span class="lwptoc_item_number">6</span>
                                        <span class="lwptoc_item_label">Mengapa Memilih Laravel?</span>
                                        </a>
                                        <div class="lwptoc_itemWrap"><div class="lwptoc_item"> <a href="#1_Template_Layout_Ringan">
                                        <span class="lwptoc_item_number">6.1</span>
                                        <span class="lwptoc_item_label">1. Template Layout Ringan</span>
                                        </a>
                                        </div><div class="lwptoc_item"> <a href="#2_Mempunyai_Banyak_Library_Object_Oriented">
                                        <span class="lwptoc_item_number">6.2</span>
                                        <span class="lwptoc_item_label">2. Mempunyai Banyak Library Object Oriented</span>
                                        </a>
                                        </div><div class="lwptoc_item"> <a href="#3_Mendukung_Framework_MVC">
                                        <span class="lwptoc_item_number">6.3</span>
                                        <span class="lwptoc_item_label">3. Mendukung Framework MVC</span>
                                        </a>
                                        </div><div class="lwptoc_item"> <a href="#4_Tersedia_Tool_Artisan">
                                        <span class="lwptoc_item_number">6.4</span>
                                        <span class="lwptoc_item_label">4. Tersedia Tool Artisan</span>
                                        </a>
                                        </div><div class="lwptoc_item"> <a href="#5_Pembagian_Modul_Secara_Independen">
                                        <span class="lwptoc_item_number">6.5</span>
                                        <span class="lwptoc_item_label">5. Pembagian Modul Secara Independen</span>
                                        </a>
                                        </div><div class="lwptoc_item"> <a href="#6_Pengecekan_Menggunakan_Unit_Testing">
                                        <span class="lwptoc_item_number">6.6</span>
                                        <span class="lwptoc_item_label">6. Pengecekan Menggunakan Unit Testing</span>
                                        </a>
                                        </div></div></div><div class="lwptoc_item"> <a href="#Tips_Laravel_Pemula">
                                        <span class="lwptoc_item_number">7</span>
                                        <span class="lwptoc_item_label">Tips Laravel Pemula</span>
                                        </a>
                                        <div class="lwptoc_itemWrap"><div class="lwptoc_item"> <a href="#Dasar_Penggunaan_PHP">
                                        <span class="lwptoc_item_number">7.1</span>
                                        <span class="lwptoc_item_label">Dasar Penggunaan PHP</span>
                                        </a>
                                        </div><div class="lwptoc_item"> <a href="#Dasar_Framework_MVC">
                                        <span class="lwptoc_item_number">7.2</span>
                                        <span class="lwptoc_item_label">Dasar Framework MVC</span>
                                        </a>
                                        </div></div></div><div class="lwptoc_item"> <a href="#Laravel_Adalah_Framework_Terbaik_Anda">
                                        <span class="lwptoc_item_number">8</span>
                                        <span class="lwptoc_item_label">Laravel Adalah Framework Terbaik Anda!</span>
                                        </a>
                                        </div></div></div>
                                        </div></div><h2 id="h-apa-itu-laravel"><span id="Apa_itu_Laravel">Apa itu Laravel?</span></h2>
                                        <p>Anda pasti tahu bahasa pemrograman PHP? Laravel adalah satu-satunya framework yang membantu Anda untuk memaksimalkan penggunaan PHP di dalam proses pengembangan website.&nbsp;</p>
                                        <p>PHP menjadi bahasa pemrograman yang sangat dinamis, tapi semenjak adanya Laravel, dia menjadi lebih powerful, cepat, aman, dan simpel. Setiap rilis versi terbaru, Laravel&nbsp; selalu memunculkan teknologi baru di antara framework PHP lainnya.<br></p>
                                        <p>Source: <a href="http://www.maxoffsky.com" target="_blank" rel="nofollow">www.maxoffsky.com</a>&nbsp;</p>
                                        <p>Laravel diluncurkan sejak tahun 2011 dan mengalami pertumbuhan yang cukup eksponensial. Di tahun 2015, Laravel adalah framework yang paling banyak mendapatkan bintang di Github. Sekarang framework ini menjadi salah satu yang populer di dunia, tidak terkecuali di Indonesia.&nbsp;</p>
                                        <p>Laravel fokus di bagian end-user, yang berarti fokus pada kejelasan dan kesederhanaan, baik penulisan maupun tampilan, serta menghasilkan fungsionalitas aplikasi web yang bekerja sebagaimana mestinya. Hal ini membuat <a href="https://www.niagahoster.co.id/blog/web-developer/">developer</a> maupun perusahaan menggunakan framework ini untuk membangun apa pun, mulai dari proyek kecil hingga skala perusahaan kelas atas.</p>
                                        <p>Laravel mengubah pengembangan website menjadi lebih elegan, ekspresif, dan menyenangkan, sesuai dengan jargonnya “<em>The PHP Framework For Web Artisans</em>”. Selain itu, Laravel juga mempermudah proses pengembangan website dengan bantuan beberapa fitur unggulan, seperti <em>Template Engine</em>, <em>Routing</em>, dan <em>Modularity</em>.</p>
                                        <h2 id="h-manfaat-laravel-untuk-proses-pengembangan-website"><span id="Manfaat_Laravel_untuk_Proses_Pengembangan_Website">Manfaat Laravel untuk Proses Pengembangan Website</span></h2>
                                        <p>Laravel menawarkan beberapa keuntungan ketika Anda mengembangkan website menggunakan dasar framework ini.</p>
                                        <ul><li>Pertama, website menjadi lebih <em>scalable</em> (mudah dikembangkan).</li><li>Kedua, terdapat <em>namespace </em>dan tampilan yang membantu Anda untuk mengorganisir dan mengatur sumber daya website.&nbsp;</li><li>Ketiga, proses pengembangan menjadi lebih cepat sehingga menghemat waktu karena Laravel dapat dikombinasikan dengan beberapa komponen dari framework lain untuk mengembangkan website.</li></ul><p>Source: <a href="http://www.laracast.com" target="_blank" rel="nofollow">www.laracast.com</a>&nbsp;</p>
                                        <h2 id="h-2-tools-andalan-laravel"><span id="2_Tools_Andalan_Laravel">2 Tools Andalan Laravel</span></h2>

                                        <p>Selain itu, ada dua tools Laravel yang jarang dimiliki oleh framework lain (kecuali Symphony), yaitu Composer dan Artisan. Apa kegunaan masing-masing dari tool tersebut?</p>
                                        <h3 id="h-1-composer"><span id="1_Composer">1. Composer</span></h3>
                                        <p>Composer merupakan tool yang di dalamnya terdapat <em>dependencies</em> dan kumpulan <em>library</em>. Seluruh <em>dependencies</em> disimpan menggunakan format file composer.json sehingga dapat ditempatkan di dalam folder utama website. Inilah mengapa composer terkadang dikenal dengan <em>dependencies management</em>.</p>
                                        <p>Pertanyaannya lain, apa itu <em>dependencies management</em>?</p>
                                        <p>Misalnya Anda mempunyai sebuah website yang membutuhkan sebuah <em>library</em>. Saya ambil contoh library untuk mengimplementasikan validasi dan proteksi untuk <em>spamming</em>,<em> </em>yaitu Google reCaptcha.</p>
                                        <p>Tentu saja untuk menyediakan Google reCaptcha tidak bisa menggunakan satu library saja, tapi membutuhkan beberapa <em>library</em>. Anda tidak mungkin menginstall satu per satu library, kan?</p>
                                        <p>Nah! Composer membantu Anda untuk menginstall <em>library</em> yang dibutuhkan oleh <em>library</em> Google reCaptcha. Jadi jika menggunakan composer Anda tinggal menginstall <em>library</em> Google reCaptcha dan secara otomatis <em>library</em> lain akan terinstall.</p>
                                        <p>Begitu pun ketika ingin memperbarui <em>library</em>, Anda cukup menggunakan perintah “<strong>$ composer update”</strong> dan satu per satu library akan diperbarui secara otomatis.</p>
                                        <h3 id="h-2-artisan"><span id="2_Artisan">2. Artisan</span></h3>
                                        <p>Sudah pernah mendengar ini? Artisan merupakan command line interface yang dimiliki oleh Laravel. Artisan mencakup sekumpulan perintah yang membantu Anda untuk membangun sebuah website atau aplikasi web.</p>
                                        <p>Kumpulan perintah Artisan juga termasuk penggabungan dengan framework Symphony yang menghasilkan<strong> fitur add-on di Laravel 5.1</strong> (sekarang sudah masuk ke versi Laravel 5.8). Dengan adanya fitur add-on, Anda bisa menambahkan berbagai macam fitur baru ke Laravel.</p>
                                        <h2 id="h-fitur-fitur-laravel-lainnya"><span id="Fitur-Fitur_Laravel_Lainnya">Fitur-Fitur Laravel Lainnya</span></h2>
                                        <p>Laravel mempunyai berbagai macam fitur yang tidak semua framework menyediakannya. Apalagi Laravel adalah framework yang modern sehingga Anda dapat melakukan berbagai hal menggunakan framework ini seperti proses otentifikasi terbaru.</p>
                                        <p>Berikut ini beberapa fitur Laravel yang perlu Anda ketahui.</p>
                                        <figure class="wp-block-table"><table><tbody><tr><td><strong>Blade Template Engine</strong></td><td>Laravel menggunakan Blade. Blade merupakan template engine untuk mendesain layout yang unik. Layout yang didesain dapat digunakan di tampilan lain sehingga menyediakan konsistensi desain dan struktur selama proses pengembangan..<br>Dibandingkan dengan template engine lain, Blade mempunyai kelebihan: tidak membatasi pengembang untuk menggunakan kode PHP biasa di dalam tampilan; desain tampilan blade akan tetap di-<em>cache</em> sampai dengan ada modifikasi.</td></tr><tr><td><strong>Routing</strong></td><td>Di Laravel, semua <em>request </em>dipetakan dengan bantuan rute. Dasar dari routing adalah merutekan <em>request</em> ke kontroler terkait. Routing ini dianggap dapat mempermudah pengembangan website dan meningkatkan performanya.<br>Setidaknya ada tiga kategori routing di Laravel, yaitu <em>basic routing</em>, <em>route parameters</em>, dan <em>named routes</em>.</td></tr><tr><td><strong>Modularity</strong></td><td>Seperti yang sudah dibahas di bagian sebelumnya, di dalam Laravel terdapat kumpulan modul dan <em>library</em> yang terkait dengan composer. Fitur ini membantu Anda untuk menyempurnakan dan meningkatkan fungsionalitas dari website yang dibangun, serta mempermudah proses <em>update</em>.</td></tr><tr><td><strong>Testability</strong></td><td>Laravel dibangun dengan fitur proses pengecekan yang cukup lengkap. Framework ini mendukung proses pengecekan dengan PHPUnit dan file phpunit.xml yang dapat disesuaikan dengan aplikasi web yang sedang dibangun.<br>Framework ini juga dibangun menggunakan metode pembantu yang nyaman. Metode ini memungkinkan Anda untuk menguji website secara ekspresif.</td></tr><tr><td><strong>Query Builder and ORM</strong></td><td>Laravel database query builder menyediakan&nbsp; antarmuka yang lancar untuk membuat dan menjalankan database query. Fitur ini dapat digunakan untuk menjalankan berbagai operasi database di dalam website dan mendukung berbagai sistem database.</td></tr><tr><td><strong>Authentication</strong></td><td>Laravel membuat pengimplementasian otentikasi menjadi sangat sederhana. Seluruh proses konfigurasi otentikasi sudah berjalan secara otomatis.<br>Anda bisa menemukan file konfigurasi otentikasi ini di ‘<strong>config/auth.php</strong>’. Di dalam file ini terdapat beberapa opsi otentifikasi yang sudah terdokumentasikan dengan baik dan sewaktu-waktu dapat Anda sesuaikan dengan kebutuhan sistem.</td></tr><tr><td><strong>Schema Builder</strong></td><td>Class Laravel Schema menyediakan database <em>agnostic</em> untuk memanipulasi tabel. Schema ini berjalan baik di berbagai tipe database yang didukung Laravel dan mempunyai API yang sama di seluruh sistem.</td></tr><tr><td><strong>Configuration Management Features</strong></td><td>Seluruh file konfigurasi Laravel disimpan di dalam direktori <strong>config</strong>. Setiap opsi didokumentasikan dengan baik. Jadi Anda tidak perlu khawatir untuk mengubah setiap konfigurasi yang tersedia.</td></tr><tr><td><strong>E-mail Class</strong></td><td>Laravel menyediakan API beberapa <em>library</em> SwiftMailer yang cukup populer dengan koneksi ke SMTP, Postmark, Mailgun, SparkPost, Amazon SES, dan sendmail. Fitur ini memungkinkan Anda untuk mengirimkan email dengan cepat melalui aplikasi lokal maupun layanan cloud.</td></tr><tr><td><strong>Redis</strong></td><td>Laravel menggunakan Redis untuk menghubungkan antara sesi yang sudah ada dengan cache <em>general-purpose</em>. Redis terkoneksi dengan session secara langsung.<br>Redis merupakan aplikasi open source yang menyimpan key-value. Redis juga sering dikenal dengan server struktur data yang dapat menyimpan key dengan tipe <em>strings</em>, <em>hashes</em>, <em>lists</em>, <em>sets</em>, dan <em>sorted sets</em>.</td></tr><tr><td><strong>Event and Command Bus</strong></td><td>Laravel Command Bus menyediakan metode pengumpulan tugas yang dibutuhkan aplikasi supaya dapat berjalan secara simpel dan perintah yang mudah dimengerti.&nbsp;</td></tr></tbody></table></figure><p>Itulah tadi beberapa fitur yang dimiliki oleh Laravel dan belum tentu bisa Anda temui di framework lain. Framework ini cukup menarik dan sangat cocok untuk membuat sistem dengan skala besar.</p>
                                        <h2 id="h-laravel-add-on-package"><span id="Laravel_Add-On_Package">Laravel Add-On Package</span></h2>
                                        <p>Salah satu kelebihan menggunakan Laravel Add-On Package adalah mengizinkan Anda untuk menggunakan berbagai macam fitur tambahan. Fitur ini dapat Anda gunakan sebagai aplikasi hosting termasuk routing, migration, test, views, dan beberapa fitur yang sangat berguna lainnya. Keuntungan lain penggunaan package adalah prinsip ‘<em>Don’t Repeat Yourself</em> (DRY)’.</p>
                                        <p>Ada banyak sekali packages untuk Laravel yang membuat aplikasi menjadi lebih cepat dan kencang, memperketat keamanan dan performanya juga. Saya akan sedikit membahas mengenai beberapa packages Laravel yang perlu Anda ketahui dan sering dipakai di aplikasi Laravel pada umumnya.</p>
                                        <h3 id="h-1-spatie"><span id="1_Spatie">1. <a href="https://github.com/spatie/laravel-permission" target="_blank" rel="nofollow">Spatie</a></span></h3>
                                        <p>Bentuk aturan dan <em>permission</em> sangat penting di berbagai macam aplikasi web. Laravel sendiri juga mempunyai berbagai macam package yang bisa mendukung bentuk aturan dan permission. Bahkan packages tersebut dapat meningkatkan efektifitas dari kode program. Salah satu package yang disarankan adalah Spatie Roles &amp; Permission.</p>
                                        <p>Beberapa kelebihan dari Spatie adalah SpatieRoles, permissions, middleware, permissions langsung, terdiri banyak instruksi Blade, dan perintah Artisan</p>
                                        <h3 id="h-2-entrust"><span id="2_Entrust">2. <a href="https://github.com/Zizaco/entrust" target="_blank" rel="nofollow">Entrust</a></span></h3>
                                        <p>Package ini menyediakan cara yang fleksibel untuk menambahkan Role-based Permission untuk aplikasi Laravel 5. Di dalam package ini setidaknya terdapat empat tabel: tabel <em>roles</em> untuk menyimpan <strong><em>role records</em></strong>, tabel <em>permissions</em> untuk menyimpan <em>permission record</em>, tabel role_user untuk menyimpan <em>one-to-many relations</em> di antara <em>roles</em> dan <em>users</em>, tabel permission_tole untuk menyimpan relasi <em>many-to-many </em>di antara <em>roles</em> dan <em>permissions</em>.</p>
                                        <h3 id="h-3-laravel-user-verification"><span id="3_Laravel_User_Verification">3. <a href="https://github.com/jrean/laravel-user-verification" target="_blank" rel="nofollow">Laravel User Verification</a></span></h3>
                                        <p>Package User Verification memungkinkan Anda untuk menangani verifikasi user dan memvalidasi email. Fitur ini juga menghasilkan dan menyimpan token verifikasi untuk user yang sudah teregistrasi, mengirim,mengatur antrian email dengan link token verifikasi, menangani token verifikasi, dan menandai user yang terpercaya. Package User Verification ini juga menyediakan fungsionalitas, contohnya pemeriksaan rute <em>middleware</em>.</p>
                                        <h3 id="h-4-migration-generator"><span id="4_Migration_Generator">4. <a href="https://github.com/Xethron/migrations-generator" target="_blank" rel="nofollow">Migration Generator</a></span></h3>
                                        <p>Migration Generator merupakan paket Laravel yang dapat Anda gunakan untuk proses migrasi dari database yang sudah ada. Di dalamnya terdapat juga indeks dan foreign keys. Proses migrasi untuk seluruh tabel yang ada di dalam database dapat Anda lakukan hanya dengan menjalankan package ini di dalam aplikasi Laravel.</p>
                                        <h3 id="h-5-laravel-debugbar"><span id="5_Laravel_Debugbar">5. <a href="https://github.com/barryvdh/laravel-debugbar" target="_blank" rel="nofollow">Laravel Debugbar</a></span></h3>
                                        <p>Laravel Debugbar merupakan package populer Laravel lain yang membantu user untuk menambahkan toolbar developer di dalam aplikasi. Paket ini berguna khusus untuk tujuan <em>debugging</em>.</p>
                                        <p>Ada banyak sekali opsi yang tersedia di dalam Debugbar. Fitur yang ada di dalamnya akan membantu Anda untuk menunjukkan seluruh <em>query</em> yang tersedia di dalam aplikasi –semuanya terkait dengan rute.</p>
                                        <p>Laravel Debugbar juga akan menampilkan seluruh template yang sudah pernah dirender dan juga parameter yang sudah Anda pakai sebelumnya ketika Anda menjalankannya.</p>
                                        <p>Anda dapat menambahkan pesan tambahan menggunakan Facade, dan itu akan muncul di bagian bawah tab ‘Messages’ di Laravel Debugbar.</p>
                                        <h2 id="h-mengapa-memilih-laravel"><span id="Mengapa_Memilih_Laravel">Mengapa Memilih Laravel?</span></h2>
                                        <p>Masih belum yakin menggunakan Laravel ? Alasan-alasan di bawah mungkin akan meyakinkan Anda bahwa Laravel adalah salah satu framework terbaik yang wajib Anda coba.</p>
                                        <h3 id="h-1-template-layout-ringan"><span id="1_Template_Layout_Ringan">1. Template Layout Ringan</span></h3>
                                        <p>Laravel Framework menyediakan template layout yang ringan dan terdapat juga fitur untuk menambahkan template tambahan yang ringan. Developer dapat membuat dan melakukan pengembangan menggunakan layout yang cukup powerful. Berbagai macam layout ini ini dapat developer gunakan dengan menambahkan berbagai macam CSS, gambar, dan teks dengan struktur kode yang lengkap.<br><br>Template layout mempunyai peranan yang sangat penting di dalam segala macam aplikasi. Di aplikasi Laravel sendiri, template engine mempunyai banyak bagian di dalam proses pembuatan template.</p>
                                        <h3 id="h-2-mempunyai-banyak-library-object-oriented"><span id="2_Mempunyai_Banyak_Library_Object_Oriented">
                                        2. Mempunyai Banyak Library Object Oriented
                                        </span></h3>
                                        <p>Framework Laravel mempunyai <em>library</em> Object Oriented yang sangat banyak. Selain itu, Laravel juga mempunyai berbagai macam <em>library</em> yang tidak ada di dalam framework PHP populer lainnya.<br><br>Salah satu library yang paling penting adalah library otentikasi. Anda memerlukan library ini untuk menyediakan fitur otentifikasi yang canggih.&nbsp; Library otentifikasi Laravel juga menyediakan Bcrypt hashing yang merupakan salah satu fitur tercanggih di bidang otentifikasi. </p>
                                        <h3 id="h-3-mendukung-framework-mvc"><span id="3_Mendukung_Framework_MVC">
                                        3. Mendukung Framework MVC
                                        </span></h3>
                                        <p>Laravel adalah salah satu dari sekian framework yang mendukung framework MVC (<em>Model-View-Controller</em>). MVC menangani hampir keseluruhan&nbsp;bagian aplikasi Laravel.<br><br>Pemisahan antara logika dan tampilan aplikasi sangat mungkin bisa dilakukan menggunakan framework MVC. Selain itu, performa yang optimal, dokumentasi yang lengkap, dan berbagai macam aplikasi tambahan tersedia di dalam framework Laravel yang terintegrasi dengan MVC ini.</p>
                                        <h3 id="h-4-tersedia-tool-artisan"><span id="4_Tersedia_Tool_Artisan">4. Tersedia Tool Artisan </span></h3>
                                        <p>Developer terkadang membutuhkan interaksi antara Laravel dengan framework lain menggunakan <em>command line</em> yang berguna untuk membuat dan menangani <em>environment</em> di proyek Laravel.<br><br>Laravel mempunyai tool&nbsp; <strong>Artisan</strong> (sudah dibahas di bagian sebelumnya) yang mana merupakan tool <em>command line</em>. Fungsi utama dari Artisan adalah melakukan tugas repetisi dan memproses pemrograman yang kompleks yang mana terkadang developer terkadang mengabaikannya selama proyek berjalan.<br><br>Dengan bantuan Artisan, developer dapat membuat dan melakukan migrasi <em>database</em> dengan mudah. Pengelolaan struktur database dapat ditangani selama proses migrasi.</p>
                                        <h3 id="h-5-pembagian-modul-secara-independen"><span id="5_Pembagian_Modul_Secara_Independen">5. Pembagian Modul Secara Independen </span></h3>
                                        <p>Satu aplikasi Laravel dapat menggunakan lebih dari 20 modul <em>library</em> dan setiap modul terbagi menjadi beberapa modul individu. Modul-modul ini secara independen mengadopsi prinsip PHP modern dan menjaga fungsi penting dari aplikasi Laravel. Modul tersebut akan membuat aplikasi menjadi lebih informatif, modular, dan responsif.</p>
                                        <h3 id="h-6-pengecekan-menggunakan-unit-testing"><span id="6_Pengecekan_Menggunakan_Unit_Testing">6. Pengecekan Menggunakan Unit Testing</span></h3>
                                        <p>Pembuatan aplikasi Laravel terkadang menggunakan konsep “Unit Testing”. Dengan bantuan Unit Testing, jumlah pengetesan dalam jumlah banyak dapat dilakukan dengan tujuan untuk memastikan perubahan baru dapat dibuat oleh <em>developer</em> tanpa harus merusak satu pun fungsi aplikasi dan membuat aplikasi lebih responsif.</p>
                                        <h2 id="h-tips-laravel-pemula"><span id="Tips_Laravel_Pemula">Tips Laravel Pemula</span></h2>
                                        <p>Sudah tidak sabar ingin mencoba langsung menggunakan Laravel? Tunggu, ada beberapa hal yang perlu Anda persiapkan terlebih dahulu sebelum belajar framework Laravel. Tujuannya supaya Anda lebih mudah untuk memahami bagaimana menggunakan Laravel dengan baik.</p>
                                        <p>Setidaknya ada dua hal yang perlu Anda pelajari sebelum mempraktikkan langsung penggunaan Laravel untuk membuat website.</p>
                                        <h3 id="h-dasar-penggunaan-php"><span id="Dasar_Penggunaan_PHP"><strong>Dasar Penggunaan PHP</strong></span></h3>
                                        <p>Seperti yang sudah diketahui, framework Laravel merupakan framework yang dikembangkan untuk mendukung bahasa PHP. Tentu saja semua bahan untuk membuat framework ini berasal dari PHP.</p>
                                        <p>Nah! Supaya bisa memahami bagaimana Laravel berjalan, tentu saja Anda harus memahami terlebih dahulu bagaimana PHP digunakan. Tidak perlu sampai menjadi mahir, Anda cukup mempelajari dasar penggunaan PHP.</p>
                                        <p class="has-text-align-center"><strong>Baca Juga: <a href="https://www.niagahoster.co.id/blog/belajar-php/">7+ Situs Belajar PHP Gratis (Dari Pemula Sampai Mahir)</a></strong></p>
                                        <h3 id="h-dasar-framework-mvc"><span id="Dasar_Framework_MVC"><strong>Dasar Framework MVC</strong></span></h3>
                                        <p>Laravel tidak bisa lepas dari pengelolaan struktur datanya yang dikenal dengan MVC. Maka dari itu, cukup penting untuk mempelajari bagaimana penerapan MVC di dalam proses pengembangan website.</p>
                                        <p>MVC cukup populer di dalam pengembangan website saat ini. Pemisahaan antara tampilan (front-end) dengan <em>controller</em> (back-end) menjadi fitur modern yang dirasa sangat memudahkan developer. Memahami bagaimana MVC berjalan sama saja memahami bagaimana Laravel memproses setiap file dan <em>resource</em> yang tersedia di dalamnya.</p>
                                        <h2 id="h-laravel-adalah-framework-terbaik-anda"><span id="Laravel_Adalah_Framework_Terbaik_Anda">Laravel Adalah Framework Terbaik Anda!</span></h2>
                                        <p>Itulah tadi beberapa informasi mengenai apa itu Laravel. Laravel adalah framework yang cukup istimewa karena mempunyai segudang fitur dan packages yang dapat Anda tambahkan sendiri. Jika Anda menginginkan framework yang sederhana untuk membuat aplikasi web yang cukup kompleks, saya rasa Laravel adalah salah satu pilihan framework terbaik. Namun, tentu saja Anda perlu menyesuaikan kebutuhan dari aplikasi web yang Anda kembangkan.</p>
                                        <p>Semoga artikel mengenai apa itu Laravel ini bermanfaat untuk Anda. Jika masih ada pertanyaan atau tambahan, jangan sungkan untuk meninggalkan komentar di bawah ini. Anda bisa <em>subscribe</em> untuk terus mengikuti terus informasi terbaru dari kami mengenai dunia teknologi, bisnis, digital marketing, dan tentu saja layanan hosting.</p><br>
                                        <p class="has-text-align-center"><strong><a href="https://www.niagahoster.co.id/blog/laravel-adalah/    " target="_blank" rel="noreferrer noopener"> Sumber : https://www.niagahoster.co.id/blog/laravel-adalah/ </a></strong><br></p>
                                        <p class="has-text-align-center underlined"><strong><a href="\home" target="_blank" rel="noreferrer noopener"> <u>Kembali kehalaman awal</u> </a></strong><br></p>
                                        <div class="clearfix"></div>
                                        <div class="clearfix"></div>
                                    </article>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
