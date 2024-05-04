A. object adalah data yang berisi field / properties / attributes dan method / function / behavior
B. class adalah blueprint, prototype atau cetakan untuk membuat pbject
    - class berisikan deklarasi semua properties dan functions yang dimiliki oleh object
    - setiap object selalu dibuat dari class
    - dan sebuah class bisa membuat object tanpa batas
C. Properties
    fields / properties / attributes adalah data yang bisa disisipkan di dalam object
    sebelum memasukkan data di fields harus dideklatasolam data apa saja yang dimiliki object tersebut didalam deklarasi class nya
D. Function
    Selain properties function juga dapat ditambahkan ke dalam object 
    dengan cara mendeklarasikan kedalam block class 
    bisa juga menambahkan return value dan parameter
E. "This" Keyword 
    saat membuat kode didalam function didalam class, bisa menggunakan kata kunci "this" untuk mengakses object saat ini
    misal untuk mengakses properties atau function lain di class yang sama
F. Properties vs Constant 
    - saat membuat object properties yang terdapat di class akan secara otomatis dibuat per object, oleh karena itu untuk 
    mengakses properties, kita perlu menggunakan object, atau jika didalam object tersebut sendiri perlu menggunakan kata kunci "this"
    - sedangkan berbeda dengan constant, constant di class tidak akan dibuat per object. Constant hidupnya di class bukan di object
    oleh karena itu jika ingin mengakses nya perlu menggunakan "NamaClass::NAMA_CONSTANT"
    - sederhananya properties dibuat satu per instance class (object), sedangkan constant hanya dibuat satu per class
G. Constructor
    - constructor adalah function yang akan dipanggil saat pertama kali Object dibuat
    - Mirip seperti di function, bisa diberi parameter pada constructor 
    - nama constructor di php harus __construct()
H. Destructor
    - Jika constructor adalah function yang akan dipanggil ketika object dibuat 
    - Destructor adalah function yang akan dipanggil ketika object dihapus dari memory 
    - Biasanya ketika object tersebut sudah tidak lagi digunakan, atau ketika aplikasi akan mati 
    - Untuk membuat function destructor, bisa menggunakan nama function _destruct() 
    - Khusus untuk destructor, tidak boleh menambahkan function argument 
    - Dalam penggunaan sehari-hari, ini misal cocok untuk menutup koneksi ke database atau menutup 
    - proses menulis ke file, sehingga tidak terjadi memory leak 
I. Inheritance
    - Inheritance atau pewarisan adalah kemampuan untuk menurunkan sebuah class ke class lain 
    - Dalam artian, kita bisa membuat class Parent dan class Child 
    - Class Child, hanya bisa punya satu class Parent, namun satu class Parent bisa punya banyak class Child 
    - Saat sebuah class diturunkan, maka semua properties dan function yang ada di class Parent, secara otomatis akan dimiliki oleh class Child 
    - Untuk melakukan pewarisan, di class Child, kita harus menggunakan kata kuln•ends lalu diikuti 
    - 'dengan nama class parent nya. 
J. Namespace
    - Saat kita membuat aplikasi, bisa dipastikan kita akan banyak sekali membuat class 
    - Jika class terlalu banyak, kadang akan menyulitkan kita untuk mencari atau mengklasifikasikan jenis-jenis class 
    - PHP memiliki fitur namespace, dimana kita bisa menyimpan class-class kita di dalam namespace 
    - Namespace bisa nested, dan jika kita ingin mengakses class yang terdapat di namespace, kita perlu 
    menyebutkan nama namespace nya 
    - Namespace bagus ketika kita punya beberapa class yang sama, dengan menggunakan namespace nama class sama tidak akan menjadikan error di PHP 
    GLOBAL namespace
    - secara default saat kita membuat kode di php sebenarnya disimpan di global namespace
    - global namespace adalah namespace yang tidak memiliki nama namespace
