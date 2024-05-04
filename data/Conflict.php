<?php
// agar tidak terjadi conflict saat membuat 2 class dengan nama yang sama maka menggunakan fitur namespace
// cara membuat namespace adalah : 
// jika didalam folder ada lebih dari 1 namespace maka menggunakan "namespace data\one {}"
// jika pada folder hanya terdapat 1 namespace maka tidak usah menggunakan "{}" karena semua class didalam folder tersebut akan 
// otomatis masuk kedalam namespace 
namespace Data\one {
    class Conflict
    {
        
    }
    class Dummy
    {

    }
    class Sample
    {
        
    }
}
namespace Data\two {
    class Conflict
    {

    }
}