
<?php

class Buku
{
    public string $judul;
    public string $penulis;
    public int $tahun;

    public function __construct(
        string $judul,
        string $penulis,
        int $tahun
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }

    public function tampilInfo(): void
    {
        echo "Judul: " . $this->judul . "\n";
        echo "Penulis: " . $this->penulis . "\n";
        echo "Tahun: " . $this->tahun . "\n";
        echo "-----------------\n";
    }

    public function __destruct()
    {
        echo "Destructor dijalankan: "
            . $this->judul . "\n";
    }
}