K. Import
    - Sebelumnya kita sudah tahu bahwa untuk menggunakan class, function atau constant di namespace kita perlu menyebutkan nama namespace nya di awal 
    - Jika terlalu sering menggunakan class, function atau constant yang sama, maka terlalu banyak duplikasi dengan menyebut namespace yang sama berkali-kali 
    - Hal ini bisa kita hindari dengan cara mengimport class, function atau constant tersebut dengan menggunakan kata kunci use 
L. Alias
    - Saat kita menggunakan use, artinya kita tidak perlu lagi menggunakan nama namespace diawal 
    class ketika kita ingin membuat class tersebut 
    - Namun bagaimana jika kita ternyata nama class nya sama? 
    - Untungnya PHP memiliki fitur yang namanya alias 
    - Alias adalah kemampuan membuat nama Iain dari class, function atau constant yang ada 
    - Kita bisa menggunakan kata kunci as setelah melakukan use 
M. Group Use Declaration
    - Kadang kita butuh melakukan import banyak hal di satu namespace yang sama 
    - PHP memiliki fitur grup use, dimana kita bisa import beberapa class, function atau constant dalam 
    satu perintah use 
    - Untuk melakukan itu, kita bisa menggunakan kurung {}
N. Visibility
    - Visibility / Access modifier adalah kemampuan properties, function dan constant dapat diakses 
    dari mana saja 
    - Secara default, properties, function dan constant yang kita buat di dalam class bisa diakses dari 
    mana saja, atau artinya dia adalah public 
    - Selain public, masih ada beberapa visibility Iainnya 
    - Secara default kata kunci var untuk properties adalah sifatnya public
Access Level atau visibility ada 3 
    1. Public. public bisa diakses oleh Class / didalam class yang sama, subclass(child), dan dari luar class world(global)
    2. Protected. Protected hanya bisa diakses oleh Class dan child saja 
    3. Private. Private bisa hanya bisa diakses oleh Class saja
    akses default nya adalah public 
O. Function Overriding
    - Function overriding adalah kemampuan mendeklarasikan ulang function di child class, yang sudah 
    ada di parent class 
    - Saat kita melakukan proses overriding tersebut, secara otomatis ketika kita membuat object dari 
    class child, function yang di class parent tidak bisa diakses lagi 
P. Parent Keyword
    - Kadang kita ingin mengakses function yang terdapat di class parent yang sudah terlanjur kita 
    override di class child 
    - Untuk mengakses function milik class parent, kita bisa menggunakan kata kunci parent 
    Sederhananya, parent digunakan untuk mengakses class parent 
Q. Constructor Overriding
    - Karena constructor sama seperti function, maka constructor-pun bisa kita deklarasikan ulang di 
    class Child nya 
    - Sebenarnya di PHP kita bisa meng-override function dengan arguments yang berbeda, namun 
    sangat tidak disarankan 
    - Jika kita melakukan override function dengan arguments berbeda, maka PHP akan menampilkan 
    WARNING 
    - Namun berbeda dengan constructor overriding, kita boleh meng-override dengan mengubah 
    arguments nya, namun direkomendasikan untuk memanggil parent constructor 
R. PholimorphIsm
    - Polymorphism berasal dari bahasa Yunani yang berarti banyak bentuk. 
    - Dalam OOP, Polymorphism adalah kemampuan sebuah object berubah bentuk menjadi bentuk lain 
    - Polymorphism erat hubungannya dengan Inheritance 
S. Type check & Casts
    - Sebelumnya kita sudah tau cara melakukan konversi tipe data bukan class 
    - Khusus untuk tipe data object, kita tidak perlu melakukan konversi secara eksplisit 
    - Namun agar aman, sebelum melakukan casts, pastikan kita melakukan type check (pengecekan tipe data), dengan menggunakan kata kunci instanceof 
    - Hasil operator instanceof adalah boolean, true jika tipe data sesuai, false jika tidak sesuai 
T. Abstract class
    - Saat kita membuat class, kita bisa menjadikan sebuah class sebagai abstract class. 
    - Abstract class artinya, class tersebut tidak bisa dibuat sebagai object secara langsung, hanya bisa 
    diturunkan 
    - Untuk membuat sebuah class menjadi abstract, kita bisa menggunakan kata kunci abstract 
    sebelum kata kunci class 
    - Sehingga Abstract Class bisa kita gunakan sebagai kontrak child class 
