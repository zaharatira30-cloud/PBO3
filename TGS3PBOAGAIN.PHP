<?php

    class Kendaraan
    {
        protected $platNomor;
        protected $kapasitas;
        protected $bahanBakar;

        public function __construct($platNomor, $kapasitas, $bahanBakar)
        {
            $this->platNomor = $platNomor;
            $this->kapasitas = $kapasitas;
            $this->bahanBakar = $bahanBakar;
        }

        public function infoKendaraan()
        {
            return "Plat Nomor: {$this->platNomor} <br>" .
                "Kapasitas: {$this->kapasitas} orang <br>" .
                "Bahan Bakar: {$this->bahanBakar} <br>";
        }
    }
    class Mobil extends Kendaraan
    {
        protected $jenisMobil;

        public function __construct($platNomor, $kapasitas, $bahanBakar, $jenisMobil)
        {
            parent::__construct($platNomor, $kapasitas, $bahanBakar);
            $this->jenisMobil = $jenisMobil;
        }

        public function infoTambahan()
        {
            return "Jenis Mobil: {$this->jenisMobil} <br>";
        }
    }


    class Bus extends Kendaraan
    {
        protected $jumlahKursi;


        public function __construct($platNomor, $kapasitas, $bahanBakar, $jumlahKursi)
        {
            parent::__construct($platNomor, $kapasitas, $bahanBakar);
            $this->jumlahKursi = $jumlahKursi;
        }

    
        public function infoTambahan()
        {
            return "Jumlah Kursi: {$this->jumlahKursi} <br>";
        }
    }

    $mobil = new Mobil("D 1920 AJW", 5, "Bensin ", "SUV");
    $bus = new Bus("AB 1234 CD", 30, "Solar", 30);

    echo "Data Mobil:";

    echo "<br>";

    echo $mobil->infoKendaraan();
    echo $mobil->infoTambahan();

    echo "<br>";

    echo "Data Bus:";

    echo "<br>";

    echo $bus->infoKendaraan();
    echo $bus->infoTambahan();
    ?>