U. Abstract Function
    - Saat kita membuat class yang abstract, kita bisa membuat abstract function juga di dalam class abstract tersebut 
    - Saat kita membuat sebuah abstract function, kita tidak boleh membuat block function untuk function tersebut 
    - Artinya, abstract function wajib di override di class child 
    - Abstract function tidak boleh memiliki access modifier private
V. Getter & Setter
    Encapsulation
    - Encapsulation artinya memastikan data sensitif sebuah object tersembunyi dari akses luar 
    - Hal ini bertujuan agar kita bisa menjaga agar data sebuah object tetap baik dan valid 
    - Untuk mencapai ini, biasanya kita akan membuat semua properties menggunakan access modifier 
    private, sehingga tidak bisa diakses atau diubah dari luar 
    - Agar bisa diubah, kita akan menyediakan function untuk mengubah dan mendapatkan properties 
    tersebut 
    Getter & Setter
    - Di PHP, proses encapsulation sudah dibuat standarisasinya, dimana kita bisa menggunakan Getter dan Setter method. 
    - Getter adalah function yang dibuat untuk mengambil data field 
    - Setter ada function untuk mengubah data field 
    Method nya adalah sebagai berikut 
    Tipe data boolean : Getter method = isXx(): bool
                        Setter method = setXx(bool value)
    Tipe data linya :   Getter method = getXx(): tipeData
                        Setter method = setXx(tipeData value)
W. Interface 
    - Sebelumnya kita sudah tahu bahwa abstract class bisa kita gunakan sebagai kontrak untuk class 
    child nya. 
    - Namun sebenarnya yang lebih tepat untuk kontrak adalah Interface 
    - Jangan salah sangka bahwa Interface disini bukanlah User Interface 
    - Interface mirip seperti abstract class, yang membedakan adalah di Interface, semua method 
    otomatis abstract, tidak memiliki block 
    - Di interface kita tidak boleh memiliki properties, kita hanya boleh memiliki constant 
    - Untuk mewariskan interface, kita tidak menggunakan kata kunci extends, melainkan implements 
    - Dan berbeda dengan class, kita bisa implements lebih dari satu interface 
X. Interface inheritacne
    - Sebelumnya kita sudah tahu kalo di PHP, child class hanya bisa punya 1 class parent 
    - Namun berbeda dengan interface, sebuah child class bisa implement lebih dari I interface 
    - Bahkan interface pun bisa implement interface Iain, bisa lebih dari I. Namun jika interface ingin 
    mewarisi interface Iain, kita menggunakan kata kunci extends, bukan implements 
Y. Trait
    - Selain class dan interface, di PHP terdapat feature lain bernama trait 
    - Trait mirip dengan abstract class, kita bisa membuat konkrit function atau abstract function 
    - Yang membedakan adalah, di trait bisa kita tambahkan ke dalam class lebih dari satu 
    - Trait mirip seperti ekstension, dimana kita bisa menambahkan konkrit function ke dalam class 
    dengan trait 
    - Secara sederhana trait adalah digunakan untuk menyimpan function-function yang bisa digunakan 
    ulang di beberapa class 
    - Untuk menggunakan trait di class, kita bisa menggunakan kata kunci use 
   Trait Properties 
    - Berbeda dengan interface, di trait, kita bisa menambahkan properties 
    - Dengan menambahkän properties, secara otomatis class tersebut akan memiliki properties yang 
    ada di trait 
   Trait Abstract Function
    - Selain konkrit function, di trait juga kita bisa menambahkan abstract function 
    Jika terdapat abstract function di trait, maka secara otomatis function tersebut harus di override di 
    class yang menggunakan trait tersebut 
   Trait Overriding
    - Jika sebuah class memiliki parent class yang memiliki function yang sama dengan function di trait, 
    maka secara otomatis trait akan meng-override function tersebut 
    - Namun jika kita membuat function yang sama di class nya, maka secara otomatis kita akan 
    meng-override function di trait 
    - Sehingga posisinya seperti ini ParentCIass = override by => Trait = override by => ChildCIass 
    Trait Visibility Override
    - Selain melakukan override function di class, kita juga bisa melakukan override visibility function 
    yang terdapat di trait 
    - Namun untuk melakukan ini tidak perlu membuat function baru di class, kita bisa gunakan secara 
    sederhana ketika menggunakan trait nya 
    Trait Conflict
    - Jika kita menggunakan lebih dari satu trait, lalu terdapat function yang sama di trait tersebut 
    Maka hal  tersebut akan menyebabkan konflik 
    - Jika terjadi konflik seperti ini, kita bisa mengatasinya dengan menggunakan kata kunci insteadof 
    Trait inheritance
    - Sebelumnya kita sudah tahu bahwa class bisa menggunakan trait lebih dari satu 
    - Lantas bagaimana dengan trait yang menggunakan trait lain? 
    - Trait bisa menggunakan trait Iain, mirip seperti interface yang bisa implement interface Iain 
    - Untuk menggunakan trait Iain dari trait, penggunaannya sama seperti dengan penggunaan trait di 
    class 
Z. Final Class
    - Kata kunci final bisa digunakan di class, dimana jika kita menggunakan kata kunci final sebelum 
    class, maka kita menandakan bahwa class tersebut tidak bisa diwariskan lagi 
    - Secara otomatis semua class child nya akan error 
A. Final Function
    - Kata kunci final juga bisa digunakan di function 
    - Jika sebuah function kita tambahkan kata kunci final, maka artinya function tersebut tidak bisa di 
    override lagi di class child nya 
    - Ini sangat cocok jika kita ingin mengunci implementasi dari sebuah method agar tidak bisa diubah 
    lagi oleh class child nya 
B. Anonymous Class
    - Anonymous class atau clasFs tanpa nama. 
    - Adalah kemampüan mendeklarasikan class, sekaligus meng-instansiasi object-nya secara langsung 
    - Anonymous class sangat cocok ketika kita berhadapan dengan kasus membuat implementasi 
    - interface atau abstract class sederhana, tanpa harus membuat implementasi class nya 
    Constructor di Anonymous class
    - Anonymous Class juga mendukung constructor
    - jadi kit abisa menambahkan constructor jika mau
C. Static Keyword
    - Kata kunci static adalah keyword yang bisa kita gunakan untuk membuaQroperties atau function 
    di class bisa diakses secara langsung tanpa menginstansiasi class terlebih dahulu 
    - Namun ingat, saat kita buat static properties atau function, secara otomatis hal itu tidak akan 
    berhubungan lagi dengan class instance yang kita buat 
    - Untuk cara mengakses static properties dan function sama seperti mengakses constant, kita bisa 
    menggunakan operator :: 
    - static functi on tidak bisa mengakses function biasa, karena function biasa menempel pada class 
    instance sedangkan static function tidak 
D. stdClass
    - stdClass adalah class kosong bawaan dari PHP 
    - stdClass biasanya digunakan ketika kita melakukan konversi dari tipe lain menjadi tipe object 
    - stdCIas sangat berguna ketika misal kita ingin melakukan konversi dari tipe data array ke object secara otomatis 
E. Object Iteration
    - Saat kita membuat object dari sebuah class, kita bisa melakukan iterasi ke semua properties yang 
    terdapat di object tersebut menggunakan foreach 
    - Hal ini mempermudah kita saat ingin mengakses semua properties yang ada di object 
    - Secara default, hanya properties yang public yang bisa diakses oleh foreach 
F. Iterator
    - Sebelumnya kita melakukan iterasi data di properties secara otomatis menggunakan foreach 
    - Jika kita ingin menangani hal ini secara manual, kita bisa menggunakan Iterator 
    - Iterator adalah interface yang digunakan untuk melakukan iterasi, namun membuat Iterator secara 
    manual lumayan cukup ribet, oleh karena itu sekarang kita akan gunakan Arraylterator, yaitu iterator yang menggunakan array sebagai data iterasi nya 
    - Dan agar class kita bisa di iterasi secara manual, kita bisa menggunakan interface 
    IteratorAggregate, disana kita hanya butuh meng-override function getlterator() yang mengembalikan data Iterator 
G, Generator
    - Sebelumnya kita tahu bahwa untuk membuat object yang bisa di iterasi, kita menggunakan Iterator 
    - Namun pembuatan Iterator secara manual sangatlah ribet 
    - Untungnya di PHP terdapat fitur generator, yang bisa kita gunakan untuk membuat Iterator secara 
    otomatis hanya dengan menggunakan kata kunci yield 
H. Object Cloning
    - Kadang kita ada kebutuhan untuk menduplikasi sebuah object 
    - Biasanya untuk melakukan hal ini, kita bisa membuat object baru, lalu menyalin semua properties di object awal ke object baru 
    - Untungnya PHP mendukung object cloning 
    - Kita bisa menggunakan perintah clone untuk membuat duplikasi object 
    - Secara otomatis semua properties di object awal akan di duplikasi ke object baru 
    __clone() function
    - Kadang menyalin semua properties bukanlah yang kita inginkan 
    - Misal saja kita hanya ingin menyalin beberapa properties saja, tidak ingin semuanya 
    - Jika kita ingin memodifikasi cara PHP melakukan clone, kita bisa membuat function di dalam class nya dengan nama function _clone() 
    - Function _clone() akan dipanggil di object hasil duplikasi setelah proses duplikasi selesai 
    - Jadi jika kita ingin menghapus beberapa properties, bisa kita lakukan di function _clone() 
I. Comparing Object
    - Sama seperti tipe data yang lain, untuk membandingkan dua buah object, kita bisa menggunakan 
    operator == (equals) dan === (identity) 
    Operator == (equals) membandingkan semua properties yang terdapat di object tersebut, dan tiap 
    - properties juga akan dibandingkan menggunakan operator (equals) 
    - Sedangkan operator (identity), maka akan membandingkan apakah object identik, artinya 
    mengacu ke object yang sama 
J. Magic Function 
    - Magic function adalahfunction-function yang sudah ditentukan kegunaannya di PHP 
    Kita tidak bisa membuat function tersebut, kecuali memang sudah ditentukan kegunaannya 
    Sebelumnya kita sudah membahas beberapa magic function, seperti _construct() sebagai 
    constructor, _destruct() sebagai destructor, dan _clone() sebagai object cloning 
    Masih banyak magic function Iainnya, kita bisa melihatnya di link berikut : 
    https://www.php.net/manual/en/language.oop5.magic.php 
    * _toString() function merupakan salah satu magic function yang digunakan sebagai representasi 
    string sebuah object 
    Jika misal kita ingin membuat string dari object kita, kita bisa membuat function _toString() 
    * __invoke() function merupakan function yang dieksekusi ketika object yang kita buat dianggap sebagai function 
    Misal ketika kita membuat object $student, Ialu kita melakukan $student(), maka secara otomatis 
    function _invoke() yang akan dieksekusi 
    * __debuginfo()
    Sebelumnya kita sering melakukan debug variable menggunakan function var_dump() Function var_dump() sebenarnya memanggil function _debuglnfo() Jika kita ingin mengubah isi dari debug info, kita bisa membuat function _debuglnfo() 
K. Overloading
    - Overloading adalah kemampuan secara dinamis membuat properties atau function 
    - Ini mirip meta programming di bahasa pemrograman Iain seperti Ruby 
    - Namun ini berbeda dengan function overloading di bahasa pemrograman Iain seperti Java 
    - Overloading ini erat kaitannya dengan magic function yang sebelumnya sudah kita bahas 
    Properties Overloading
    - Saat kita mengakses properties, maka secara otomatis properties akan diakses 
    - Namun jika ternyata properties tersebut tidak tersedia di objectnya, maka PHP tidak secara 
    - otomatis menjadikan itu error 
    - PHP akan melakukan fallback ke magic function 
    - Dengan demikian kita bisa membuat properties secara dinamis dengan memanfaatkan magic 
    - function tersebut 
    - Ada beberapa magic function yang bisa kita gunakan untuk properties overloading 
    Magic Function untuk properties overloading
    - __set($name, $value): void
    Dieksekusi ketika mengubah properties yang tidak tersedia
    - __get($name): mixed 
    Dieksekusi ketika mengakses properties yang tidak tersedia
    - __isset($name): bool
    Dieksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia
    - __unset($name): void 
    Dieksekusi ketika menggunakan unset() properties yang tidak tersedia
L. Function Overloading
    - Saat kita mengakses function, maka secara otomatis function akan diakses 
    - Namun jika ternyata function tersebut tidak tersedia di objectnya, maka PHP tidak secara 
    otomatis menjadikan itu error 
    - PHP akan melakukan fallback ke magic function 
    - Dengan demikian kita bisa membuat function secara dinamis dengan memanfaatkan magic 
    function tersebut 
    - Ada beberapa magic function yang bisa kita gunakan untuk function overloading 
    - __call ($name, $arguments): mixed
    Dieksekusi ketika memanggil function yang tidak tersedia
    - static __callStatic($name, $arguments): mixed 
    Dieksekusi ketika memanggil static function yang tidak tersedia
M. Covariance dan Cotravariance
    Covariance
    - Saat kita meng override function dari parent class, biasanya di child class kita akan membuat 
    function yang sama dengan function yang di parent 
    - Covariance memungkinkan kita meng override return function yang di parent dengan return value 
    yang lebih spesifik  
    Contravariance
    - Sedangkan contravariance adalah memperbolehkan sebuah child class untuk membuat function 
    argument yang lebih tidak spesifik dibandingkan parent nya 
    Fitur	            Covariance	    Contravariance
    Tipe pengembalian	Lebih spesifik	Tidak spesifik
    Tipe parameter	    Tidak spesifik	Lebih spesifik
    sederhana nya Covariance bisa mendefinisikan tipe return yang lebih spesifik sedangkan Contravariance bisa mendefinisikan
    parameter yang lebih spesifik 
N. DateTime
    - Biasanya dalam bahasa pemrograman sudah disediakan cara untuk memanipulasi data waktu, termasuk di PHP 
    - Di PHR kita bisa menggunakan class DateTime untuk memanipulasi data waktu 
    - Ada banyak sekali function di class DateTime yang bisa kita gunakan untuk memanipulasi data 
    waktu 
    beberapa datetaime function 
    Date TimE Function                          |           Keterangan
    setTime ($hour, $minute, $second)           | Mengubah waktu Date Time
    setDate ($year, $month, $day)               | Mengubah tanggal Date Time
    setTimeStamp($unixTimestamp)                | Mengubah Unix timestamp Date Time
O. DateInterval
    - Kadang kita hanya ingin memanipulasi waktu dan tanggal sebagian saja, misal hanya menambah 1 
    tahun, atau mengurai beberapa hari 
    - Hal ini bisa dilakukan dengan function add milik DateTime 
    - Namun function add tersebut menerima parameter berupa Datelnterval 
    - Saat menggunakan Datelnterval duration, kita perlu menentukan berapa banyak kita menambah 
    interval 
    - Kita bisa lihat detailnya disini : https://www.php.net/manual/en/dateinterval.construct.php 
    - Untuk pembuatan duration, harus diawali dengan karakter P yang artinya period 
    DateTimeZone
    - Saat kita membuat object DateTime, dia akan secara otomatis membuat waktu saat ini sesuai 
    dengan timezone yang di setting di konfigurasi date.timezone di file php.ini 
    - Atau kita bisa menggunakan function set TimeZone untuk mengubah timezone DateTime 
    Format Date Time
    - Kadang kita ingin membuat representasi string dari DateTime yang sudah kita buat 
    - Hal ini bisa kita lakukan menggunakan function format() 
    - Function format() menerima argument berupa format string, ini bisa kita gunakan untuk 
    - memanipulasi cara kita menampilkan string format waktu 
    - Untuk detailnya kita bisa Iihat di halaman dokumentasi resminya https://www.php.net/manual/en/datetime.format.php 
    Parse DateTime
    - Selain format DateTime menjadi string, di PHP juga kita bisa melakukan hal sebaliknya, yaitu 
    memparsing string menjadi DateTime sesuai dengan format yang kita mau 
    - Untuk melakukan itu, kita bisa menggunakan static function createFromFormat() dari class 
    DateTime 
P. Exception
    - Saat kita membuat aplikasi, kita tidak akan terhindar dengan yang namanya error 
    Di PHR error direpresentasikan dengan istilah exception, dan semua direpresentasikan dalam 
    bentuk class exception 
    - Kita bisa menggunakan class exception sendiri, atau menggunakan yang sudah disediakan oleh 
    - Jika kita ingin membuat exception, maka kita harus membuat class yang implement interface Throwable atau turunan-turunannya 
Q. Try Catch
    - Saat kita memanggil sebuah function yang bisa menyebabkan exception, maka kita disarankan 
    menggunakan try-catch expression di PHP 
    - Ini gunanya agar kita bisa menangkap exception yang terjadi, karena jika tidak ditangkap, I alu 
    - terjadi exception, maka secara otomatis program kita akan berhenti 
    - Cara menggunakan try-catch éxpression di PHP sangat mudah, di block try, kita tinggal panggil 
    method yang bisa menyebabkan exception, dan di block catch, kita bisa melakukan sesuatu jika terjadi exception 
R. Finally Keyword
    - Dalam try-catch, kita bisa menambahkan block finally 
    - Block finally ini adalah block dimana akan selalu dieksekusi baik terjadi exception ataupun tidak 
    - Ini sangat cocok ketika kita ingin melakukan sesuatu, tidak peduli sukses ataupun gagal, misal di 
    block try kita ingin tangkap jika terjadi error, dan di block 
    finally error ataupun sukses membaca file, kita wajib menutup koneksi ke file tersebut, biar tidak menggantung di memory 
S. Debug Exceptions
    - Exception di PHP memiliki sebuah function bernama getTrace() 
    - Function getTrace() berisikan informasi dari exception yang terjadi, seperti Iokasi file, baris ke 
    berapa, function mana sampai argumenty yang dikirim di function tersebut apa 
    - Ini sangat cocok untuk kita jika ingin mendebug ketika terjadi exception 
T. Regular Expression 
    - PHP mendukung regular expression yang kompatibel dengan bahasa pemrograman Perl 
    - Regular expression merupakan fitur yang digunakan untuk melakukan pencarian di string 
    menggunakan pola tertentu 
    - Materi ini sebenarnya materi yang sangat panjang, sehingga disini kita akan bahas sedikit 
    pengenalannya 
    - Untuk pembuatan pattern di regular expression, detailnya bisa dibaca disini : 
    https://www.php.net/manual/en/pcre.pattern.php 
    Function Regular Expression
    Function Regular Expression                       |                      Keterangan  
    preg_match ($pattern ,$subject)                   | Digunakan untuk mencari match pattern
    preg_match_all (Spattern ,$subject)               
    preg_replace ( $pattern , $replacement, $subject) | Digunakan untuk mereplace semua pattern dengan replacement 
    preg_split ( $pattern , $subject)                 | Digunakan untuk memotong dengan pattern menjadi array 
U. Reflection
    - Reflection adalah membaca struktur kode pada saat aplikasi sedang berjalan 
    - Reflection adalah materi yang sangat panjang dan banyak, sehingga disini kita hanya akan membahas perkenalannya saja 
    - Reflection adalah fitur yang biasanya digunakan saat kita membuat framework 
    https://www.php.net/manual/en/book.reflection.php 
    Studi kasus membuat Reflection framework
    - Kita akan membuat validation framework menggunakan reflection 
    - Validation framework nya cukup sederhana, kita hanya akan mengecek apakah properties bernilai 
    - null atau tidak, kalo null atau belum di set, kita akan throw ValidationException 
    - Tanpa reflection, biasanya untuk melakukan hal ini, kita butuh pengecekan secara manual 